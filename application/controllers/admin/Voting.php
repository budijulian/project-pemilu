<?php 

class voting extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_data_voting');
        $this->load->model('m_voting');
        $this->load->model('m_pendaftar');
        $this->load->model('m_periode');
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {   
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Quick Count";
        $data['status'] = array();
        $data['vote'] = array();
        $data['status2'] = array();
        $data['waktu'] = array();
        $data['get_mahasiswa'] = array();
        // $data2['vote'] = $this->m_voting->AllVoting()->result();
        // $data2['status'] = $this->m_voting->get_voting()->result();
        // $data2['status2'] = $this->m_voting->get_suaravalid()->result();
        // $data2['get_mahasiswa'] = $this->m_mahasiswa->get_mahasiswa()->result();
        // $data2['waktu'] = $this->m_user->waktu()->result();

        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/voting/result',$data);
        $this->load->view('admin/footer');
        }
    else{
    // pindah ke halaman secara otomatis
    redirect(base_url().'admin/login');
        }
    }
    public function data($npm_mhs=""){
        if($this->session->userdata('nama_admin')==TRUE){
        
            if(isset($_POST['submit']) == TRUE){
            $suara = $this->input->post('suara');
        
            // mengubah dalam bentuk array
            $data2 =array(
                'ket' => $suara
            );
            $where = array(
                'npm_mhs'=> $npm_mhs
            );
            $this->m_voting->update_data($where,$data2,'tbl_vote');
            }
               
        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Data Voting";
        // $data2['status'] = $this->m_voting->get_voting()->result();
        // $data2['status2'] = $this->m_voting->get_suaravalid()->result();
        // $data2['get_mahasiswa'] = $this->m_mahasiswa->get_mahasiswa()->result();
        // $data2['data_vote'] = $this->m_voting->get_datavote()->result();
        
        $data['status'] = array();
        $data['vote'] = array();
        $data['status2'] = array();
        $data['waktu'] = array();
        $data['get_mahasiswa'] = array();
        // validasi data sah atau tidak oleh admin
        // $this->m_voting->check_data_suara($npm_mhs);

        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/voting/voting',$data);
        $this->load->view('admin/footer');
        
        }
    else{
    // pindah ke halaman secara otomatis
    redirect(base_url().'admin/login');
        }
    }
    public function showVoting(){
        $list = $this->m_voting->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $voting) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $voting->periode;
            $row[] = $voting->v_waktu;
            $hidden1 = substr($voting->nama_mahasiswa,3,50);
            $str1 =str_replace($hidden1,"xxxxx",$voting->nama_mahasiswa);
            $row[] = $str1."";
            $row[] = "No Urut ".$voting->pilihan;
            $row[] = $voting->v_status;

            //add html for action
        $row[] = '<a class="btn btn-sm btn-primary" title="Validasi" href="javascript:void(0);" onclick="btnVerifikasi('."'".$voting->kd_voting."'".",'".$voting->v_status."'".');"><i class="fa fa-refresh"></i> Validasi</a>
             <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#detaildata"  href="javascript:void(0);" onclick="detailData('."'".$voting->kd_voting."'".');"
             title="Detail Data"><i class="fa fa-search"></i> Detail</a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_voting->count_all(),
                        "recordsFiltered" => $this->m_voting->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    // HALAMAN ADMIN 
    public function verifikasiData($id){
        $where = array('kd_voting' => $id);
        $data = array('v_status' => $this->input->post('validasi'));
        $this->m_voting->editData($where,$data);
        echo json_encode(array('status' => true));
    }
    // HALAMAN ADMIN
    //show quick count pemilihan suara dan pendaftar
    public function getQuickCount(){
            $periode = $this->m_periode->getDataPeriode();
            $row  = $periode->row_array();
            $data['suara'] = $this->m_voting->count_suara_masuk($row['kd_periode']);
            $data['pendaftar'] = $this->m_voting->count_pendaftar_periode($row['kd_periode']);

            //output to json format
            echo json_encode($data);
    }
    // HALAMAN ADMIN 
    public function getQuickVoting(){
            $periode = $this->m_periode->getDataPeriode();
            $row  = $periode->row_array();
            // jumlah data suara belum pilih dan suara golput (timeout)
            // $bp = $this->m_voting->count_suara_belum_pilih($row['kd_periode']);
            // $rbp = $bp->row_array();
            // $gp = $this->m_voting->count_suara_golput($row['kd_periode']);
            // $rgp = $gp->row_array();
            // $total_suara_kosong = ($rbp['t_suara_belum_pilih'] + $rgp['t_suara_golput']);
           
            
            
            $data = array(
                'pendaftar' => $this->m_pendaftar->count_pendaftar_periode($row['kd_periode']),
                'suara_sah' => $this->m_voting->count_suara_sah($row['kd_periode']),
                'suara_tidak_sah' => $this->m_voting->count_tidak_suara_sah($row['kd_periode']),
                'suara_sudah_pilih' => $this->m_voting->count_suara_masuk($row['kd_periode']),
                'suara_belum_pilih' => $this->m_voting->count_suara_belum_pilih($row['kd_periode'])
            );
            //output to json format
            echo json_encode($data);
    }
    public function getchartBarVoting(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        $result = $this->m_voting->chartBarVoting($row['kd_periode'])->result();
        // $netral = $this->m_voting->suara_netral($row['kd_periode']);

        $alldata = $this->m_voting->all_suara($row['kd_periode']);
        $allrow  = $alldata->row_array();
        $this->session->set_userdata(array("t_allvote" =>  $allrow['t_all']));
        // pecah data array 
        // $row  = $netral->row_array();
        // $data = array(
        //     'nama' => 'netral',
        //     't_suara' => $row['t_netral']
        // );
        
        // menambah data pada array 
        // array_push($result ,$data);

        //output to json format
        echo json_encode($result);
    }
    
    // ADMIN :: data chart pie data pendaftar
    public function getMultichartBarAngkatan(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();

        // ambil data perbandingan [per angkatan]
        $result = $this->m_voting->chartMBarPerAngkatan($row['kd_periode'])->result();
        $alldata = $this->m_pendaftar->get_pendaftarPeriode($row['kd_periode']);
        $allrow  = $alldata->row_array();
        $this->session->set_userdata(array("t_alldaftar" =>  $allrow['total_pendaftar']));
        //output to json format
        echo json_encode($result);
    }
    // ADMIN :: data chart pie data pendaftar
    public function getChartMSudahVote(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();

        $alldata = $this->m_voting->get_count_suara_masuk($row['kd_periode']);
        $allrow  = $alldata->row_array();
        $this->session->set_userdata(array("t_allsuara" =>  $allrow['total_suara_masuk']));
        $result = $this->m_voting->chartMSudahVote($row['kd_periode'])->result();
        
        //output to json format
        echo json_encode($result);
    }
    // ADMIN :: data chart pie data pendaftar
    public function getChartMBelumVote(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        
        $alldata = $this->m_voting->get_count_suara_belum_pilih($row['kd_periode']);
        $allrow  = $alldata->row_array();
        $this->session->set_userdata(array("t_allbelum_pilih" =>  $allrow['t_suara_belum_pilih']));
        $result = $this->m_voting->chartMBelumVote($row['kd_periode'])->result();
        //output to json format
        echo json_encode($result);
    }
    // data tabel pie chart angkatan
    public function getDataAngkatan(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();

        // ambil data perbandingan [per angkatan]
        $result = $this->m_voting->chartMBarPerAngkatan($row['kd_periode'])->result();
        //output to json format
        echo json_encode($result);
    }
    // data table pie chart sudah vote 
     public function getDataSudahPilih(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();

        $result = $this->m_voting->chartMSudahVote($row['kd_periode'])->result();
        
        //output to json format
        echo json_encode($result);
    }
    // data table pie chart belum vote 
    public function getDataBelumPilih(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        
        $result = $this->m_voting->chartMBelumVote($row['kd_periode'])->result();
        //output to json format
        echo json_encode($result);
    }
    // data tabel voting 
   public function getDataTabelVoting(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        
        $list = $this->m_voting->getDataTabelVoting($row['kd_periode']);
        // $list = $this->m_data_voting->get_datatables();
        // $data = array();
        // $no = $_POST['start'];
        // foreach ($list as $voting) {
        //     //  if($$voting->v_status =="null"){
        //     //                 $status ="<span class='badge badge-danger'>Belum Memilih<span>";
        //     //             }else if($getstatus !="null"){
        //     //                 $status ="<span class='badge badge-success'>Sudah Memilih<span>";
        //     //             }
        //     $no++;
        //     $row = array();
        //     $row[] = $no;
        //     $row[] = $voting->v_waktu;
        //     $row[] = $voting->kd_mahasiswa;
        //     $row[] = $voting->nama_mahasiswa;
        //     $row[] = $voting->v_status;
        //     $data[] = $row;
        // }
        // $output = array(
        //                 "draw" => $_POST['draw'],
        //                 "recordsTotal" => $this->m_data_voting->count_all(),
        //                 "recordsFiltered" => $this->m_data_voting->count_filtered(),
        //                 "data" => $data,
        //         );
        //output to json format
        echo json_encode($list);
    }
    
        // data tabel voting 
   public function getDataTabelBelumVoting(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        
        $list = $this->m_voting->getDataTabelBelumVoting($row['kd_periode']);
       
        //output to json format
        echo json_encode($list);
    }
    // tampil data voting mahasiswa
    public function getData($id){
        $data = $this->m_voting->getData($id);
        echo json_encode($data);
    }
    public function exportDataVoting(){
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->m_voting->exportDataVotingList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'NO');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Periode');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Waktu Voting');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Nama Mahasiswa');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Angkatan');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Pilihan'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Status');         
        // set Row
        $rowCount = 2;
        $no = 1;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $no++);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->periode);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->v_waktu);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->nama_mahasiswa);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->angkatan);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->pilihan);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->v_status);
            $rowCount++;
        }
        $filename = "Data Voting Mahasiswa [". date("Y-m-d h-i-s")."].csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 

    }
}
    
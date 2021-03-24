<?php 

class Pendaftar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_pendaftar');
        $this->load->model('m_periode');
        $this->load->model('m_voting');
        $this->load->model('m_server');
        $this->load->helper('url','form');
    }
    public function index()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        // $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        // $data['get_one'] = $this->db->get('tbl_mahasiswa')->result();
        $status['title']= "Data Mahasiswa";
        $data['mahasiswa'] = array();
        $data['get_one'] = array();
        // memberi notifikasi di halaman
        // $this->session->set_flashdata('message1',' class="callout callout-info" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // <h4>Reminder!</h4> Jangan memberitahukan informasi kepada orang lain');
        // // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/pendaftar',$data);
        $this->load->view('admin/footer',$data);
          }
        else{
        // pindah ke halaman secara otomatis
         redirect(base_url().'admin/login');
        }

    }
    public function pendaftar()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        // $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        // $data['get_one'] = $this->db->get('tbl_mahasiswa')->result();
        $status['title']= "Data Pendaftar";
        $data['mahasiswa'] = array();
        $data['get_one'] = array();
        // memberi notifikasi di halaman
        // $this->session->set_flashdata('message1',' class="callout callout-info" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // <h4>Reminder!</h4> Jangan memberitahukan informasi kepada orang lain');
        // // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/pendaftar',$data);
        $this->load->view('admin/footer',$data);
          }
        else{
        // pindah ke halaman secara otomatis
         redirect(base_url().'admin/login');
        }

    }
    function showPendaftar(){
        $list = $this->m_pendaftar->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pendaftar) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pendaftar->periode;
            $row[] = $pendaftar->m_waktu;
            $row[] = $pendaftar->nomor_induk;
            $row[] = $pendaftar->nama_mahasiswa;
            $row[] = $pendaftar->jenis_voting;
            $row[] = '<a href="javascript:void(0);" onclick="btnVerifikasi('."'".$pendaftar->kd_mahasiswa."'".",'".$pendaftar->validasi."'".')"><span  class="fa fa-refresh"></span> </a>'.' '.'<strong >'. $pendaftar->validasi.'</strong>';

            //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$pendaftar->kd_mahasiswa."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default"  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View Data" onclick="detailData('."'".$pendaftar->kd_mahasiswa."'".')"><i class="fa fa-search"></i> </a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_pendaftar->count_all(),
                        "recordsFiltered" => $this->m_pendaftar->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    function showPendaftar2(){
        $list = $this->m_pendaftar->get_datatables2();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pendaftar) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pendaftar->periode;
            $row[] = $pendaftar->m_waktu;
            $row[] = $pendaftar->nomor_induk;
            $row[] = $pendaftar->nama_mahasiswa;
            $row[] = $pendaftar->jenis_voting;
            $row[] = '<a href="javascript:void(0);" onclick="btnVerifikasi('."'".$pendaftar->kd_mahasiswa."'".",'".$pendaftar->validasi."'".')"><span  class="fa fa-refresh"></span> </a>'.' '.'<strong >'. $pendaftar->validasi.'</strong>';

            //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$pendaftar->kd_mahasiswa."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default"  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View Data" onclick="detailData('."'".$pendaftar->kd_mahasiswa."'".')"><i class="fa fa-search"></i> </a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_pendaftar->count_all2(),
                        "recordsFiltered" => $this->m_pendaftar->count_filtered2(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function verifikasiData($id){
        $where = array('kd_mahasiswa' => $id);
        $data = array('validasi' => $this->input->post('validasi'));
        $this->m_pendaftar->editData($where,$data);
        echo json_encode(array('status' => true));
    }
     // send konfirmasi ke email peserta with SMTP Online 
    public function kirim_konfirmasi($id)
	{  
        // ambil data periode 
        $data['periode'] = $this->m_periode->getDataPeriode()->result();
        // ambil data server SMTP
        $where = array('status' => 'aktif');
        $server = $this->m_server->checkDataServer($where);
        $row = $server->row_array();
		//menggunakan config smtp sendinblue.com
        	$config = [
            'protocol'  => 'smtp',
            'smtp_pass' => trim($row['pass_smtp']),
            'smtp_user' => trim($row['user_smtp']),
            'smtp_host' => trim($row['host_server']),
            'smtp_port' => trim($row['port_smtp']),
            //'smtp_crypto' => 'ssl',
            'smtp_timeout' => 30,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
		];
		//inisial email admin
        $email_admin = "himasiunas@gmail.com";

        $where = array('kd_mahasiswa' => $id);
        $mahasiswa = $this->m_pendaftar->checkDataPendaftar($where);
        //  ambil data array mahasiswa
        $row = $mahasiswa->row_array();
        
        $this->email->initialize($config);
        $this->email->from($email_admin, 'Panitia HIMASI');
        $this->email->to(strtolower(trim($row['email'])));
        // $this->email->attach('');
        $date = strtotime(" +1 years");
        $periode =  date("Y").' / '.date("Y",$date);
        // result data mahasiswa 
        $data['mahasiswa'] = $mahasiswa->result();

        $this->email->subject('[KONFIRMASI REGISTRASI PEMILU HIMASI'." ".$periode."]");
        $this->email->message($this->load->view('user/konfirmasi_email',$data, true));

        if ($this->email->send()) {
			# code...
          echo json_encode(array("status" => TRUE));
          // pindah ke halaman secara otomatis
        } else {
			echo $this->email->print_debugger();
            echo json_encode(array("status" => FALSE));
            die;
        }
         
	}
    
    public function getData($id){
        $data = $this->m_pendaftar->getData($id);
        echo json_encode($data);
    }

    public function tambahData()
    {
        $dt = $this->m_periode->getDataPeriode();
        $row  = $dt->row_array();
        // check data user di tabel pendaftar 
        $where = array(
            'nomor_induk' =>trim($this->input->post('t_nomor')),
            'kd_periode' => $row['kd_periode']
        );
        $check = $this->m_pendaftar->checkDataPendaftar($where);
        if($check->num_rows() > 0){
            // alert data ada 
            echo json_encode(array("status" => FALSE));
        }else{
            $file_foto = $_FILES['t_foto_ktm']['name'];
            if($file_foto !=""){
                $config['upload_path'] = "./assets/img/datapendukung";
                $config['allowed_types'] = "jpg|gif|jpeg|png";	
                $config['encrypt_name'] = TRUE;	

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('t_foto_ktm')){
                    die();
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $file_name= $data['upload_data']['file_name'];
                }	
            }else{}

            $data = array(
                    'kd_mahasiswa' => "MHS".date('d').rand(1,100), 
                    'nomor_induk' => trim($this->input->post('t_nomor')),
                    'kd_periode' => $row['kd_periode'],
                    'nama_mahasiswa' => trim($this->input->post('t_nama')),
                    'password' => trim(base64_encode($this->input->post('t_pass'))),
                    'email' => trim($this->input->post('t_email')),
                    'angkatan' => trim($this->input->post('t_angkatan')),
                    'jalur' => trim($this->input->post('t_jalur')),
                    'foto_ktm' => $file_name,
                    'jenis_voting' => trim($this->input->post('t_jenis_voting')),
                    'status' => 'aktif',
                    'validasi' => 'terverifikasi'
                );
            $insert = $this->m_pendaftar->tambahData($data);
            echo json_encode(array("status" => TRUE));
        }
    }

    public function editData()
    {
        $file_foto = $_FILES['foto_ktm']['name'];
		if($file_foto !=""){
			$config['upload_path'] = "./assets/img/datapendukung";
			$config['allowed_types'] = "jpg|gif|jpeg|png";	
       		$config['encrypt_name'] = TRUE;	

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_ktm')){
				die();
			}else{
				$data = array('upload_data' => $this->upload->data());
                $data = array( 
                'nomor_induk' => trim($this->input->post('nomor')),
                'nama_mahasiswa' => trim($this->input->post('nama')),
                'password' => trim(base64_encode($this->input->post('pass'))),
                'email' => trim($this->input->post('email')),
                'angkatan' => trim($this->input->post('angkatan')),
                'jalur' => trim($this->input->post('jalur')),
                'foto_ktm' => $data['upload_data']['file_name'],
                'jenis_voting' => trim($this->input->post('jenis_voting')),
                'status' => trim($this->input->post('status'))
            );
            // hapus file pada database 
            $check = $this->m_pendaftar->checkDataPendaftar(array('kd_mahasiswa' => $this->input->post('kd_mahasiswa')));
                if($check->num_rows() > 0){
                    $row = $check->row_array();
                    $tmp = "./assets/img/datapendukung/".$row['foto_ktm'];
                    unlink($tmp);
                }
            }	
		}else{
            $data = array( 
                'nomor_induk' => trim($this->input->post('nomor')),
                'nama_mahasiswa' => trim($this->input->post('nama')),
                'password' => trim(base64_encode($this->input->post('pass'))),
                'email' => trim($this->input->post('email')),
                'angkatan' => trim($this->input->post('angkatan')),
                'jalur' => trim($this->input->post('jalur')),
                'jenis_voting' => trim($this->input->post('jenis_voting')),
                'status' => trim($this->input->post('status'))
            );
        }
        
        $this->m_pendaftar->editData(array('kd_mahasiswa' => $this->input->post('kd_mahasiswa')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function hapusData($id)
    {
        // hapus file pada database 
        $check = $this->m_pendaftar->checkDataPendaftar(array('kd_mahasiswa' => $id));
        if($check->num_rows() > 0){
            $row = $check->row_array();
            $tmp = "./assets/img/datapendukung/".$row['foto_ktm'];
            unlink($tmp);
        }
        $this->m_pendaftar->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }
    public function getQuickPendaftar(){
            $periode = $this->m_periode->getDataPeriode();
            $row  = $periode->row_array();
            $data = array(
                'pendaftar' => $this->m_pendaftar->count_pendaftar_periode($row['kd_periode']),
                'terverifikasi' => $this->m_pendaftar->count_terverifikasi($row['kd_periode']),
                'belum_terverifikasi' => $this->m_pendaftar->count_belum_terverifikasi($row['kd_periode']),
                'data_periode' => $this->m_periode->getDataPeriode()->result()
            );
            //output to json format
            echo json_encode($data);
    }
    public function exportDataPendaftar(){
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->m_pendaftar->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'NO');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Waktu Daftar');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'NPM');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Nama Mahasiswa');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Jalur'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Angkatan');   
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Periode');   
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Jenis Voting');   
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Validasi');         
        // set Row
        $rowCount = 2;
        $no = 1;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $no++);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->m_waktu);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->nomor_induk);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->nama_mahasiswa);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->jalur);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->angkatan);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->periode);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $list->jenis_voting);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->validasi);
            $rowCount++;
        }
        $filename = "Data Mahasiswa [". date("Y-m-d h-i-s")."].csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 

    }

}
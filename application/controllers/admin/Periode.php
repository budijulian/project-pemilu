<?php 

class Periode extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
        // inisialisasi model yang akan di load
        $this->load->model('m_periode');
        $this->load->model('m_admin');
        $this->load->helper('url');
        date_default_timezone_set("Asia/Jakarta");
         }else{
            $this->session->set_flashdata('message',' class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Oops!</h4> Maaf, Session Telah Habis!');
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('username') == TRUE){
        
        $status['title']= "Halaman Periode";
        // $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        // $data['status'] = $this->m_voting->get_voting()->result();
        // $data['get_mahasiswa'] = $this->m_mahasiswa->get_mahasiswa()->result();
        // $data['angkatan'] = $this->m_mahasiswa->get_angkatan()->result();
        // $data['waktu'] = $this->m_user->waktu()->result();
        // $data['waktu'] = $this->m_admin->waktu()->result();
        $data[] = array();
        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/periode');
        $this->load->view('admin/footer');
            
        }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function showPeriode()
    {
        $list = $this->m_periode->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $periode) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $periode->periode;
            $row[] = $periode->pelaksanaan;
            $row[] = $periode->waktu_buka_voting;
            $row[] = $periode->p_status;
            
            //add html for action
        $row[] = '<a class="btn btn-sm btn-default"  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View" onclick="detailData('."'".$periode->kd_periode."'".')"><i class="fa fa-search"></i> View</a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_periode->count_all(),
                        "recordsFiltered" => $this->m_periode->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function getData($id){
        $data = $this->m_periode->getData($id);
        echo json_encode($data);
    }
    public function getDateMulaiPemilihan(){
         $data = $this->m_periode->getDateMulaiPemilihan();
        echo json_encode($data);
    }

    public function tambahData()
    {
        $waktu_buka_pendaftar = $this->input->post('t_waktu_buka_pendaftar');
        $waktu_buka_pendaftar = date("Y-m-d H:i:s", strtotime($waktu_buka_pendaftar));
        $waktu_tutup_pendaftar = $this->input->post('t_waktu_tutup_pendaftar');
        $waktu_tutup_pendaftar = date("Y-m-d H:i:s", strtotime($waktu_tutup_pendaftar));
        $waktu_buka_voting = $this->input->post('t_waktu_buka_voting');
        $waktu_buka_voting = date("Y-m-d H:i:s", strtotime($waktu_buka_voting));
        $waktu_tutup_voting = $this->input->post('t_waktu_tutup_voting');
        $waktu_tutup_voting = date("Y-m-d H:i:s", strtotime($waktu_tutup_voting));
        $waktu_pengumuman = $this->input->post('t_waktu_pengumuman');
        $waktu_pengumuman = date("Y-m-d H:i:s", strtotime($waktu_pengumuman));
        $data = array(
                'kd_periode' => 'PRD'.date('y').rand(1,100),
                'periode' => $this->input->post('t_periode'),
                'pelaksanaan' => $this->input->post('t_pelaksanaan'),
                'lokasi' => $this->input->post('t_lokasi'), 
                'waktu_buka_pendaftar' => $waktu_buka_pendaftar,
                'waktu_tutup_pendaftar' => $waktu_tutup_pendaftar,
                'waktu_buka_voting' => $waktu_buka_voting,
                'waktu_tutup_voting' => $waktu_tutup_voting,
                'waktu_pengumuman' => $waktu_pengumuman,
                'p_status' => 'aktif'
            );
        $insert = $this->m_periode->tambahData($data);

        echo json_encode(array("status" => $data));
    }

    public function editData()
    {
        $waktu_awal_acara = $this->input->post('waktu_awal_acara');
        $waktu_awal_acara = date("Y-m-d H:i:s", strtotime($waktu_awal_acara));
        $waktu_akhir_acara = $this->input->post('waktu_akhir_acara');
        $waktu_akhir_acara = date("Y-m-d H:i:s", strtotime($waktu_akhir_acara));
        $waktu_buka_pendaftar = $this->input->post('waktu_buka_pendaftar');
        $waktu_buka_pendaftar = date("Y-m-d H:i:s", strtotime($waktu_buka_pendaftar));
        $waktu_tutup_pendaftar = $this->input->post('waktu_tutup_pendaftar');
        $waktu_tutup_pendaftar = date("Y-m-d H:i:s", strtotime($waktu_tutup_pendaftar));
        $waktu_buka_voting = $this->input->post('waktu_buka_voting');
        $waktu_buka_voting = date("Y-m-d H:i:s", strtotime($waktu_buka_voting));
        $waktu_tutup_voting = $this->input->post('waktu_tutup_voting');
        $waktu_tutup_voting = date("Y-m-d H:i:s", strtotime($waktu_tutup_voting));
        $waktu_pengumuman = $this->input->post('waktu_pengumuman');
        $waktu_pengumuman = date("Y-m-d H:i:s", strtotime($waktu_pengumuman));
        $data = array(
                'periode' => $this->input->post('periode'),
                'pelaksanaan' => $this->input->post('pelaksanaan'),
                'lokasi' => $this->input->post('lokasi'),
                'link_streaming' => $this->input->post('link_streaming'),  
                'waktu_awal_acara' => $waktu_awal_acara,
                'waktu_akhir_acara' => $waktu_akhir_acara,
                'waktu_buka_pendaftar' => $waktu_buka_pendaftar,
                'waktu_tutup_pendaftar' => $waktu_tutup_pendaftar,
                'waktu_buka_voting' => $waktu_buka_voting,
                'waktu_tutup_voting' => $waktu_tutup_voting,
                'waktu_pengumuman' => $waktu_pengumuman,
                'p_status' => $this->input->post('status'),
            );
        $this->m_periode->editData(array('kd_periode' => $this->input->post('kd_periode')), $data);
        echo json_encode(array("status" => $data));
    }

    public function hapusData($id)
    {
        $this->m_admin->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }

}
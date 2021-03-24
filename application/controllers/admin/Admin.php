<?php 

class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
        // inisialisasi model yang akan di load
        $this->load->model('m_mahasiswa');
        $this->load->model('m_voting');
        $this->load->model('m_user');
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
        
        $status['title']= "Halaman Dashboard";
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
		$this->load->view('admin/home');
        $this->load->view('admin/footer');
            
        }
        else{// pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    
    public function logout(){
        session_destroy();
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
    }

}
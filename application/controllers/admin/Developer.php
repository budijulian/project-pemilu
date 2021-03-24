<?php 

class Developer extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
        // inisialisasi model yang akan di load
        date_default_timezone_set("Asia/Jakarta");
         $this->load->model('m_admin','person');
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
        
        $status['title']= "Tentang Kami";
        $data[] = array();
        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/setting/developer');
        $this->load->view('admin/footer');
            
        }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    

}
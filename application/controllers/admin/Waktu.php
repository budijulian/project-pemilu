<?php 

class waktu extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_waktu');
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {   
        if($this->session->userdata('username')==TRUE){
       
        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Waktu Pemilihan";
        // $data['waktu'] = $this->m_waktu->WaktuPilih()->result();
        // $data['waktu'] = $this->m_user->waktu()->result();
        $data['waktu'] = array();
        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/waktu',$data);
        $this->load->view('admin/footer');
      }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function ubah(){
        $waktumulai = $this->input->post('waktubuka');
        $waktuakhir = $this->input->post('waktututup');
     
        // mengubah dalam bentuk array

        $data =array(
            'waktu_buka' => $waktumulai,
            'waktu_tutup' => $waktuakhir
        );
        $where=array(
            'id' => 1
        );
        $this->m_waktu->ubah($where,$data,'tbl_waktu');
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/waktu');
    }
  
}
    
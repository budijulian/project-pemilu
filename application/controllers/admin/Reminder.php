<?php 

class reminder extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_voting');
        $this->load->model('m_mahasiswa');
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {   
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Pengumuman";
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
		$this->load->view('admin/voting/reminder',$data);
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
    
  
}
    
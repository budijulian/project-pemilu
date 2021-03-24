<?php 

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }
    public function index()
    {
        $this->load->view('admin/login');   
    }
    
    // controler untuk signin ke sistem login
    public function signin(){
        
        if(isset($_POST['submit'])){
        $user = trim($this->input->post('user'));
        $pass = trim($this->input->post('pass'));
        $pass = base64_encode($pass);
            // proses model m_admin
            $this->m_admin->getlogin($user,$pass);
        }
        else{
            $this->load->view('admin/login');
        }
    }
  
    
}
    
<?php 

class error404 extends CI_Controller{
  function __construct(){
        parent::__construct();
    }
    public function index()
    {
        // memanggil view user 
        $this->load->view('errors/404');

    }
}
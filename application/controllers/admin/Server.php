<?php 

class server extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
        // inisialisasi model yang akan di load
        $this->load->model('m_server');
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
        
        $status['title']= "Setting Server";
        $data[] = array();
        // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/setting/server');
        $this->load->view('admin/footer');
            
        }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function showServer()
    {
        $list = $this->m_server->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $server) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $server->host_server;
            $row[] = $server->status;

             //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$server->kd_smtp."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default"  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View Data" onclick="detailData('."'".$server->kd_smtp."'".')"><i class="fa fa-search"></i> </a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_server->count_all(),
                        "recordsFiltered" => $this->m_server->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function getData($id){
        $data = $this->m_server->getData($id);
        echo json_encode($data);
    }
    public function tambahData()
    {
        $data = array(
                'host_server' => $this->input->post('t_host_server'),
                'user_smtp' => $this->input->post('t_user_smtp'),
                'pass_smtp' => $this->input->post('t_pass_smtp'), 
                'port_smtp' => $this->input->post('t_port_smtp'),
                'status' => 'aktif'
            );
        $insert = $this->m_server->tambahData($data);

        echo json_encode(array("status" => $data));
    }

    public function editData()
    {
        $data = array(
                'host_server' => $this->input->post('host_server'),
                'user_smtp' => $this->input->post('user_smtp'),
                'pass_smtp' => $this->input->post('pass_smtp'), 
                'port_smtp' =>$this->input->post('port_smtp'),
                'status' => $this->input->post('status')
            );
        $this->m_server->editData(array('kd_smtp' => $this->input->post('kd_smtp')), $data);
        echo json_encode(array("status" => $data));
    }

    public function hapusData($id)
    {
        $this->m_server->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }

}
<?php 

class Profile extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
        // inisialisasi model yang akan di load
        $this->load->model('m_mahasiswa');
        $this->load->model('m_voting');
        $this->load->model('m_admin');
        $this->load->helper('url');
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
        
        $status['title']= "Halaman Profile Admin";
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
		$this->load->view('admin/setting/profile');
        $this->load->view('admin/footer');
            
        }
        else{
            
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function showAdmin()
    {
        $list = $this->m_admin->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $admin->nama_admin;
            $row[] = $admin->ket;

            //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$admin->kd_admin."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default"  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View" onclick="detailData('."'".$admin->kd_admin."'".')"><i class="fa fa-file"></i> View</a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_admin->count_all(),
                        "recordsFiltered" => $this->m_admin->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function getData($id){
        $data = $this->m_admin->getData($id);
        echo json_encode($data);
    }

    public function tambahData()
    {
        $data = array(
                'kd_admin' => "ADM".rand(1,100), 
                'username' => $this->input->post('t_user'),
                'password' => base64_encode($this->input->post('t_pass')),
                'nama_admin' => $this->input->post('t_nama'),
                'status' => $this->input->post('t_sebagai'),
                'email' => $this->input->post('t_email'),
                'ket' => $this->input->post('t_status')
            );
        $insert = $this->m_admin->tambahData($data);
        // $this->session->set_flashdata('message',' class="alert alert-success alert-dismissible" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // <h4>Tambah!</h4> Data Berhasil Ditambahkan!! ');
        echo json_encode(array("status" => TRUE));
    }

    public function editData()
    {
        $data = array(
                'username' => $this->input->post('user'),
                'password' => base64_encode($this->input->post('pass')),
                'nama_admin' => $this->input->post('nama'),
                'status' => $this->input->post('sebagai'),
                'email' => $this->input->post('email'),
                'ket' => $this->input->post('status')
            );
        $this->m_admin->editData(array('kd_admin' => $this->input->post('kd_admin')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function hapusData($id)
    {
        $this->m_admin->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }

}
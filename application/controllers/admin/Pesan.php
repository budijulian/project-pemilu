<?php 

class pesan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
            // inisialisasi model yang akan di load
            $this->load->model('m_pesan');
            $this->load->model('m_kandidat');
            $this->load->helper('url');
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
         if($this->session->userdata('username')==TRUE){
        $data['kandidat'] = $this->m_kandidat->show_kandidat_all();
        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Halaman Pesan";
        // load database dari model untuk dihubungkan ke dalam view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidat/pesan',$data);
        $this->load->view('admin/footer');
         }
        else{
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/login');
        }
    }
    public function showPesan()
    {
        $list = $this->m_pesan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pesan) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pesan->nama_lengkap;
            $row[] = $pesan->ps_status;
            $row[] = substr($pesan->pesan,0,15).'...';
            //array('kd_kandidat','periode','nomor_urut','nama_kandidat','status');
            //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$pesan->kd_pesan."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default" data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="detailData"
             title="View Data" onclick="detailData('."'".$pesan->kd_pesan."'".')"><i class="fa fa-search"></i> </a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_pesan->count_all(),
                        "recordsFiltered" => $this->m_pesan->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function tambahData()
    {   
        $data = array( 
                'nama_lengkap' =>$this->input->post('t_nama_lengkap'),
                'pesan' => trim($this->input->post('t_pesan')),
                'ps_status' => 'tampil'
            );
        $insert = $this->m_pesan->tambahData($data);
        echo json_encode(array("status" => TRUE));
    }

    public function editData()
    {
          $data = array( 
                'pesan' => trim($this->input->post('pesan')),
                'ps_status' => trim($this->input->post('status')),
            );
        $this->m_pesan->editData(array('kd_pesan' => $this->input->post('kd_pesan')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function getData($id){
        $data = $this->m_pesan->getData($id);
        echo json_encode($data);
    }

    public function hapusData($id)
    {
        $this->m_pesan->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }
  
}
    
<?php 

class kandidat extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == TRUE){
            // inisialisasi model yang akan di load
            $this->load->model('m_kandidat');
            $this->load->model('m_periode');
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

        // load database dari model untuk dihubungkan ke dalam view
        $data['title'] = "Kandidat";
         $data['periode'] = $this->m_periode->All_Periode()->result();
        // load database dari model untuk dihubungkan ke dalam view
        // $data['kandidat'] = $this->m_kandidat->All_Kandidat()->result();
        // memanggil banyak view yang sudah dipecah
        $data['kandidat'] = array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidat/kandidat',$data);
        $this->load->view('admin/footer');
         }
    else{
    // pindah ke halaman secara otomatis
     redirect(base_url().'admin/login');
    }
}
    public function view(){
        // $data['kandidat'] = $this->m_kandidat->edit_data($npm)->result();
         if(isset($_GET['id'])){
            $id = base64_decode($_GET['id']);
            $data['kandidat'] = $this->m_kandidat->getData($id);
            $data['periode'] = $this->m_periode->All_Periode()->result();
            $status['title']= "Detail Data Kandidat";
            $this->load->view('admin/header',$status);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/kandidat/view',$data);
            $this->load->view('admin/footer');
        }else{
           // pindah ke halaman secara otomatis
         redirect(base_url().'admin/kandidat');
        }
        
        }
     public function tambah(){
       
        $status['title']= "Tambah Data";
      	$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidat/tambah');
		$this->load->view('admin/footer');
        }
    public function ubahdatafoto($kd_kandidat){

        $foto_baru = $_FILES['foto_baru']['name'];
        if($foto_baru !=""){
			$config['upload_path'] = "./assets/img/kandidat";
			$config['allowed_types'] = "jpg|gif|jpeg|png";	
       		$config['encrypt_name'] = TRUE;	

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_baru')){
				die();
			}else{
				$data = array('upload_data' => $this->upload->data());
                $data = array( 
                'foto' => $data['upload_data']['file_name']
            );
             $check = $this->m_kandidat->checkDataKandidat(array('kd_kandidat' => $kd_kandidat));
                if($check->num_rows() > 0){
                    $row = $check->row_array();
                     // hapus file pada database 
                        $tmp = "./assets/img/kandidat/".$row['foto'];
                        unlink($tmp);
                }
            }	
		}else{}
        $this->m_kandidat->editData(array('kd_kandidat' => $kd_kandidat), $data);
    }
     public function ubahdata(){
        $nama_kandidat = $this->input->post('nama_kandidat');
        $jurusan = $this->input->post('jurusan');
        $visi = $this->input->post('visi');
        $npm = $this->input->post('npm');
        $misi = $this->input->post('misi');
        $link_video = $this->input->post('link_video');
        $angkatan = $this->input->post('angkatan');
        $periode = $this->input->post('periode');
        $no_urut = $this->input->post('no_urut');
        $status = $this->input->post('status');

        $data = array( 
                'nomor_induk' => trim($npm),
                'nama_kandidat' => trim($nama_kandidat),
                'jurusan' => trim($jurusan),
                'kd_periode' => trim($periode),
                'link_video' => trim($link_video),
                'visi' => trim($visi),
                'angkatan' => trim($angkatan),
                'misi' => trim($misi),
                'nomor_urut' => trim($no_urut),
                'status' => trim($status)
            );
        
        $this->m_kandidat->editData(array('kd_kandidat' => $this->input->post('kd_kandidat')), $data);
        echo json_encode(array("status" => TRUE));
    }
     
    public function hapus($npm){
        // proses penghapusan data oleh model
        $this->m_kandidat->hapus_data($npm);
        // direct link halaman dasboard home
        redirect(base_url().'admin/kandidat/');
    }
    public function showKandidat()
    {
        // $list = $this->m_admin->show_admin_all();
        // $data = array();
        // $no = 0;
        $list = $this->m_kandidat->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $kandidat) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $kandidat->periode;
            $row[] = $kandidat->nomor_urut;
            $row[] = $kandidat->nama_kandidat;
            $row[] = $kandidat->status;
            //array('kd_kandidat','periode','nomor_urut','nama_kandidat','status');
            //add html for action
        $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapusData('."'".$kandidat->kd_kandidat."'".')"><i class="fa fa-trash"></i> </a>
            <a class="btn btn-sm btn-default"   href="'.base_url().'admin/kandidat/view?id='.base64_encode($kandidat->kd_kandidat).'" role="button"
             title="View" ><i class="fa fa-file"></i> View</a>';

            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_kandidat->count_all(),
                        "recordsFiltered" => $this->m_kandidat->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function tambahData()
    {   
        
        $data = array(
                'kd_kandidat' => "KDT".date('Y').rand(1,100), 
                // 'periode' => "PRD21002", 
                'kd_periode' =>$this->input->post('periode'),
                'nomor_induk' => $this->input->post('npm'),
                'nomor_urut' => $this->input->post('no_urut'),
                'angkatan' => $this->input->post('angkatan'),
                'nama_kandidat' => $this->input->post('nama_kandidat'),
                'jurusan' => $this->input->post('jurusan'),
                'status' => 'aktif'
            );
        $insert = $this->m_kandidat->tambahData($data);
        echo json_encode(array("status" => TRUE));
    }

    public function editData()
    {
       $foto = $_FILES['foto']['name'];
        if($foto =""){}else{
            $config['upload_path'] = './assets/img/kandidat';
            $config['allowed_types']="png|jpg|jpeg|gif";
            
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }
            else{
                $foto =$this->upload->data('file_name');
            }
        }
        $data = array( 
                'periode' => $this->input->post('periode'),
                'nomor_induk' => base64_encode($this->input->post('npm')),
                'nomor_urut' => $this->input->post('no_urut'),
                'nama_kandidat' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jurusan' => $this->input->post('jurusan'),
                'foto' => $foto,
                'motivasi' => $this->input->post('motivasi'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'link_video' => $this->input->post('link_video'),
                'status' => 'aktif'
            );
        $this->m_kandidat->editData(array('kd_kandidat' => $this->input->post('kd_kandidat')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function hapusData($id)
    {
        $this->m_kandidat->hapusData($id);
        echo json_encode(array("status" => TRUE));
    }
    public function getData($id){
        $data = $this->m_kandidat->getData($id);
        echo json_encode(array("status" => TRUE, "data" =>$data));
        
    }
  
}
    
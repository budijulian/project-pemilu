<?php 

class Mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->helper('url','form');
    }

    public function index()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        // $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        // $data['get_one'] = $this->db->get('tbl_mahasiswa')->result();
        $status['title']= "Data Mahasiswa";
        $data['mahasiswa'] = array();
        $data['get_one'] = array();
        // memberi notifikasi di halaman
        // $this->session->set_flashdata('message1',' class="callout callout-info" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // <h4>Reminder!</h4> Jangan memberitahukan informasi kepada orang lain');
        // // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/mahasiswa',$data);
        $this->load->view('admin/footer',$data);
          }
        else{
        // pindah ke halaman secara otomatis
         redirect(base_url().'admin/login');
        }

    }
    public function pendaftar()
    {
        // security access melihat session ada atau tidak 
        if($this->session->userdata('username')==TRUE){
        
        // load database dari model untuk dihubungkan ke dalam view
        // $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
        // $data['get_one'] = $this->db->get('tbl_mahasiswa')->result();
        $status['title']= "Data Pendaftar";
        $data['mahasiswa'] = array();
        $data['get_one'] = array();
        // memberi notifikasi di halaman
        // $this->session->set_flashdata('message1',' class="callout callout-info" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // <h4>Reminder!</h4> Jangan memberitahukan informasi kepada orang lain');
        // // memanggil banyak view yang sudah dipecah
		$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/pendaftar',$data);
        $this->load->view('admin/footer',$data);
          }
        else{
        // pindah ke halaman secara otomatis
         redirect(base_url().'admin/login');
        }

    }
    function showPendaftar(){
        $list = $this->m_pendaftar->get_datatables();
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
    public function view(){
        // $data['kandidat'] = $this->m_kandidat->edit_data($npm)->result();
        //  if(isset($_POST['tambah'])){
        //     setcookie($CKd_kandidat, " ", time() + (86400), "/");
        // }
        // else if(isset($_POST['id'])){
        //      setcookie($CKd_kandidat, $_GET['id'], time() + (86400), "/");
        // }else{}
        
        $status['title']= "Detail Data";
      	$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/view');
		$this->load->view('admin/footer');
        }
    public function email($npm){
        $data['mahasiswa'] = $this->m_mahasiswa->edit_email($npm)->result();
        $status['title']= "Email";
        $this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/email',$data);
        $this->load->view('admin/footer');
    }
    // model hapus data sukses
    public function hapus($npm){
        // proses penghapusan data oleh model
        $this->m_mahasiswa->hapus_data($npm);
        // direct link halaman dasboard home
        redirect(base_url().'admin/mahasiswa/');
    }
      public function edit($npm){
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($npm)->result();
        $status['title']= "Edit Data Mahasiswa";
      	$this->load->view('admin/header',$status);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mahasiswa/edit',$data);
		$this->load->view('admin/footer');
        }
        public function tambah(){
            // mengambil nilai inputan dari view
        $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $jalur = $this->input->post('jalur');
        $angkatan = $this->input->post('angkatan');
        $foto = $_FILES['foto']['name'];

        if($foto =""){}else{
            $config['upload_path'] = './assets/img/mahasiswa';
            $config['allowed_types']="png|jpg|jpeg|gif";
            
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }
            else{
                $foto =$this->upload->data('file_name');
            }
        }
        

        // mengubah dalam bentuk array

        $data =array(
            'npm_mhs' => $npm,
            'nama' => $nama,
            'email' => $email,
            'tgl_lahir'=> $tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas' => $fakultas,
            'jalur'=>$jalur,
            'angkatan' => $angkatan,
			 'foto'=> $foto
        );
        // mengeksekusi modelm_mahasiwa method inputdata untuk tambah data
        $this->m_mahasiswa->input_data($data);
        $this->session->set_flashdata('message',' class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Tambah!</h4> Data Berhasil Ditambahkan!! ');
        // kembali ke controler mahasiswa method index
         // direct link halaman dasboard
        redirect(base_url().'admin/mahasiswa');
    }
    public function ubahdata($npm){
       // mengambil nilai inputan dari view
        // $npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $verifikasi = $this->input->post('verifikasi');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $angkatan = $this->input->post('angkatan');
        $jalur = $this->input->post('jalur');

        //  $foto = $_FILES['foto']['name'];

        // if($foto =""){}else{
        //     $config['upload_path'] = './assets/img/mahasiswa';
        //     $config['allowed_types']="png|jpg|jpeg|gif";
            
        //     $this->load->library('upload',$config);
        //     if(!$this->upload->do_upload('foto')){
        //         echo "Upload Gagal"; die();
        //     }
        //     else{
        //         $foto =$this->upload->data('file_name');
        //     }
        // }
        
        $data =array(
            'nama' => $nama,
            'email'=> $email,
            'ket' => $verifikasi,
            'pass' => $pass,
            'tgl_lahir'=>$tgl_lahir,
            'jurusan'=> $jurusan,
            'fakultas'=> $fakultas,
            'angkatan'=> $angkatan,
            'jalur'=> $jalur
            // 'foto' => $foto
        );
        $where = array(
            'npm_mhs'=> $npm
        );
        $this->m_mahasiswa->update_data($where,$data,'tbl_mahasiswa');
        $this->session->set_flashdata('message',' class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4>Edit</h4> Data Berhasil Diedit!! ');
        // pindah ke halaman secara otomatis
        redirect(base_url().'admin/mahasiswa/');

  }
//   public function print(){
      
//         // load database dari model untuk dihubungkan ke dalam view
//         $data['mahasiswa'] = $this->m_mahasiswa->All_Mahasiswa()->result();
//         $this->load->view('admin/mahasiswa/print',$data);
//   }
    
}
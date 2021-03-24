<?php 

class user extends CI_Controller{
  function __construct(){
        parent::__construct();
        
            $this->load->model('m_periode');
            $this->load->model('m_voting');
            $this->load->model('m_pendaftar');
            $this->load->model('m_user');
            $this->load->model('m_kandidat');
            $this->load->model('m_pesan');
            $this->load->model('m_server');
            $this->load->helper('url','form');
            
            date_default_timezone_set("Asia/Jakarta");
        
            
    }
    public function index()
    {
        // memanggil view user 
        // $data['kandidat'] = $this->m_user->All_Data()->result();
        // $data['waktu'] = $this->m_user->waktu()->result();
        $this->load->view('user/index');
    
    }
    public function daftar(){
        $this->load->view('user/daftar');
    }
    public function akun(){
        $this->load->view('user/akun');
    }
    public function logout(){
        session_destroy();
        // pindah ke halaman secara otomatis
        redirect(base_url());
    }
     public function login()
    {
        // memanggil view user 
        // $data['kandidat'] = $this->m_user->All_Data()->result();
        // $data['waktu'] = $this->m_user->waktu()->result();
        $this->load->view('user/signin');
    
    }
    public function home()
    {
          // security access melihat session ada atau tidak 
        if($this->session->userdata('kd_mahasiswa')==TRUE){
            $periode = $this->m_periode->getDataPeriode();
            $row  = $periode->row_array();
            // membuat cookie pada total suara 
            $alldata = $this->m_voting->all_suara($row['kd_periode']);
            $allrow  = $alldata->row_array();
            $this->session->set_userdata(array("t_all" =>  $allrow['t_all']));
            // default cookies status vote 
            unset($_COOKIE['waktu_login_vote']);
            setcookie('waktu_login_vote', NULL, -1);
            // memanggil view user
            $this->load->view('user/home');
         }
        else{
        // pindah ke halaman secara otomatis
        redirect(base_url('login'));
        }
    }
    public function timeout(){
        if($this->session->userdata('kd_mahasiswa')==TRUE){
            // $data = array(
            //     'v_waktu' => date('Y-m-d H:i:s'),
            //     'v_status' => "sah"
            // );
            // $where = array('kd_mahasiswa'=> $this->session->userdata('kd_mahasiswa'));
            // update data voting 
            // $this->m_voting->update_data($where,$data);
        // pindah ke halaman secara otomatis
            redirect(base_url('user/home'));
        }else{
             // pindah ke halaman secara otomatis
        redirect(base_url('login'));
        }
    }
    // ///////////////////////// masuk ke halaman voting /////////////////////////
    public function voting(){
         // security access melihat session ada atau tidak 
        if($this->session->userdata('kd_mahasiswa')==TRUE){
            if(isset($_COOKIE['waktu_login_vote'])) {
                
                $this->load->view('user/voting');
            }else{
                // pindah ke halaman secara otomatis
                redirect(base_url('user/home'));
            }
        }else{
             // pindah ke halaman secara otomatis
        redirect(base_url('login'));
        }
    }
    public function checkVotingUser()
    {   
        // check data user di tabel voting
        $where = array(
            'kd_mahasiswa' => base64_decode($this->session->userdata('kd_mahasiswa')),
            'kd_periode' => base64_decode($this->session->userdata('kd_periode'))
        );
       $data = $this->m_voting->checkVotingUser($where)->result();
        echo json_encode($data);

    }
    // getDataCountdown
    public function getDateMulaiPemilihan(){
        $data = $this->m_periode->getDateMulaiPemilihan();
        echo json_encode($data);
    }
    // public function getDataCountdown(){
    //     $data = $this->m_periode->getDateMulaiPemilihan();
    //     echo json_encode($data);
    // }
    // controler untuk signin ke sistem login
    public function signinData(){
        if(isset($_POST['submit'])){
            $user = trim($this->input->post('nomor'));
            $pass = trim($this->input->post('pass'));
            $pass = base64_encode($pass);
            // proses model m_admin
            $get_periode = $this->m_periode->getDataPeriode();
            $row  = $get_periode->row_array();
            $this->m_user->getlogin($user, $pass, $row['periode']);
            $result = array("status" =>TRUE);
        }
        else{
        }
        echo json_encode($result);
    }
    public function set_voting(){
        // data default voting 
        $where = array(
            'kd_mahasiswa' => base64_decode($this->session->userdata('kd_mahasiswa')),
            'kd_periode' => base64_decode($this->session->userdata('kd_periode'))
        );
            $check = $this->m_voting->checkDataVoting($where);
            if($check->num_rows() > 0){
            
                // notifikasi voting gagal (2x)
                $this->session->set_flashdata("notifikasi_voting","
                                               
                                                swal(
                                                    'Gagal, voting dua kali.',
                                                    'Anda tidak bisa voting lagi!',
                                                    'error'
                                                )
                                                     ");
                redirect(base_url('user/home/#live'));
            }else{
                // $data = array(
                // 'kd_voting' => date('y')."KVT".date('Hi').rand(1,100), 
                // 'kd_mahasiswa' => base64_decode($this->session->userdata('kd_mahasiswa')),
                // 'kd_periode' => base64_decode($this->session->userdata('kd_periode')),
                // 'pilihan' => "",
                // 'v_status' =>""
                // );
                // set waktu login halaman vote 
                // setcookie("kd_voting", $data['kd_voting'], time() + 240);
                setcookie("waktu_login_vote", date("Y-m-d H:i:s"), time() + 240);
                // simpan data voting 
                // $this->m_voting->tambah_data($data);
                
                // notifikasi akses voting berhasil 
                redirect(base_url('user/voting'));
            }
    }
        
    // public function getsuara_golput(){
    //     $data = $this->m_voting->suara_golput()->result();
    //      echo json_encode($data);
    // }
    // get data voting chart bar 
    
    //  chart data voting  
    //  public function chartDataVoting(){
    //     $result = $this->m_voting->chartDataVoting()->result();
    //       //output to json format
    //     echo json_encode($result);
    // }
    
    //show quick count pemilihan suara dan pendaftar
    public function getQuickCount(){
            $periode = $this->m_periode->getDataPeriode();
            $row  = $periode->row_array();
            $data = array(
                'suara' =>$this->m_voting->count_suara_masuk($row['kd_periode']),
                'pendaftar' =>$this->m_pendaftar->count_pendaftar_periode($row['kd_periode'])
            );
            //output to json format
            echo json_encode($data);
    }
    public function ubah_voting(){
        if($this->session->userdata('kd_mahasiswa') == TRUE){
            // $data = array(
            //     'pilihan' => $this->input->post('pilihan'),
            //     'v_waktu' => date('Y-m-d H:i:s')
            // );
            $where = array(
                'kd_mahasiswa' => base64_decode($this->session->userdata('kd_mahasiswa')),
                'kd_periode' => base64_decode($this->session->userdata('kd_periode'))
            );
            $check = $this->m_voting->checkDataVoting($where);
            if($check->num_rows() == 0){
            
             $data = array(
                'v_waktu' => date('Y-m-d H:i:s'),
                'kd_voting' => date('y')."KVT".date('Hi').rand(1,100), 
                'kd_mahasiswa' => base64_decode($this->session->userdata('kd_mahasiswa')),
                'kd_periode' => base64_decode($this->session->userdata('kd_periode')),
                'pilihan' =>  $this->input->post('pilihan'),
                'v_status' =>"sah"
                );
                $this->m_voting->tambah_data($data);
                // notifikasi voting gagal (2x)
                $this->session->set_flashdata("success_voting","
                                                    swal(
                                                        'Voting Berhasil.',
                                                        'Pilihan Anda telah kami simpan, Terimakasih.',
                                                        'success'
                                                    )");                                       
            // echo json_encode(array("status" => TRUE));
             redirect(base_url().'user/home/#live');
            }else if($check->num_rows() != 0){
                  // notifikasi voting gagal (2x)
                $this->session->set_flashdata("success_voting","
                                                    swal(
                                                        'Gagal.',
                                                        'Anda telah melakukan voting, Terimakasih.',
                                                        'error'
                                                        )");   
                //  echo json_encode(array("status" => FALSE));
                 redirect(base_url().'user/home/#live');
            }
            unset($_COOKIE['waktu_login_vote']);
            setcookie('waktu_login_vote', NULL, -1); 
        }else{
         redirect(base_url().'user/login');
        }
    }
    
     public function tambahData()
    {
        $dt = $this->m_periode->getDataPeriode();
        $row  = $dt->row_array();
        // check data user di tabel pendaftar 
        $where = array(
            'nomor_induk' =>trim($this->input->post('t_nomor')),
            'kd_periode' => $row['kd_periode']
        );
        $check = $this->m_pendaftar->checkDataPendaftar($where);
        if($check->num_rows() > 0){
            // alert data ada 
            echo json_encode(array("status" => FALSE));
        }else{
            // data null 
            $file_foto = $_FILES['t_foto_ktm']['name'];
            if($file_foto !=""){
                $config['upload_path'] = "./assets/img/datapendukung";
                $config['allowed_types'] = "jpg|gif|jpeg|png";	
                $config['encrypt_name'] = TRUE;	

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('t_foto_ktm')){
                    die();
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $file_name= $data['upload_data']['file_name'];
                }	
            }else{}
            $data = array(
                    'kd_mahasiswa' => "MHS".date('d').rand(1,100), 
                    'nomor_induk' => trim($this->input->post('t_nomor')),
                    'kd_periode' => $row['kd_periode'],
                    'nama_mahasiswa' => trim($this->input->post('t_nama')),
                    'password' => trim(base64_encode($this->input->post('t_pass'))),
                    'email' => trim($this->input->post('t_email')),
                    'angkatan' => trim($this->input->post('t_angkatan')),
                    'jalur' => trim($this->input->post('t_jalur')),
                    'foto_ktm' => $file_name,
                    'jenis_voting' =>'Online',
                    'status' => 'aktif',
                    'validasi' => 'belum terverifikasi'
                );
            
            $insert = $this->m_pendaftar->tambahData($data);
            // $this->kirim_konfirmasi($data['kd_mahasiswa']);
            // kirim data email ke ajax respon 
            echo json_encode(array("status" => TRUE,"kd_mahasiswa" =>$data['kd_mahasiswa']));
        }
        
    }
    // send konfirmasi ke email peserta with SMTP Online 
    public function testkonfirmasi($getdata)
     {  
        //   $row  = $getdata->row_array();
        foreach( $getdata as $g) {
            $where = array('kd_mahasiswa' => $g->kd_mahasiswa);
        }
        
        $data['mahasiswa'] = $this->m_pendaftar->checkDataPendaftar($where)->result();
        // ambil data periode 
        $data['periode'] = $this->m_periode->getDataPeriode()->result();
        // ambil data server SMTP
        $data = $this->m_server->checkDataServer();
        $row = $server->row_array();
		//menggunakan config smtp sendinblue.com
        	$config = [
            'protocol'  => 'smtp',
            'smtp_pass' => $row['pass_smtp'],
            'smtp_user' => $row['user_smtp'],
            'smtp_host' => $row['host_server'],
            'smtp_port' => $row['port_smtp'],
            //'smtp_crypto' => 'ssl',
            'smtp_timeout' => 30,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
		];

		//generate QRCODE dari kode tiket peserta
		// $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        // $config['cacheable']    = true; //boolean, the default is true
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        // $config['imagedir']     = './assets/img/qrcode/'; //direktori penyimpanan qr code
        // $config['quality']      = true; //boolean, the default is true
        // $config['size']         = '1024'; //interger, the default is 1024
        // $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        // $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        // $this->ciqrcode->initialize($config);

        // generate qrcode 
        // $image_name = $kode_tiket.'.png'; //buat name dari qr code sesuai dengan nim
 
        // $params['data'] = $kode_tiket; //data yang akan di jadikan QR CODE
        // $params['level'] = 'H'; //H=High
        // $params['size'] = 20;
        // $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        // $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
		
		//kontanta email admin
		$email_admin = "himasiunas@gmail.com";

        $this->email->initialize($config);
        $this->email->from($email_admin, 'Panitia HIMASI');
        $this->email->to("budijulian96@gmail.com");
        // $this->email->attach('');
        $date = strtotime(" +1 years");
        $periode =  date("Y").' / '.date("Y",$date);
        $this->email->subject('[KONFIRMASI REGISTRASI PEMILU HIMASI'." ".$periode."]");
        $this->email->message($this->load->view('user/konfirmasi_email',$data, true));

        if ($this->email->send()) {
			# code...
          echo json_encode(array("status" => TRUE));
        } else {
			echo $this->email->print_debugger();
            echo json_encode(array("status" => FALSE));
            die;
        }
	}
    // send konfirmasi ke email peserta with SMTP Online 
    public function kirim_konfirmasi($id)
	{  
        // ambil data periode 
        $data['periode'] = $this->m_periode->getDataPeriode()->result();
        // ambil data server SMTP
        $where = array('status' => 'aktif');
        $server = $this->m_server->checkDataServer($where);
        $row = $server->row_array();
		//menggunakan config smtp sendinblue.com
        	$config = [
            'protocol'  => 'smtp',
            'smtp_pass' => trim($row['pass_smtp']),
            'smtp_user' => trim($row['user_smtp']),
            'smtp_host' => trim($row['host_server']),
            'smtp_port' => trim($row['port_smtp']),
            //'smtp_crypto' => 'ssl',
            'smtp_timeout' => 30,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
		];
		//inisial email admin
        $email_admin = "himasiunas@gmail.com";

        $where = array('kd_mahasiswa' => $id);
        $mahasiswa = $this->m_pendaftar->checkDataPendaftar($where);
        //  ambil data array mahasiswa
        $row = $mahasiswa->row_array();
        
        $this->email->initialize($config);
        $this->email->from($email_admin, 'Panitia HIMASI');
        $this->email->to(strtolower(trim($row['email'])));
        // $this->email->attach('');
        $date = strtotime(" +1 years");
        $periode =  date("Y").' / '.date("Y",$date);
        // result data mahasiswa 
        $data['mahasiswa'] = $mahasiswa->result();

        $this->email->subject('[KONFIRMASI REGISTRASI PEMILU HIMASI'." ".$periode."]");
        $this->email->message($this->load->view('user/konfirmasi_email',$data, true));

        if ($this->email->send()) {
			# code...
          echo json_encode(array("status" => TRUE));
          // pindah ke halaman secara otomatis
        } else {
			echo $this->email->print_debugger();
            echo json_encode(array("status" => FALSE));
            die;
        }
         
	}
    public function getData(){
        $id = base64_decode($this->session->userdata('kd_mahasiswa'));
        $data = $this->m_pendaftar->getData($id);
        echo json_encode($data);
    }
    public function kirimkonfirmasi2(){
        $this->load->view('user/konfirmasi_email');
    }
    public function ubahData()
    {
        $file_foto = $_FILES['foto_ktm']['name'];
		if($file_foto !=""){
			$config['upload_path'] = "./assets/img/datapendukung";
			$config['allowed_types'] = "jpg|gif|jpeg|png";	
       		$config['encrypt_name'] = TRUE;	

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_ktm')){
				die();
			}else{
				$data = array('upload_data' => $this->upload->data());
                $data = array( 
                'nama_mahasiswa' => trim($this->input->post('nama')),
                'password' => trim(base64_encode($this->input->post('pass'))),
                'email' => trim($this->input->post('email')),
                'angkatan' => trim($this->input->post('angkatan')),
                'jalur' => trim($this->input->post('jalur')),
                'foto_ktm' =>$data['upload_data']['file_name']
            );
             // hapus file pada database 
            $check = $this->m_pendaftar->checkDataPendaftar(array('kd_mahasiswa' => $this->input->post('kd_mahasiswa')));
                if($check->num_rows() > 0){
                    $row = $check->row_array();
                    $tmp = "./assets/img/datapendukung/".$row['foto_ktm'];
                    unlink($tmp);
                }
			}	
		}else{
            $data = array( 
                'nama_mahasiswa' => trim($this->input->post('nama')),
                'password' => trim(base64_encode($this->input->post('pass'))),
                'email' => trim($this->input->post('email')),
                'angkatan' => trim($this->input->post('angkatan')),
                'jalur' => trim($this->input->post('jalur'))
            );
        }
       
            $data_session = array(
                'nama_mahasiswa'=> base64_encode(trim($this->input->post('nama')))
            );
        // mengirim session data
        $this->session->set_userdata($data_session);
        
        $this->m_pendaftar->editData(array('kd_mahasiswa' => $this->input->post('kd_mahasiswa')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function showDataKandidat()
    {
        # code...
        $data = $this->m_kandidat->showDataKandidat();
        echo json_encode($data);

    }
    public function showDataPesan()
    {
        # code...
        $data = $this->m_pesan->showDataPesan();
        echo json_encode($data);

    } 
    public function getverifStatus(){
        $kd_mahasiswa = base64_decode($this->session->userdata('kd_mahasiswa'));
        $data = $this->m_pendaftar->getData($kd_mahasiswa);
        echo json_encode($data);
    }
  public function getchartBarVoting(){
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        $result = $this->m_voting->chartBarVoting($row['kd_periode'])->result();
        // $netral = $this->m_voting->suara_netral($row['kd_periode']);

        $alldata = $this->m_voting->all_suara($row['kd_periode']);
        $allrow  = $alldata->row_array();
        $this->session->set_userdata(array("t_all" =>  $allrow['t_all']));
        // pecah data array 
        // $row  = $netral->row_array();
        // $data = array(
        //     'nama' => 'netral',
        //     't_suara' => $row['t_netral']
        // );
        
        // menambah data pada array 
        // array_push($result ,$data);

        //output to json format
        echo json_encode($result);
    }
     public function getcheckWaktuPendaftar(){
        $result = $this->m_periode->checkWaktuPendaftar();
        //output to json format
        echo json_encode($result);
     }
     public function getcheckWaktuMulaiVoting(){
        $result = $this->m_periode->checkWaktuMulaiVoting();
        //output to json format
        echo json_encode($result);
     }
     public function getcheckWaktuTutupVoting(){
        $result = $this->m_periode->checkWaktuTutupVoting();
        //output to json format
        echo json_encode($result);
     }
     
}
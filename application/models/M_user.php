<?php
class m_user extends CI_Model{
    // nama table
    private $table_name ='tbl_data_mahasiswa';
    private $table_name1 ='tbl_data_periode';
    private $table_name2 ='tbl_mahasiswa';
    private $table_name3 ='tbl_waktu';

    public function All_Data(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name.' ORDER BY no_urut ASC');
      
    }
    public function input_data($data){
        $this->db->insert($this->table_name2,$data);
  }
   public function waktu(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name3);
      
    }
    public function getlogin($npm,$pass,$periode){
    // $where = array('nomor_induk' => $npm,
    // 'password'=> $pass, 'p_status' =>$periode);
    // memproses data rows yang ada di sistem
     $check = $this->db->query('
        SELECT *
        FROM '.$this->table_name.' AS n
        INNER JOIN '.$this->table_name1.' AS p
        ON n.kd_periode = p.kd_periode
        WHERE n.nomor_induk = "'.$npm.'" AND n.password = "'.$pass.'" AND n.status= "aktif" AND
        p.periode = "'.$periode.'" AND p.p_status = "aktif"
        ');
    // $check = $this->db->get_where($this->table_name,$where);
    if($check->num_rows() > 0){
        //  ambil data dari check &pecah data
        foreach ($check->result() as $row) {
            $data_session = array(
                'kd_mahasiswa'=> base64_encode($row->kd_mahasiswa),
                'nama_mahasiswa'=> base64_encode($row->nama_mahasiswa),
                'nomor_induk'=> base64_encode($row->nomor_induk),
                'password'=> base64_encode($row->password),
                'kd_periode'=> base64_encode($row->kd_periode)
            );
        }
        // mengirim session data
        $this->session->set_userdata($data_session);
       redirect(base_url('user/home'));
        }
     else{
        $this->session->set_flashdata('notiferror','<div style="display:block;"  class="wrap-login50-form-footer text-left">
							<a class="login50-form-title text-white "  >
							<span class="fa fa-warning"></span>	NPM/Password salah.</a>
						</div>');
       redirect(base_url('user/login'));
        }
  }
    public function AllVoting(){
    //   mencari jumlah voting kandidat ddan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.foto as foto, count(v.id) as jumlah
        FROM '.$this->table_name.' AS k
        INNER JOIN '.$this->table_name1.' AS v
        ON k.npm_kd = v.npm_kd
        WHERE v.ket ="Sah"
        GROUP BY v.npm_kd
        ');
    }
    public function ProsesVote($data){
        // kondisi pertama
        $where = array('npm_mhs' => $data['npm_mhs'],
                        'ket'=> "Verifikasi"); 
        // kondisi kedua
        $where2 = array('npm_mhs' => $data['npm_mhs']); 
    // verifikasi data mahasiswa terverifikasi atau tidak
    $check = $this->db->get_where($this->table_name2,$where);
    // verifikasi data mahasiswa ditable vote ada atau tidak
    $check2 = $this->db->get_where($this->table_name1,$where2);
    // sistem melakukan validasi di dalam tabel mahasiswa
    if($check->num_rows() > 0){
            // proses memasukan data vote
            // sistem melakukan validasi di dalam tabel vote
        if($check2->num_rows() > 0){
                $this->session->set_flashdata('notifvote',' class="text-danger">
                <h5> Maaf, Anda Tidak Bisa 2 Kali Voting.</h5>');
                redirect(base_url('home/vote'));
        }
        else{
                $this->db->insert($this->table_name1,$data);
                    // MEMBERI SESSION STATUS
                $this->session->set_flashdata('notifvote',' class="text-success">
                <h5>Terimakasih, Anda Telah Melakukan Voting.Semoga Himasi Bisa Lebih Baik Lagi.<br>
                Jangan Lupa Diisi Feedbacknya yaa.. :) </h5>');
                redirect(base_url('home/vote'));
        }
    }
    else {  
        /// MEMBERI SESSION STATUS
        $this->session->set_flashdata('notifvote',' class="text-warning">
        <h5> Maaf, Anda Belum Terverifikasi.Mohon Segera Hubungi Panitia!</h5>');
     
          redirect(base_url('home/vote'));
    }
       
    }
     public function AllKandidat(){
    //   mencari jumlah voting kandidat ddan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.npm_kd as npm,k.tahun_pilih as periode,k.no_urut as no_urut, k.foto as foto
        FROM '.$this->table_name.' as k
        ');
    }

}
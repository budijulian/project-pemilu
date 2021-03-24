<?php

class m_mahasiswa extends CI_Model{
    // variabel grobal : nama table
    private $table_name ='tbl_mahasiswa';
    private $table_name1 ='tbl_kandidat';
    public function All_Mahasiswa(){
    //   ada dua cara menampilkan data
         return $this->db->query('SELECT * FROM '
         .$this->table_name.'
        ORDER BY timestamp DESC');
  }
  public function get_angkatan(){
     return $this->db->query('
     select count(angkatan) as angkatan from tbl_mahasiswa  GROUP BY angkatan');
  }
    public function input_data($data){
        $this->db->insert($this->table_name,$data);
  }
  public function hapus_data($npm){
      // menangkap parameter npm dari controler
      $where = array('npm_mhs'=> $npm);
      $this->db->where($where);
      $this->db->delete($this->table_name);
  }

  public function edit_data($npm){
     $where = array('npm_mhs' => $npm);
     return $this->db->get_where($this->table_name,$where);
      
  }
//   model u/ mengubah data
  public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
      $this->session->set_flashdata('ubahdata',' class="text-success">
                <h5> Data Anda Berhasil Diubah!</h5>');
      
  }
  public function get_mahasiswa(){
        return $this->db->query('
        select
        count(DISTINCT m.npm_mhs) as total_mhs,
        count(DISTINCT kd.npm_kd) as total_kd
        from '.$this->table_name1.' as kd
        inner join '.$this->table_name.' as m
        ');
    }
//   update varifikasi data mahasiswa 
    // model u/ mengverifikasi data
  public function verifikasi(){
        // mengambil nilai inputan dari view
        $npm = $this->input->post('npm');
        $veri = $this->input->post('verifikasi');
        // mengubah dalam bentuk array
        $data =array('ket' => $veri);
        $where = array(
            'npm_mhs'=> $npm );
      $this->db->where($where);
      $this->db->update($this->table_name,$data);
  }
  public function edit_email($npm){
     $where = array('npm_mhs' => $npm);
     return $this->db->get_where($this->table_name,$where);
      
  }
}
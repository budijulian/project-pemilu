<?php


class m_waktu extends CI_Model{

private $table_name = "tbl_waktu";

public function WaktuPilih(){
    //   setting waktu pemilihan
    $id = '1';
    $where = array('id' => $id);
     return $this->db->get_where($this->table_name,$where);
     }
       
public function ubah($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}

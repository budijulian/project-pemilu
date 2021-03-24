<?php

class M_data extends CI_Model{
    function tampil_data_semua(){
        // mahasiswa : nama table
        return $this->db->get('mahasiswa')->result_array();    
    }
   




}
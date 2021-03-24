<?php

class m_pendaftar extends CI_Model{
    // variabel grobal : nama table
   // nama table
    var $table_name = 'tbl_data_mahasiswa';
    var $table_name2 = 'tbl_data_periode';
    var $column = array('periode','m_waktu','nomor_induk','nama_mahasiswa','jenis_voting','validasi');
    var $order = array('m_waktu' => 'desc');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';
	}
   public function tambahData($data){
    $this->db->insert($this->table_name,$data);
  }
  public function editData($where,$data){
    $this->db->where($where);
    $this->db->update($this->table_name,$data);
  }  
  public function hapusData($id)
	{
		$this->db->where('kd_mahasiswa', $id);
		$this->db->delete($this->table_name);
	}

  public function getData($id){
   	$this->db->from($this->table_name);
		$this->db->where('kd_mahasiswa',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
  }
	//   count data pendaftar belum terverifikasi 
public function count_belum_terverifikasi($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(m.kd_mahasiswa) AS t_belum_terverifikasi
        FROM '.$this->table_name.' as m
        WHERE m.kd_periode = "'.$kd_periode.'" AND m.validasi ="belum terverifikasi"  AND m.status = "aktif"
        ');
    return $data->result();
  }
//   count data pendaftar terverifikasi 
  public function count_terverifikasi($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(m.kd_mahasiswa) AS t_terverifikasi
        FROM '.$this->table_name.' as m
        WHERE m.kd_periode = "'.$kd_periode.'" AND m.validasi ="terverifikasi"  AND m.status = "aktif"
        ');
    return $data->result();
  }
  
//   count data pendaftar per periode 
public function get_pendaftarPeriode($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(m.kd_mahasiswa) AS total_pendaftar
        FROM '.$this->table_name.' as m
        WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif" 
        ');
    return $data;
  }
//   count data pendaftar per periode 
public function count_pendaftar_periode($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(m.kd_mahasiswa) AS total_pendaftar
        FROM '.$this->table_name.' as m 
        WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif"  
        ');
    return $data->result();
  }
  

  // data pendaftar aktif 
 function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
  }
  // data pendaftar tidak aktif 
 function get_datatables2()
	{
		$this->_get_datatables_query2();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
// data pendaftar aktif 
	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
// data pendaftar aktif 
	public function count_all()
	{
    $this->db->from($this->table_name);
    $this->db->where('status','aktif');
		return $this->db->count_all_results();
  }
  // data pendaftar aktif 
  private function _get_datatables_query()
	{
    // custom query here
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->join($this->table_name2, 'tbl_data_mahasiswa.kd_periode = tbl_data_periode.kd_periode');
		$this->db->where('status','aktif');
		$i = 0;
	
		foreach ($this->column as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
  }
  
//   export data pendaftar to excel 
  public function exportList() {
            $this->db->select("m_waktu, nomor_induk, nama_mahasiswa, email, jalur, angkatan, periode, jenis_voting, validasi");
			$this->db->from($this->table_name);
			$this->db->join($this->table_name2, 'tbl_data_mahasiswa.kd_periode = tbl_data_periode.kd_periode');
			$this->db->where('status','aktif');
            $query = $this->db->get();
            return $query->result();
        }
//    check data pendaftar 
	function checkDataPendaftar($where){
        //  check data di tabel voting 
        return $this->db->get_where($this->table_name,$where);
    }
  // data pendaftar aktif 
	function count_filtered2()
	{
		$this->_get_datatables_query2();
		$query = $this->db->get();
		return $query->num_rows();
	}
// data pendaftar aktif 
	public function count_all2()
	{
    $this->db->from($this->table_name);
    $this->db->where('status','tidak aktif');
		return $this->db->count_all_results();
  }
  private function _get_datatables_query2()
	{
    // custom query here
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->join($this->table_name2, 'tbl_data_mahasiswa.kd_periode = tbl_data_periode.kd_periode');
		$this->db->where('status','tidak aktif');
    	$i = 0;
	
		foreach ($this->column as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
  }
}
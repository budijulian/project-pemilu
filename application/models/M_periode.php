<?php
class m_periode extends CI_Model{
    // nama table
    
    var $table_name = 'tbl_data_periode';
    var $column = array('periode','pelaksanaan','waktu_buka_voting','p_status');
    var $order = array('waktu_buka_voting' => 'DESC');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';

	}
	public function All_Periode(){
    //   ada dua cara menampilkan data
         return $this->db->query('SELECT kd_periode,periode FROM '
         .$this->table_name.'
        ');
  }
  public function getDateMulaiPemilihan(){
    $this->db->from($this->table_name);
		$this->db->where('p_status','aktif');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
  }
  // check kondisi start waktu pemilihan 
  public function checkDateMulaiPemilihan(){
	return $this->db->query('SELECT
			CASE
				WHEN timediff(now(), p.waktu_buka_voting) > 0 THEN "sudah lewat"
				WHEN timediff(now(), p.waktu_buka_voting) < 0 THEN "belum lewat"
				ELSE "tidak terdeteksi"
			END AS kondisi
			FROM '.$this->table_name.' AS p
			WHERE p.p_status = "aktif"
	');
  }
  public function getDataPeriode(){
        $this->db->from($this->table_name);
		$this->db->where('p_status','aktif');
		return $query = $this->db->get();
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
		$this->db->where('kd_periode', $id);
		$this->db->delete($this->table_name);
	}

  public function getData($id){
   	$this->db->from($this->table_name);
		$this->db->where('kd_periode',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
  }
 function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table_name);
		return $this->db->count_all_results();
  }
  private function _get_datatables_query()
	{
    // custom query here
		$this->db->from($this->table_name);
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
	//   check waktu pendaftaran dibuka atau tidak
  public function checkWaktuPendaftar(){
	$result =  $this->db->query('SELECT
			CASE
				WHEN NOW() BETWEEN p.`waktu_buka_pendaftar`AND p.`waktu_tutup_pendaftar`= TRUE THEN "true"
				WHEN NOW() BETWEEN p.`waktu_buka_pendaftar`AND p.`waktu_tutup_pendaftar`= FALSE THEN "false"
				ELSE "false"
			END AS status
			FROM '.$this->table_name.' AS p
			WHERE `p_status` ="aktif"
			');
  		return $result->result();
	}
	//   check waktu voting dibuka atau tidak
  public function checkWaktuMulaiVoting(){
	$result =  $this->db->query('SELECT
			CASE
				WHEN timediff(NOW(), p.`waktu_buka_voting`) > 0 THEN "buka"
				ELSE "belum"
			END AS status
			FROM '.$this->table_name.' AS p
			WHERE `p_status` ="aktif"
			');
  		return $result->result();
	}
	public function checkWaktuTutupVoting(){
	$result =  $this->db->query('SELECT
			CASE
				WHEN NOW() BETWEEN p.`waktu_buka_voting`AND p.`waktu_tutup_voting`= TRUE THEN "buka"
				WHEN NOW() BETWEEN p.`waktu_buka_voting`AND p.`waktu_tutup_voting`= FALSE THEN "tutup"
				ELSE "tutup"
			END AS status
			FROM '.$this->table_name.' AS p
			WHERE `p_status` ="aktif"
			');
  		return $result->result();
	}
}



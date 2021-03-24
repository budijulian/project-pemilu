<?php
class m_pesan extends CI_Model{
    // variabel grobal : nama table
	var $table_name = 'tbl_data_pesan';
    var $table_name2 = 'tbl_data_kandidat';
    var $table_name3 = 'tbl_data_periode';
    var $column = array('kd_kandidat','nama_lengkap','ps_status','pesan');
    var $order = array('kd_pesan' => 'desc');
   public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';

	}
// 	public function showDataPesan(){
// 	  //    menampilkan data dari database table tbl pesan dan periode
//     	$query = $this->db->query('SELECT p.pesan AS pesan, k.nama_kandidat AS nama_kandidat,k.foto AS foto, d.periode AS periode
// 			FROM '.$this->table_name.' AS p
// 			INNER JOIN '.$this->table_name2.' AS k
// 			ON p.kd_kandidat = k.kd_kandidat
// 			INNER JOIN '.$this->table_name3.' AS d
// 			ON k.kd_periode = d.kd_periode
// 			WHERE p.ps_status = "tampil" AND k.status ="tidak aktif"
// 	');
//     return $query->result();
//   }
// halaman user 
  public function showDataPesan(){
	  //    menampilkan data dari database table tbl pesan dan periode
    	$query = $this->db->query('SELECT p.pesan AS pesan, p.nama_lengkap AS nama_lengkap, p.p_foto AS p_foto
			FROM '.$this->table_name.' AS p
			WHERE p.ps_status = "tampil"
	');
    return $query->result();
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
		$this->db->where('kd_pesan', $id);
		$this->db->delete($this->table_name);
	}

  public function getData($id){
	    $this->db->from($this->table_name);
    	$this->db->join($this->table_name2, 'tbl_data_pesan.kd_kandidat = tbl_data_kandidat.kd_kandidat');
    	$this->db->join($this->table_name3, 'tbl_data_kandidat.kd_periode = tbl_data_periode.kd_periode');
		$this->db->where('tbl_data_pesan.kd_pesan',$id);
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
		$this->db->select('*');
		$this->db->from($this->table_name);
    	$this->db->join($this->table_name2, 'tbl_data_pesan.kd_kandidat = tbl_data_kandidat.kd_kandidat');
    	$this->db->join($this->table_name3, 'tbl_data_kandidat.kd_periode = tbl_data_periode.kd_periode');

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
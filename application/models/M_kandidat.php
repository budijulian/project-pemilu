<?php


class m_kandidat extends CI_Model{
    // variabel grobal : nama table
    var $table_name = 'tbl_data_kandidat';
    var $table_name2 = 'tbl_data_periode';
    var $column = array('periode','nomor_urut','nama_kandidat','status');
    var $order = array('kd_kandidat' => 'desc');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';

	}   
  function show_kandidat_all()
	{
   //    menampilkan data dari database table tbl kandidat
    $query = $this->db->query('SELECT * FROM '
    .$this->table_name);
    return $query->result();
  }
  public function showDataKandidat(){
	  //    menampilkan data dari database table tbl kandidat dan periode
    $query = $this->db->query('SELECT * 
		FROM '.$this->table_name.' AS k
		INNER JOIN '.$this->table_name2.' AS p
		ON k.kd_periode = p.kd_periode
		WHERE k.status = "aktif" AND p_status = "aktif"
		ORDER BY nomor_urut ASC
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
		$this->db->where('kd_kandidat', $id);
		$this->db->delete($this->table_name);
	}
	
//    check data pendaftar 
	function checkDataKandidat($where){
        //  check data di tabel voting 
        return $this->db->get_where($this->table_name,$where);
    }
  public function getData($id){
   	$this->db->from($this->table_name);
		$this->db->where('kd_kandidat',$id);
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
    	$this->db->join($this->table_name2, 'tbl_data_kandidat.kd_periode = tbl_data_periode.kd_periode');

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
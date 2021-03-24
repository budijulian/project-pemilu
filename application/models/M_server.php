<?php
class m_server extends CI_Model{
    // nama table
    
    var $table_name = 'tbl_smtp_server';
    var $column = array('host_server','status');
    var $order = array('kd_smtp' => 'ASC');
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
		$this->db->where('kd_smtp', $id);
		$this->db->delete($this->table_name);
	}

  public function getData($id){
   	$this->db->from($this->table_name);
		$this->db->where('kd_smtp',$id);
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
	public function checkDataServer($where)
    {
        # code...
         return $this->db->get_where($this->table_name,$where);
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











}

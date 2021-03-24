<?php
class m_data_voting extends CI_Model{
    // nama table
    var $table_name = 'tbl_data_voting';
    var $table_name2 = 'tbl_data_mahasiswa';
    var $column = array('v_waktu','kd_mahasiswa','nama_mahasiswa','v_status');
    var $order = array('nama_mahasiswa' => 'desc');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';
	}
  
     function get_datatables()
	{
		$this->_get_datatables_query();
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
    {  $this->db->from($this->table_name2);
        return $this->db->count_all_results();
    }
  // data pendaftar aktif 
  private function _get_datatables_query()
	{
        
        $periode = $this->m_periode->getDataPeriode();
        $row  = $periode->row_array();
        $kd_periode = $row['kd_periode'];
    // custom query here
    $this->db->select('*');
    $this->db->from($this->table_name2);
    $this->db->join($this->table_name);
    // $this->db->query('SELECT v.v_waktu, m.kd_mahasiswa, m.nama_mahasiswa, v.v_status
    //         FROM '.$this->table_name.' as v
    //         JOIN '.$this->table_name2.' as m
    //         ON v.kd_mahasiswa = m.kd_mahasiswa
    //         WHERE m.kd_periode = "'.$kd_periode.'" 
    //         GROUP BY m.kd_mahasiswa
    //     UNION
    //     SELECT "null" as v_waktu , m.kd_mahasiswa , m.nama_mahasiswa, "null" as v_status
    //         FROM '.$this->table_name2.' as m
    //         INNER JOIN  '.$this->table_name.' as v
    //         WHERE m.kd_periode = "'.$kd_periode.'" AND  m.kd_mahasiswa  NOT IN (SELECT  v.kd_mahasiswa FROM tbl_data_voting as v)
    //         GROUP BY m.kd_mahasiswa
    //     ');
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
<?php
class m_history extends CI_Model{
    // nama table
    var $table_name = 'tbl_history_kandidat';
    var $table_name2 = 'tbl_data_kandidat';
    var $table_name3 = 'tbl_data_periode';
    var $column = array('periode','nama_kandidat','h_status','total_suara');
    var $order = array('periode' => 'desc');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';
	}
    public function AllVoting(){
    //   mencari jumlah voting kandidat dan data dari kandidat tersebut
        return $this->db->query('
        SELECT k.nama as nama,k.npm_kd as npm,k.tahun_pilih as periode,k.no_urut as no_urut,
         k.foto as foto, count(v.id) as jumlah 
         FROM '.$this->table_name1.' AS k 
         INNER JOIN '.$this->table_name2.' AS v 
         ON k.no_urut = v.pilihan 
         WHERE v.ket ="Sah" 
         GROUP BY v.pilihan 
         ORDER BY v.pilihan
        ');
    }

    public function get_voting(){
        return $this->db->query('
        select 
        count(DISTINCT v.npm_mhs) as total_vote
        from '.$this->table_name3.' as m 
        inner join '.$this->table_name1.' as kd
        inner join '.$this->table_name2.' as v
        ');
    }
    public function get_suaravalid(){
        return $this->db->query('
        select count(*) as total_tidaksah from
        '.$this->table_name2.' where ket ="Tidak Sah"
        ');
    }
    public function get_datavote(){
        return $this->db->query('
        SELECT
        m.npm_mhs as npm_mhs,
        m.nama as nama,
        v.waktu as waktu,
        v.ket as ket,
        v.pilihan as pilihan,
        v.periode as periode
        FROM '.$this->table_name3.' as m
        INNER JOIN '.$this->table_name2.' as v
        ON m.npm_mhs = v.npm_mhs
        ORDER BY waktu DESC
        ');
    }
    public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
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
	{
        $this->db->from($this->table_name);
        $this->db->join($this->table_name2, 'tbl_history_kandidat.kd_kandidat = tbl_data_kandidat.kd_kandidat');
        $this->db->join($this->table_name3, 'tbl_history_kandidat.kd_periode = tbl_data_periode.kd_periode');
        return $this->db->count_all_results();
    }
  // data pendaftar aktif 
  private function _get_datatables_query()
	{
    // custom query here
		$this->db->from($this->table_name);
        $this->db->join($this->table_name2, 'tbl_history_kandidat.kd_kandidat = tbl_data_kandidat.kd_kandidat');
        $this->db->join($this->table_name3, 'tbl_history_kandidat.kd_periode = tbl_data_periode.kd_periode');
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
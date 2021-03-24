<?php
class m_admin extends CI_Model{
    // nama table
    var $table_name = 'tbl_admin';
    var $column = array('nama_admin','ket');
    var $order = array('kd_admin' => 'desc');
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';

	}

    public function All_Admin(){
        
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '
    .$this->table_name.'');
  }
  public function getlogin($user,$pass){
   $where = array('username' => $user,
   'password'=> $pass
  );
  // memproses data rows yang ada di sistem
   $check = $this->db->get_where($this->table_name,$where);
   if($check->num_rows() > 0){
    //  ambil data dari check &pecah data
    foreach ($check->result() as $row) {
      $data= array(
        'nama_admin'=> base64_encode($row->nama_admin),
        'username' => base64_encode($row->username),
        'password' => base64_encode($row->password),
        'email' => base64_encode($row->email),
        'ket' => base64_encode($row->ket)
    );
  }
    // mengirim session 
    $this->session->set_userdata($data);
    //  jika benar diarahkan ke halaman admin
      redirect(base_url().'admin/index');
    }
     else{
       // MEMBERI SESSION STATUS
    $this->session->set_flashdata('notiflogin',' class="text-danger">
    <h4>Notifikasi!</h4> Password atau User Anda Salah!!');
      //  jika berbeda akan diarahkan ke login
       redirect(base_url().'admin/login');
    }
  }
   public function waktu(){
    //    menampilkan data dari database table tbl_admin
    return $this->db->query('SELECT * FROM '.$this->table_name3);
      
    }
    
  // function show_admin_all()
	// {
  //  //    menampilkan data dari database table tbl_admin
  //   $query = $this->db->query('SELECT * FROM '
  //   .$this->table_name.'');
  //   return $query->result();
  // }
  public function tambahData($data){
    $this->db->insert($this->table_name,$data);
  }
  public function editData($where,$data){
    $this->db->where($where);
    $this->db->update($this->table_name,$data);
  }  
  public function hapusData($id)
	{
		$this->db->where('kd_admin', $id);
		$this->db->delete($this->table_name);
	}

  public function getData($id){
   	$this->db->from($this->table_name);
		$this->db->where('kd_admin',$id);
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











}

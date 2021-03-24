<?php
class m_voting extends CI_Model{
    // nama table
    var $table_name = 'tbl_data_voting';
    var $table_name2 = 'tbl_data_mahasiswa';
    var $table_name3 = 'tbl_data_periode';
    var $table_name4 = 'tbl_data_kandidat';
    var $column = array('periode','v_waktu','pilihan','nama_mahasiswa','v_status');
    var $order = array('v_waktu' => 'desc');
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
    function checkDataVoting($where){
        //  check data di tabel voting 
        return $this->db->get_where($this->table_name,$where);
    }
    // insert data default voting 
    public function tambah_data($data){
        $this->db->insert($this->table_name,$data);
    }
    public function editData($where,$data){
        $this->db->where($where);
        $this->db->update($this->table_name,$data);
    } 
    // update data default voting
    public function update_data($where,$data){
        $this->db->where($where);
        $this->db->update($this->table_name,$data);
    }
    public function checkVotingUser($where)
    {
        # code...
         return $this->db->get_where($this->table_name,$where);
    }
    // all suara voting /
    public function all_suara($kd_periode){
         return $this->db->query('SELECT COUNT(DISTINCT v.kd_voting) AS t_all
                FROM '.$this->table_name.'  AS v
                JOIN '.$this->table_name3.' AS p
                ON v.kd_periode = p.kd_periode AND v.kd_periode = "'.$kd_periode.'" 
                WHERE p.p_status = "aktif"
            ');
    }
    //  get suara netral 
    public function suara_netral($kd_periode){
         return $this->db->query('SELECT COUNT(DISTINCT v.kd_voting) AS t_netral
               FROM '.$this->table_name.'  AS v
                JOIN '.$this->table_name3.'  AS p
                WHERE v.kd_periode = "'.$kd_periode.'" AND v.pilihan = 0 AND p.p_status = "aktif" AND v.v_status = "sah" 
            ');
    }
    // data chart voting perlu diperbaiki
    public function suara_golput($kd_periode){
         return $this->db->query('SELECT COUNT(DISTINCT v.kd_voting) AS t_golput
                FROM '.$this->table_name.'  AS v
                JOIN '.$this->table_name3.'  AS p
                WHERE v.kd_periode = "'.$kd_periode.'" AND v.pilihan = 0 AND p.p_status = "aktif" AND v.v_status = "sah"
                GROUP BY v.kd_kandidat
            ');
    }
    // chart bar voting 
    public function chartBarVoting($kd_periode){
        return $this->db->query('SELECT COUNT(DISTINCT `kd_voting`) AS t_suara, k.nomor_urut AS no_urut, k.nama_kandidat AS nama
                FROM '.$this->table_name.'  AS v
                JOIN '.$this->table_name2.'  AS m
                ON v.kd_mahasiswa = m.kd_mahasiswa
                JOIN '.$this->table_name4.'  AS k
                ON  k.nomor_urut = v.`pilihan` 
                JOIN '.$this->table_name3.'  AS p
                ON p.kd_periode = k.kd_periode
                WHERE v.`kd_periode` = k.kd_periode AND p.p_status = "aktif" AND v.v_status = "sah" AND m.status = "aktif"
                AND v.kd_periode = "'.$kd_periode.'" 
                GROUP BY k.kd_kandidat
            ');
    }
    //   data multi bar chart  data per angkatan 
  public function chartMBarPerAngkatan($kd_periode){
        return $this->db->query(' SELECT COUNT(DISTINCT `kd_mahasiswa`) AS t_pendaftar, m.angkatan AS angkatan
                FROM '.$this->table_name2.'  AS m
                WHERE m.validasi = "terverifikasi" AND m.kd_periode = "'.$kd_periode.'" AND m.status = "aktif"
                GROUP BY m.angkatan
                ORDER BY m.angkatan DESC
            ');
    }
    //   data multi bar chart  data sudah memilih per angkatan 
  public function chartMSudahVote($kd_periode){
        return $this->db->query('SELECT COUNT(DISTINCT `kd_voting`) AS t_suara_pilih, m.angkatan AS angkatan
                FROM '.$this->table_name.'  AS v
                JOIN '.$this->table_name2.'  AS m 
                ON v.kd_mahasiswa = m.kd_mahasiswa
                WHERE v.kd_periode = "'.$kd_periode.'" AND m.validasi = "terverifikasi"  AND v.v_status != "" AND m.status = "aktif"
                GROUP BY m.angkatan
                ORDER BY m.angkatan DESC
            ');
    }
     //   data multi bar chart  data sudah memilih per angkatan 
    public function chartMBelumVote($kd_periode){
        return $this->db->query('SELECT COUNT(DISTINCT m.kd_mahasiswa) AS t_suara_belum_pilih, m.angkatan AS angkatan
                FROM '.$this->table_name2.' AS m
                WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif" AND m.kd_mahasiswa  
                NOT IN 
                    (SELECT v.kd_mahasiswa 
                    FROM '.$this->table_name.' AS v)
                GROUP BY m.angkatan
                ORDER BY m.angkatan DESC
        ');
    }
    // chart data voting 
    // public function chartDataVoting(){
    //     return $this->db->query('SELECT v.v_waktu AS v_waktu, m.nama_mahasiswa AS nama_mahasiswa, v.pilihan AS pilihan
    //             FROM '.$this->table_name.'  AS v
    //             JOIN '.$this->table_name4.'  AS m
    //             ON  v.kd_mahasiswa = m.kd_mahasiswa
    //             ORDER BY v.v_waktu DESC
    //             LIMIT 7.0
    //         ');
    // }
// data pendaftar aktif 
	public function count_all()
	{
        $this->db->from($this->table_name);
        $this->db->join($this->table_name2, 'tbl_data_voting.kd_mahasiswa = tbl_data_mahasiswa.kd_mahasiswa');
        $this->db->join($this->table_name3, 'tbl_data_voting.kd_periode = tbl_data_periode.kd_periode');
        $this->db->where('status','aktif');
        $this->db->where('validasi','terverifikasi');
        $this->db->where('pilihan IS NOT NULL', NULL);
        return $this->db->count_all_results();
    }
  // data pendaftar aktif 
  private function _get_datatables_query()
	{
    // custom query here
		$this->db->select('*');
		$this->db->from($this->table_name);
        $this->db->join($this->table_name2, 'tbl_data_voting.kd_mahasiswa = tbl_data_mahasiswa.kd_mahasiswa');
        $this->db->join($this->table_name3, 'tbl_data_voting.kd_periode = tbl_data_periode.kd_periode');
        $this->db->where('status','aktif');
        $this->db->where('p_status','aktif');
        $this->db->where('validasi','terverifikasi');
        $this->db->where('pilihan IS NOT NULL', NULL);
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
   public function count_suara_masuk($kd_periode){
        $data =  $this->db->query('
        SELECT COUNT(v.kd_voting) AS total_suara_masuk
        FROM '.$this->table_name.' as v
        JOIN '.$this->table_name2.' as m
        ON v.kd_mahasiswa = m.kd_mahasiswa
        WHERE v.kd_periode = "'.$kd_periode.'"  AND v.v_status != ""  AND m.status = "aktif"
        ');
    return $data->result();
   }
//    get total data pie chart angkatan
  public function get_count_suara_masuk($kd_periode){
        $data =  $this->db->query('
        SELECT COUNT(v.kd_voting) AS total_suara_masuk
        FROM '.$this->table_name.' as v
        JOIN '.$this->table_name2.' as m
        ON v.kd_mahasiswa = m.kd_mahasiswa
        WHERE v.kd_periode = "'.$kd_periode.'"  AND v.v_status != "" AND m.status = "aktif"
        ');
  return $data;
  }
//   admin count  data voting 
//   count data suara sah per periode 
public function count_suara_sah($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(v.kd_voting) AS t_suara_sah
        FROM '.$this->table_name.' as v
        JOIN '.$this->table_name2.' as m
        ON v.kd_mahasiswa = m.kd_mahasiswa
        WHERE v.kd_periode = "'.$kd_periode.'" AND m.validasi ="terverifikasi" AND v.v_status ="sah"  AND m.status = "aktif"
        ');
    return $data->result();
  }
  //   count data suara tidak sah per periode 
public function count_tidak_suara_sah($kd_periode){
    $data =  $this->db->query('
        SELECT COUNT(v.kd_voting) AS t_suara_tidak_sah
        FROM '.$this->table_name.' as v
        JOIN '.$this->table_name2.' as m
        ON v.kd_mahasiswa = m.kd_mahasiswa
        WHERE v.kd_periode = "'.$kd_periode.'" AND m.validasi ="terverifikasi" AND v.v_status ="tidak sah"  AND m.status = "aktif"
        ');
    return $data->result();
  }
  //   count data suara belum memilih per periode 
public function count_suara_belum_pilih($kd_periode){
    $data =  $this->db->query('
       	SELECT COUNT(DISTINCT m.kd_mahasiswa) AS t_suara_belum_pilih
        FROM '.$this->table_name2.' as m
        WHERE m.kd_periode = "'.$kd_periode.'" AND m.status = "aktif" AND m.kd_mahasiswa  
		NOT IN 
        	(SELECT v.kd_mahasiswa 
			FROM '.$this->table_name.' as v)
        ');
    // $rbp = $data->row_array();
    // $data2 =  $this->db->query('
    //     SELECT COUNT(v.kd_voting) AS t_suara_golput
    //     FROM '.$this->table_name.' as v
    //     JOIN '.$this->table_name2.' as m
    //     ON v.kd_mahasiswa = m.kd_mahasiswa
    //     WHERE v.kd_periode = "'.$kd_periode.'" AND v.v_status = ""
    //     ');
    // $rgp = $data2->row_array();

    // $total = array(
    //     't_suara_belum_pilih' => $rbp['t_suara_belum_pilih']
    // );
     return $data->result();
  }
   //   count total data suara belum memilih per periode 
public function get_count_suara_belum_pilih($kd_periode){
    $data =  $this->db->query('
       	SELECT COUNT(DISTINCT m.kd_mahasiswa) AS t_suara_belum_pilih
        FROM '.$this->table_name2.' as m
        WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif" AND m.kd_mahasiswa
		NOT IN 
        	(SELECT v.kd_mahasiswa 
			FROM '.$this->table_name.' as v)
        ');
    return $data;
  }
//   count data suara golput 
//   public function count_suara_golput($kd_periode){
//         $data =  $this->db->query('
//         SELECT COUNT(v.kd_voting) AS t_suara_golput
//         FROM '.$this->table_name.' as v
//         JOIN '.$this->table_name2.' as m
//         ON v.kd_mahasiswa = m.kd_mahasiswa
//         WHERE v.kd_periode = "'.$kd_periode.'" AND v.v_status = ""
//         ');
//     return $data;
//   }
    //   count total data suara belum memilih per periode 
//Kondisi data jika sudah milih atau tidak milih
public function getDataTabelVoting($kd_periode){
    $data =  $this->db->query('SELECT v.v_waktu, m.nomor_induk, m.nama_mahasiswa, v.v_status
            FROM '.$this->table_name.' as v
            JOIN '.$this->table_name2.' as m
            ON v.kd_mahasiswa = m.kd_mahasiswa
            WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif"
            GROUP BY m.kd_mahasiswa
        UNION
        SELECT "null" as v_waktu , m.nomor_induk , m.nama_mahasiswa, "null" as v_status
            FROM '.$this->table_name2.' as m
            INNER JOIN  '.$this->table_name.' as v
            WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif" AND  m.kd_mahasiswa  NOT IN (SELECT  v.kd_mahasiswa FROM tbl_data_voting as v)
            GROUP BY m.kd_mahasiswa
        ');
    return $data->result();
  }
  //Kondisi data jika sudah milih atau tidak milih
public function getDataTabelBelumVoting($kd_periode){
    $data =  $this->db->query('SELECT "null" as v_waktu , m.nomor_induk , m.nama_mahasiswa, "null" as v_status
            FROM '.$this->table_name2.' as m
            INNER JOIN  '.$this->table_name.' as v
            WHERE m.kd_periode = "'.$kd_periode.'"  AND m.status = "aktif" AND  m.kd_mahasiswa  NOT IN (SELECT  v.kd_mahasiswa FROM tbl_data_voting as v)
            GROUP BY m.kd_mahasiswa
        ');
    return $data->result();
  }
//   tampil detail data voting mahasiswa 
public function getData($id){
    $data =  $this->db->query('SELECT m.m_waktu,m.nama_mahasiswa, m.nomor_induk, m.angkatan, m.validasi, v.v_waktu, p.periode, v.v_status
            FROM '.$this->table_name2.' as m
            INNER JOIN  '.$this->table_name.' as v
            ON m.kd_mahasiswa = v.kd_mahasiswa
            INNER JOIN  '.$this->table_name3.' as p
            ON v.kd_periode = p.kd_periode
            WHERE v.kd_voting = "'.$id.'"
        ');
    return $data->result();
  }
  
//   get data voting mahasiswa per periode 
public function exportDataVotingList(){
            $this->db->select("periode, v_waktu, nama_mahasiswa, angkatan, pilihan, v_status");
			$this->db->from($this->table_name);
            $this->db->join($this->table_name2, 'tbl_data_voting.kd_mahasiswa = tbl_data_mahasiswa.kd_mahasiswa');
			$this->db->join($this->table_name3, 'tbl_data_voting.kd_periode = tbl_data_periode.kd_periode');
            $this->db->where('status','aktif');
            $this->db->where('p_status','aktif');
            $this->db->where('validasi','terverifikasi');
            $query = $this->db->get();
            return $query->result();
}

}
<?php
class M_selengkapnya extends CI_Model{
	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC");
		return $hsl;
	}

	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function get_post_home(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d %M %Y') AS tanggal FROM tbl_tulisan where tulisan_status='1' ORDER BY tulisan_id DESC");
		return $hsl;
	}

	function get_berita($limit, $start){
        $query = $this->db->get('tbl_tulisan', $limit, $start);
        return $query;
    }
    

	// fungsi cari
	private $_table = 'tbl_tulisan';

	public function search($keyword)
	{
		if(!$keyword){
			return null;
		}
		$this->db->like('tulisan_judul', $keyword);
		$this->db->or_like('tulisan_tanggal', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function __construct()
	{
		$this->load->database();
	}
	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from tbl_tulisan where tulisan_judul like '%$cari%' ");
		return $data->result();
	}

}


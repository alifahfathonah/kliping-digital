<?php
class M_rekap extends CI_Model{

	function get_all_rekap(){
		$hsl=$this->db->query("SELECT * FROM tbl_rekap ORDER BY id_rekap DESC");
		return $hsl;
	}
	function simpan_rekap($bulan,$duta,$harianbangsa,$jatimpos,$memorandum,$metro,$pojokkiri,$radar,$suarapublik,$suksesi,$total){
		$hsl=$this->db->query("INSERT INTO tbl_rekap(bulan_rekap,duta,harian_bangsa,jatim_pos,memorandum,metro,pojok_kiri,radar,suara_publik,suksesi,total_berita) values('$bulan','$duta','$harianbangsa','$jatimpos','$memorandum','$metro','$pojokkiri','$radar','$suarapublik','$suksesi','$total')");
		return $hsl;
	}
	function update_rekap($kode,$bulan,$duta,$harianbangsa,$jatimpos,$memorandum,$metro,$pojokkiri,$radar,$suarapublik,$suksesi,$total){
		$hsl=$this->db->query("UPDATE tbl_rekap set bulan_rekap='$bulan',duta='$duta',harian_bangsa='$harianbangsa',jatim_pos='$jatimpos',memorandum='$memorandum',metro='$metro',pojok_kiri='$pojokkiri',radar='$radar',suara_publik='$suarapublik',suksesi='$suksesi',total_berita='$total' where id_rekap='$kode'");
		return $hsl;
	}
	function hapus_rekap($kode){
		$hsl=$this->db->query("DELETE from tbl_rekap where id_rekap='$kode'");
		return $hsl;
	}
	
	function get_rekap_byid($id_rekap){
		$hsl=$this->db->query("SELECT * from tbl_rekap where id_rekap='$id_rekap'");
		return $hsl;
	}

}
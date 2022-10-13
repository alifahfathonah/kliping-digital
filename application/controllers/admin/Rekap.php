<?php
class Rekap extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_rekap');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->m_rekap->get_all_rekap();
		$this->load->view('admin/v_rekap',$x);
	}

	function simpan_rekap(){ 
		$bulan=strip_tags($this->input->post('xbulan'));
		$duta=strip_tags($this->input->post('xduta'));
		$harianbangsa=strip_tags($this->input->post('xharianbangsa'));
		$jatimpos=strip_tags($this->input->post('xjatimpos'));
		$memorandum=strip_tags($this->input->post('xmemorandum'));
		$metro=strip_tags($this->input->post('xmetro'));
		$pojokkiri=strip_tags($this->input->post('xpojokkiri'));
		$radar=strip_tags($this->input->post('xradar'));
		$suarapublik=strip_tags($this->input->post('xsuarapublik'));
		$suksesi=strip_tags($this->input->post('xsuksesi'));
		$total=strip_tags($this->input->post('xtotal'));
		$this->m_rekap->simpan_rekap($bulan,$duta,$harianbangsa,$jatimpos,$memorandum,$metro,$pojokkiri,$radar,$suarapublik,$suksesi,$total);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/rekap');
	}

	function update_rekap(){
		$kode=strip_tags($this->input->post('kode'));
		$bulan=strip_tags($this->input->post('xbulan'));
		$duta=strip_tags($this->input->post('xduta'));
		$harianbangsa=strip_tags($this->input->post('xharianbangsa'));
		$jatimpos=strip_tags($this->input->post('xjatimpos'));
		$memorandum=strip_tags($this->input->post('xmemorandum'));
		$metro=strip_tags($this->input->post('xmetro'));
		$pojokkiri=strip_tags($this->input->post('xpojokkiri'));
		$radar=strip_tags($this->input->post('xradar'));
		$suarapublik=strip_tags($this->input->post('xsuarapublik'));
		$suksesi=strip_tags($this->input->post('xsuksesi'));
		$total=strip_tags($this->input->post('xtotal'));
		$this->m_rekap->update_rekap($kode,$bulan,$duta,$harianbangsa,$jatimpos,$memorandum,$metro,$pojokkiri,$radar,$suarapublik,$suksesi,$total);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/rekap');
	}
	function hapus_rekap(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_rekap->hapus_rekap($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/rekap');
	}
	

}
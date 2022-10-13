<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
        // $this->m_pengunjung->count_visitor();
	}
	function index(){
		$data['data']=$this->m_tulisan->get_post_home();
		$data['album']=$this->m_album->get_all_album();
		$this->load->view('v_home', $data);
	}

}
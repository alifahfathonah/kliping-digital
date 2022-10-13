<?php 
class selengkapnya extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_selengkapnya');
        $this->load->library('pagination');

    } 

    function index(){

        //search
        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('m_selengkapnya');

        $data['search_result'] = $this->m_selengkapnya->search($data['keyword']);
        

        //konfigurasi pagination
        $config['base_url'] = site_url('selengkapnya/index'); //site url
        $config['total_rows'] = $this->db->count_all('tbl_tulisan'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_berita yang ada pada mmodel m_selengkapnya. 
        $data['data'] = $this->m_selengkapnya->get_berita($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('v_selengkapnya',$data);

    }

     public function cari() 
    {
        $this->load->view('v_selengkapnya');
    }
 
    public function hasil()
    {
        $data2['cari'] = $this->m_selengkapnya->cariOrang();
        $this->load->view('v_cari', $data2);
    }


    public function search(){
            $keyword = $this->input->post('keyword');
            $data['selengkapnya']=$this->m_selengkapnya->get_product_keyword($keyword);
            $this->load->view('v_cari',$data);
        }

}
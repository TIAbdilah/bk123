<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('master/berita_model');
        $this->load->model('master/karusel_model');
    }
    
    public function index() {
        $data['page'] = 'public/home';
        //news
        $param_news = array(
            'limit' => 4,
            'offset' => 0
        );
        $data['karusel'] = $this->karusel_model->select_all()->result();
        $data['latest_news'] = $this->berita_model->select_all($param_news)->result();
        $this->load->view('public/home',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
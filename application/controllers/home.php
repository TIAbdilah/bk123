<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('master/berita_model');
    }
    
    public function index() {
        $data['page'] = 'public/home';
        //news
        $param_news = array(
            'limit' => 3,
            'offset' => 0
        );
        $data['latest_news'] = $this->berita_model->select_all($param_news)->result();
        $this->load->view('public/home',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
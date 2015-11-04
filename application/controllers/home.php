<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once(APPPATH . 'controllers/common/format_date.php');
class Home extends CI_Controller {
    
    var $text = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('master/berita_model');
        $this->load->model('master/karusel_model');
        $this->initialize_1();
    }
    
    function initialize_1() {
        $this->text['frmt_date'] = new Format_date();
    }
    
    public function index() {
        $data['text'] = $this->text;
        $data['page'] = 'public/home';
        //news
        $param_news = array(
            'limit' => 2,
            'offset' => 0
        );
        $data['karusel'] = $this->karusel_model->select_all()->result();
        $data['latest_news'] = $this->berita_model->select_all($param_news)->result();
        $this->load->view('public2/home',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
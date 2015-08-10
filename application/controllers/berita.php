<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once(APPPATH . 'controllers/common/format_date.php');

class Berita extends CI_Controller {

    var $text = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('master/content_model');
        $this->load->model('master/berita_model');
        $this->load->library('calendar');
        $this->load->library('my_pagination');

        $this->initialize_1();
    }

    function initialize_1() {

        // calendar sidebar
//        $config = array(
//            'show_next_prev' => TRUE
//        );
//        $this->calendar->initialize($config);
        $this->text['cal'] = $this->calendar->generate();

        //news
        $param_news = array(
            'limit' => 5,
            'offset' => 0
        );
        $this->text['latest_news'] = $this->berita_model->select_all($param_news)->result();
    }

    public function index2() {
        $data['title_page'] = 'List Berita';
        $data['text'] = $this->text;
        $data['format_date'] = new Format_date();
        $data['list_data'] = $this->berita_model->select_all()->result();
        $data['page'] = 'public/berita_agenda/berita/list';
        $this->load->view('public/index', $data);
    }

    public function index($offset = 0) {
        $limit = 5;
        $data['title_page'] = 'List Berita';
        $data['text'] = $this->text;
        $data['format_date'] = new Format_date();
        $param = array(
            'offset' => $offset,
            'limit' => $limit
        );                
        $data['list_data'] = $this->berita_model->select_all($param)->result();

        $config = array();
        $config['base_url'] = base_url().'berita/index';
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 5;
        $config['total_rows'] = $this->berita_model->select_all()->num_rows();
        $this->my_pagination->initialize($config);
        $data['page_link'] = $this->my_pagination->create_links();
        $data['page'] = 'public/berita_agenda/berita/list';
        $this->load->view('public/index', $data);
    }

    public function view($id) {
        $data['title_page'] = 'View Berita';
        $data['text'] = $this->text;
        $data['data'] = $this->berita_model->select_by_field(array('id_berita' => $id))->row();
        $data['page'] = 'public/berita_agenda/berita/view';
        $this->load->view('public/index', $data);
    }

}

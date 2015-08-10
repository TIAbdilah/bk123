<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Publik extends CI_Controller {

    var $text = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('master/content_model');
        $this->load->model('master/berita_model');
        $this->load->library('calendar');

        $this->initialize_1();
    }

    function initialize_1() {

        // calendar sidebar
//        $config = array(
//            'show_next_prev' => FA
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

    public function profil($param) {
        $data['text'] = $this->text;
        switch ($param) {
            case 'about':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'about'))->row();
                break;
            case 'tupoksi':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'tupoksi'))->row();
                break;
            case 'struktur_org':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'struktur_org'))->row();
                break;
            case 'contact':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'contact'))->row();
                break;
        }
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index', $data);
    }

    public function pengaturan($param) {
        $data['text'] = $this->text;
        switch ($param) {
            case 'peraturan':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'peraturan'))->row();
                break;
            case 'pedoman':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'pedoman'))->row();
                break;
        }
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index', $data);
    }

    public function agenda() {
        $data['text'] = $this->text;
        $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'agenda'))->row();
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index', $data);
    }

    public function output_kegiatan($param) {
        $data['text'] = $this->text;
        switch ($param) {
            case 'sppip_rpkpp':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'sppip_rpkpp'))->row();
                break;
            case 'perkotaan':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'perkotaan'))->row();
                break;
            case 'pedesaan':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'pedesaan'))->row();
                break;
            case 'rusunawa':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'rusunawa'))->row();
                break;
            case 'rpip_ris_pnpm':
                $data['data'] = $this->content_model->select_by_field(array('nm_content' => 'rpip_ris_pnpm'))->row();
                break;
        }
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index', $data);
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['data_kumuh'] = $this->kumuh_model->select_all()->result();
        if ($this->session->userdata('role') != 'super admin') {
            $data['page_content'] = 'admin/master/home/list_filter';
        } else {
            $data['page_content'] = 'admin/master/home/list';
        }
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

}

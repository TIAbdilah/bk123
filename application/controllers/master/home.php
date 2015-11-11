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
        
         if ($this->session->userdata('role') != 'super admin') {
            $modul = $this->session->userdata('modul');
            if ($modul == 'Perkotaan') {
                $data['page_content'] = 'admin/master/home/list_filter';
            } else if ($modul == 'Perdesaan') {
                $data['page_content'] = 'admin/master/home/list_filter_perdesaan';
            }
            $param = array(
                'substr(kode_daerah, 0, 2)' => substr($this->session->userdata('role_propinsi'), 0, 2)
            );
            $data['data_kumuh'] = $this->kumuh_model->select_by_feild($param)->result();
        } else {
            $data['page_content'] = 'admin/master/home/list';
            $data['data_kumuh'] = $this->kumuh_model->select_all()->result();
        }
        
        

        $count_empty_eks = 0;
        $count_empty_per = 0;
        $count_empty_pen = 0;
        $count_check_eks = 0;
        $count_check_per = 0;
        $count_check_pen = 0;
        foreach ($data['data_kumuh'] as $data) {
            if ($data->eks == 1) {
                $count_check_eks += 1;
            } else {
                $count_empty_eks += 1;
            }


            if ($data->per == 1) {
                $count_check_per += 1;
            } else {
                $count_empty_per += 1;
            }

            if ($data->pen == 1) {
                $count_check_pen += 1;
            } else {
                $count_empty_pen += 1;
            }
        }
        
        $data['count_empty_eks'] = $count_check_eks;
        $data['count_empty_per'] = $count_empty_per;
        $data['count_empty_pen'] = $count_empty_pen;
        $data['count_check_eks'] = $count_check_eks;
        $data['count_check_per'] = $count_check_per;
        $data['count_check_pen'] = $count_check_pen;

       
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function perdesaan() {
        echo 'perdesaan';
    }

}

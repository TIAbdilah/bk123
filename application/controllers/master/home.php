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
            if ($modul == 'perkotaan') {
                $data['page_content'] = 'admin/master/home/list_filter';
            } else if ($modul == 'perdesaan') {
                $data['page_content'] = 'admin/master/home/list_filter_perdesaan';
            }
            $param = array(
                'substr(kode_daerah, 1, 2)=' => substr($this->session->userdata('role_propinsi'), 0, 2)
            );
            $total_kawasan = $this->kumuh_model->select_by_field($param)->num_rows();
//            echo $total_kawasan;
        } else {
            $data['page_content'] = 'admin/master/home/list';
            $total_kawasan = $this->kumuh_model->select_all()->num_rows();
        }

//        echo $this->session->userdata('bagian');

        $data['count_check_eks'] = $this->kumuh_detail_model->select_by_field(array('kategori' => 'eksisting'))->num_rows();
        $data['count_check_per'] = $this->kumuh_detail_model->select_by_field(array('kategori' => 'perencanaan'))->num_rows();
        $data['count_check_pen'] = $this->kumuh_detail_model->select_by_field(array('kategori' => 'penanganan'))->num_rows();
//echo $data['count_check_pen'];
        $data['count_empty_eks'] = $total_kawasan - $data['count_check_eks'];
        $data['count_empty_per'] = $total_kawasan - $data['count_check_per'];
        $data['count_empty_pen'] = $total_kawasan - $data['count_check_pen'];

        $bagian = trim($this->session->userdata('bagian'), ' ');
        if ($bagian == 'eksisting') {
            $data['count_empty'] = $data['count_empty_eks'];
            $data['count_check'] = $data['count_check_eks'];
        } else if ($bagian == 'perencanaan') {
            $data['count_empty'] = $data['count_empty_per'];
            $data['count_check'] = $data['count_check_per'];
        } else if ($bagian == 'penanganan') {
            $data['count_empty'] = $data['count_empty_pen'];
            $data['count_check'] = $data['count_check_pen'];
        }


        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function perdesaan() {
        echo 'perdesaan';
    }

    public function perdesaan2() {
        $this->load->view('admin/index');
    }

}

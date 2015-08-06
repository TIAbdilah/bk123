<?php

//Created By    : Taufik Ismail A, S.Kom
//Updated By    : Taufik Ismail A, S.Kom
//Created Date  : 13 Apr 2015
//Updated Date  : 13 Apr 2015
//Projet        : E-SATKER

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daerah_kumuh extends MY_Controller {

    
    function __construct() {
        parent::__construct();
    }

    public function view() {
        $data = null;
        $data['data_detail_eks'] = null;
        $data['data_detail_per'] = null;
        $data['data_detail_pen'] = null;
        $this->load->view('admin/report/view1', $data);
    }

    public function print_report() {
        $this->load->helper('to_pdf');
        $data = null;
        $data['data_detail_eks'] = null;
        $data['data_detail_per'] = null;
        $data['data_detail_pen'] = null;
        $html = $this->load->view('admin/report/view1', $data, TRUE);
        pdf_create($html, "landscape", "Bukti Perjalanan Dinas ".date('mdy'), true,'a3');
    }
}

?>
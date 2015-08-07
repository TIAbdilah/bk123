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
        $data['text'] = $this->text;
        $this->load->view('admin/report/view1', $data);
    }

    public function print_report($id) {
        $this->load->helper('to_pdf');
        $data = null;
        $data['data_detail_eks'] = $this->kumuh_detail_model->select_by_field(array('id_kumuh_detail' => $id))->row();
        $kawasan = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $data['data_detail_eks']->id_kaw_kumuh))->row();
        $data['kota'] = $this->view_kabupaten_model->select_by_field(array('kode_daerah' => $kawasan->kode_daerah))->row();
        $data['text'] = $this->text;
        $html = $this->load->view('admin/report/view1', $data, TRUE);
        pdf_create($html, "landscape", "Profil Kawasan Kumuh ".date('mdy'), true,"a3");
    }
}

?>
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

class Kumuh extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'LIST';
        
        if ($this->session->userdata('role') != 'super admin') {
            $data['page_content'] = 'admin/master_peta/kumuh/list_filter';
            $param = array(
                'substr(kode_daerah, 1, 2) = ' => substr($this->session->userdata('role_propinsi'), 0, 2)
            );
            $data['list_data'] = $this->kumuh_model->select_by_field($param)->result();
        } else {
            $data['page_content'] = 'admin/master_peta/kumuh/list';
            $data['list_data'] = $this->kumuh_model->select_all()->result();
        }
        $data['text'] = $this->text;
        $data['test'] = $this;
        $this->load->view('admin/index', $data);
    }    
    
    public function check_detail($id_kaw, $kat){
        $x = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh'=>$id_kaw, 'kategori'=>$kat))->num_rows();
//        $x = 123;
        return $x;
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id))->row();
        $data['data_indikator'] = $this->indikator_model->select_by_field(array('modul' => 'perkotaan'))->result();
        $data['data_detail_eks'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'eksisting'))->row_array();
        $data['data_detail_per'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'perencanaan'))->row_array();
        $data['data_detail_pen'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'penanganan'))->row_array();

//        print_r($data['data_detail_eks']);
        //peta
        $config['center'] = '-0.664934, 118.302096';
        $config['zoom'] = '4';
        $config['map_type'] = 'ROADMAP';
//        if ($data['data_detail_eks'] != null && $data['data_detail_eks']['kmz_file']) {
//            $config['kmlLayerURL'] = 'http://ciptakarya.pu.go.id/bangkim/assets/admin/img/kmz/' . $data['data_detail_eks']['kmz_file'];
//        }
//        if ($data['data_detail_per'] != null && $data['data_detail_per']['kmz_file']) {
//            $config['kmlLayerURL'] = 'http://ciptakarya.pu.go.id/bangkim/assets/admin/img/kmz/' . $data['data_detail_per']['kmz_file'];
//        }
//        if ($data['data_detail_pen'] != null && $data['data_detail_pen']['kmz_file']) {
//            $config['kmlLayerURL'] = 'http://ciptakarya.pu.go.id/bangkim/assets/admin/img/kmz/' . $data['data_detail_pen']['kmz_file'];
//        }
//        $config['kmlLayerURL'] = 'http://ciptakarya.pu.go.id/bangkim/assets/admin/img/kmz/' . 'kml_eksi_100.kml';
        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();

        $data['page_content'] = 'admin/master_peta/kumuh/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/kumuh/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['data'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id))->row();
        $data['page_content'] = 'admin/master_peta/kumuh/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nm_kawasan'] = $this->input->post('inpNamaKawasan');
        $data['kode_daerah'] = $this->input->post('inpKodeDaerah');
        $data['kecamatan'] = $this->input->post('inpKecamatan');

        //process
        if ($action == 'add') {
            // add    
            $this->kumuh_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->kumuh_model->edit($data, array('id_kaw_kumuh' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/kumuh');
    }

    public function delete($id = null) {
        $this->kumuh_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/kumuh');
    }

}

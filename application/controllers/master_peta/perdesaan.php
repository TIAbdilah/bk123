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

class Perdesaan extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($kode_daerah = null) {
        $data['title_page'] = 'LIST';
        $data['list_data'] = $this->perdesaan_model->select_all()->result();
        if($this->session->userdata('role') != 'super admin'){
            $data['page_content'] = 'admin/master_peta/perdesaan/list_filter';
        }else{
            $data['page_content'] = 'admin/master_peta/perdesaan/list';
        }
        
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->perdesaan_model->select_by_field(array('id_perdesaan' => $id))->row();
        $data['data_indikator'] = $this->indikator_model->select_by_field(array('modul'=>'perdesaan'))->result();
        $data['data_detail_eks'] = $this->perdesaan_detail_model->select_by_field(array('id_perdesaan' => $id, 'kategori' => 'eksisting'))->row_array();
        $data['data_detail_per'] = $this->perdesaan_detail_model->select_by_field(array('id_perdesaan' => $id, 'kategori' => 'perencanaan'))->row_array();
        $data['data_detail_pen'] = $this->perdesaan_detail_model->select_by_field(array('id_perdesaan' => $id, 'kategori' => 'penanganan'))->row_array();
        $data['page_content'] = 'admin/master_peta/perdesaan/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/perdesaan/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';        
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['data'] = $this->perdesaan_model->select_by_field(array('id_perdesaan' => $id))->row();        
        $data['page_content'] = 'admin/master_peta/perdesaan/edit';
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
            $this->perdesaan_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->perdesaan_model->edit($data, array('id_perdesaan' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/perdesaan');
    }

    public function delete($id = null) {
        $this->perdesaan_model->delete(array('id_perdesaan' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/perdesaan');
    }

}

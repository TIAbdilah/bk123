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

class Perbatasan extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'List Data Perbatasan';
        $data['list_data'] = $this->perbatasan_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/perbatasan/list';
        $data['text'] = $this->text;  
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['perbatasan'] = $this->perbatasan_model->select_by_field(array('id_perbatasan'=>$id))->row();
        $data['perbatasan_eks'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'eksisting'))->row_array();
        $data['perbatasan_pen'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'penanganan'))->row_array();
        $data['perbatasan_per'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'perencanaan'))->row_array();
        $data['page_content'] = 'admin/master_peta/perbatasan/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['page_content'] = 'admin/master_peta/perbatasan/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_tingkat_daerah'] = $this->listcode_model->select_by_field(array('list_name' => 'tingkat_daerah'))->result();
        $data['data'] = $this->perbatasan_model->select_by_field(array('kode_daerah' => $id))->row();
        $data['page_content'] = 'admin/master_peta/perbatasan/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nama_kawasan'] = $this->input->post('inpNamaKawasan');
        $data['luas_kawasan'] = $this->input->post('inpLuasKawasan');
        
        //process
        if ($action == 'add') {
            // add    
            $this->perbatasan_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->perbatasan_model->edit($data, array('id_daerah' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/perbatasan');
    }

    public function delete($id = null) {
        $this->perbatasan_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/perbatasan');
    }

}


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

class Perbatasan_detail extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function view($id = null) {
        
    }

    public function add($id = null, $kategori = null) {
        $perbatasan = $this->perbatasan_model->select_by_field(array('id_perbatasan' => $id))->row();
        $data['title_page'] = 'ADD ( '.$perbatasan->nama_kawasan.' | '.$kategori.' )';
        $data['kategori'] = $kategori;
        $data['id_perbatasan'] = $id;
        $data['page_content'] = 'admin/master_peta/perbatasan_detail/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null, $kategori = null) {
        $perbatasan = $this->perbatasan_model->select_by_field(array('id_perbatasan' => $id))->row();
        $data['title_page'] = 'EDIT ( '.$perbatasan->nama_kawasan.' | '.$kategori.' )';
        $data['data'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan' => $id, 'kategori' => $kategori))->row();
        $data['page_content'] = 'admin/master_peta/perbatasan_detail/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['isu_strategis'] = $this->input->post('inpIsu');

        //process
        if ($action == 'add') {
            // add    
            $data['id_perbatasan'] = $this->input->post('inpIdPerbatasan');
            $data['kategori'] = $this->input->post('inpKategori');
            $this->perbatasan_detail_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->perbatasan_detail_model->edit($data, array('id_perb_detail' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/perbatasan/');
    }

    public function delete($id = null) {
        $this->perbatasan_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/perbatasan');
    }

}

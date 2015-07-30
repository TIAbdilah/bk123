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

    public function index($kode_daerah = null) {
        $data['title_page'] = 'LIST';
        $data['list_data'] = $this->kumuh_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/kumuh/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id))->row();
        $data['data_kelurahan'] = $this->view_kelurahan_model->select_by_field(array('kode_daerah' => $data['data']->kode_daerah))->row();
        $data['data_detail_eks'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'eksisting'))->row();
        $data['data_detail_per'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'perencanaan'))->row();
        $data['data_detail_pen'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'penanganan'))->row();
        $data['page_content'] = 'admin/master_peta/kumuh/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_kelurahan'] = $this->view_kabupaten_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/kumuh/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';        
        $data['SIList_kelurahan'] = $this->view_kelurahan_model->select_all()->result();
        $data['data'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id))->row();        
        $data['page_content'] = 'admin/master_peta/kumuh/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nm_kawasan'] = $this->input->post('inpNamaKawasan');
        $data['kode_daerah'] = $this->input->post('inpKodeDaerah');
        $data['luas_kawasan'] = $this->input->post('inpLuasKawasan');
        $data['jumlah_kk'] = $this->input->post('inpJmlKk');
        $data['jumlah_rtlh'] = $this->input->post('inpJmlRtlh');
        
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

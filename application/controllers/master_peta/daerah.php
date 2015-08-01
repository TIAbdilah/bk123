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

class Daerah extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($kode_daerah = null) {
        $data['title_page_1'] = 'List Data Daerah';
        $data['title_page'] = 'List Data Daerah';

        switch (strlen($kode_daerah)) {
            case 8 :
                //kelurahan / desa
                $data['data_kecamatan'] = $this->daerah_model->select_by_field(array('kode_daerah' => $kode_daerah))->row();
                $data['title_page_1'] .= ' ( Kecamatan ' . $data['data_kecamatan']->nm_daerah . ' )';
                $data['data_kabupaten'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($kode_daerah, 0, 5)))->row();
                $data['data_propinsi'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($kode_daerah, 0, 2)))->row();
                $data['list_data'] = $this->daerah_model->select_by_field(array('left(kode_daerah,8)' => $kode_daerah, 'length(kode_daerah)' => 13))->result();
                $data['kategori'] = "kelurahan / desa";
//                $data['page_content'] = 'admin/master_peta/daerah/list_kel_des';
                break;
            case 5 :
                //kecamatan
                $data['data_kabupaten'] = $this->daerah_model->select_by_field(array('kode_daerah' => $kode_daerah))->row();
                $data['title_page_1'] .= ' ( Kabupaten ' . $data['data_kabupaten']->nm_daerah . ' )';
                $data['data_propinsi'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($kode_daerah, 0, 2)))->row();
                $data['list_data'] = $this->daerah_model->select_by_field(array('left(kode_daerah,5)' => $kode_daerah, 'kategori' => 'kecamatan'))->result();
                $data['kategori'] = "kecamatan";
//                $data['page_content'] = 'admin/master_peta/daerah/list_kec';
                break;
            case 2 :
                //kabupaten
                $data['data_propinsi'] = $this->daerah_model->select_by_field(array('kode_daerah' => $kode_daerah))->row();
                $data['title_page_1'] .= ' ( Propinsi ' . $data['data_propinsi']->nm_daerah . ' )';
                //$data['list_data'] = $this->daerah_model->select_by_field(array('left(kode_daerah,2)' => $kode_daerah, 'kategori' => 'kabupaten / kota'))->result();
                $data['list_data'] = $this->view_kabupaten_model->select_by_field(array('left(kode_daerah,2)' => $kode_daerah))->result();
                $data['kategori'] = "kabupaten / kota";
//                $data['page_content'] = 'admin/master_peta/daerah/list_kab';
                break;
            default :                
                $data['list_data'] = $this->daerah_model->select_by_field(array('kategori' => 'propinsi'))->result();
                $data['kategori'] = "propinsi";
                break;
        }
        $data['page_content'] = 'admin/master_peta/daerah/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data_kecamatan'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($id, 0, 8)))->row();
        $data['data_kabupaten'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($id, 0, 5)))->row();
        $data['data_propinsi'] = $this->daerah_model->select_by_field(array('kode_daerah' => substr($id, 0, 2)))->row();
        $data['data'] = $this->daerah_model->select_by_field(array('kode_daerah' => $id))->row();
        $data['page_content'] = 'admin/master_peta/daerah/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_propinsi'] = $this->daerah_model->select_by_field(array('kategori' => 'propinsi'))->result();
        $data['SIList_kabupaten'] = $this->daerah_model->select_by_field(array('kategori' => 'kabupaten'))->result();
        $data['SIList_kecamatan'] = $this->daerah_model->select_by_field(array('kategori' => 'kecamatan'))->result();
        $data['SIList_tingkat_daerah'] = $this->listcode_model->select_by_field(array('list_name' => 'tingkat_daerah'))->result();
        $data['page_content'] = 'admin/master_peta/daerah/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_tingkat_daerah'] = $this->listcode_model->select_by_field(array('list_name' => 'tingkat_daerah'))->result();
        $data['data'] = $this->daerah_model->select_by_field(array('kode_daerah' => $id))->row();
        $data['page_content'] = 'admin/master_peta/daerah/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['kategori'] = $this->input->post('inpTingkat');
        switch ($data['kategori']) {
            case 'propinsi':
                $data['kode_daerah'] = $this->input->post('inpKodeDaerah_prop');
                $data['nm_daerah'] = $this->input->post('inpNamaDaerah_prop');
                break;
            case 'kabupaten / kota':
                $data['kode_daerah'] = $this->input->post('inpKodeDaerah_kab');
                $data['nm_daerah'] = $this->input->post('inpNamaDaerah_kab');
                break;
            case 'kecamatan':
                $data['kode_daerah'] = $this->input->post('inpKodeDaerah_kec');
                $data['nm_daerah'] = $this->input->post('inpNamaDaerah_kec');
                break;
            case 'kelurahan':
                $data['kode_daerah'] = $this->input->post('inpKodeDaerah_kel');
                $data['nm_daerah'] = $this->input->post('inpNamaDaerah_kel');
                break;
            case 'desa':
                $data['kode_daerah'] = $this->input->post('inpKodeDaerah_des');
                $data['nm_daerah'] = $this->input->post('inpNamaDaerah_des');
                break;
            default:
                break;
        }


        //process
        if ($action == 'add') {
            // add    
            $this->daerah_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
//            $data['update_dt'] = date('Y-m-d');
            $data['kode_daerah'] = $this->input->post('inpKodeDaerah');
            $data['nm_daerah'] = $this->input->post('inpNamaDaerah');
            $this->daerah_model->edit($data, array('id_daerah' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/daerah');
    }

    public function delete($id = null) {
        $this->daerah_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/daerah');
    }

}

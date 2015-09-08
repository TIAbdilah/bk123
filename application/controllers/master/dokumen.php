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

class Dokumen extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->doc_model->select_all()->result();
        $data['page_content'] = 'admin/master/dokumen/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->doc_model->select_by_field(array('id_dokumen' => $id))->row();
        $data['page_content'] = 'admin/master/dokumen/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_tipe_dokumen'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_dokumen'))->result();
        $data['page_content'] = 'admin/master/dokumen/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['data'] = $this->doc_model->select_by_field(array('id_dokumen' => $id))->row();
        $data['page_content'] = 'admin/master/dokumen/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nm_doc'] = $this->upload_image(array('tipe'=>'*', 'inp_name'=>'inpDok'));
        $data['kategori'] = $this->input->post('inpKategori');     
        $data['thumb'] = $this->upload_image(array('tipe'=>'thumb', 'inp_name'=>'inpThumb'));

        //process
        if ($action == 'add') {
            // add    
            $this->doc_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit  
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/dokumen');
    }

    public function delete($id = null) {
       $doc = $this->doc_model->select_by_field(array('id_doc' => $id))->row();

        //delete file foto
        $file = FCPATH . 'assets/admin/dokumen/' . $doc->nm_doc;
        unlink($file);
        $file_thumb = FCPATH . 'assets/admin/dokumen/thumb/' . $doc->thumb;
        unlink($file_thumb);

        $this->doc_model->delete(array('id_doc' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master/dokumen');
    }
    
    public function upload_image($param) {
        $config['overwrite'] = TRUE;
        if($param['tipe'] == 'thumb'){
            $config['allowed_types'] ='jpg|jpeg';
            $config['upload_path']="./assets/admin/doc/thumb/";
            $config['max_size'] = '1024';
        } else {
            $config['allowed_types'] ='pdf|doc|docx|xls|xlsx';
            $config['upload_path']="./assets/admin/doc/";
            $config['max_size'] = '15000';
        }
        $this->upload->initialize($config);
        if (!empty($_FILES[$param['inp_name']]['name']) 
                && $_FILES[$param['inp_name']]['name'] != '' 
                && $_FILES[$param['inp_name']]['name'] != null) {
            if ($this->upload->do_upload($param['inp_name'])) {
                $dok = $this->upload->data();

                //thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = $dok['full_path'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 140;
                $config['height'] = 140;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                return $dok['file_name'];
            } else {
                $eror = $this->upload->display_errors();
                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $eror, 'error'));
                redirect('master/dokumen/');
            }
        } else {
            return '';
        }
    }

}

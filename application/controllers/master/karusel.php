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

class Karusel extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->karusel_model->select_all()->result();
        $data['page_content'] = 'admin/master/karusel/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->doc_model->select_by_field(array('id_dokumen' => $id))->row();
        $data['page_content'] = 'admin/master/karusel/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_tipe_dokumen'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_dokumen'))->result();
        $data['page_content'] = 'admin/master/karusel/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT (Karusel ' . $id . ')';
        $data['data'] = $this->karusel_model->select_by_field(array('id_karusel' => $id))->row();
        $data['page_content'] = 'admin/master/karusel/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var        
        $data['judul'] = $this->input->post('inpJudul');
        $data['isi'] = $this->input->post('inpIsi');
        $gbr = $this->upload_image(array('id' => $id, 'inp_name' => 'inpGbr'));
        if ($gbr != '') {
            $data['gambar'] = $gbr;
        }

        //process
        if ($action == 'add') {
            // add    
        } elseif ($action == 'edit') {
            // edit  
            $this->karusel_model->edit($data, array('id_karusel'=>$id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/karusel');
    }

    public function delete($id = null) {

    }

    public function upload_image($param) {
        $config['overwrite'] = TRUE;
        $config['file_name'] = 'karusel_' . $param['id'];
        $config['allowed_types'] = 'jpg|jpeg';
        $config['upload_path'] = "./assets/admin/img/news/";
        $config['max_size'] = '2048';
        $this->upload->initialize($config);
        if (!empty($_FILES[$param['inp_name']]['name']) && $_FILES[$param['inp_name']]['name'] != '' && $_FILES[$param['inp_name']]['name'] != null) {
            if ($this->upload->do_upload($param['inp_name'])) {
                $dok = $this->upload->data();

                //thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = $dok['full_path'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 390;
                $config['height'] = 327;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                return $dok['file_name'];
            } else {
                $eror = $this->upload->display_errors();
                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $eror, 'error'));
                redirect('master/karusel/');
            }
        } else {
            return '';
        }
    }

}

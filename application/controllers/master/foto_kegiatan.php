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

class Foto_kegiatan extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->foto_kegiatan_model->select_all()->result();
        $data['page_content'] = 'admin/master/foto_kegiatan/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->foto_kegiatan_model->select_by_field(array('id_foto_kegiatan' => $id))->row();
        $data['page_content'] = 'admin/master/foto_kegiatan/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['page_content'] = 'admin/master/foto_kegiatan/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['data'] = $this->foto_kegiatan_model->select_by_field(array('id_foto' => $id))->row();
        $data['page_content'] = 'admin/master/foto_kegiatan/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var        
        $data['kategori'] = $this->input->post('inpKategori');
        $img = $this->upload_image($data['kategori']);
        if ($img != '') {
            $data['nm_foto'] = $img;
        }

        //process
        if ($action == 'add') {
            // add    
            $this->foto_kegiatan_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
//                $data['update_dt'] = date('Y-m-d');
            $this->foto_kegiatan_model->edit($data, array('id_foto' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/foto_kegiatan');
    }

    public function delete($id = null) {
        $foto = $this->foto_kegiatan_model->select_by_field(array('id_foto' => $id))->row();

        //delete file foto
        $file = FCPATH . 'assets/admin/img/foto_kegiatan/' . $foto->nm_foto;
        unlink($file);
        $file_thumb = str_replace('.', '_thumb.', $file);
        unlink($file_thumb);

        $this->foto_kegiatan_model->delete(array('id_foto' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master/foto_kegiatan');
    }

    public function upload_image($kategori) {
        $config = array(
            'overwrite' => TRUE,
            'file_name' => $kategori . '_' . mt_rand(1, 100),
            'max_size' => '2048',
            'allowed_types' => 'jpg|jpeg',
            'upload_path' => "./assets/admin/img/foto_kegiatan/"
        );
        $this->upload->initialize($config);
        if (!empty($_FILES['inpGbr']['name']) && $_FILES['inpGbr']['name'] != '' && $_FILES['inpGbr']['name'] != null) {
            if ($this->upload->do_upload('inpGbr')) {
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
                redirect('master/foto_kegiatan/');
            }
        } else {
            return '';
        }
    }

}

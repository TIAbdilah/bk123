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

class Kumuh_detail extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($kode_daerah = null) {
        
    }

    public function view($id = null) {
        
    }

    public function add($kategori = null, $id_kaw_kumuh = null) {
        $data['title_page'] = 'ADD';
        $data['kategori'] = $kategori;
        $data['id_kaw_kumuh'] = $id_kaw_kumuh;
        $data['kaw_kumuh'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id_kaw_kumuh))->row();
        $data['data_indikator'] = $this->indikator_model->select_by_field(array('modul'=>'perkotaan'))->result();
        $data['page_content'] = 'admin/master_peta/kumuh_detail/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($kategori, $id = null) {
        $data['title_page'] = 'EDIT';
        $data['kategori'] = $kategori;
        $data['data_indikator'] = $this->indikator_model->select_by_field(array('modul'=>'perkotaan'))->result();
        $data['data'] = $this->kumuh_detail_model->select_by_field(array('id_kumuh_detail' => $id))->row_array();
        $data['id_kaw_kumuh'] = $data['data']['id_kaw_kumuh'];
        $data['kaw_kumuh'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $data['id_kaw_kumuh']))->row();
        $data['page_content'] = 'admin/master_peta/kumuh_detail/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process1($action, $id = null) {

        $data['id_kaw_kumuh'] = $this->input->post('inpIdKawKumuh');
        $data['kategori'] = $this->input->post('inpKategori');

        $data['luas_kawasan'] = $this->input->post('inpLuasKawasan');
        $data['jumlah_kk'] = $this->input->post('inpJmlKK');
        $data['jumlah_rtlh'] = $this->input->post('inpJmlRTLH');

        $kmz_file = $this->upload_image(array('indikator_name' => 'kml_' . substr($data['kategori'], 0, 4), 'input' => 'inpKmlFile', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        if ($kmz_file != '') {
            $data['kmz_file'] = $kmz_file;
        }

        $peta_file = $this->upload_image(array('indikator_name' => 'peta_' . substr($data['kategori'], 0, 4), 'input' => 'inpPeta', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'peta'));
        if ($peta_file != '') {
            $data['peta_file'] = $peta_file;
        }

        $sk_file = $this->upload_image(array('indikator_name' => 'sk_' . substr($data['kategori'], 0, 4), 'input' => 'inpSk', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'sk'));
        if ($sk_file != '') {
            $data['sk_file'] = $sk_file;
        }

        $data_indikator = $this->indikator_model->select_all()->result();
        foreach ($data_indikator as $dt_ind) {
            $foto_file = '';
            if (substr($dt_ind->id, 0, 1) < 8) {
                $data[$dt_ind->field_name . '_prsn'] = $this->input->post('inp_' . $dt_ind->field_name . '_prsn');
                $data[$dt_ind->field_name . '_kt'] = $this->input->post('inp_' . $dt_ind->field_name . '_kt');
                $foto_file = $this->upload_image(array('indikator_name' => $dt_ind->field_name . '_' . substr($data['kategori'], 0, 4).'_ft', 'input' => 'inp_' . $dt_ind->field_name . '_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
                if ($foto_file != '') {
                    $data[$dt_ind->field_name . '_foto'] = $foto_file;
                }
                 $foto_file2 = $this->upload_image(array('indikator_name' => $dt_ind->field_name . '_' . substr($data['kategori'], 0, 4).'_ft2', 'input' => 'inp_' . $dt_ind->field_name . '_ft2', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
                if ($foto_file2 != '') {
                    $data[$dt_ind->field_name . '_foto'] = $foto_file2;
                }
                 $foto_file3 = $this->upload_image(array('indikator_name' => $dt_ind->field_name . '_' . substr($data['kategori'], 0, 4).'_ft3', 'input' => 'inp_' . $dt_ind->field_name . '_ft3', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
                if ($foto_file3 != '') {
                    $data[$dt_ind->field_name . '_foto'] = $foto_file3;
                }
            } if (substr($dt_ind->id, 0, 1) >= 8) {
                $data[$dt_ind->field_name . '_prsn'] = $this->input->post('inp_' . $dt_ind->field_name . '_prsn');
                $data[$dt_ind->field_name . '_kt'] = $this->input->post('inp_' . $dt_ind->field_name . '_kt');
            }
        }

        for ($i = 1; $i < 8; $i++) {
            $point_line = $this->upload_image(array('indikator_name' => 'point_line_' . substr($data['kategori'], 0, 4) . '_' . $i, 'input' => 'inp_point_line_' . $i, 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
            if ($point_line != '') {
                $data['point_line_' . $i] = $point_line;
            }
            $vid = $this->upload_image(array('indikator_name' => 'vid_kawasan_' . substr($data['kategori'], 0, 4) . '_' . $i, 'input' => 'inpVideo_' . $i, 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'video'));
            if ($vid != '') {
                $data['vid_kawasan_' . $i] = $vid;
            }
        }
        
        //        process
        if ($action == 'add') {
            // add    
            $this->kumuh_detail_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->kumuh_detail_model->edit($data, array('id_kumuh_detail' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master_peta/kumuh/view/' . $data['id_kaw_kumuh']);
    }

    public function delete($id = null) {
        $this->kumuh_detail_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/kumuh');
    }

    public function upload_image($param) {
        $config = array(
            'overwrite' => TRUE,
            'file_name' => $param['indikator_name'] . '_' . $param['id_kaw_kumuh']
        );
        //file size
        if($param['tipe_file'] == 'image' 
                || $param['tipe_file'] == 'peta'
                || $param['tipe_file'] == 'kmz'){
            $config['max_size'] = '2048';
        } else if($param['tipe_file'] == 'video'){
            $config['max_size'] = '15000';
        } else if($param['tipe_file'] == 'sk'){
            $config['max_size'] = '15000';
        }
            
        //file location and type    
        if ($param['tipe_file'] == 'image') {
            $config['allowed_types'] = "jpg|jpeg";
            $config['upload_path'] = "./assets/admin/img/foto_kawasan/";
        } else if ($param['tipe_file'] == 'sk') {
            $config['allowed_types'] = "pdf";
            $config['upload_path'] = "./assets/admin/img/sk/";
        } else if ($param['tipe_file'] == 'peta') {
            $config['allowed_types'] = "jpg|jpeg";
            $config['upload_path'] = "./assets/admin/img/peta/";
        } else if ($param['tipe_file'] == 'kmz') {
            $config['allowed_types'] = "kmz|kml";
            $config['upload_path'] = "./assets/admin/img/kmz/";
        } else if ($param['tipe_file'] == 'video') {
            $config['allowed_types'] = "mp4|avi";
            $config['upload_path'] = "./assets/admin/img/video/";
        }
        
        $this->upload->initialize($config);
        if (!empty($_FILES[$param['input']]['name']) 
                && $_FILES[$param['input']]['name'] != '' 
                && $_FILES[$param['input']]['name'] != null) {
            
            if ($this->upload->do_upload($param['input'])) {
                $dok = $this->upload->data();
                if ($param['tipe_file'] == 'image') {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $dok['full_path'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 140;
                    $config['height'] = 140;

                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                }
                return $dok['file_name'];
            } else {
                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', 'error-upload-image'));

                redirect('master_peta/kumuh/view/' . $param['id_kaw_kumuh']);
            }
        } else {
            return '';
        }
    }

}

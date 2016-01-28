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

class Pulau_kecil_terluar extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'List Data Pulau Kecil Terluar';
        $data['list_data'] = $this->perbatasan_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/pulau_kecil_terluar/list';
        $data['text'] = $this->text;  
        $this->load->view('admin/index', $data);
    }
    
    public function index1() {
        $data['title_page'] = 'List Data Pulau Kecil Terluar';
        
        $config['center'] = '-0.664934, 118.302096';
        $config['zoom'] = '5';
        $config['map_type'] = 'ROADMAP';
        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();
        
        $data['page_content'] = 'admin/master_peta/pulau_kecil_terluar/map';
        $data['text'] = $this->text;  
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
//        $data['perbatasan_eks'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'eksisting'))->row_array();
//        $data['perbatasan_pen'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'penanganan'))->row_array();
//        $data['perbatasan_per'] = $this->perbatasan_detail_model->select_by_field(array('id_perbatasan'=>$id, 'kategori'=>'perencanaan'))->row_array();
        
         
        $config['center'] = '-0.664934, 118.302096';
        $config['zoom'] = '4';
        $config['map_type'] = 'ROADMAP';
        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();
        
        $data['page_content'] = 'admin/master_peta/pulau_kecil_terluar/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
//        $data['SIList_propinsi'] = $this->perbatasan_model->select_by_field(array('kategori' => 'propinsi'))->result();
//        $data['SIList_kabupaten'] = $this->perbatasan_model->select_by_field(array('kategori' => 'kabupaten'))->result();
//        $data['SIList_kecamatan'] = $this->perbatasan_model->select_by_field(array('kategori' => 'kecamatan'))->result();
//        $data['SIList_tingkat_daerah'] = $this->listcode_model->select_by_field(array('list_name' => 'tingkat_daerah'))->result();
        $data['page_content'] = 'admin/master_peta/pulau_kecil_terluar/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_tingkat_daerah'] = $this->listcode_model->select_by_field(array('list_name' => 'tingkat_daerah'))->result();
        $data['data'] = $this->perbatasan_model->select_by_field(array('kode_daerah' => $id))->row();
        $data['page_content'] = 'admin/master_peta/pulau_kecil_terluar/edit';
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

        redirect('master_peta/pulau_kecil_terluar');
    }

    public function delete($id = null) {
        $this->perbatasan_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/pulau_kecil_terluar');
    }

    public function populateKecamatan() {
        $kabupaten = $this->input->post('kode_kab', TRUE);
//        $cek = 'Bakongan,Kluet Utara';
        $kec = $this->view_kecamatan_model->select_by_field(array('left(kode_daerah,5)' => $kabupaten))->result();
        $output = "";
        if ($kec) {
            foreach ($kec as $row) {
//                if ($row->nm_daerah == $cek) {
//                    $c = 'checked';
//                } else {
//                    $c = '';
//                }
                $output .= '<span class="form-control-static col-lg-3">'
                        . '<input id="inpKec" name="inpKec[]" value="' . $row->nm_daerah . '" type="checkbox" > '
                        . $row->nm_daerah
                        . '</span>';
            }
            $arr[0] = $output;
        } else {
            $output .= 'Kabupaten belum dipilih';
            $arr[0] = $output;
        }

        echo json_encode($arr);
    }

}


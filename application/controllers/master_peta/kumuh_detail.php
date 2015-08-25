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
//        $data['title_page'] = 'LIST';
//        $data['list_data'] = $this->kumuh_model->select_all()->result();
//        $data['page_content'] = 'admin/master_peta/kumuh/list';
//        $data['text'] = $this->text;
//        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
//        $data['title_page'] = 'VIEW';
//        $data['data'] = $this->kumuh_model->select_by_field(array('id_kaw_kumuh' => $id))->row();
//        $data['data_detail_eks'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'eksisting'))->row();
//        $data['data_detail_per'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'perencanaan'))->row();
//        $data['data_detail_pen'] = $this->kumuh_detail_model->select_by_field(array('id_kaw_kumuh' => $id, 'kategori' => 'penanganan'))->row();
//        $data['page_content'] = 'admin/master_peta/kumuh/view';
//        $data['text'] = $this->text;
//        $this->load->view('admin/index', $data);
    }

    public function add($kategori = null, $id_kaw_kumuh = null) {
        $data['title_page'] = 'ADD';
        $data['kategori'] = $kategori;
        $data['id_kaw_kumuh'] = $id_kaw_kumuh;
        $data['data_indikator'] = $this->indikator_model->select_all()->result();
        $data['page_content'] = 'admin/master_peta/kumuh_detail/add_3';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($kategori, $id = null) {
        $data['title_page'] = 'EDIT';
        $data['kategori'] = $kategori;        
        $data['data_indikator'] = $this->indikator_model->select_all()->result();
        $data['data'] = $this->kumuh_detail_model->select_by_field(array('id_kumuh_detail' => $id))->row_array();     
        $data['id_kaw_kumuh'] = $data['data']['id_kaw_kumuh'];
        $data['page_content'] = 'admin/master_peta/kumuh_detail/edit_1';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var      
        $data['id_kaw_kumuh'] = $this->input->post('inpIdKawKumuh');
        $data['kategori'] = $this->input->post('inpKategori');

        // 1
        $data['ketidakteraturan_bangunan_prsn'] = $this->input->post('inpKetBang_prsn');
        $data['ketidakteraturan_bangunan_kt'] = $this->input->post('inpKetBang_kt');

        $data['tingkat_kepadatan_bangunan_prsn'] = $this->input->post('inpKepBang_prsn');
        $data['tingkat_kepadatan_bangunan_kt'] = $this->input->post('inpKepBang_kt');

        $data['ketidaksesuaian_dg_persy_te_be_prsn'] = $this->input->post('inpKetPeTeBang_prsn');
        $data['ketidaksesuaian_dg_persy_te_be_kt'] = $this->input->post('inpKetPeTeBang_kt');

        $data['cakupan_pelayanan_jalan_prsn'] = $this->input->post('inpCakPelJal_prsn');
        $data['cakupan_pelayanan_jalan_kt'] = $this->input->post('inpCakPelJal_kt');

        $data['kualitas_permukaan_jalan_prsn'] = $this->input->post('inpKuaPerJal_prsn');
        $data['kualitas_permukaan_jalan_kt'] = $this->input->post('inpKuaPerJal_kt');

        $data['akses_air_minum_prsn'] = $this->input->post('inpKetAksAirMin_prsn');
        $data['akses_air_minum_kt'] = $this->input->post('inpKetAksAirMin_kt');

        $data['tidak_terpenuhi_kebutuhan_air_prsn'] = $this->input->post('inpTidTerKebAir_prsn');
        $data['tidak_terpenuhi_kebutuhan_air_kt'] = $this->input->post('inpTidTerKebAir_kt');

        $data['tidak_mampu_mengalirkan_air_prsn'] = $this->input->post('inpKetMenLimAir_prsn');
        $data['tidak_mampu_mengalirkan_air_kt'] = $this->input->post('inpKetMenLimAir_kt');

        $data['tidak_tersedia_drainase_prsn'] = $this->input->post('inpKetDra_prsn');
        $data['tidak_tersedia_drainase_kt'] = $this->input->post('inpKetDra_kt');

        $data['tidak_terhubung_sistem_drainase_prsn'] = $this->input->post('inpKetSisDra_prsn');
        $data['tidak_terhubung_sistem_drainase_kt'] = $this->input->post('inpKetSisDra_kt');

        $data['tidak_terpelihara_drainase_prsn'] = $this->input->post('inpKetPelDra_prsn');
        $data['tidak_terpelihara_drainase_kt'] = $this->input->post('inpKetPelDra_kt');

        $data['kualitas_konstruksi_drainase_prsn'] = $this->input->post('inpKuaKonDra_prsn');
        $data['kualitas_konstruksi_drainase_kt'] = $this->input->post('inpKuaKonDra_kt');

        $data['sistem_pengelolaan_air_limbah_prsn'] = $this->input->post('inpSisPenAirLim_prsn');
        $data['sistem_pengelolaan_air_limbah_kt'] = $this->input->post('inpSisPenAirLim_kt');

        $data['pras_pengelolaan_air_limbah_prsn'] = $this->input->post('inpPraPenAirLim_prsn');
        $data['pras_pengelolaan_air_limbah_kt'] = $this->input->post('inpPraPenAirLim_kt');

        $data['pras_sampah_tidak_sesuai_prsn'] = $this->input->post('inpPraPerSamTid_prsn');
        $data['pras_sampah_tidak_sesuai_kt'] = $this->input->post('inpPraPerSamTid_kt');

        $data['sis_pen_sampah_tidak_sesuai_prsn'] = $this->input->post('inpSisPenSamTid_prsn');
        $data['sis_pen_sampah_tidak_sesuai_kt'] = $this->input->post('inpSisPenSamTid_kt');

        $data['terpelihara_pras_sampah_prsn'] = $this->input->post('inpPraPenPer_prsn');
        $data['terpelihara_pras_sampah_kt'] = $this->input->post('inpPraPenPer_kt');

        $data['tidak_tersedia_pras_prokeb_prsn'] = $this->input->post('inpKetPraProKeb_prsn');
        $data['tidak_tersedia_pras_prokeb_kt'] = $this->input->post('inpKetPraProKeb_kt');

        $data['tidak_tersedia_sar_prokeb_prsn'] = $this->input->post('inpKetSarProKeb_prsn');
        $data['tidak_tersedia_sar_prokeb_kt'] = $this->input->post('inpKetSarProKeb_kt');

        //2
        $data['nilai_strategis_lokasi_prsn'] = $this->input->post('inpNilStrLok_prsn');
        $data['nilai_strategis_lokasi_kt'] = $this->input->post('inpNilStrLok_kt');

        $data['kependudukan_prsn'] = $this->input->post('inpKep_prsn');
        $data['kependudukan_kt'] = $this->input->post('inpKep_kt');

        $data['sosial_budaya_prsn'] = $this->input->post('inpSosBud_prsn');
        $data['sosial_budaya_kt'] = $this->input->post('inpSosBud_kt');

        //3
        $data['kejelasan_status_lahan_prsn'] = $this->input->post('inpKejStaLah_prsn');
        $data['kejelasan_status_lahan_kt'] = $this->input->post('inpKejStaLah_kt');

        $data['kesesuaian_rtr_prsn'] = $this->input->post('inpKesRtr_prsn');
        $data['kesesuaian_rtr_kt'] = $this->input->post('inpKesRtr_kt');

        //foto
        $data['ketidakteraturan_bangunan_foto'] = $this->upload_image(array('indikator_name' => 'ket_bang_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetBang_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tingkat_kepadatan_bangunan_foto'] = $this->upload_image(array('indikator_name' => 'kep_bang_' . substr($data['kategori'], 0, 4), 'input' => 'inpKepBang_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['ketidaksesuaian_dg_persy_te_be_foto'] = $this->upload_image(array('indikator_name' => 'ket_pete_bang_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetPeTeBang_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['cakupan_pelayanan_jalan_foto'] = $this->upload_image(array('indikator_name' => 'cak_pel_jal_' . substr($data['kategori'], 0, 4), 'input' => 'inpCakPelJal_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['kualitas_permukaan_jalan_foto'] = $this->upload_image(array('indikator_name' => 'kua_per_jal' . substr($data['kategori'], 0, 4), 'input' => 'inpinpKuaPerJal_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['akses_air_minum_foto'] = $this->upload_image(array('indikator_name' => 'ket_aks_air_min_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetAksAirMin_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_terpenuhi_kebutuhan_air_foto'] = $this->upload_image(array('indikator_name' => 'tid_ter_keb_air_' . substr($data['kategori'], 0, 4), 'input' => 'inpTidTerKebAir_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_mampu_mengalirkan_air_foto'] = $this->upload_image(array('indikator_name' => 'ket_men_lim_air_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetMenLimAir_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_tersedia_drainase_foto'] = $this->upload_image(array('indikator_name' => 'tid_ter_dra_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetDra_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_terhubung_sistem_drainase_foto'] = $this->upload_image(array('indikator_name' => 'tid_ter_sis_dra_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetSisDra_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_terpelihara_drainase_foto'] = $this->upload_image(array('indikator_name' => 'tid_ter_dra_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetPelDra_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['kualitas_konstruksi_drainase_foto'] = $this->upload_image(array('indikator_name' => 'kua_kon_dra_' . substr($data['kategori'], 0, 4), 'input' => 'inpKuaKonDra_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['sistem_pengelolaan_air_limbah_foto'] = $this->upload_image(array('indikator_name' => 'sis_pen_air_lim_' . substr($data['kategori'], 0, 4), 'input' => 'inpSisPenAirLim_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['pras_pengelolaan_air_limbah_foto'] = $this->upload_image(array('indikator_name' => 'pra_pen_air_lim_' . substr($data['kategori'], 0, 4), 'input' => 'inpPraPenAirLim_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['pras_sampah_tidak_sesuai_foto'] = $this->upload_image(array('indikator_name' => 'pra_per_sam_tid_' . substr($data['kategori'], 0, 4), 'input' => 'inpPraPerSamTid_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['sis_pen_sampah_tidak_sesuai_foto'] = $this->upload_image(array('indikator_name' => 'sis_pen_sam_tid_' . substr($data['kategori'], 0, 4), 'input' => 'inpSisPenSamTid_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['terpelihara_pras_sampah_foto'] = $this->upload_image(array('indikator_name' => 'ter_pra_sam_' . substr($data['kategori'], 0, 4), 'input' => 'inpPraPenPer_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_tersedia_pras_prokeb_foto'] = $this->upload_image(array('indikator_name' => 'tid_pra_pro_keb_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetPraProKeb_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['tidak_tersedia_sar_prokeb_foto'] = $this->upload_image(array('indikator_name' => 'tid_sar_pro_keb_' . substr($data['kategori'], 0, 4), 'input' => 'inpKetSarProKeb_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));

        $data['kmz_file'] = $this->upload_image(array('indikator_name' => 'kmz_' . substr($data['kategori'], 0, 4), 'input' => 'inpKmz_file', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['peta_file'] = $this->upload_image(array('indikator_name' => 'peta_' . substr($data['kategori'], 0, 4), 'input' => 'inpPeta_file', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));

        $data['point_line_1'] = $this->upload_image(array('indikator_name' => 'point_line_1_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_1', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_2'] = $this->upload_image(array('indikator_name' => 'point_line_2_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_2', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_3'] = $this->upload_image(array('indikator_name' => 'point_line_3_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_3', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_4'] = $this->upload_image(array('indikator_name' => 'point_line_4_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_4', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_5'] = $this->upload_image(array('indikator_name' => 'point_line_5_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_5', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_6'] = $this->upload_image(array('indikator_name' => 'point_line_6_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_6', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['point_line_7'] = $this->upload_image(array('indikator_name' => 'point_line_7_' . substr($data['kategori'], 0, 4), 'input' => 'inpPL_7', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));

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

    public function process1($action, $id = null) {

        $data['id_kaw_kumuh'] = $this->input->post('inpIdKawKumuh');
        $data['kategori'] = $this->input->post('inpKategori');

        $data['luas_kawasan'] = $this->input->post('inpLuasKawasan');
        $data['jumlah_kk'] = $this->input->post('inpJmlKK');
        $data['jumlah_rtlh'] = $this->input->post('inpJmlRTLH');
        $data['kmz_file'] = $this->upload_image(array('indikator_name' => 'kml_' . substr($data['kategori'], 0, 4), 'input' => 'inpKmlFile', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        $data['peta_file'] = $this->upload_image(array('indikator_name' => 'peta_' . substr($data['kategori'], 0, 4), 'input' => 'inpPeta', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
        $data['sk_file'] = $this->upload_image(array('indikator_name' => 'sk_' . substr($data['kategori'], 0, 4), 'input' => 'inpSk', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));

        $data_indikator = $this->indikator_model->select_all()->result();
        foreach ($data_indikator as $dt_ind) {
            if (substr($dt_ind->id, 0, 1) < 8) {
                $data[$dt_ind->field_name . '_prsn'] = $this->input->post('inp_' . $dt_ind->field_name . '_prsn');
                $data[$dt_ind->field_name . '_kt'] = $this->input->post('inp_' . $dt_ind->field_name . '_kt');
                $data[$dt_ind->field_name . '_foto'] = $this->upload_image(array('indikator_name' => $dt_ind->field_name.'_' . substr($data['kategori'], 0, 4), 'input' => 'inp_' . $dt_ind->field_name . '_ft', 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'image'));
            } if (substr($dt_ind->id, 0, 1) >= 8) {
                $data[$dt_ind->field_name . '_prsn'] = $this->input->post('inp_' . $dt_ind->field_name . '_prsn');
                $data[$dt_ind->field_name . '_kt'] = $this->input->post('inp_' . $dt_ind->field_name . '_kt');
            }
        }

        for ($i = 1; $i < 8; $i++) {
            $data['point_line_' . $i] = $this->upload_image(array('indikator_name' => 'point_line_' . substr($data['kategori'], 0, 4) . '_' . $i, 'input' => 'inp_point_line_' . $i, 'id_kaw_kumuh' => $data['id_kaw_kumuh'], 'tipe_file' => 'kmz'));
        }

        //print
//        foreach ($data_indikator as $dt_ind) {
//            if (substr($dt_ind->id, 0, 1) < 8) {
//                echo $data[$dt_ind->field_name . '_prsn'] . '  -  ' . $data[$dt_ind->field_name . '_kt'] . '  -  ' . $data[$dt_ind->field_name . '_foto'] . '</br>';
//            } if (substr($dt_ind->id, 0, 1) >= 8) {
//                echo $data[$dt_ind->field_name . '_prsn'] . '  -  ' . $data[$dt_ind->field_name . '_kt'] . '</br>';
//            }
//        }
//
//        for ($i = 1; $i < 9; $i++) {
//            echo $data['point_line_' . $i] . '</br>';
//        }
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
            'file_name' => $param['indikator_name'] . '_' . $param['id_kaw_kumuh'],
            'max_size' => '2048'
        );
        if ($param['tipe_file'] != 'kmz') {
            $config['allowed_types'] = "jpg|jpeg";
            $config['upload_path'] = "./assets/admin/img/foto_kawasan/";
        } else {
            $config['allowed_types'] = "kmz|kml";
            $config['upload_path'] = "./assets/admin/img/kmz/";
        }
        $this->upload->initialize($config);
        if (!empty($_FILES[$param['input']]['name'])) {
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
            }
//            else {
//                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', 'error-upload-image'));
//
//                redirect('master_peta/kumuh/view/' . $param['id_kaw_kumuh']);
//            }
        }
    }

}

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
        $data['page_content'] = 'admin/master_peta/kumuh_detail/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($kategori, $id = null) {
        $data['title_page'] = 'EDIT';
        $data['kategori'] = $kategori;
        $data['data'] = $this->kumuh_detail_model->select_by_field(array('id_kumuh_detail' => $id))->row();
        $data['page_content'] = 'admin/master_peta/kumuh_detail/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var        
        $data['keteraturan_bangunan'] = $this->input->post('inpKeteraturanBangunan');
        $data['kepadatan_bangunan'] = $this->input->post('inpKepadatanBangunan');
        $data['kondisi_fisik_bangunan'] = $this->input->post('inpKondisiFisikBangunan');
        $data['jalan_lingkungan'] = $this->input->post('inpJalanLingkungan');
        $data['drainase_lingkungan'] = $this->input->post('inpDrainaseLingkungan');
        $data['pembuangan_air_limbah'] = $this->input->post('inpPembuanganAirLimbah');
        $data['pab_pam'] = $this->input->post('inpPAB_PAM');
        $data['pengelolaan_sampah'] = $this->input->post('inpPengelolaanPersampahan');
        $data['pengamanan_kebakaran'] = $this->input->post('inpPengamananBahayaKebakaran');
        
        $data['legalitas_bangunan'] = $this->input->post('inpLegalitasPendirianBangunan');
        $data['kepadatan_penduduk'] = $this->input->post('inpKepadatanPenduduk');
        $data['mata_pencaharian_penduduk'] = $this->input->post('inpMataPencaharianPenduduk');
        $data['penghasilan_rata2'] = $this->input->post('inpPenghasilanRatarata');
        
        $data['kesesuaian_rencana_tata_ruang'] = $this->input->post('inpKesesuaianRencanaTataRuang');
        $data['status_lahan'] = $this->input->post('inpStatusLahan');
        $data['nilai_strategis_lokasi'] = $this->input->post('inpNilaiStrategisLokasi');
        $data['kegiatan_ekonomi'] = $this->input->post('inpKegiatanEkonomi');
        $data['respon_masyarakat'] = $this->input->post('inpResponUmumMasyarakat');
        $data['harapan_masyarakat'] = $this->input->post('inpHarapanMasyarakat');
        $data['keberadaan_aktifitas_dan_kelompok'] = $this->input->post('inpKeberadaanAktifitasDanKelompok');
        $data['komitmen_pemerintah_kota'] = $this->input->post('inpKomitmenPemerintahKota');


        //process
        if ($action == 'add') {
            // add    
            $data['kategori'] = $this->input->post('inpKategori');
            $data['id_kaw_kumuh'] = $this->input->post('inpIdKawKumuh');
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

        redirect('master_peta/kumuh');
    }

    public function delete($id = null) {
        $this->kumuh_detail_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master_peta/kumuh');
    }

}

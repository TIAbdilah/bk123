<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template_model
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kumuh_model extends CI_Model {

    var $table_name = 'mp_kumuh_copy';

    public function __construct() {
        parent::__construct();
    }

    public function select_all() {
        $this->db->select('*');        
        $this->db->from($this->table_name);
        return $this->db->get();
    }
    
    public function select_by_field($param = array()) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where($param);
        return $this->db->get();
    }
    
    public function select_all1() {
        $this->db->select('*');       

        //status data
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp1.id_kumuh_detail')->from('mp_kumuh_detail mp1');
        $sub->where('mp1.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp1.kategori = \'eksisting\'');
        $this->subquery->end_subquery('eks');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp2.id_kumuh_detail')->from('mp_kumuh_detail mp2');
        $sub->where('mp2.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp2.kategori = \'perencanaan\'');
        $this->subquery->end_subquery('per');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp3.id_kumuh_detail')->from('mp_kumuh_detail mp3');
        $sub->where('mp3.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp3.kategori = \'penanganan\'');
        $this->subquery->end_subquery('pen');

        $this->db->from($this->table_name);
        $this->db->order_by('kode_daerah, nm_kawasan');
        return $this->db->get();
    }

    public function select_by_field1($param = array()) {
//        return $this->db->get_where($this->table_name,$param);
        $this->db->select('*');

        //bobot kumuh eksisting
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('ind_kumuh')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'eksisting\'');
//        $this->subquery->end_subquery('tk_e');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('ind_pertimbangan_lain')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'eksisting\'');
//        $this->subquery->end_subquery('pl_e');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('kejelasan_status_lahan_prsn')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'eksisting\'');
//        $this->subquery->end_subquery('ksl_e');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('kesesuaian_rtr_prsn')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'eksisting\'');
//        $this->subquery->end_subquery('kdrtr_e');
//
//        //bobot kumuh penanganan
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('ind_kumuh')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'penanganan\'');
//        $this->subquery->end_subquery('tk_p');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('ind_pertimbangan_lain')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'penanganan\'');
//        $this->subquery->end_subquery('pl_p');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('kejelasan_status_lahan_prsn')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'penanganan\'');
//        $this->subquery->end_subquery('ksl_p');
//
//        $sub = $this->subquery->start_subquery('select');
//        $sub->select('kesesuaian_rtr_prsn')->from('view_bobot_kumuh vb');
//        $sub->where('vb.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and vb.kategori = \'penanganan\'');
//        $this->subquery->end_subquery('kdrtr_p');

        //status data
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp1.id_kumuh_detail')->from('mp_kumuh_detail mp1');
        $sub->where('mp1.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp1.kategori = \'eksisting\'');
        $this->subquery->end_subquery('eks');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp2.id_kumuh_detail')->from('mp_kumuh_detail mp2');
        $sub->where('mp2.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp2.kategori = \'perencanaan\'');
        $this->subquery->end_subquery('per');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp3.id_kumuh_detail')->from('mp_kumuh_detail mp3');
        $sub->where('mp3.id_kaw_kumuh = mp_kumuh_copy.id_kaw_kumuh and mp3.kategori = \'penanganan\'');
        $this->subquery->end_subquery('pen');

        $this->db->from($this->table_name);
        $this->db->where($param);
        $this->db->order_by('kode_daerah, nm_kawasan');        
        return $this->db->get();
    }

    public function add($data) {
        $this->db->insert($this->table_name, $data);
    }

    public function edit($data, $param = array()) {
        $this->db->update($this->table_name, $data, $param);
    }

    public function delete($param = array()) {
        $this->db->delete($this->table_name, $param);
    }
    
}

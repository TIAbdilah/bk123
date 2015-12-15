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

class Perbatasan_model extends CI_Model {

    var $table_name = 'mp_perbatasan';

    public function __construct() {
        parent::__construct();
    }

    public function select_all() {  
        $this->db->select('*');
        
        //status data
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp1.id_perb_detail')->from('mp_perbatasan_detail mp1');
        $sub->where('mp1.id_perbatasan = mp_perbatasan.id_perbatasan and mp1.kategori = \'eksisting\'');
        $this->subquery->end_subquery('eks');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp2.id_perb_detail')->from('mp_perbatasan_detail mp2');
        $sub->where('mp2.id_perbatasan = mp_perbatasan.id_perbatasan and mp2.kategori = \'perencanaan\'');
        $this->subquery->end_subquery('per');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp3.id_perb_detail')->from('mp_perbatasan_detail mp3');
        $sub->where('mp3.id_perbatasan = mp_perbatasan.id_perbatasan and mp3.kategori = \'penanganan\'');
        $this->subquery->end_subquery('pen');
        
        $this->db->from($this->table_name);
        $this->db->order_by('nama_kawasan');
        return $this->db->get();
    }

    public function select_by_field($param = array()) {     
        return $this->db->get_where($this->table_name,$param);
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

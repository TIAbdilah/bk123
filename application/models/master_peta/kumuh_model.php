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

    var $table_name = 'mp_kumuh';

    public function __construct() {
        parent::__construct();
    }

    public function select_all($param = null) {  
        $this->db->select('*');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('count(id_kaw_kumuh)')->from('mp_kumuh_detail_copy mp');
        $sub->where('mp.id_kaw_kumuh = mp_kumuh.id_kaw_kumuh and mp.kategori = \'eksisting\'');
        $this->subquery->end_subquery('eks');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('count(id_kaw_kumuh)')->from('mp_kumuh_detail_copy mp');
        $sub->where('mp.id_kaw_kumuh = mp_kumuh.id_kaw_kumuh and mp.kategori = \'perencanaan\'');
        $this->subquery->end_subquery('per');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('count(id_kaw_kumuh)')->from('mp_kumuh_detail_copy mp');
        $sub->where('mp.id_kaw_kumuh = mp_kumuh.id_kaw_kumuh and mp.kategori = \'penanganan\'');
        $this->subquery->end_subquery('pen');
        
        $this->db->from($this->table_name);
        $this->db->order_by('kode_daerah, nm_kawasan');
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

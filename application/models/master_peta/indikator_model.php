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

class Indikator_model extends CI_Model {

    var $table_name = 'mp_indikator';

    public function __construct() {
        parent::__construct();
    }

    public function select_all() {   
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->order_by('id');
        return $this->db->get();
    }

    public function select_by_field($param = array()) {        
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where($param);
        $this->db->order_by('id');
        return $this->db->get();
    }

    public function add($data) {
        
    }

    public function edit($data, $param = array()) {
        
    }

    public function delete($param = array()) {
       
    }

}

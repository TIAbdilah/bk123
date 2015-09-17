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

class Berita_model extends CI_Model {

    var $table_name = 'm_berita';

    public function __construct() {
        parent::__construct();
    }

    public function select_all($param = null) {
        $this->db->select('*');

        $this->db->from($this->table_name);
        $this->db->order_by('tanggal', 'desc');
        if ($param != null) {
            $this->db->limit($param['limit'], $param['offset']);
        }
        return $this->db->get();
    }

    public function search_all($keyword,$param = null) {
        $this->db->select('*');

        $this->db->from($this->table_name);  
        $array = array(
            'judul' => $keyword,
            'headline' => $keyword,
            'isi' => $keyword,
        );
        $this->db->or_like($array);
        $this->db->order_by('tanggal', 'desc');
        if ($param != null) {
            $this->db->limit($param['limit'], $param['offset']);
        }
        return $this->db->get();
    }
    
    public function select_by_field($param = array()) {
        $this->db->select('*');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('nm_kategori')->from('m_kategori_berita k');
        $sub->where('k.id_kategori = m_berita.id_kategori');
        $this->subquery->end_subquery('nama_kategori');

        $this->db->from($this->table_name);
        $this->db->where($param);
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

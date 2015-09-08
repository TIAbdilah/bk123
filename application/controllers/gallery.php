<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('master/foto_kegiatan_model');
        $this->load->model('master/doc_model');
    }
    
    public function about() {
        $data['title_page'] = 'Tentang Kami';
        $data['page'] = 'public/gallery/about';
        $this->load->view('public/index',$data);
    }
    
    public function ebook() {
        $data['title_page'] = 'EBook';
        $data['data_doc'] = $this->doc_model->select_by_field(array('kategori'=>'ebook'))->result();
        $data['page'] = 'public/gallery/ebook_1';
        $this->load->view('public/gallery/ebook_1',$data);
    }
    
    public function foto_kegiatan() {
        $data['title_page'] = 'Foto Kegiatan';
        $data['data_foto'] = $this->foto_kegiatan_model->select_all()->result();
        $data['page'] = 'public/gallery/foto_kegiatan_1';
        $this->load->view('public/gallery/foto_kegiatan_1',$data);
    }
    
    public function film_dokumenter() {
        $data['title_page'] = 'Film Dokumenter';
        $data['page'] = 'public/gallery/film_dokumenter';
        $this->load->view('public/index',$data);
    }

}

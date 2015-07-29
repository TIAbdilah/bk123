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

class Try_daerah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('master/daerah_dump_model');
        $this->load->model('master_peta/daerah_model');
    }

    public function index() {
//        echo $this->replace_prefix('21 qqqqqqqqqwwwwww');
        $data = $this->daerah_dump_model->select_all()->result();
        foreach ($data as $row) {
            $array = null;
            switch (strlen($row->kode)) {
                case 2:
//                    echo '['.$row->kode . ']     ' . $this->replace_prefix($row->nama_daerah) . '<br>';
                    $array['kode_daerah'] = $row->kode;
                    $array['nm_daerah'] = $row->nama_daerah;
                    $array['kategori'] = 'propinsi';
                    break;
                case 5:
//                    echo '----- ['.$row->kode . ']     ' . $this->replace_prefix($row->nama_daerah) . '<br>';
                    $array['kode_daerah'] = $row->kode;
                    $array['nm_daerah'] = $this->replace_prefix($row->nama_daerah);
                    $array['kategori'] = 'kabupaten / kota';
                    break;
                case 8:
//                    echo '----- ----- ['.$row->kode . ']     ' . $this->replace_prefix($row->kec) . '<br>';
                    $array['kode_daerah'] = $row->kode;
                    $array['nm_daerah'] = $this->replace_prefix($row->kec);
                    $array['kategori'] = 'kecamatan';
                    break;
                default:
                    if ($row->kel != null) {
//                        echo '----- ----- ----- ['.$row->kode . ']     ' . $this->replace_prefix($row->kel) . '<br>';
                        $array['kode_daerah'] = $row->kode;
                        $array['nm_daerah'] = $this->replace_prefix($row->kel);
                        $array['kategori'] = 'kelurahan';
                    } else {
//                        echo '----- ----- ----- ['.$row->kode . ']     ' . $this->replace_prefix($row->des) . '<br>';
                        $array['kode_daerah'] = $row->kode;
                        $array['nm_daerah'] = $this->replace_prefix($row->des);
                        $array['kategori'] = 'desa';
                    }
                    break;
            }
            print_r($array);
            echo'<br>';
            $this->daerah_model->add($array);
        }
    }

    function replace_prefix($str) {
        $str_clean = '';
        $i = 50;
        while ($i > 0) {
            $cr = '' . $i . ' ';
            if (strpos($str, $cr) !== FALSE) {
                $str_clean = str_replace($cr, '', $str);
                break;
            }
            $i--;
        }
        return trim($str_clean);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->content_model->select_by_field(array('id_content' => $id))->row();
        $data['page_content'] = 'admin/master/content/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['data'] = $this->content_model->select_by_field(array('id_content' => $id))->row();
        $data['page_content'] = 'admin/master/content/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['isi'] = $this->input->post('inpIsi');

        //process
        if ($action == 'add') {
            // add    
            $this->content_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $data['update_dt'] = date('Y-m-d');
            $this->content_model->edit($data, array('id_content' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/content');
    }

    public function delete($id = null) {
        $this->content_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master/content');
    }

}

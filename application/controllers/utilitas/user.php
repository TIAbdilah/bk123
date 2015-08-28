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

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->user_model->select_all()->result();

        if ($this->session->userdata('id_role') != 1 && $this->session->userdata('id_role') != 3) {
            $data['page_content'] = 'admin/utilitas/user/list_filter';
        } else {
            $data['page_content'] = 'admin/utilitas/user/list';
        }
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->user_model->select_by_field(array('id_user' => $id))->row();
        $data['page_content'] = 'admin/utilitas/user/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['SIList_propinsi'] = $this->view_propinsi_model->select_all()->result();
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/user/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['SIList_propinsi'] = $this->view_propinsi_model->select_all()->result();
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();
        $data['data'] = $this->user_model->select_by_field(array('id_user' => $id))->row();
        $data['page_content'] = 'admin/utilitas/user/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nama'] = $this->input->post('inpNama');
        $data['username'] = $this->input->post('inpUsername');
        $data['password'] = $this->input->post('inpPassword');
        $data['email'] = $this->input->post('inpEmail');
        $data['no_telp'] = $this->input->post('inpNoTlp');
        $data['id_role'] = $this->input->post('inpIdRole');
        $data['bagian'] = $this->input->post('inpBagian');
        $data['propinsi'] = $this->input->post('inpWilayahKerjaP');
        $data['kab_kota'] = $this->input->post('inpWilayahKerjaK');

//        process
        if ($action == 'add') {
            // add    
            $this->user_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->user_model->edit($data, array('id_user' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/user');
    }

    public function delete($id = null) {
        $this->user_model->delete(array('id_user' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/user');
    }

    public function aktivasi_user($action, $id = null) {
        if ($action == 'active') {
            $data['active'] = 1;
        } else {
            $data['active'] = 0;
        }
        $this->user_model->edit($data, array('id_user' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        redirect('utilitas/user');
    }

    // edit data from user
    public function edit_user($id = null) {
        $data['title_page'] = 'EDIT';
        $data['data'] = $this->user_model->select_by_field(array('username' => $id))->row();
        $data['page_content'] = 'admin/utilitas/user/edit_user';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process_edit_user($id = null) {

        //process
        $data['nama'] = $this->input->post('inpNama');
        $data['no_telp'] = $this->input->post('inpNoTlp');
        $data['email'] = $this->input->post('inpEmail');
        $this->user_model->edit($data, array('id_user' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/home');
    }

    //edit password from user
    public function edit_password($id = null) {
        $data['title_page'] = 'EDIT';
        $password1 = $this->input->post('inpPassword');

        $data['data'] = $this->user_model->select_by_field(array('username' => $id))->row();
        if ($password1 == null || $password1 == '') {
            $data['page_content'] = 'admin/utilitas/user/edit_password_ver';
        } else {
//            echo $password1;
            if ($password1 == $data['data']->password) {
                $data['page_content'] = 'admin/utilitas/user/edit_password';
            } else {
                $data['page_content'] = 'admin/utilitas/user/edit_password_ver';
                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', 'wrong-password'));
            }
        }

        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process_edit_password($id = null) {

        //process
        $password1 = $this->input->post('inpPassword');
        $password2 = $this->input->post('inpConfirmPassword');

        if ($password1 == $password2) {
            $data['password'] = $password1;
            $this->user_model->edit($data, array('username' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));

            //error msg from db
            $error_msg = $this->db->_error_message();
            if (!empty($error_msg)) {
                $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
            }

            redirect('master/home');
        } else {
            $data['title_page'] = 'EDIT';
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', 'wrong-password'));
            $data['page_content'] = 'admin/utilitas/user/edit_password';
            $data['text'] = $this->text;
            $this->load->view('admin/index', $data);
        }
//        
    }

    public function get_count_new_user() {
//        $data = null;
        if ($this->session->userdata('role') == 'super admin') {
            $data_user = $this->user_model->select_by_field(array('active' => 0))->num_rows();
        } else {
            $param = array(
                'active' => 0,
                'bagian' => $this->session->userdata('bagian'),
                'id_role' => 8,
                'propinsi' => $this->session->userdata('role_propinsi'));
            $data_user = $this->user_model->select_by_field($param)->num_rows();
        }
        if ($data_user > 0) {
            $data[0] = $data_user;
        } else {
            $data[0] = 0;
        }
        echo json_encode($data);
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('utilitas/user_model');
        $this->load->model('utilitas/role_model');
        $this->load->model('master_peta/view_kabupaten_model');
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $this->load->view('login/sign_in', $data);
    }
    
    public function sign_up() {
        $data['title_page'] = 'INDEX';
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['SIList_kabupaten'] = $this->view_kabupaten_model->select_all()->result();        
        $this->load->view('login/sign_up', $data);
    }

    public function process_login() {
        
        $this->form_validation->set_rules('inpUsername', 'Username', 'trim|required');
        $this->form_validation->set_rules('inpPassword', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah ');
            $this->load->view('login/sign_in');
        } else {
            $username = $this->input->post('inpUsername');
            $password = $this->input->post('inpPassword');
            $param = array(
                'username' => $username,
                'password' => $password
            );
            $count_user = $this->user_model->select_by_field($param)->num_rows();
            if ($count_user == 1) {
                $data_user = $this->user_model->select_by_field($param)->row();
                if ($data_user->active == 0) {
                    $this->session->set_flashdata('message', 'Username sudah terdaftar dan belum aktif');
                    $this->load->view('login/sign_in');
                } else {
                    $sessionData['username'] = $data_user->username;
                    $sessionData['role'] = $data_user->nama_role;
                    $sessionData['id_role'] = $data_user->id_role;
                    $sessionData['role_daerah'] = $data_user->kode_daerah;
                    $sessionData['is_login'] = TRUE;

                    $this->session->set_userdata($sessionData);
                    redirect('master/home');
                }
            } else {
                $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah ');
                $this->load->view('login/sign_in');
            }
        }
    }
    
    public function process($action, $id = null) {
        // var
        $data['username'] = $this->input->post('inpUsername');
        $data['password'] = $this->input->post('inpPassword');
        $data['email'] = $this->input->post('inpEmail');
        $data['id_role'] = $this->input->post('inpIdRole');
        $data['kode_daerah'] = $this->input->post('inpWilayahKerja');

//        process
        if ($action == 'add') {
            // add    
            $this->user_model->add($data);
            $this->session->set_flashdata('message2', 'Akun berhasil dibuat. Silahkan login kembali');
        }
        
        redirect('login/');
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}

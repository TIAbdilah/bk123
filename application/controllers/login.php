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
        $this->load->model('utilitas/listcode_model');
        $this->load->model('master_peta/view_propinsi_model');
        $this->load->model('master_peta/view_kabupaten_model');
    }

    public function index() {
        $data['title_page'] = 'INDEX';
         if ($this->session->userdata('role') == '') {
           $this->load->view('login/sign_in', $data);
        } else{
            redirect('master/home');
        }        
    }

    public function sign_up() {
        $data['title_page'] = 'INDEX';
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['SIList_modul'] = $this->listcode_model->select_by_field(array('list_name' => 'pj_modul'))->result();
        $data['SIList_propinsi'] = $this->view_propinsi_model->select_all()->result();
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
            $password = md5($this->input->post('inpPassword'));
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
                    $sessionData['tingkat_role'] = $data_user->tingkat;
                    $sessionData['id_role'] = $data_user->id_role;
                    $sessionData['role_propinsi'] = $data_user->propinsi;
                    $sessionData['role_kab_kota'] = $data_user->kab_kota;
                    $sessionData['bagian'] = $data_user->bagian;
                    $sessionData['modul'] = $data_user->modul;
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
        $data['nama'] = $this->input->post('inpNama');
        $data['username'] = $this->input->post('inpUsername');
        $data['password'] = md5($this->input->post('inpPassword'));
        $konfirm_password = md5($this->input->post('inpKonfirmPassword'));
        $data['email'] = $this->input->post('inpEmail');
        $data['no_telp'] = $this->input->post('inpNoTlp');
        $data['id_role'] = $this->input->post('inpIdRole');
        $data['bagian'] = $this->input->post('inpBagian');
        $data['modul'] = $this->input->post('inpModul');
        $data['propinsi'] = $this->input->post('inpWilayahKerjaP');
        $data['kab_kota'] = $this->input->post('inpWilayahKerjaK');

//        print_r($data);
//        process
        if ($data['password'] == $konfirm_password) {
            if ($action == 'add') {
                // add    
                $this->user_model->add($data);
                $this->session->set_flashdata('message2', 'Akun berhasil dibuat. Silahkan login kembali');
            }
        } else {
            $this->session->set_flashdata('message', 'Password tidak sesuai');
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $error_msg);
        }

        redirect('login/');
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    public function populateKabKota() {
        $propinsi = $this->input->post('kode_propinsi',TRUE);;
//        $propinsi = 18;
        $kab_kota = $this->view_kabupaten_model->select_by_field(array('left(kode_daerah,2)' => $propinsi))->result();        
        $output = "";
        if ($kab_kota) {
            $output = '<option>-Pilih Kabupaten Kota-</option>';
            foreach ($kab_kota as $row) {
                $output .= '<option value="' . $row->kode_daerah . '">' . $row->nm_daerah . '</option>';
            }
             $arr[0] = $output;
        } else {
            $output .= '<option value="">Propinsi Belum dipilih</option>';
             $arr[0] = $output;
        }
       
        echo json_encode($arr);
//        echo $output;
    }

}

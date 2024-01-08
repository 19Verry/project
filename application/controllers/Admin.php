<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['userwarga'] = $this->User_model->get_user_warga();
        $data['petugas'] = $this->User_model->get_non_warga();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer', $data);
    }
    public function tambah()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Wajib di isi'
        ]);
        $this->form_validation->set_rules('role', 'Jabatan', 'required|trim', [
            'required' => 'Jabatan Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('admin/index');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'role' => $this->input->POST('role')
            ];
            $id = $this->input->POST('username');
            $this->User_model->update(['username' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Petugas RT Berhasil Ditambahkan!</div>');
            redirect('Admin');
        }
    }
    public function set_as_warga($username) {
        $this->load->model('User_model');

        // Panggil fungsi dari model untuk mengubah role menjadi 'warga'
        $affected_rows = $this->User_model->set_warga($username);

        if ($affected_rows > 0) {
            // Jika pengguna berhasil diubah rolenya menjadi 'warga'
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Berhasil Mencopot Jabatan.</div>');
        } else {
            // Jika tidak ada baris yang terpengaruh oleh perubahan rolenya
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Gagal Mencopot Jabatan.</div> ');
        }

        redirect('Admin'); // Ganti 'user' dengan halaman yang sesuai
    }

}


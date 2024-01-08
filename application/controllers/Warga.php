<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_model');
        $this->load->model('User_model');
    }
    public function data()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['warga'] = $this->Warga_model->get();
        $this->load->view('layout/header',$data);
        $this->load->view('warga/datawarga',$data);
        $this->load->view('layout/footer',$data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('name', 'Nama Kepala Keluarga', 'required|trim', [
            'required' => 'Nama Kepala Keluarga Wajib di isi'
        ]);
        $this->form_validation->set_rules('nokk', 'No Kartu Keluarga', 'required|integer|is_unique[warga.nokk]|trim', [
            'is_unique' => 'No Kartu Keluarga ini sudah terdaftar!',
            'required' => 'Nomor Kartu Keluarga Wajib di isi',
            'integer' => 'Nomor Kartu Keluarga Harus Angka'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required|trim', [
            'required' => 'Status Wajib di isi'
        ]);
        $this->form_validation->set_rules('nohp', 'No Hp', 'required|integer|trim', [
            'required' => 'Nomor Hp  Wajib di isi',
            'integer' => 'Nomor Hp Harus Angka'
        ]);
        $this->form_validation->set_rules('jumangkel', 'Jumlah Anggota Keluarga', 'required|integer|trim', [
            'required' => 'Jumlah Anggota Keluarga Wajib di isi',
            'integer' => 'Jumlah Anggota Keluarga Harus Angka'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]|trim', [
            'is_unique' => 'Username ini sudah terdaftar!',
            'required' => 'Username Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]|matches[nokk]',
            [
                'matches' => 'Password Tidak sama',
                'min_length' => 'Password terlalu pendek',
                'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]|matches[nokk]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header',$data);
            $this->load->view('warga/tambahwarga',$data);
            $this->load->view('layout/footer',$data);
        } else {
            $data1 = [
                'name' => $this->input->POST('name'),
                'nokk' => $this->input->POST('nokk'),
                'status' => $this->input->POST('status'),
                'nohp' => $this->input->POST('nohp'),
                'jumangkel' => $this->input->POST('jumangkel'),
                'alamat' => $this->input->POST('alamat'),
                'bergabung' => date('d-F-Y')
            ];
            $this->Warga_model->insert($data1);
            
            $data2 = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            ];
            
            $this->User_model->insert($data2);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Warga Berhasil Ditambahkan!</div>');
            redirect('Warga/tambah');
        }
    }

    public function hapus($id)
    {
        $this->Warga_model->delete($id);
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Warga Berhasil Dihapus!</div>');
        redirect('Warga/data');
    }

    public function showPDF() {
        $file = 'path_to_your_file.pdf'; // Ganti dengan path file yang ingin Anda kirim

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf'); // Ganti dengan tipe konten yang sesuai
            header('Content-Disposition: inline; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } else {
            // Handle jika file tidak ditemukan
            echo 'File not found.';
        }
    }   

}

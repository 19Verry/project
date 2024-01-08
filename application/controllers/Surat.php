<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
        $this->load->model('Surat_model');
        $this->load->model('User_model');
    }
    public function pengajuan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('surat/pengajuan', $data);
        $this->load->view('layout/footer', $data);
    }
    public function cetak()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $sessionUsername = $this->session->userdata('username');
        $data['surat'] = $this->Surat_model->getSurat($sessionUsername);

        $this->load->view('layout/header', $data);
        $this->load->view('surat/cetak', $data);
        $this->load->view('layout/footer', $data);
    }
    public function download()
    {
        force_download('assets/file/default.docx', NULL);
    }
    public function tambah()
    {

        $username = $this->session->userdata('username');
        $this->db->select('role');
        $this->db->from('user');
        $this->db->where('username', $username);

        $query = $this->db->get();
        $user = $query->row_array();
        $insert_data = [
            'uploader' => $username,
            'role' => $user['role'],
            'waktuunggah' => date('d-F-Y'),
        ];
        $upload_image = $_FILES['file']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'docx';
            $config['max_size'] = '10048';
            $config['upload_path'] = './assets/file/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('file', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
            $this->Surat_model->insert($insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Pengajuan Berhasil Ditambah!</div>');
            redirect('surat/pengajuan');
        }
    }


    public function edit()
    {
        $username = $this->session->userdata('username');
        $this->db->select('role');
        $this->db->from('user');
        $this->db->where('username', $username);

        $query = $this->db->get();
        $user = $query->row_array();
        $data = [
            'id' => $this->input->POST('id'),
            'role' =>$user['role']
        ];
        $upload_image = $_FILES['file']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'docx';
            $config['max_size'] = '10048';
            $config['upload_path'] = './assets/file/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file')) {
                $old_image = $data['surat']['file'];
                unlink(FCPATH . './assets/file/' . $old_image);
                $new_image = $this->upload->data('file_name');
                $this->db->set('file', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $id = $this->input->POST('id');
        $this->Surat_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Surat Pengajuan Berhasil Diupload!</div>');
        redirect('Surat/cek');
    }

    public function cek()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->Surat_model->getRole();
        $this->load->view('layout/header', $data);
        $this->load->view('surat/cek', $data);
        $this->load->view('layout/footer', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
    }
    public function pengunguman()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['info'] = $this->Informasi_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('informasi/pengunguman', $data);
        $this->load->view('layout/footer', $data);
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib di isi'
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Nomor Kartu Keluarga Wajib di isi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header',$data);
            $this->load->view('informasi/tambahinformasi',$data);
            $this->load->view('layout/footer',$data);
        } else {
            $data = [
                'judul' => $this->input->POST('judul'),
                'isi' => $this->input->POST('isi'),
                'waktu' => date('d-F-Y')
            ];
            $this->Informasi_model->insert($data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Informasi Berhasil Di Upload!</div>');
            redirect('Informasi/tambah');
        }
    }
   
}

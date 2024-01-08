<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasrt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kasrt_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('totalpengeluaran', 'Total Pengeluaran', 'required|trim|integer', [
            'required' => 'Total pengeluaran Wajib di isi'
        ]);
        $this->form_validation->set_rules('totalsosial', 'Total Sosial', 'required|trim|integer', [
            'required' => 'Total Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('totalronda', 'Total Ronda', 'required|trim|integer', [
            'required' => 'Total Ronda Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('kasrt/index', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $totalsosial = $this->input->post('totalsosial');
            $totalronda = $this->input->post('totalronda');

            // Menghitung total pemasukan
            $totalpemasukan = $totalsosial + $totalronda;
            $data = [
                'bulan' => date('F-Y'),
                'totalpengeluaran' => $this->input->post('totalpengeluaran'),
                'totalsosial' => $totalsosial,
                'totalronda' => $totalronda,
                'totalpemasukan' => $totalpemasukan // Nilai total pemasukan yang dihitung
            ];
            $this->Kasrt_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Berhasil Menambahkan Catatan Keuangan Ditambah!</div>');
            redirect('Kasrt');
        }

    }
}

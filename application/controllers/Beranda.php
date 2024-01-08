<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_model');
        $this->load->model('Kasrt_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['warga'] = $this->Warga_model->gettotal();
		$data['kasmasuk'] = $this->Kasrt_model->getTotalPemasukan();
		$data['kaskeluar'] = $this->Kasrt_model->getTotalPengeluaran();
		$this->load->view('layout/header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('layout/footer',$data);
	}
}

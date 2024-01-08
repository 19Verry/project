<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('Beranda');
		}
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
			'required' => 'username Wajib di isi'
		]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password Wajib di isi'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/headerlogin');
			$this->load->view('auth/login');
			$this->load->view('layout/footerlogin');
		} else {
			$this->cek_login();
		}
	}

	public function cek_login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'role' => $user['role'],
					'id' => $user['id'],
				];
				$this->session->set_userdata($data);
					redirect('Beranda');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>username Belum Terdaftar!</div>');
			redirect('auth');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Behasil logout!</div>');
		redirect('Auth');
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public $table = 'user';
	public $id = 'user.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get_user_warga()
	{
		$this->db->where('role', 'warga'); // Filter berdasarkan kolom 'role' yang bernilai 'warga'
		$query = $this->db->get($this->table); // Mendapatkan data dari tabel yang ditentukan

		return $query->result_array(); // Mengembalikan hasil dalam bentuk array
	}
	public function get_non_warga()
	{
		$this->db->where('role !=', 'warga'); // Filter berdasarkan kolom 'role' yang tidak sama dengan 'warga'
		$query = $this->db->get($this->table); // Mendapatkan data dari tabel yang ditentukan

		return $query->result_array(); // Mengembalikan hasil dalam bentuk array
	}
	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function set_warga($username)
	{
		$data = ['role' => 'warga'];
		$this->db->where('username', $username);
		$this->db->update($this->table, $data);

		return $this->db->affected_rows();
	}

	// ------------------------------------------------------------------------

}

/* End of file User_model_model.php */
/* Location: ./application/models/User_model_model.php */

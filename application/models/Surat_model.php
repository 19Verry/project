<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Surat_model extends CI_Model{
    public $table = 'surat';
    public $id = 'surat.id';
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id){
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getSurat($sessionUsername) {
        $this->db->from($this->table);
        $this->db->where('uploader', $sessionUsername);
        $this->db->where('role', 'ketua rt'); // Menambahkan kondisi untuk 'role' warga
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getRole() {
        $this->db->from($this->table);
        $this->db->where('role', 'warga'); // Menambahkan kondisi untuk 'role'
        $this->db->order_by('waktuunggah', 'DESC'); // Mengurutkan berdasarkan waktu paling lama
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function update($where, $data){
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert( $data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete( $id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}

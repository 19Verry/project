<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kasrt_model extends CI_Model
{
    public $table = 'kasrt';
    public $id = 'kasrt.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTotalPemasukan() {
        $this->db->select_sum('totalpemasukan'); // Menghitung total dari kolom 'totalpemasukan'
        $query = $this->db->get($this->table);
        $result = $query->row_array();
    
        // Mengembalikan total dari kolom 'totalpemasukan'
        return $result['totalpemasukan'];
    }
    public function getTotalPengeluaran() {
        $this->db->select_sum('totalpengeluaran'); // Menghitung total dari kolom 'totalpemasukan'
        $query = $this->db->get($this->table);
        $result = $query->row_array();
    
        // Mengembalikan total dari kolom 'totalpemasukan'
        return $result['totalpengeluaran'];
    }
    

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
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
        $bulan = $data['bulan']; // Ambil nilai bulan dari data yang akan dimasukkan
        $existing_data = $this->db->get_where($this->table, ['bulan' => $bulan])->row_array();

        if ($existing_data) {
            // Jika data untuk bulan yang sama sudah ada, lakukan pembaruan (update) data
            $this->db->where('bulan', $bulan);
            $this->db->update($this->table, $data);
            return $existing_data['id']; // Mengembalikan ID data yang diperbarui
        } else {
            // Jika belum ada data untuk bulan yang sama, lakukan penambahan data baru
            $this->db->insert($this->table, $data);
            return $this->db->insert_id(); // Mengembalikan ID dari data yang baru dimasukkan
        }
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}

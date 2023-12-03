<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->query('SELECT * FROM tb_pelanggan  ORDER BY jatuh_tempo ASC')->result();
    }
    
    public function tambah_pelanggan($data)
    {
        return $this->db->insert('tb_pelanggan', $data);
    }
    public function hapus_pelanggan($id_pelanggan, $table)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->delete($table);
    }
    public function edit_pelanggan($id_pelanggan, $data)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('tb_pelanggan', $data);
    }
    public function get_pelanggan_by_id($id_pelanggan)
    {
        // Query untuk mengambil data pelanggan berdasarkan ID
        $query = $this->db->get_where('tb_pelanggan', array('id_pelanggan' => $id_pelanggan));
        return $query->row();
    }

    public function update_pelanggan($id_pelanggan, $data_pelanggan)
    {
        // Update data pelanggan berdasarkan ID
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('tb_pelanggan', $data_pelanggan);
    }
}

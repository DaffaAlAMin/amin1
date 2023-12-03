<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Akun extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_akun1')->result();
    }
    public function tambah_akun($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function hapus_akun($id_akun, $table)
    {
        $this->db->where('id_akun1', $id_akun);
        return $this->db->delete($table);
    }
    public function ubah_akun($id_akun, $data, $table)
    {
        $this->db->where('id_akun1', $id_akun);
        return $this->db->update($table, $data);
    }
}

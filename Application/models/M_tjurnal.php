<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tjurnal extends CI_Model
{
    public function tampil_data_tjurnal()
    {
       return $this->db->query('SELECT tb_tjurnal.*, tb_akun1.nama_akun1 FROM tb_tjurnal
    JOIN tb_akun1 ON tb_tjurnal.id_akun1 = tb_akun1.id_akun1
    ORDER BY tb_tjurnal.tanggal ASC')->result();


        // return $this->db->get('tb_tjurnal')->result();
    }


    public function tambah_tjurnal($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function simpantj($data, $table)
    {

        return $this->db->insert($table, $data);
    }
    public function hapus_tjurnal($id_tjurnal, $table)
    {
        $this->db->where('id_tjurnal', $id_tjurnal);
        return $this->db->delete($table);
    }
    public function get_tjurnal_by_id($id_tjurnal)
    {
        return $this->db->get_where('tb_tjurnal', array('id_tjurnal' => $id_tjurnal))->row();
    }
    public function ubah_tjurnal($id_tjurnal, $data, $table)
    {
        $this->db->where('id_tjurnal', $id_tjurnal);
        return $this->db->update($table, $data);
    }
    public function get_tjurnal_by_tanggal($bulan, $tahun)
    {
        return $this->db->query("SELECT * FROM tb_tjurnal, tb_akun1 WHERE tb_tjurnal.id_akun1=tb_akun1.id_akun1 AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' ORDER BY tb_tjurnal.tanggal ASC")->result();
    }

    public function get_list_jurnal()
    {
        return $this->db->query('SELECT DISTINCT YEAR(tanggal) as tahun, MONTH(tanggal) as bulan FROM tb_tjurnal ORDER BY tanggal ASC')->result();
    }

    public function getAkunInJurnal()
    {
        return $this->db->select('tb_tjurnal.id_akun1,tb_akun1.id_akun1,tb_akun1.nama_akun1')
            ->from('tb_tjurnal')
            ->join('tb_akun1', 'tb_tjurnal.id_akun1 = tb_akun1.id_akun1')
            ->order_by('tb_akun1.id_akun1', 'ASC')
            ->group_by('tb_akun1.nama_akun1')
            ->get()
            ->result();
    }
    public function getJurnalByNoReff($noReff)
    {
        return $this->db->select('tb_tjurnal.id_tjurnal,tb_tjurnal.tanggal,tb_akun1.nama_akun1,tb_tjurnal.id_akun1,tb_tjurnal.jenis_saldo,tb_tjurnal.saldo')
            ->from('tb_tjurnal')
            ->where('tb_tjurnal.id_akun1', $noReff)
            ->join('tb_akun1', 'tb_tjurnal.id_akun1 = tb_akun1.id_akun1')
            ->order_by('tanggal', 'ASC')
            ->get()
            ->result();
    }
    public function getJurnalByNoReffSaldo($noReff)
    {
        return $this->db->select('tb_tjurnal.jenis_saldo,tb_tjurnal.saldo')
            ->from('tb_tjurnal')
            ->where('tb_tjurnal.id_akun1', $noReff)
            ->join('tb_akun1', 'tb_tjurnal.id_akun1 = tb_akun1.id_akun1')
            ->order_by('tanggal', 'ASC')
            ->get()
            ->result();
    }
   
}

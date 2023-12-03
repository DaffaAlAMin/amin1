<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bukubesar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url(""));
        }
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('M_pelanggan');
        $this->load->model('M_Akun');
        $this->load->model('M_tjurnal');
    }



    public function index()
    {

        $data['pelanggan'] =  $this->M_pelanggan->tampil_data();
        $data['akun1'] = $this->M_akun->tampil_data();
        $data['tb_tjurnal'] = $this->M_tjurnal->tampil_data_tjurnal();
        $dataAkunTransaksi = $this->M_tjurnal->getAkunInJurnal();

        foreach ($dataAkunTransaksi as $row) {
            $dataRef[] = (array) $this->M_tjurnal->getJurnalByNoReff($row->id_akun1);
            $saldo[] = (array) $this->M_tjurnal->getJurnalByNoReffSaldo($row->id_akun1);
        }

        $data['jumlah'] = count($dataRef);
        $data['saldo'] = $saldo;
        $data['data'] = $dataRef;
        $data['data_jurnal'] = $dataAkunTransaksi;        

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku_besar/V_bukubesar', $data);
        $this->load->view('templates/footer');
    }
}

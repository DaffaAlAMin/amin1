<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_jumum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url(""));
		}
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->model('M_tjurnal');
	}



	public function index()
	{

		$data['tb_tjurnal'] = $this->M_tjurnal->tampil_data_tjurnal();
		
		$jumlah = count($data);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jurnal_umum/V_jumum', $data, $jumlah);
		$this->load->view('templates/footer');
	}
// 	public function filter_tanggal()
// {
//     $bulan = $this->input->post('bulan');
//     $tahun = $this->input->post('tahun');

//     $data['tampil_data_tjurnal'] = $this->M_tjurnal->get_tjurnal_by_tanggal($bulan, $tahun);
//     $data['listJurnal'] = $this->M_tjurnal->get_list_jurnal();

//     $this->load->view('templates/header');
//     $this->load->view('templates/sidebar');
//     $this->load->view('jurnal_umum/V_jumum', $data);
//     $this->load->view('templates/footer');
// }


}

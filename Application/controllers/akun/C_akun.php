<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_akun extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}
		$this->load->model('M_Akun');
		$this->load->model('User_model');
	}
	public function index()
	{

		$data['akun1'] = $this->M_akun->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('akun/V_akun', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_akun()
	{
		$data = array(
			'id_akun1' => $this->input->post('id_akun1'),
			'nama_akun1' => $this->input->post('nama_akun'),
			'keterangan' => $this->input->post('keterangan'),

		);

		$this->M_akun->tambah_akun($data, 'tb_akun1');

		$this->session->set_flashdata('success', 'Akun berhasil ditambahkan.');
		redirect('index.php/akun/C_akun');
	}
	public function hapus_akun($id_akun)
	{
		$this->M_akun->hapus_akun($id_akun, 'tb_akun1');

		$this->session->set_flashdata('success', 'Akun berhasil dihapus.');
		redirect('index.php/akun/C_akun');
	}
	public function ubah_akun($id_akun)
	{
		$data = array(

			'nama_akun1' => $this->input->post('nama_akun'),
			'keterangan' => $this->input->post('keterangan'),
		);

		$this->M_akun->ubah_akun($id_akun, $data, 'tb_akun1');

		$this->session->set_flashdata('success', 'Akun berhasil diubah.');
		redirect('index.php/akun/C_akun');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_tjurnal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}
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
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/Vt_jurnal', $data);
		$this->load->view('templates/footer');
	}
	// public function tambah_tjurnal()
	// {
	// 	$data = array(
	// 		'id_tjurnal' => $this->input->post('id_tjurnal'),
	// 		'tanggal' => $this->input->post('tanggal'),
	// 		'nama_pelanggan' => $this->input->post('nama_pelanggan'),
	// 		'keterangan' => $this->input->post('keterangan'),
	// 		'id_akun1' => $this->input->post('nama_akun_debit'),
	// 		'debit' => $this->input->post('debit'),
	// 		'id_akun1' => $this->input->post('nama_akun_kredit'),
	// 		'kredit' => $this->input->post('kredit'),
	// 	);

	// 	$this->M_tjurnal->tambah_tjurnal($data, 'tb_tjurnal');

	// 	$this->session->set_flashdata('success', 'Akun berhasil ditambahkan.');
	// 	redirect('index.php/jurnal/C_tjurnal');
	// }
	public function tambahtjurnal()
	{

		$data['pelanggan'] =  $this->M_pelanggan->tampil_data();
		$data['akun1'] = $this->M_akun->tampil_data();
		$data['tb_tjurnal'] = $this->M_tjurnal->tampil_data_tjurnal();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/Tambah_tjurnal', $data);
		$this->load->view('templates/footer');
	}
	public function simpantjurnal()
	{

		$jumlah = count($this->input->post('saldo'));
		//print_r($jumlah);die();
		for ($i = 0; $i < $jumlah; $i++) {
			$data = array(

				'tanggal' => $this->input->post('tanggal'),
				'nama_pelanggan' => $this->input->post('nama_pelanggan'),
				'keterangan' => $this->input->post('keterangan'),
				'id_akun1' => $this->input->post('nama_akun')[$i],
				'jenis_saldo' => $this->input->post('jenis_saldo')[$i],
				'saldo' => $this->input->post('saldo')[$i],
			);
			// Simpan data ke database melalui model
			$this->M_tjurnal->simpantj($data, 'tb_tjurnal');
		}


		// Setelah data disimpan, Anda dapat melakukan redirect ke halaman yang diinginkan
		redirect('index.php/jurnal/C_tjurnal');
	}
	public function hapus_tjurnal($id_tjurnal)
	{
		$this->M_tjurnal->hapus_tjurnal($id_tjurnal, 'tb_tjurnal');

		$this->session->set_flashdata('success', 'Akun berhasil dihapus.');
		redirect('index.php/jurnal/C_tjurnal');
	}
	public function Vubah_tjurnal($id_tjurnal)
	{
		// Get the data for the specific tjurnal using the $id_tjurnal
		$data['tjurnal'] = $this->M_tjurnal->get_tjurnal_by_id($id_tjurnal);
		$data['pelanggan'] =  $this->M_pelanggan->tampil_data();
		$data['akun1'] = $this->M_akun->tampil_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/Ubah_tjurnal', $data);
		$this->load->view('templates/footer');
	}
	public function C_ubah_tjurnal()
	{
		$id_tjurnal = $this->input->post('id_tjurnal');

		$jumlah = count($this->input->post('saldo'));
		//print_r($jumlah);die();
		for ($i = 0; $i < $jumlah; $i++) {
			$data = array(
				'tanggal' => $this->input->post('tanggal'),
				'nama_pelanggan' => $this->input->post('nama_pelanggan'),
				'keterangan' => $this->input->post('keterangan'),
				'id_akun1' => $this->input->post('nama_akun')[$i],
				'jenis_saldo' => $this->input->post('jenis_saldo')[$i],
				'saldo' => $this->input->post('saldo')[$i],

			);

			// Panggil model M_tjurnal untuk melakukan update data
			$this->M_tjurnal->ubah_tjurnal($id_tjurnal, $data, 'tb_tjurnal');

			// Redirect ke halaman daftar jurnal
			redirect('index.php/jurnal/C_tjurnal');
		}
	}
}

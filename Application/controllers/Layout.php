<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();			
		if ($this->session->userdata('status') != "login") {
			redirect(base_url(""));
		}
		$this->load->model('User_model');
		$this->load->model('M_pelanggan');
		$this->load->model('M_tjurnal');
		
		$this->load->library('session');
	}



	public function index()
	{
		$query = $this->db->select("COUNT(*) as total_pelanggan")
                  ->from('tb_pelanggan')
                  ->get();
    	$data['total_pelanggan'] = $query->row()->total_pelanggan;

		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "total_jasa")
			->from('tb_tjurnal')
			->where('id_akun1', 2001060054)
			->get();
		$data['total_jasa'] = $query->row()->total_jasa;

		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "operasional")
		->from('tb_tjurnal')
		->where('id_akun1', 2001060056)
		->get();
		$data['operasional'] = $query->row()->operasional;
		
		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "utang_bank")
		->from('tb_tjurnal')
		->where('id_akun1', 2001060058)
		->get();
		$data['utang_bank'] = $query->row()->utang_bank;

		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "total_dagang")
			->from('tb_tjurnal')
			->where('id_akun1', 2001060055)
			->get();
		$data['total_dagang'] = $query->row()->total_dagang;

		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "total_piutang")
			->from('tb_tjurnal')
			->where('id_akun1', 2001060042)
			->get();
		$data['total_piutang'] = $query->row()->total_piutang;


		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "total_kas")
			->from('tb_tjurnal')
			->where('id_akun1', 2001060041)
			->get();
		$data['total_kas'] = $query->row()->total_kas;

		$query = $this->db->select_sum("CASE WHEN jenis_saldo = 'debit' THEN saldo ELSE -saldo END", "bunga")
			->from('tb_tjurnal')
			->where('id_akun1', 2001060053)
			->get();
		$data['bunga'] = $query->row()->bunga;

		$data['pelanggan'] =  $this->M_pelanggan->tampil_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('Layout', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_pelanggan()
	{
		// Tangkap data dari form
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$cicilan = $this->input->post('cicilan');
		$pinjaman = $this->input->post('pinjaman');
		$piutang = $this->input->post('piutang');

		$jatuh_tempo = $this->input->post('jatuh_tempo');
		$alamat = $this->input->post('alamat');
		$angsuran = $this->input->post('angsuran');
		$jumlah = $this->input->post('jumlah');

		// Konfigurasi upload foto
		$config['upload_path'] = './pelanggan/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 102400; // 100MB (100000KB)
		$config['file_name'] = uniqid(); // Generate unique filename

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			// Jika upload foto berhasil
			$upload_data = $this->upload->data();
			$gambar = $upload_data['file_name'];

			// Data pelanggan yang akan disimpan ke database
			$data_pelanggan = array(
				'nama_pelanggan' => $nama_pelanggan,
				'no_hp' => $no_hp,
				'cicilan' => $cicilan,
				'pinjaman' => $pinjaman,
				'piutang' => $piutang,
				'jatuh_tempo' => $jatuh_tempo,
				'alamat' => $alamat,
				'angsuran' => $angsuran,
				'jumlah' => $jumlah,
				'gambar' => $gambar
			);

			// Simpan data pelanggan ke database melalui model
			$this->M_pelanggan->tambah_pelanggan($data_pelanggan);

			// Redirect atau tampilkan pesan sukses
			redirect('index.php/pelanggan/C_pelanggan');
		} else {
			// Jika upload foto gagal
			$error = $this->upload->display_errors();
			// Tampilkan pesan error
			echo $error;
		}
	}
	public function hapus_pelanggan($id_pelanggan)
	{

		$this->M_pelanggan->hapus_pelanggan($id_pelanggan, 'tb_pelanggan');

		redirect('index.php/pelanggan/C_pelanggan');
	}
	public function edit_pelanggan($id_pelanggan)
	{
		// Tangkap data dari form
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$cicilan = $this->input->post('cicilan');
		$pinjaman = $this->input->post('pinjaman');
		$piutang = $this->input->post('piutang');
		$jatuh_tempo = $this->input->post('jatuh_tempo');
		$alamat = $this->input->post('alamat');
		$angsuran = $this->input->post('angsuran');
		$jumlah = $this->input->post('jumlah');

		// Cek apakah ada file gambar yang diunggah
		if ($_FILES['gambar']['name']) {
			// Konfigurasi upload foto
			$config['upload_path'] = './pelanggan/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 102400; // 100MB
			$config['file_name'] = uniqid(); // Generate unique filename

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				// Jika upload foto berhasil
				$upload_data = $this->upload->data();
				$gambar = $upload_data['file_name'];

				// Data pelanggan yang akan diupdate di database
				$data_pelanggan = array(
					'nama_pelanggan' => $nama_pelanggan,
					'no_hp' => $no_hp,
					'cicilan' => $cicilan,
					'pinjaman' => $pinjaman,
					'piutang' => $piutang,
					'jatuh_tempo' => $jatuh_tempo,
					'alamat' => $alamat,
					'angsuran' => $angsuran,
					'jumlah' => $jumlah,
					'gambar' => $gambar
				);

				// Update data pelanggan di database melalui model
				$this->M_pelanggan->edit_pelanggan($id_pelanggan, $data_pelanggan);
			} else {
				// Jika upload foto gagal
				$error = $this->upload->display_errors();
				// Tampilkan pesan error
				echo $error;
				// Hentikan eksekusi
				return;
			}
		} else {
			// Jika tidak ada file gambar yang diunggah
			// Data pelanggan yang akan diupdate di database
			$data_pelanggan = array(
				'nama_pelanggan' => $nama_pelanggan,
				'no_hp' => $no_hp,
				'cicilan' => $cicilan,
				'pinjaman' => $pinjaman,
				'piutang' => $piutang,
				'jatuh_tempo' => $jatuh_tempo,
				'alamat' => $alamat,
				'angsuran' => $angsuran,
				'jumlah' => $jumlah
			);

			// Update data pelanggan di database melalui model
			$this->M_pelanggan->edit_pelanggan($id_pelanggan, $data_pelanggan);
		}

		// Redirect atau tampilkan pesan sukses
		redirect('index.php/pelanggan/C_pelanggan');
	}
	public function decrement_jumlah($id_pelanggan)
	{
		// Ambil data pelanggan berdasarkan ID
		$pelanggan = $this->M_pelanggan->get_pelanggan_by_id($id_pelanggan);

		// Periksa jika jumlah angsuran lebih besar dari 0
		if ($pelanggan->jumlah > 0) {
			// Kurangi jumlah angsuran
			$pelanggan->jumlah--;

			// Mengubah tanggal dengan menambah 1 bulan
			$tanggal = date('Y-m-d', strtotime($pelanggan->jatuh_tempo . ' +1 month'));

			// Update data pelanggan dengan jumlah angsuran dan tanggal baru
			$data_pelanggan = array(
				'jumlah' => $pelanggan->jumlah,
				'jatuh_tempo' => $tanggal
			);
			$this->M_pelanggan->update_pelanggan($id_pelanggan, $data_pelanggan);
		}

		// Redirect atau tampilkan pesan sukses
		redirect('index.php/pelanggan/C_pelanggan');
	}
}

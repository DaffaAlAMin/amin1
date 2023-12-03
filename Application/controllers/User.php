<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('User_model', 'um');
		$this->load->library('form_validation');

	}

	public function login()
	{
	
		$this->load->view('user/V_login');
		
	}
    function aksi_login(){
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$where = array(
			'Username' => $username,
			'Password' => $password
		);
		$cek = $this->um->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">Selamat Anda Berhasil Login</div>');
			

			redirect(base_url("index.php/Layout"));


		}else{
			$this->session->set_flashdata('gagal','<div class="alert alert-primary" role="alert">Username dan Password tidak valid</div>');
			

			redirect(base_url(""));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}

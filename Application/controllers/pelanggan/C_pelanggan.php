<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pelanggan extends CI_Controller
{

	public function __construct()
	
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}
		$this->load->model('User_model');
		$this->load->model('M_pelanggan');
		$this->load->library('session');
	}



	public function index()
	{
		$data['pelanggan'] =  $this->M_pelanggan->tampil_data();


		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pelanggan/V_pelanggan', $data);
		$this->load->view('templates/footer');
	}
}

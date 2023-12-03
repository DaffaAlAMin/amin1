<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	// method untuk mengambil data dari database
	public function Get_data()
	{
		return $this->db->get('user')->result();
	}
	public function insert($input)
	{
		
		$data = [
			'username' => htmlspecialchars($this->input->post('Username', true)),
			'password' => $this->input->post('Password'),
			
			

		];
		return $this->db->insert('user', $data);


	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}







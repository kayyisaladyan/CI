<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Auth_models');
	}

public function login()
	{
		$judul['judul'] = 'Ini Halaman Login';
		$this->load->view('dashboard/login');
		
	}

public function proses_login() {
	$this->form_validation->set_rules('username','Username','required|min_length[4]');
	$this->form_validation->set_rules('password','Password','required');

	if($this->form_validation->run()==FALSE){
		$this->login();
	} else {
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$data = array(
				'username' => $username,
				'password' => $password);

		$cek_user = $this->Auth_models->login($data);
		if ($cek_user->num_rows() > 0) {
			$this->session->set_userdata($cek_user->row_array());
			redirect(base_url('dashboard/index'));
			# code...
		} else {
			$this->session->set_flashdata('status','Username atau Password tidak ditemukan');
			redirect(base_url('auth/login'));
		}
	}
}

}

	public function logout(){
		$this->session->session_destroy();
		redirect(base_url()));
	}
	?>
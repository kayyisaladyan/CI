<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function index()
	{
		$this->load->view('form');
	}

	public function proses_input(){
		$pesan = $this->input->post('pesan');
		$this->session->set_flashdata('nama', $pesan);
		redirect(base_url('Coba/hasil'));
	}

	public function hasil() {
		$this->load->view('hasil');
	}
}

?> 
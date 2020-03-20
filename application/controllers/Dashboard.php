<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('wisata_model');
	}

	public function index()
	{
		$query = $this->wisata_model->getAllData()->result();
		$data['data_wisata'] = $query;

		$judul['judul'] = 'Ini Halaman index';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/index', $data);
		$this->load->view('layouts/footer');
	}

	public function charts()
	{
		$judul['judul'] = 'Ini Halaman Charts';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/charts');
		$this->load->view('layouts/footer');
	}

	public function tables()
	{
		$query = $this->wisata_model->getAllData()->result();
		$data['data_wisata'] = $query;

		$judul['judul'] = 'Ini Halaman Tables';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/tables', $data);
		$this->load->view('layouts/footer');
	}	

	public function edit()
	{

		$judul['judul'] = 'Ini Halaman Edit';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/edit');
		$this->load->view('layouts/footer');
	}		

	public function form()
	{
		$judul['judul'] = 'Ini Halaman Form';
		$this->load->view('dashboard/form');
	}

		
}

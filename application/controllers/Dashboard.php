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

	public function edit($id)
	{
		$data['wisata'] = $this->wisata_model->getWisataSingle($id)->row();
		$judul['judul'] = 'Ini Halaman Edit';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/edit',$data);
		$this->load->view('layouts/footer');
	}

	public function proses_edit($id)
	{
	 $config['upload_path']          = './images/';
	 $config['allowed_types']        = 'gif|jpg|png|jpeg';
	 $config['max_size']             = 2000;

	 $this->load->library('upload', $config);

	 if (! $this->upload->do_upload('gambar')) {
		 $this->session->set_flashdata('status','File gagal diupload.');
		 redirect(base_url('Dashboard/edit/'.$id));
		 }else {
		 $this->wisata_model->updateWisata();
		 $this->session->set_flashdata('flash','Diubah');
		 redirect(base_url('dashboard/tables'));
		 }
	}

	public function hapus($id)
	{
	   $this->wisata_model->deleteWisata($id);
		 redirect(base_url('dashboard/tables'));
	}

	public function form()
	{
		$judul['judul'] = 'Ini Halaman Form';
		$this->load->view('dashboard/form');
	}


}

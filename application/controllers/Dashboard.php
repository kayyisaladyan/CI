<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Wisata_model');
	}

	public function index()
	{
		if ($this->session->username) {
			$query = $this->Wisata_model->getWisataNumber();
			$data['jml_wisata'] = $query;

			$judul['judul'] = 'Ini Halaman index';
			$this->load->view('layouts/header', $judul);
			$this->load->view('dashboard/index', $data);
			$this->load->view('layouts/footer');
		}else {
			redirect('auth/index');
		}
	}

	public function daftar_wisata()
	{
		$query = $this->Wisata_model->getAllData()->result();
		$data['data_wisata'] = $query;

		$judul['judul'] = 'Ini Halaman Tables';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/daftar_wisata', $data);
		$this->load->view('layouts/footer');
	}

	public function tambah_wisata()
	{
		$judul['judul'] = 'Ini Halaman tambah wisata';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/tambah_wisata');
		$this->load->view('layouts/footer');
	}

	public function proses_tambah_wisata()
	{
		$this->form_validation->set_rules('nama_wisata','nama wisata','required|min_length[4]');
    $this->form_validation->set_rules('lokasi','lokasi','required');
    $this->form_validation->set_rules('harga','harga','required|is_numeric');
		$this->form_validation->set_rules('jam_operasional','jam operasional','required|min_length[4]');
		$this->form_validation->set_rules('kontak_wisata','kontak wisata','required|min_length[4]');
		$this->form_validation->set_rules('deskripsi','deskripsi','required|min_length[4]');

    if (empty($_FILES['gambar']['name'])) {
      $this->form_validation->set_rules('gambar','Gambar','required');
    }
    if ($this->form_validation->run() == FALSE) {
      $this->tambah_wisata();
    }else {
			$id_wisata        = $this->Wisata_model->idWisata();
			$nama_wisata      = $this->input->post('nama_wisata',true);
			$lokasi  				  = $this->input->post('lokasi',true);
			$harga      			= $this->input->post('harga',true);
			$jam_operasional  = $this->input->post('jam_operasional',true);
			$kontak_wisata  	= $this->input->post('kontak_wisata',true);
			$deskripsi 			  = $this->input->post('deskripsi',true);

      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 4000;

      $this->load->library('upload', $config);

      if (! $this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('status','File gagal diupload.');
        redirect(base_url('Dashboard/tambah_wisata'));
      }else {
        $gambar = $this->upload->data('file_name');

				$data = [
				 	 "id_wisata"        => $id_wisata,
					 "nama_wisata"      => $nama_wisata,
					 "lokasi"   				=> $lokasi,
					 "harga"       			=> $harga,
					 "jam_operasional"  => $jam_operasional,
					 "kontak_wisata"   	=> $kontak_wisata,
					 "deskripsi"  			=> $deskripsi,
					 "rating"  			    => "0",
					 "gambar" 					=> $gambar
				 ];

        $query = $this->Wisata_model->tambahWisata($data);

        if ($query) {
          redirect(base_url('Dashboard/daftar_wisata'));
        }
      }
    }
	}

	public function edit_wisata($id)
	{
		$data['wisata'] = $this->Wisata_model->getWisataSingle($id)->row();
		$judul['judul'] = 'Ini Halaman Edit';
		$this->load->view('layouts/header', $judul);
		$this->load->view('dashboard/edit_wisata',$data);
		$this->load->view('layouts/footer');
	}

	public function proses_edit($id)
	{
	 $config['upload_path']          = './images/';
	 $config['allowed_types']        = 'gif|jpg|png|jpeg';
	 $config['max_size']             = 8000;

	 $this->load->library('upload', $config);

	 if (! $this->upload->do_upload('gambar')) {
		 $this->session->set_flashdata('status','File gagal diupload.');
		 redirect(base_url('Dashboard/edit_wisata/'.$id));
		 }else {
		 $this->wisata_model->updateWisata();
		 $this->session->set_flashdata('flash','Diubah');
		 redirect(base_url('dashboard/daftar_wisata'));
		 }
	}

	public function hapus($id)
	{
	   $this->Wisata_model->deleteWisata($id);
		 redirect(base_url('dashboard/daftar_wisata'));
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Wisata_model');
  }

  public function index()
  {
    $data['wisata'] = $this->Wisata_model->getWisata()->result();
    $data['title']  = 'Wisata';

    $this->load->view('layouts/header',$data);
    $this->load->view('wisata/wisata',$data);
    $this->load->view('layouts/footer');
  }

  public function detail_wisata($id_wisata)
  {
    $data['wisata'] = $this->Wisata_model->getWisataSingle($id_wisata)->row();
    $data['title']  = 'Detail Wisata';

    $this->load->view('layouts/header',$data);
    $this->load->view('wisata/detail_wisata',$data);
    $this->load->view('layouts/footer');
  }

}

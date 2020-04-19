<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Wisata_model');
    $this->load->model('Review_model');
  }

  public function index()
  {
    $data['limit']   = $this->Wisata_model->getWisataLimit()->result();
    $data['popular'] = $this->Wisata_model->getWisataPopular()->result();
    $data['review']  = $this->Review_model->getReview()->result();
    $data['title']   = 'Home';

    $this->load->view('layouts/header',$data);
    $this->load->view('Home/index',$data);
    $this->load->view('layouts/footer');
  }

  public function wisata()
  {
    $data['wisata'] = $this->Wisata_model->getWisata()->result();
    $data['title']  = 'Wisata';

    $this->load->view('layouts/header',$data);
    $this->load->view('Home/wisata',$data);
    $this->load->view('layouts/footer');
  }

  public function detail_wisata($id_wisata)
  {
    $data['wisata'] = $this->Wisata_model->getWisataSingle($id_wisata)->row();
    $data['popular'] = $this->Wisata_model->getWisataPopular1()->result();
    $data['title']  = 'Detail Wisata';

    $this->load->view('layouts/header',$data);
    $this->load->view('Home/detail_wisata',$data);
    $this->load->view('layouts/footer');
  }

}

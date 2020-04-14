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

}

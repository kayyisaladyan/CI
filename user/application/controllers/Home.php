<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['title'] = 'Home'
    $this->load->view('layouts/header',$data);
    $this->load->view('Home/index');
    $this->load->view('layouts/footer');
  }

}
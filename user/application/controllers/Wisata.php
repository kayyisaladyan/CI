<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Wisata_model');
    $this->load->model('Review_model');
  }

  public function index()
  {
    $config['total_rows'] = $this->db->count_all_results('wisata');
    $config['per_page']   = 3;
    $this->pagination->initialize($config);
    $data['start']    = $this->uri->segment(3);
    $data['wisata'] = $this->Wisata_model->getWisata($config['per_page'],$data['start'])->result();
    $data['title']  = 'Wisata';

    $this->load->view('layouts/header',$data);
    $this->load->view('wisata/wisata',$data);
    $this->load->view('layouts/footer');
  }

  public function detail_wisata($id_wisata)
  {
    $data['title']  = 'Detail Wisata';
    $data['wisata'] = $this->Wisata_model->getWisataSingle($id_wisata)->row();
    $data['review'] = $this->Review_model->getReview($id_wisata)->result();
    $data['jumlah'] = $this->Review_model->getJumlahReview($id_wisata)->num_rows();

    $this->load->view('layouts/header',$data);
    $this->load->view('wisata/detail_wisata',$data);
    $this->load->view('layouts/footer');
  }

  public function ulasan($id_wisata)
  {
      $id_user       = $this->session->id_user;
      $email         = $this->session->email;
      $nama          = $this->session->nama;

      $id_review     = $this->Review_model->idReview();
      $keterangan    = $this->input->post('keterangan');
      $rating        = $this->input->post('rating');
      $validasi      = $this->Review_model->getValidasi($id_user,$id_wisata)->result();

      if (empty($validasi)) {
        echo "<script>alert('Anda belum membeli tiket wisata ini');history.go(-1);</script>";
      }else {
        $data = array(
            'id_review'   => $id_review,
            'id_wisata'   => $id_wisata,
            'email'       => $email,
            'keterangan'  => $keterangan,
            'nama'        => $nama,
            'rating'      => $rating,
            'email'       => $email
        );
        $this->Review_model->insertUlasan($data);
        echo "<script>alert('Anda berhasil melakukan review, Terima Kasih!');history.go(-1);</script>";
      }

  }

}

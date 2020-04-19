<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Wisata_model');
  }

  public function tambah_keranjang()
  {
    if ($this->session->username) {
      $id_wisata = $this->input->get('id_wisata');
      $data['wisata'] = $this->Wisata_model->getWisataSingle($id_wisata)->row();
      $qty = $this->input->post('qty') ? $this->input->post('qty') : 1;
      $data = array(
          'id'   => $id_wisata,
          'qty'  => $qty,
          'price'=> $data['wisata']->harga,
          'name' => $data['wisata']->nama_wisata
      );

      $this->cart->insert($data);
      redirect('Transaksi/keranjang');
    }else {
      $this->cart->destroy();
      redirect(base_url('Auth'));
    }
  }

  public function keranjang()
  {
    if ($this->session->username) {
      $data['cart']  = $this->cart->contents();
      $data['title']  = 'Chart';
      $this->load->view('layouts/header',$data);
      $this->load->view('Home/keranjang',$data);
      $this->load->view('layouts/footer');
    }else {
      redirect(base_url('Auth'));
    }
  }

  public function hapus_keranjang($rowid='')
  {
    if ($rowid) {
      $this->cart->remove($rowid);
      redirect(base_url('Transaksi/keranjang'));
    }else {
      $this->cart->destroy();
      $this->session->set_flashdata('flash','Dihapus');
      redirect(base_url('Transaksi/keranjang'));
    }
	}

  public function update_keranjang($rowid)
  {
    $qty  = $this->input->post('qty');
    if ($rowid) {
      $data = array(
          'rowid'   => $rowid,
          'qty'   => $qty
      );
      $this->cart->update($data);
      redirect(base_url('Transaksi/keranjang'));

    }else {
      redirect(base_url('Transaksi/keranjang'));
    }
  }

}

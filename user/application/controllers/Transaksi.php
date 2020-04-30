<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if (empty($this->session->username)) {
      echo "<script>alert('Anda harus login terlebih dahulu');history.go(-1);</script>";
      $this->cart->destroy();
    }
    $this->load->model('Wisata_model');
    $this->load->model('Auth_model');
    $this->load->model('Transaksi_model');
  }


  public function keranjang()
  {
      $data['cart']   = $this->cart->contents();
      $data['title']  = 'Chart';
      $this->load->view('layouts/header',$data);
      $this->load->view('transaksi/keranjang',$data);
      $this->load->view('layouts/footer');
  }

  public function checkout()
  {
    if ($this->session->username && $this->cart->contents()) {
      $data['title']   = 'checkout';
      $username        = $this->session->username;
      $data['cart']    = $this->cart->contents();
      $data['profile'] = $this->Auth_model->getUser($username)->row();
      $this->load->view('layouts/header',$data);
      $this->load->view('transaksi/checkout',$data);
      $this->load->view('layouts/footer');
    }else {
      redirect('wisata');
    }
  }

  public function proses_check_out()
  {
    $this->load->helper('string');
    date_default_timezone_set('Asia/Jakarta');
    $cart             = $this->cart->contents();
    $id_transaksi     = $this->Transaksi_model->id_transaksi();
    $id_user          = $this->session->id_user;
    $tanggal_deadline = date('Y-m-d');
    $kode_acak        = random_string('alnum',3);
    $kode_transaksi   = $kode_acak . $this->session->no_telepon;
    $total            = $this->cart->total();

    $data_transaksi = array(
          'id_transaksi'     => $id_transaksi,
          'id_user'          => $id_user,
          'tgl_transaksi'    => $tanggal_deadline,
          'status_transaksi' => 'Belum dibayar',
          'kode_transaksi'   => $kode_transaksi,
          'total'            => $total
      );
    $this->Transaksi_model->insertTransaksi($data_transaksi);
    foreach ($cart as $cart => $wisata) {
      $id_wisata = $this->Wisata_model->getWisataSingle($wisata['id'])->row();
      $data_detail = array(
          'id_transaksi'     => $id_transaksi,
          'id_wisata'        => $id_wisata->id_wisata,
          'jumlah_tiket'     => $wisata['qty'],
          'sub_total'        => $wisata['subtotal']
      );
      $this->Transaksi_model->insertDetailTransaksi($data_detail);
    }
    $this->cart->destroy();
    redirect('Transaksi/konfirmasi/'.$kode_transaksi);
  }

  public function konfirmasi($kode_transaksi)
  {
    $data['title']     = 'Konfirmasi';
    $data['single']    = $this->Transaksi_model->getSingleDetailTransaksi($kode_transaksi)->result();
    $data['transaksi'] = $this->Transaksi_model->getSingleTransaksi($kode_transaksi)->row();
    $this->load->view('layouts/header',$data);
    $this->load->view('transaksi/konfirmasi',$data);
    $this->load->view('layouts/footer');
  }

  public function daftar_transaksi()
  {
    $data['title']     = 'Daftar Transaksi';
    $data['transaksi'] = $this->Transaksi_model->getAllTransaksi()->result();
    $this->load->view('layouts/header',$data);
    $this->load->view('transaksi/daftar_transaksi',$data);
    $this->load->view('layouts/footer');
  }

  public function invoice($kode_transaksi)
  {
    $data['title']     = 'Invoice';
    $data['single']    = $this->Transaksi_model->getSingleDetailTransaksi($kode_transaksi)->result();
    $data['transaksi'] = $this->Transaksi_model->getSingleTransaksi($kode_transaksi)->row();
    $this->load->view('transaksi/invoice',$data);
  }

  public function tambah_keranjang()
  {
      $id_wisata      = $this->input->get('id_wisata');
      $data['wisata'] = $this->Wisata_model->getWisataSingle($id_wisata)->row();
      $qty            = $this->input->post('qty') ? $this->input->post('qty') : 1;

      $data = array(
          'id'   => $id_wisata,
          'qty'  => $qty,
          'price'=> $data['wisata']->harga,
          'name' => $data['wisata']->nama_wisata
      );
      $this->cart->insert($data);
      redirect('Transaksi/keranjang');
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
          'qty'     => $qty
      );
      $this->cart->update($data);
      redirect(base_url('Transaksi/keranjang'));

    }else {
      redirect(base_url('Transaksi/keranjang'));
    }
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model{

  public function id_transaksi()
  {
    $transaksi = "TRX";
    $q = "SELECT MAX(TRIM(REPLACE(id_transaksi,'TRX', ''))) as nama
    FROM transaksi WHERE id_transaksi LIKE '$transaksi%'";
    $baris = $this->db->query($q);
    $akhir = $baris->row()->nama;
    $akhir++;
    $id =str_pad($akhir, 4, "0", STR_PAD_LEFT);
    $id = "TRX".$id;
    return $id;
  }

  public function insertTransaksi($data_transaksi)
  {
    $query = $this->db->insert('transaksi', $data_transaksi);
    return $query;
  }

  public function insertDetailTransaksi($data_detail)
  {
    $query = $this->db->insert('detail_transaksi', $data_detail);
    return $query;
  }

  public function getAllTransaksi()
  {
    $id_user = $this->session->id_user;
    return $this->db->get_where('transaksi',['id_user' => $id_user]);
  }

  public function getSingleTransaksi($kode)
  {
    return $this->db->get_where('transaksi', ['kode_transaksi' => $kode]);
  }

  public function getSingleDetailTransaksi($kode)
  {
    $query = $this->db->query("SELECT wisata.*, transaksi.*, detail_transaksi.* FROM detail_transaksi
                      JOIN transaksi USING(id_transaksi) JOIN wisata USING(id_wisata)
                      WHERE transaksi.kode_transaksi = '$kode'");
    return $query;
  }

}

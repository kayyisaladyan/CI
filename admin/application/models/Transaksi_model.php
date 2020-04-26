<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model{

  public function getTransaksi()
  {
    $this->db->select('transaksi.*,user.*');
    $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.id_user = user.id_user');
    return $this->db->get();
  }

  public function verifikasi($data,$id_transaksi)
  {
    $this->db->where('id_transaksi', $id_transaksi);
    return $this->db->update('transaksi', $data);
  }

}

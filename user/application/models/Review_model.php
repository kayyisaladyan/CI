<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model{

  public function idReview()
  {
    $review = "RV";
    $q = "SELECT MAX(TRIM(REPLACE(id_review,'RV', ''))) as nama
    FROM review WHERE id_review LIKE '$review%'";
    $baris = $this->db->query($q);
    $akhir = $baris->row()->nama;
    $akhir++;
    $id =str_pad($akhir, 4, "0", STR_PAD_LEFT);
    $id = "RV".$id;
    return $id;
  }

  public function getReview($id_wisata)
  {
    return $this->db->get_where('review',['id_wisata' => $id_wisata]);
  }

  public function getJumlahReview($id_wisata)
  {
      $query = $this->db->get_where('review',['id_wisata' => $id_wisata]);
      return $query;
  }

  public function getValidasi($id_user,$id_wisata)
  {
      $procedure = "CALL pvalidasi('$id_user','$id_wisata')";
      $query     = $this->db->query($procedure);
      return $query;
  }

  public function insertUlasan($data)
  {
    return $this->db->insert('review', $data);
  }

}

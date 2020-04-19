<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model{

  public function getWisata()
  {
    return $this->db->get('wisata');
  }

  public function getWisataSingle($id_wisata)
  {
    return $this->db->get_where('wisata',array('id_wisata' => $id_wisata));
  }

  public function getWisataLimit()
  {
    return $this->db->get('wisata', '9');
  }

  public function getWisataPopular()
  {
    return $this->db->get('wisata', '10','7');
  }
  public function getWisataPopular1()
  {
    return $this->db->get('wisata', '10','6');
  }

}

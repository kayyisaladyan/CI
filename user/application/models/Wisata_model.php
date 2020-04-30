<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model{

  public function getWisata($limit, $start)
  {
    return $this->db->get('wisata', $limit, $start);
  }

  public function getWisataSingle($id_wisata)
  {
    return $this->db->get_where('wisata',array('id_wisata' => $id_wisata));
  }

  public function getWisataPopular()
  {
    return $this->db->get('wisata', '10','7');
  }

  public function getWisataRated()
  {
    return $this->db->get('wisata', '3','2');
  }


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model{

  public function getWisataLimit()
  {
    return $this->db->get('wisata', '9');
  }

  public function getWisataPopular()
  {
    return $this->db->get('wisata', '10','7');
  }

}

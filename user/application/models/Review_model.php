<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model{

  public function getReview()
  {
    return $this->db->get('review');
  }

}

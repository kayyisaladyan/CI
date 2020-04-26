<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  public function login_admin($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $query  = $this->db->get('admin');
    return $query;
  }

}

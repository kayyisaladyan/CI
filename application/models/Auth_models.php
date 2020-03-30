<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_models extends CI_Model{

  public function login_admin($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $this->db->where('role','Admin');
    $query  = $this->db->get('user');
    return $query;
  }

}

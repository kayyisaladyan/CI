<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  public function id_user()
  {
    $user = "USR";
    $q = "SELECT MAX(TRIM(REPLACE(id_user,'USR', ''))) as nama
          FROM user WHERE id_user LIKE '$user%'";
    $baris = $this->db->query($q);
    $akhir = $baris->row()->nama;
    $akhir++;
    $id =str_pad($akhir, 4, "0", STR_PAD_LEFT);
    $id = "USR".$id;
    return $id;
  }

  public function login($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $this->db->where('role','User');
    $query  = $this->db->get('user');
    return $query;
  }

  public function register($data)
  {
    $query = $this->db->insert('user',$data);
    return $query;
  }

}

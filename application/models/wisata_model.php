<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata_model extends CI_Model {


	public function getAllData()
	{
		return $this->db->get('data_wisata');
	}
}
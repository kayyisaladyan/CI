<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata_model extends CI_Model {


	public function getAllData()
	{
		return $this->db->get('wisata');
	}

	public function getWisataSingle($id)
	{
	   $query = $this->db->get('wisata',['id_wisata' => $id]);
		 return $query;
	}

	public function updateWisata()
	{
		$id_wisata        = $this->input->post('id_wisata',true);
		$nama_wisata      = $this->input->post('nama_wisata',true);
		$lokasi  				 = $this->input->post('lokasi',true);
		$harga      			 = $this->input->post('harga',true);
		$jam_operasional  = $this->input->post('jam_operasional',true);
		$kontak_wisata  	 = $this->input->post('kontak_wisata',true);
		$deskripsi 			 = $this->input->post('deskripsi',true);
		$gambar    			 = $this->upload->data('file_name');
		$data = [
			 "nama_wisata"       => $nama_wisata,
			 "lokasi"   => $lokasi,
			 "harga"       => $harga,
			 "jam_operasional"     => $jam_operasional,
			 "kontak_wisata"   => $kontak_wisata,
			 "deskripsi"  => $deskripsi,
			 "gambar" => $gambar
		 ];
	   $this->db->where('id_wisata', $id_wisata);
		 $this->db->update('wisata', $data);
	}

	public function deleteWisata($id)
	{
		$this->db->where('id_wisata', $id);
		$this->db->delete('wisata');
	}
}

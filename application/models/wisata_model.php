<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata_model extends CI_Model {

	public function idWisata()
	{
		$wisata = "WST";
    $q = "SELECT MAX(TRIM(REPLACE(id_wisata,'WST', ''))) as nama
          FROM wisata WHERE id_wisata LIKE '$wisata%'";
    $baris = $this->db->query($q);
    $akhir = $baris->row()->nama;
    $akhir++;
    $id =str_pad($akhir, 4, "0", STR_PAD_LEFT);
    $id = "WST".$id;
    return $id;
	}

	public function getAllData()
	{
		return $this->db->get('wisata');
	}

	public function getWisataNumber()
	{
	   return $this->db->count_all('wisata');
	}

	public function getWisataSingle($id)
	{
	   $query = $this->db->get_where('wisata',['id_wisata' => $id]);
		 return $query;
	}

	public function tambahWisata($data)
	{
		 $query = $this->db->insert('wisata',$data);
		 return $query;
	}

	public function updateWisata()
	{
		$id_wisata        = $this->input->post('id_wisata',true);
		$nama_wisata      = $this->input->post('nama_wisata',true);
		$lokasi  				  = $this->input->post('lokasi',true);
		$harga      			= $this->input->post('harga',true);
		$jam_operasional  = $this->input->post('jam_operasional',true);
		$kontak_wisata  	= $this->input->post('kontak_wisata',true);
		$deskripsi 			  = $this->input->post('deskripsi',true);
		$gambar    			  = $this->upload->data('file_name');
		$data = [
			 "nama_wisata"      => $nama_wisata,
			 "lokasi"   				=> $lokasi,
			 "harga"       			=> $harga,
			 "jam_operasional"  => $jam_operasional,
			 "kontak_wisata"   	=> $kontak_wisata,
			 "deskripsi"  			=> $deskripsi,
			 "gambar" 					=> $gambar
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

<?php

class M_data extends CI_Model
{

	
	function getWisata()
	{
		$query = $this->db->query("SELECT * FROM wisata ");
		return $query;
	}


	
	function selectWisata($id)
	{
		$query = $this->db->query("SELECT * FROM wisata WHERE id = $id");
		return $query;
	}


	
	function getList()
	{
		$query = $this->db->query("SELECT * FROM wisata ORDER BY id ASC LIMIT 6  ");
		return $query;
	}

	
	function fillWisata($key)
	{
		$query = $this->db->query("SELECT * FROM wisata WHERE kategori = '$key'  ");
		return $query;
	}


	
	public function getTotalCart($id)
	{
		$query = $this->db->query("SELECT COUNT(id) AS mycart FROM keranjang where id_user = $id");
		return $query;
	}


	
	public function getDetailPesan($id)
	{
		$query = $this->db->query("SELECT * FROM pesan WHERE id = $id ");
		return $query;
	}
}
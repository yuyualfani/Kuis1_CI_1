<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DadtarProduk extends CI_Model {

	
public function getDataArray2()
	{
		$query=$this->db->query("select b.namaProduk,b.tanggalProduksi,b.tanggalKadaluarsa from perusahaan as a join produk as b on a.id=b.id group by b.namaProduk");
	return $query->result_array();
	}
}

/* End of file DadtarProduk.php */
/* Location: ./application/models/DadtarProduk.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Model {

	public function getDataArray()
	{
		$query=$this->db->query("select * from perusahaan");
	return $query->result_array();
	}

}

/* End of file Perusahaan.php */
/* Location: ./application/models/Perusahaan.php */
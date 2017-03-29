<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Model {

	public function getBiodataQueryArray()
{
	$query=$this->db->query("select * from biodata");
	return $query->result_array();
}


public function BiodataQueryArray()
{
	$query=$this->db->query("select*from biodata");
	return $query->result_array();
}

public function BiodataQueryBiasa()
{
	$query=$this->db->query("select*from biodata");
	return $query->result();
}

public function BiodataBuilderArray()
{
	$query=$this->db->get('Biodata');
	return $query->result_array();

}
public function BiodataBuilderBiasa()
{
	$query=$this->db->get('Biodata');
	return $query->result();

}







}

/* End of file Coba.php */
/* Location: ./application/models/Coba.php */
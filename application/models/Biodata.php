
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}

public function getBiodataQueryArray()
{
	$query=$this->db->query("select * from biodata");
	return $query->result_array();
}

public function getBiodataQueryObject()
{
	$query=$this->db->query("select * from biodata");
	return $query->result();
}
public function getBiodataBuilderArray()
{
	$query=$this->db->get('biodata');
	return $query->result_array();
}	
public function getBiodataBuilderObject()
{
	$query=$this->db->get('biodata');
	return $query->result();
}


}

/* End of file Biodata.php */
/* Location: ./application/models/Biodata.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
{
	parent::__construct();
	
}
	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array'] = $this->biodata->getBiodataQueryArray();
		$data['biodata_object'] = $this->biodata->getBiodataQueryObject();
		$data['biodatabuilder_array'] = $this->biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object'] = $this->biodata->getBiodataBuilderObject();
	

		$this->load->view('tugas1/Home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
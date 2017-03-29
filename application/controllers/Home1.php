<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends CI_Controller {

	public function index()
	{
		$this->load->model('Coba');
		
		$data['biodata_array'] = $this->biodata->BiodataQueryArray();
		$this->load->view('Latihan1/Home');
	}

}

/* End of file Home1.php */
/* Location: ./application/controllers/Home1.php */
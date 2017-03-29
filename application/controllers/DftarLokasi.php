<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DftarLokasi extends CI_Controller {



public function __construct()
{
	parent::__construct();
	
}
	public function index()
	{
		$this->load->model('DaftarLokasi');
		$data['data_perusahaannn'] = $this->DaftarLokasi>getDataArray3();
		$this->load->view('DaftarLokasi',$data);
	}
	

}

/* End of file DftarLokasi.php */
/* Location: ./application/controllers/DftarLokasi.php */
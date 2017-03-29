<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainMenu extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Perusahaan');
		$data['data_perusahaan'] = $this->Perusahaan->getDataArray();
		$this->load->view('MainMenu',$data);
	}

}

/* End of file MainMenu.php */
/* Location: ./application/controllers/MainMenu.php */
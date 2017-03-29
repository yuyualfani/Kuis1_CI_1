<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarProdukk extends CI_Controller {


public function __construct()
{
	parent::__construct();
	$this->load->model('DadtarProduk');
	
}
	public function index()
	{

$data['data_perusahaann'] = $this->DadtarProduk->getDataArray2();
		$this->load->view('DaftarProduksi', $data);	



	}

	public function create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','trim|required');
			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_pegawai_salah');

			}
			else
			{
				$this->load->view('tambah_pegawai_sukses');
			}
	}
public function update()
	{
		
	}
	public function delete()
	{
		
	}
}



/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */



/* End of file DadtarProduk.php */
/* Location: ./application/controllers/DadtarProduk.php */
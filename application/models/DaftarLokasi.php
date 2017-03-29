 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class DaftarLokasi extends CI_Model {
 

 public function getDataArray3()
 {
 	$query=$this->db->query("select b.nama,a.namaLokasi,a.tanggalBerdiri from lokasi as b join perusahaan join b on a.id=b.id");
	return $query->result_array();
 }
 	
 
 }
 
 /* End of file DaftarLokasi.php */
 /* Location: ./application/models/DaftarLokasi.php */
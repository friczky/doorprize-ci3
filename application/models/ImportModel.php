<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModel extends CI_Model {

	public function import($data_anggota){
		
		$jumlah = count($data_anggota);
		if ($jumlah > 0) {
			$this->db->replace('tb_anggota', $data_anggota);
		}
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['anggota'] = $this->db->get('tb_anggota')->result();
		$this->load->view('home',$data);
	}

}

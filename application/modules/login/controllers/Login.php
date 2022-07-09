<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data = $this->db->query("CALL select_record('gaurav','c7b7fa7ca2e83904318d3da384a55d98b58d8471')");
		$result = $data->result();
		echo "<pre>";
		print_r($result);
		exit;
		$this->load->view('login');
	}
}

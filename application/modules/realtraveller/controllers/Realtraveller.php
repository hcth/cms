<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realtraveller extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Realtraveller_model');

		$this->load->model('admin/admin_model');

	}

	public function index()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
		
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
		$data = "*";
		$table = "submitTraveller";
		$record['submittraveller'] = $this->Realtraveller_model->getwhere($data,$table);

		$template = "admin";
		$record['title'] = "Advent Tourist | Home Page";
		$record['viewfile'] = "realtraveller";
		$record['module'] = "realtraveller";
		echo modules::run('template/'.$template,$record);
	endif;
	}
	
	public function download_realtravellercsv()
	{
		$table = "submitTraveller";
		$data = "id as id ,name as Name, email as Email,mobile as Mobile , description as Description , createdate as Date";
		$record['resultdata'] = $this->Realtraveller_model->getwhere($data,$table);
		$record['filename'] = date('d-M-Y').'Realtraveller.csv';
		$template = "download_csv";

		echo modules::run('template/'.$template,$record);
	}

	public function deleterealtraveller()
	{
		$id = $this->input->post('deleteid');
		$this->db-> where('id',$id);
  		$this->db->delete('submitTraveller');
  		echo 1;
	}
}
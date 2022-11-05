<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communication extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Communication_model');

		$this->load->model('admin/admin_model');

	}

	public function index()
	{
		$conditionArray = array('id'=>$this->session->userdata('adminid'));
		$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
	
		if(is_array($adminRecord)):
			$record['rec'] = $adminRecord;
		endif;
		$data = "*";
		$table = "subscribeemail";
		$condition = '';		
		$record['subscribe_email'] = $this->Communication_model->getwhere($data,$table);
		$template = "admin";
		$record['title'] = "Advent Tourist | Home Page";
		$record['viewfile'] = "communication";
		$record['module'] = "communication";
		echo modules::run('template/'.$template,$record);
	}
	
	public function download_communicationcsv()
	{
		$table = "subscribeemail";
		$data = "id as id , email as Email,createdDate as createdDate,modifiedDate as modifiedDate";
		$condition = array('status'=>'1');
		$record['resultdata'] = $this->Communication_model->getwhere($data,$table,$condition);
		$record['filename'] = date('d-M-Y').'Subscribeemail.csv';
		$template = "download_csv";

		echo modules::run('template/'.$template,$record);
	}

	public function deletesubscriber()
	{
		$id = $this->input->post('deleteid');
		$data =array('status'=>'0');
		$this->db-> where('id',$id);
  		$this->db->update('subscribeemail',$data);
  		echo 1;
	}


	public function subscribeit()
	{
		$id = $this->input->post('deleteid');
		$data =array('status'=>'1');
		$this->db-> where('id',$id);
  		$this->db->update('subscribeemail',$data);
  		echo 1;
	}

	
}
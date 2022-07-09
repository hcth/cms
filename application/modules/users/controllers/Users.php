<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');

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
		$table = "register";
		$condition = '';		
		$record['user_data'] = $this->Users_model->getwhere($data,$table,$condition);
		$template = "admin";
		$record['title'] = "Advent Tourist | Home Page";
		$record['viewfile'] = "users";
		$record['module'] = "users";
		echo modules::run('template/'.$template,$record);
	endif;
	}
	
	public function download_userscsv()
	{
		$table = "register";
		$data = "id as id , name as name,email as email,status as Status,createdDate as createdDate,modifiedDate as modifiedDate";
		$condition = array('status'=>'1');
		$record['resultdata'] = $this->Users_model->getwhere($data,$table,$condition);
		$record['filename'] = date('d-M-Y').'Userslist.csv';
		$template = "download_csv";

		echo modules::run('template/'.$template,$record);
	}

	public function deleteuser()
	{
		$id = $this->input->post('deleteid');
		$data =array('status'=>'0');
		$this->db-> where('id',$id);
  		$this->db->update('register',$data);
  		echo 1;
	}


	public function activateuser()
	{
		$id = $this->input->post('deleteid');
		$data =array('status'=>'1');
		$this->db-> where('id',$id);
  		$this->db->update('register',$data);
  		echo 1;
	}

	
}
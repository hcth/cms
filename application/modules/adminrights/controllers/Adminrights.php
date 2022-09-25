<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminrights extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('adminrights/Adminrights_model');

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

			$record['adminRec'] = $this->Adminrights_model->getwhere("adminmaster",array('admin_Status!='=>'0'));
			$template = "admin";
			$record['viewfile'] = "view_admin_rights";
			$record['module'] = "adminrights";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}
	
	function add_rights()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->Adminrights_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['rights'] = $this->Adminrights_model->getwhere("rights",array('is_active='=>'1'));
			$template = "admin";
			$record['viewfile'] = "add_rights";
			$record['module'] = "adminrights";

			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}

	public function rightsadd()
	{
		$postRecord = $this->input->post();
		$this->form_validation->set_rules("username",'username','required|trim|xss_clean|is_unique[adminmaster.admin_name]');
		$this->form_validation->set_rules("password",'Password','required|trim|xss_clean');
		$this->form_validation->set_rules("rights_name[]",'Count','required|trim|xss_clean|numeric');
		
		if($this->form_validation->run() == false):
		//echo json_encode(['status'=>'fail','msg'=>$this->form_validation->error_array()]);

		echo json_encode($this->form_validation->error_array());
		else:
		$dataArray = array(
			'admin_name'=>$postRecord['username'],
			'admin_password'=>sha1($postRecord['password']),
			'rights'=>implode(",",$postRecord['rights_name']),
			'admin_Status'=>'1',
			'admin_createdDate'=>date('Y-m-d H:i:s')
		);
		$table = "adminmaster";
		$datainsert = $this->Adminrights_model->insertwhere($table,$dataArray);
		echo 1;
		endif;
	}

	public function  editrights($id)
	{
		$validate = validate_module_access('adminrights/editrights');
		if (!empty($validate)):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->Adminrights_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['rights'] = $this->Adminrights_model->getwhere("rights",array('is_active='=>'1'));

			$record['userrights'] = $this->Adminrights_model->getwhere("adminmaster",array('id='=>$id));
			$rights = $record['userrights'][0]->rights;
			unset($record['userrights'][0]->rights);
			$record['userrights'][0]->rights = explode(",",$rights);
			$template = "admin";
			$record['viewfile'] = "edit_rights";
			$record['module'] = "adminrights";

			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}
	

	public function rightsedit()
	{
		$postRecord = $this->input->post();
		$this->form_validation->set_rules("rights_name[]",'Count','required|trim|xss_clean|numeric');
		
		if($this->form_validation->run() == false):
		echo json_encode($this->form_validation->error_array());
	
		else:
		$dataArray = array(
			'rights'=>implode(",",$postRecord['rights_name']),
			'admin_Status'=>'1',
			'admin_modifiedDate'=>date('Y-m-d H:i:s')
		);
		$table = "adminmaster";
		$col = "id";
		$id = $this->input->post('id');
		$datainsert = $this->Adminrights_model->updatewhere($table,$id,$dataArray,$col);
		echo 1;
		endif;
	}

	public function viewrights($rights)
	{
		$col = 'id';
		$table = "rights";
		$array = explode(",",$rights);
		$values = array();
		$viewrights = $this->Adminrights_model->getwherein($table,$col,$array);
		foreach ($viewrights as $key) {
			$values[] = $key['value'];
		}
		$viewright = implode(" , ",$values);
		echo $viewright;
	}

	public function deleteadmin()
	{
		$id = $this->input->post('deleteid');
		$this->db-> where('id',$id);
  		$this->db->delete('adminmaster');
  		echo 1;
	}
}

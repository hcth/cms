<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		if(!empty($id)){
			redirect('admin/dashboard');
		}
		else{
			$this->session->sess_destroy();	
			echo $this->load->view('admin/login');
		}
	}

	public function login(){
		$loginRecord = $this->input->post();
		if(isset($loginRecord['isAjax']) && $loginRecord['isAjax'] == 1):
			$this->form_validation->set_rules('email','Email','required|trim|xss_clean');	
			$this->form_validation->set_rules('password','Password','required|trim|xss_clean');
			if($this->form_validation->run() == FALSE):
				echo json_encode($this->form_validation->error_array());
			else :
				$query = "
					SELECT 
						`user`.`id`,
						`user`.`name`,
						`user`.`email`,
						`user`.`mobile`,
						`user`.`password`,
						`role`.`name` as role_name,
						`role`.`module`,
						`role`.`assign_leads`,
						`role`.`is_admin`
					FROM `user`
					LEFT JOIN `role` ON role.id = user.role
					WHERE 
						`user`.`is_deleted` = '0' AND 
						`user`.`email` = '" . $loginRecord['email'] ."' AND 
						`user`.`password` = '" . md5(base64_decode($loginRecord['password'])) ."'
				";
				$checkLogin = $this->Admin_model->get_query($query);
				// x($checkLogin);
				if(is_array($checkLogin) && !empty($checkLogin)):
					$adminSession = array(
						'id'			=> $checkLogin[0]->id,
						'name'			=> $checkLogin[0]->name,
						'email'			=> $checkLogin[0]->email,
						'mobile'		=> $checkLogin[0]->mobile,
						'role_name'		=> $checkLogin[0]->role_name,
						'module'		=> json_decode(json_encode(json_decode($checkLogin[0]->module)),true),
						'assign_leads'	=> $checkLogin[0]->assign_leads,
						'is_admin'    	=> $checkLogin[0]->is_admin,
					);
					$this->session->set_userdata($adminSession);
					echo 1;
				else:
					echo 2;
				endif;	
			endif;	
		else :
			redirect('admin/index');
		endif;
	}

	/* public function login(){
		$loginRecord = $this->input->post();
		if(isset($loginRecord['isAjax']) && $loginRecord['isAjax'] == 1):
			$this->form_validation->set_rules('email','Email','required|trim|xss_clean');	
			$this->form_validation->set_rules('password','Password','required|trim|xss_clean');
			if($this->form_validation->run() == FALSE):
				echo json_encode($this->form_validation->error_array());
			else :
				$conditionArray = array('admin_name'=>$loginRecord['email'],'admin_password'=>$loginRecord['password']);
				$checkLogin = $this->Admin_model->getwhere("adminmaster",$conditionArray);
				if(is_array($checkLogin) && !empty($checkLogin)):
					$adminSession = array(
						'isAdmin' => 1,
						'adminid' => $checkLogin[0]->id,
						'adminStatus'=> $checkLogin[0]->admin_Status,
						'adminName'=>$checkLogin[0]->admin_name,
						'adminRoles'=>$checkLogin[0]->rights
						
					);
					$this->session->set_userdata($adminSession);
					echo 1;
				else:
					echo 2;
				endif;	
			endif;	
		else :
			redirect('admin/index');
		endif;
	} */

	function dashboard()
	{
		$validate = validate_module_access('admin/dashboard');
		if(!empty($validate)):
			
			$query = "SELECT count(1) as total_lead FROM package_detail";
			$record['total_lead'] = $this->Admin_model->get_query($query)[0]->total_lead;
			
			$this_year_s = date('Y') . '-01-01';
			$this_year_e = date('Y') . '-12-31';

			$last_mon_s = date("Y-n-j", strtotime("first day of previous month"));
			$last_mon_e = date("Y-n-j", strtotime("last day of previous month"));

			$this_mon_s = date('Y-m-01');
			$this_mon_e = date('Y-m-d');

			$query = "SELECT count(1) as total_lead_this_year FROM package_detail 
				WHERE updated_date >= '" . $this_year_s . "' AND updated_date <= '" . $this_year_e . "'";
			$record['total_lead_year'] = $this->Admin_model->get_query($query)[0]->total_lead_this_year;

			$query = "SELECT count(1) as total_lead_lm FROM package_detail
				WHERE updated_date >= '" . $last_mon_s . "' AND updated_date <= '" . $last_mon_e . "'";
			$record['total_lead_last_month'] = $this->Admin_model->get_query($query)[0]->total_lead_lm;

			$query = "SELECT count(1) as total_lead_tm FROM package_detail
				WHERE updated_date >= '" . $this_mon_s . "' AND updated_date <= '" . $this_mon_e . "'";
			$record['total_lead_this_month'] = $this->Admin_model->get_query($query)[0]->total_lead_tm;

			$query = "SELECT count(1) as sales_closed FROM package_detail
				WHERE sales_status = 'Sales Closed'";
			$record['sales_closed'] = $this->Admin_model->get_query($query)[0]->sales_closed;
			
			$template = "admin";
			$record['viewfile'] = "dashboard";
			$record['module'] = "admin";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}


	function logout(){	
		$this->session->sess_destroy();	
		redirect('admin/index');
	}

	function get_lead_stats(){
		// echo '<pre>';
		// print_r($_POST);
		// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
		$fromdate 	= $_POST['fromdate'];
		$todate 	= $_POST['todate'];

		$query = "SELECT count(1) as total_lead FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "'";
		$record['total_lead'] = $this->Admin_model->get_query($query)[0]->total_lead;

		$query = "SELECT count(1) as op_d FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "' AND sales_status = 'Open discussion'";
		$record['op_d'] = $this->Admin_model->get_query($query)[0]->op_d;

		$query = "SELECT count(1) as sale_close FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "' AND sales_status = 'Sales Closed'";
		
		$record['sale_close'] = $this->Admin_model->get_query($query)[0]->sale_close;
		
		$query = "SELECT count(1) as sale_lost FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "' AND sales_status = 'Sale Lost'";
		$record['sale_lost'] = $this->Admin_model->get_query($query)[0]->sale_lost;
		
		$query = "SELECT count(1) as on_hold FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "' AND sales_status = 'On Hold'";
		$record['on_hold'] = $this->Admin_model->get_query($query)[0]->on_hold;

		$query = "SELECT count(1) as invalid_lead FROM package_detail
			WHERE updated_date >= '" . $fromdate . "' AND updated_date <= '" . $todate . "' AND sales_status = 'Invalid Lead'";
		$record['invalid_lead'] = $this->Admin_model->get_query($query)[0]->invalid_lead;
		// print_r($record);
		echo json_encode($record);

	}

}

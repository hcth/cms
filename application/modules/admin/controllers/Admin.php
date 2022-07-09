<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			redirect('admin/dashboard');
		else :
			echo $this->load->view('admin/login');
		endif;
	}

	public function login(){
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
	}


	function dashboard()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
			
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
		$isAdmin = $this->session->userdata('isAdmin');
		$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
			if(isset($istraveler) && $istraveler == 1):
				$redirect = "/";
			else :
				$redirect = "admin";				
			endif;		
			$this->session->sess_destroy();
			redirect($redirect);
		else :
			redirect('admin');
		endif;	
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

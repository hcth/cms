<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itinerariesexpert extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Itneraiesexpert_model');

		$this->load->model('admin/admin_model');

	}

	public function index()
	{
		
		$validate = validate_module_access('admin/dashboard');
		if (!empty($validate)):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
		
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
			$record['itinerariesexpert'] = $this->Itneraiesexpert_model->getitinerariesexpert();

			$template = "admin";
			$record['title'] = "Advent Tourist | Home Page";
			$record['viewfile'] = "itinerariesexpert";
			$record['module'] = "itinerariesexpert";
			echo modules::run('template/'.$template,$record);
		else :
			redirect('admin');
		endif;
	}
	
	public function download_itinerariesexpertcsv()
	{
		$record['resultdata'] = $this->Itneraiesexpert_model->getitinerariesexpert_csv();
		$record['filename'] = date('d-M-Y').'Itinerariesexpert.csv';
		$template = "download_csv";

		echo modules::run('template/'.$template,$record);
	}

	public function delete_itinerariesexpert()
	{
		$id = $this->input->post('deleteid');
		$this->db-> where('id',$id);
  		$this->db->delete('itinerariesexpert');
  		echo 1;
	}
}
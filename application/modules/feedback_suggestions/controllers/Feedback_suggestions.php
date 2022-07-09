<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_suggestions extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: Suggestions and Feedback";
		$record['descriptions'] = "Adventourist feedback and customer suggestions form";
		$record['keywords'] = "adventourist feedback, feedback, complaints and suggestions";
		$record['viewFile'] = "feedback";
		$record['module'] = "feedback_suggestions";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
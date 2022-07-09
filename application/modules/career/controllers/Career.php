<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: Join Our Team";
		$record['descriptions'] = "List of vacancies and jobs at adventourist, Mumbai Office";
		$record['keywords'] = "adventourist careers, join adventourist, work with adventourist";
		$record['viewFile'] = "career";
		$record['module'] = "career";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
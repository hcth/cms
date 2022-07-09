<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_and_conditions extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: Terms & Conditions";
		$record['descriptions'] = "Adventourist terms and conditions";
		$record['keywords'] = "terms, conditions, terms and conditions, travel terms, terms of use, adventourist policy, adventourist terms of use";
		$record['viewFile'] = "terms";
		$record['module'] = "terms_and_conditions";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
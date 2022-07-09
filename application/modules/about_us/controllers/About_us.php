<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: About Us and Our Story";
		$record['descriptions'] = "Adventourist is passion for travelling turned start up, our founder was a traveller himself";
		$record['keywords'] = "about us, about adventourist, adventourist, adventurist";
		$record['viewFile'] = "about";
		$record['module'] = "about_us";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
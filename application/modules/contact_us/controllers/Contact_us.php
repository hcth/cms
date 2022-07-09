<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: Contact Us";
		$record['descriptions'] = "Contact Adventourist to plan your trip and holidays. Premium Travel Company based in Mumbai.";
		$record['keywords'] = "contact us, adventourist address, adventourist number, adventourist contact info, adventourist office, adventourist contact us, adventourist information, adventourist support";
		$record['viewFile'] = "contact";
		$record['module'] = "contact_us";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
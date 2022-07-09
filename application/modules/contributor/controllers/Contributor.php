<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contributor extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Get Featured as a Travel Expert on Adventourist.";
		$record['descriptions'] = "get featured as a real traveller and a travel influencer, become a travel expert.";
		$record['keywords'] = "travel blogger, travel influencer, become a travel influencer, share itineraries, travel stories.";
		$record['viewFile'] = "contributor";
		$record['module'] = "contributor";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
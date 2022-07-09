<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist aims to share Travel Stories, Things to do and Real itineraries made by real travellers and explorers. These real travellers and explorers are featured from across the country. Your trip planners are here.";
		$record['descriptions'] = "About adventourist, Altough our founder was a traveller himself, he would share his travel itineraries and stories with his friends and family, he would arrange and organize trips for them, adventourist is hobby turned in to start up.";
		$record['keywords'] = "about us, about adventourist, adventourist, adventurist.";
		$record['viewFile'] = "comingsoon";
		$record['module'] = "comingsoon";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
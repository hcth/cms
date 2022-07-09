<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourteam extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Team Adventourist | Changing The Way You Travel";
		$record['descriptions'] = "Adventourist team members minal joshi, chirag joshi and other members behind the establishment of adventourist";
		$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, minal joshi";
		$record['viewFile'] = "ourteam";
		$record['module'] = "ourteam";
		echo modules::run('template/'.$template,$record);
	}
	
	
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemaps extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('Traveller/Traveler_model');
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: HTML Site Map";
		$record['descriptions'] = "Adventourist Site map, that helps you browse through the website easily";
		$record['keywords'] = "Sitemap, Adventourist site map, html site map";
		$record['itineraries'] = $this->admin_model->getwhere("ti_itineraries", array('status' => '2', 'is_deleted' => '0'));

		$record['viewFile'] = "sitemaps";
		$record['module'] = "sitemaps";
		echo modules::run('template/' . $template, $record);
	}
}

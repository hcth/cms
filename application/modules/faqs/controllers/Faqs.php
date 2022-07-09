<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = "home";
		$record['title'] = "Adventourist: Frequently Asked Questions";
		$record['descriptions'] = "Adventourist faqs, all common questions answered by real travellers";
		$record['keywords'] = "faqs, questions, ask about travel, trip queries, questions about destinations";
		$record['viewFile'] = "faqs";
		$record['module'] = "faqs";
		echo modules::run('template/'.$template,$record);
	}
		public function abc()
	{
		/*$template = "home";
		$record['title'] = "Read commonly asked questions about trips and travel in India.";
		$record['descriptions'] = "Adventourist faqs, all common questions answered by real travellers";
		$record['keywords'] = "faqs, questions, ask about travel, trip queries, questions about destinations";
		$record['viewFile'] = "faqs";
		$record['module'] = "faqs";
		echo modules::run('template/'.$template,$record);*/
		
		$this->load->view('abc');
	}
	
	
}
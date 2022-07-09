<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('google');
    }
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    // Show all information, defaults to INFO_ALL
        phpinfo();
        
        // Show just the module information.
        // phpinfo(8) yields identical results.
        phpinfo(INFO_MODULES);
		$this->load->view('welcome_message');
	}
	
	public function oauth2callback(){
	    echo 22;
		$google_data=$this->google->validate();
    	print_r($google_data);exit;
// 		$session_data=array(
// 				'name'=>$google_data['name'],
// 				'email'=>$google_data['email'],
// 				'source'=>'google',
// 				'profile_pic'=>$google_data['profile_pic'],
// 				'link'=>$google_data['link'],
// 				'sess_logged_in'=>1
// 				);
// 			$this->session->set_userdata($session_data);
//             redirect(base_url());
	}
}

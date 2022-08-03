<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');
	}

	// Role Management Module Code Start here
	public function role_management()
	{
		$template = "admin";
		$record['viewfile'] = "role_management";
		$record['module'] = "management";
		echo modules::run('template/' . $template, $record);
	}

	public function get_all_roles(){
		$query = "SELECT `id`, `name`, `module`, `assign_leads`, `created_at`
			FROM role
			WHERE `is_deleted` = '0' 
		";
		$record['all_roles'] = $this->admin_model->get_query($query);
		return $this->load->view("management/role_management_table",$record);
	}

	public function create_role()
	{
		$data = array(
			'name'			=> $_POST['role_name'],
			'module'		=> json_encode($_POST['modules'],JSON_FORCE_OBJECT),
			'assign_leads'	=> $_POST['assign_leads'] == 1 ? 1 : 0,
			'created_at'	=> date('Y-m-d H:i:s'),
		);
		$result = $this->db->insert('role', $data);
		if($result){
			$result = ['status'=>'success','msg'=>'success','data'=>''];
		}else
			$result = ['status'=>'failed','msg'=>'Something went wrong','data'=>''];

		echo json_encode($result);
	}

	public function delete_role()
	{
		$id = $_POST['id'];

		$query = "UPDATE role set 
			`is_deleted` = '1'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status'=>'success','msg'=>'Role Deleted Successfully','data'=>'']);
	}
	
	public function edit_role()
	{
		$id = $_POST['id'];
		$assign_leads = $_POST['assign_leads'] == 1 ? 1 : 0;
		$query = "UPDATE role set 
			name = '". $_POST['role_name'] ."',
			module = '".  json_encode($_POST['modules'],JSON_FORCE_OBJECT) ."',
			assign_leads = ". $assign_leads ."
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status'=>'success','msg'=>'Role Updated Successfully','data'=>'']);
	}
	// Role Management Module Code End here

	// User Management Module Code Start here
	public function user_management()
	{	
		$template = "admin";
		$record['viewfile'] = "user_management";
		$record['module'] = "management";

		$query = "SELECT `id`, `name`
			FROM role
			WHERE `is_deleted` = '0' 
		";
		$record['all_roles'] = $this->admin_model->get_query($query);
		echo modules::run('template/' . $template, $record);
	}

	public function get_all_users(){
		$query = "SELECT `id`, `name`, `email`, `mobile`, `password`, `role`, `created_at`
			FROM user
			WHERE `is_deleted` = '0' 
		";
		$record['all_roles'] = $this->admin_model->get_query($query);
		return $this->load->view("management/user_management_table",$record);
	}

	public function create_user()
	{
		$data = array(
			'name'			=> $_POST['user_name'],
			'email'			=> $_POST['user_email'],
			'mobile'		=> $_POST['user_mobile'],
			'password'		=> $_POST['user_password'],
			'role'			=> $_POST['role'],
			'created_at'	=> date('Y-m-d H:i:s'),
		);
		$result = $this->db->insert('user', $data);
		if($result){
			$result = ['status'=>'success','msg'=>'success','data'=>''];
		}else
			$result = ['status'=>'failed','msg'=>'Something went wrong','data'=>''];

		echo json_encode($result);
	}

	public function delete_user()
	{
		$id = $_POST['id'];

		$query = "UPDATE user set 
			`is_deleted` = '1'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status'=>'success','msg'=>'User Deleted Successfully','data'=>'']);
	}
	
	public function edit_user()
	{
		$id = $_POST['id'];
		$assign_leads = $_POST['assign_leads'] == 1 ? 1 : 0;
		$query = "UPDATE user set 
			name = '". $_POST['user_name'] ."',
			email = '". $_POST['user_email'] ."',
			mobile = '". $_POST['user_mobile'] ."',
			password = '". $_POST['user_password'] ."',
			role = '". $_POST['role'] ."'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status'=>'success','msg'=>'User Updated Successfully','data'=>'']);
	}



	// User Management Module Code End here













	
	public function thankyou()
	{
		$template = "packagethank";
		$record['title'] = "Team Adventourist Changing The Way You Travel.";
		$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
		$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
		$record['viewFile'] = "package";
		$record['module'] = "package";
		echo modules::run('template/' . $template, $record);
	}

	public function leh_ladak($p1)
	{
		if ($p1 != '') {
			if ($p1 == "lp1") {
				$template = "package";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "Leh-Lp1";
			} else if ($p1 == "lp2") {
				$template = "package2";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Similar Audience";
				$record['ad'] = "Leh-Lp2";
			} else if ($p1 == "lp3") {
				$template = "package3";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Custom Intent Display";
				$record['ad'] = "Leh-Lp3";
			} else if ($p1 == "lp4") {
				$template = "package4";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Remarketing";
				$record['ad'] = "Leh-Lp4";
			} else if ($p1 == "lp5") {
				$template = "package5";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Remarketing";
				$record['ad'] = "Leh-Lp5";
			} else if ($p1 == "lp6") {
				/*$template = "packag6";
	        $record['destination'] = "Leh";
	        $record['platform'] = "Bing";
	        $record['ct'] = "Search";
	        $record['ad'] = "Leh-Lp6";
	        */
				show_404();
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		} else {
			show_404();
		}
	}

	public function spiti_valley($p1)
	{
		if ($p1 != '') {
			if ($p1 == "sp01") {
				$template = "spitipackage";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "Leh-Lp1";
			} else if ($p1 == "sp02") {
				$template = "spitipackage2";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Similar Audience";
				$record['ad'] = "Leh-Lp2";
			} else if ($p1 == "sp03") {
				$template = "spitipackage3";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Similar Audience";
				$record['ad'] = "Leh-Lp2";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		} else {
			show_404();
		}
	}

	public function bhutan($p1)
	{

		if ($p1 != '') {
			if ($p1 == "bh01") {
				$template = "bhutan";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "Leh-Lp1";
			} else if ($p1 == "bh02") {
				$template = "bhutan1";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Similar Audience";
				$record['ad'] = "Leh-Lp2";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		} else {
			show_404();
		}
	}

	public function bhutan_trip($p1 = '')
	{

		if ($p1 != '') {
			if ($p1 == "bh02") {
				$template = "bhutan-lp";
				$record['destination'] = "bhutan";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "bhutan-Lp1";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			$this->load->view($template, $record);

			//echo modules::run('package/'.$template,$record);
		} else {
			show_404();
		}
	}

	public function bali_trip($p1 = '')
	{

		if ($p1 != '') {
			if ($p1 == "ba01") {
				$template = "bali-lp";
				$record['destination'] = "bali";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "bali-Lp1";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			$this->load->view($template, $record);

			//echo modules::run('package/'.$template,$record);
		} else {
			show_404();
		}
	}

	public function thailand_trip($p1 = '')
	{

		if ($p1 != '') {
			if ($p1 == "th01") {
				$template = "thailand-itinerary-phuket-bangkok-5N-6D";
				$record['destination'] = "phuket";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "thailand-Lp1";
			} elseif ($p1 == "th02") {
				$template = "thailand-itinerary-phuket-krabi-5N-6D";
				$record['destination'] = "phuket-krabi-5N-6D";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "thailand-Lp2";
			} elseif ($p1 == "th03") {
				$template = "thailand-itinerary-phuket-krabi-6N-7D";
				$record['destination'] = "phuket-krabi-6N-7D";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "thailand-Lp3";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			$this->load->view($template, $record);

			//echo modules::run('package/'.$template,$record);
		} else {
			show_404();
		}
	}


	public function kheerganga($p1)
	{
		if ($p1 != '') {
			if ($p1 == "kh01") {
				$template = "kheer";
				$record['destination'] = "Leh";
				$record['platform'] = "Google";
				$record['ct'] = "Search";
				$record['ad'] = "Leh-Lp1";
			} else if ($p1 == "kh02") {
				$template = "kheer1";
				$record['destination'] = "Leh";
				$record['platform'] = "Facebook";
				$record['ct'] = "Similar Audience";
				$record['ad'] = "Leh-Lp2";
			} else {
				show_404();
			}

			$record['title'] = "Team Adventourist Changing The Way You Travel.";
			$record['descriptions'] = "Team adventourist, adventourist team members chirag joshi and other members behind the establishment of adventourist.";
			$record['keywords'] = "adventourist team, team adventourist, adventourist employees, adventourist travellers, chirag joshi.";
			$record['viewFile'] = "package";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		} else {
			show_404();
		}
	}

	public function savepackage($id = '')
	{
		// ini_set('display_errors',1);error_reporting(E_ALL);
		$record = $this->input->post();
		$this->form_validation->set_rules("name", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("phone", "Phone", "required|trim|numeric|min_length[10]|max_length[12]");
		$this->form_validation->set_rules("package", "Package", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$clientCondition = array('email' => $record['email']);
			$clientData = $this->admin_model->getwhere("package_detail", $clientCondition);
			if ($clientData == 'no') {

				$arrMonth = [
					'01' => 'JA',
					'02' => 'F',
					'03' => 'MA',
					'04' => 'A',
					'05' => 'M',
					'06' => 'JU',
					'07' => 'JL',
					'08' => 'AU',
					'09' => 'SP',
					'10' => 'OT',
					'11' => 'N',
					'12' => 'D'
				];
				$month = date('m');
				$y = date('y');

				$month_year = $arrMonth[$month] . $y;
				$conditionArray = array('month_year' => $month_year);
				$code_data = $this->admin_model->getwhere("monthly_traveller_code", $conditionArray);
				// print_r($month_year);
				// die;
				if ($code_data == "no") {
					$last_id = '00001';
					$data = array(
						'month_year' => $month_year,
						'last_id'	 => $last_id,
					);
					$this->db->insert("monthly_traveller_code", $data);
				} else {
					$last_id = sprintf("%05d", $code_data[0]->last_id + 1);
					$data = [
						'last_id' => $last_id,
					];
					$this->db->where('month_year', $month_year);
					$this->db->update('monthly_traveller_code', $data);
				}
				$traveller_code = $month_year . $last_id;
			} else {
				$traveller_code = $clientData[0]->traveller_code;
			}

			$data = array(
				'traveller_code' => $traveller_code,
				'name' => $record['name'],
				'email' => $record['email'],
				'phone' => $record['phone'],
				'package' => $record['package'],
				'destination' => $record['destination'],
				'landing' => $record['landing'],
				'platform' => $record['platform'],
				'campaigntype' => $record['campaigntype'],
				'adgroup' => $record['adgroup'],
				'created_date' => date('Y-m-d H:i:s'),
				'updated_date' => date('Y-m-d H:i:s'),
			);
			$this->db->insert("package_detail", $data);

			$insert_id = $this->db->insert_id();
			if (!empty($insert_id)) :
				echo modules::run('Emails/send_dynamic_email', $data);
				exit;
			endif;
			echo 1;
		endif;
	}

	public function savepackagebali($id = '')
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("name", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("phone", "Phone", "required|trim|numeric|min_length[10]|max_length[12]");
		$this->form_validation->set_rules("package", "Package", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			date_default_timezone_set('Asia/Kolkata');

			$data = array(
				'name' => $record['name'],
				'email' => $record['email'],
				'phone' => $record['phone'],
				'package' => $record['package'],
				'landing' => $record['landing'],
				'platform' => $record['platform'],
				'campaigntype' => $record['campaigntype'],
				'adgroup' => $record['adgroup'],
				'created_date' => date('Y-m-d H:i:s'),
				'updated_date' => date('Y-m-d H:i:s'),
			);
			$this->db->insert("package_detail", $data);

			$insert_id = $this->db->insert_id();
			if (!empty($insert_id)) :
				$emaildata = array('to' => $record['email'], 'name' => $record['name']);

				$data = ['title' => '7 Days in Bali for Group of Friends, Cousins and Office Colleagues', 'country' => 'Bali'];
				$message = $this->load->view('emailview', $data, true);
				$this->email->from('info@adventourist.in', 'Adventourist');
				$this->email->to($record['email']);
				$this->email->subject(' [Alert] Your wallpaper trip to Bali');
				$this->email->set_mailtype("html");
				$this->email->message($message);
				if ($this->email->send()) {
					//echo 1;                  
				} else {
					//echo $this->email->print_debugger();
				}
				echo json_encode(['status' => 'success', 'redirecturl' => base_url('package/thankyoupage?destination=bali')]);
				exit;

			endif;
			// email sent to adventourist
			echo 1;
		endif;
	}

	public function savepackagebhutan($id = '')
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("name", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("phone", "Phone", "required|trim|numeric|min_length[10]|max_length[12]");
		$this->form_validation->set_rules("package", "Package", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			date_default_timezone_set('Asia/Kolkata');

			$data = array(
				'name' => $record['name'],
				'email' => $record['email'],
				'phone' => $record['phone'],
				'package' => $record['package'],
				'landing' => $record['landing'],
				'platform' => $record['platform'],
				'campaigntype' => $record['campaigntype'],
				'adgroup' => $record['adgroup'],
				'created_date' => date('Y-m-d H:i:s'),
				'updated_date' => date('Y-m-d H:i:s'),
			);
			$this->db->insert("package_detail", $data);

			$insert_id = $this->db->insert_id();
			if (!empty($insert_id)) :
				$emaildata = array('to' => $record['email'], 'name' => $record['name']);

				$data = ['title' => '7 Days in Bhutan for Group of Friends, Cousins and Office Colleagues', 'country' => 'Bhutan'];
				$message = $this->load->view('emailview', $data, true);
				$this->email->from('info@adventourist.in', 'Adventourist');
				$this->email->to($record['email']);
				$this->email->subject(' [Alert] Your wallpaper trip to Bhutan');
				$this->email->set_mailtype("html");
				$this->email->message($message);
				if ($this->email->send()) {
					//echo 1;                  
				} else {
					//echo $this->email->print_debugger();
				}
				echo json_encode(['status' => 'success', 'redirecturl' => base_url('package/thankyoupage?destination=bhutan')]);
				exit;

			endif;
			// email sent to adventourist
			echo 1;
		endif;
	}

	public function savepackagethailand($id = '')
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("name", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("phone", "Phone", "required|trim|numeric|min_length[10]|max_length[12]");
		$this->form_validation->set_rules("package", "Package", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			date_default_timezone_set('Asia/Kolkata');

			$data = array(
				'name' => $record['name'],
				'email' => $record['email'],
				'phone' => $record['phone'],
				'package' => $record['package'],
				'landing' => $record['landing'],
				'platform' => $record['platform'],
				'campaigntype' => $record['campaigntype'],
				'adgroup' => $record['adgroup'],
				'created_date' => date('Y-m-d H:i:s'),
				'updated_date' => date('Y-m-d H:i:s'),
			);
			$this->db->insert("package_detail", $data);

			$insert_id = $this->db->insert_id();
			if (!empty($insert_id)) :
				$emaildata = array('to' => $record['email'], 'name' => $record['name']);

				$data = ['title' => '7 Days in Thailand for Group of Friends, Cousins and Office Colleagues.', 'country' => 'Thailand'];
				$message = $this->load->view('emailview', $data, true);
				$this->email->from('info@adventourist.in', 'Adventourist');
				$this->email->to($record['email']);
				$this->email->subject(' [Alert] Your wallpaper trip to Thailand');
				$this->email->set_mailtype("html");
				$this->email->message($message);
				if ($this->email->send()) {
					//echo 1;                  
				} else {
					//echo $this->email->print_debugger();
				}
				echo json_encode(['status' => 'success', 'redirecturl' => base_url('package/thankyoupage?destination=thailand')]);
				exit;
			endif;
			// email sent to adventourist
			echo 1;
		endif;
	}

	public function listpackage()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if (!empty($isAdmin)) :
			$conditionArray = array('id' => $this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster", $conditionArray);

			if (is_array($adminRecord)) :
				$record['rec'] = $adminRecord;
			endif;

			$query = "SELECT count(1) AS disposition_count, lower(disposition) as disposition
				FROM package_detail 
				GROUP BY disposition 
			";
			$disposition_detail = $this->admin_model->get_query($query);
			foreach ($disposition_detail as $d_v) {
				$record['disposition_detail'][trim($d_v->disposition)] = $d_v->disposition_count;
			}
			$query = "SELECT `name` FROM platform WHERE `delete` = 0";
			$record['platform'] = $this->admin_model->get_query($query);

			$query = "SELECT `name` FROM campaigntype WHERE `delete` = 0";
			$record['campaigntype'] = $this->admin_model->get_query($query);

			$query = "SELECT `name` FROM destination WHERE `delete` = 0";
			$record['destination'] = $this->admin_model->get_query($query);

			$query = "SELECT `name` FROM sales_status WHERE `delete` = 0";
			$record['sales_status'] = $this->admin_model->get_query($query);

			$query = "SELECT `name` FROM disposition WHERE `delete` = 0";
			$record['disposition'] = $this->admin_model->get_query($query);

			$query = "SELECT `name` FROM adgroup WHERE `delete` = 0";
			$record['adgroup'] = $this->admin_model->get_query($query);

			// echo '<pre>';
			// print_r($record);
			// die;
			$template = "admin";
			$record['title'] = "Advent Tourist | Package List";
			$record['viewfile'] = "packagelist";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		endif;
	}

	public function download_packagecsv()
	{
		$table = "package_detail";
		$data = "id as id ,traveller_code as TravellerCode, landing as Destination,platform as Platform,campaigntype as Campaign Type,adgroup as Advertise Group,created_date as Lead Date, name as Name, email as Email,phone as Mobile , package as Package, disposition as Disposition, sales_status as Sales Status";
		$record['resultdata'] = $this->admin_model->getwheres($data, $table);

		$record['filename'] = date('d-M-Y') . 'Package.csv';
		$template = "download_csv";

		echo modules::run('template/' . $template, $record);
	}

	public function checkEmail()
	{
		$data = ['title' => '7 Days in Bali for Group of Friends, Cousins and Office Colleagues', 'country' => 'Bali'];
		$template = $this->load->view('emailview', $data, true);
		echo $template;
	}
	public function thankyoupage()
	{
		$data = ['title' => '7 Days in Bali for Group of Friends, Cousins and Office Colleagues', 'country' => 'Bali'];
		$template = $this->load->view('thankyou', $data, true);
		echo $template;
	}

	public function gatAllClientList()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if (!empty($isAdmin)) :

			$where_cond = [];

			if (!empty($_POST['fromdate']) && !empty($_POST['todate'])) {

				$where_cond['updated_date >= '] = $_POST['fromdate'];
				$where_cond['updated_date <= '] = $_POST['todate'];
			}

			if (!empty($_POST['platform']))
				$where_cond['platform'] = $_POST['platform'];

			if (!empty($_POST['camp_type']))
				$where_cond['campaigntype'] = $_POST['camp_type'];

			if (!empty($_POST['sales_status']))
				$where_cond['sales_status'] = $_POST['sales_status'];

			if (!empty($_POST['disposition']))
				$where_cond['disposition'] = $_POST['disposition'];

			if (!empty($_POST['destination']))
				$where_cond['destination'] = $_POST['destination'];

			if (!empty($_POST['adgroup']))
				$where_cond['adgroup'] = $_POST['adgroup'];

			$record['package_detail'] = $this->admin_model->getwhere('package_detail', $where_cond);
			// print_r($record);

			echo $this->load->view("package/client_list_table", $record);
		endif;
	}

	public function getCrmData()
	{
		$query = "SELECT *
			FROM package_detail 
			WHERE disposition = '" . $_POST['disp'] . "' 
		";
		// echo $query;
		$record['crm_data'] = $this->admin_model->get_query($query);
		// print_r($record['crm_data']);die;
		echo $this->load->view("package/client_crm_table", $record);
	}

	public function add_client()
	{
		// ini_set('display_errors',1);error_reporting(E_ALL);

		$clientCondition = array('email' => $_POST['email']);
		$clientData = $this->admin_model->getwhere("package_detail", $clientCondition);
		if ($clientData == 'no') {

			$arrMonth = [
				'01' => 'JA',
				'02' => 'F',
				'03' => 'MA',
				'04' => 'A',
				'05' => 'M',
				'06' => 'JU',
				'07' => 'JL',
				'08' => 'AU',
				'09' => 'SP',
				'10' => 'OT',
				'11' => 'N',
				'12' => 'D'
			];
			$month = date('m');
			$y = date('y');
			$month_year = $arrMonth[$month] . $y;
			$conditionArray = array('month_year' => $month_year);
			$code_data = $this->admin_model->getwhere("monthly_traveller_code", $conditionArray);
			// print_r($code_data);
			// die;
			if ($code_data == "no") {
				$last_id = '00001';
				$data = array(
					'month_year' => $month_year,
					'last_id'	 => $last_id,
				);
				$this->db->insert("monthly_traveller_code", $data);
			} else {
				$last_id = sprintf("%05d", $code_data[0]->last_id + 1);
				$data = [
					'last_id' => $last_id,
				];
				$this->db->where('month_year', $month_year);
				$this->db->update('monthly_traveller_code', $data);
			}
			$traveller_code = $month_year . $last_id;
		} else {
			$traveller_code = $clientData[0]->traveller_code;
		}

		$data = array(
			'traveller_code' => $traveller_code,
			'name'			=> $_POST['name'],
			'email'			=> $_POST['email'],
			'phone'			=> $_POST['mobile'],
			'adgroup'		=> 'CRMS',

			'destination'	=> $_POST['destination'],
			'platform'		=> $_POST['platform'],
			'sales_status'	=> $_POST['sales_status'],
			'disposition'	=> $_POST['disposition'],
			'campaigntype'	=> $_POST['campaigntype'],
			'call_notes'	=> json_encode([['date_created' => date('Y-m-d H:i:s'), 'note' => $_POST['call_notes']]]),

			'package'		=> $_POST['package'],
			'created_date'	=> date('Y-m-d H:i:s'),
			'updated_date'	=> date('Y-m-d H:i:s'),
		);
		// echo '<pre>';
		// print_r($data);
		// die;
		$insert_id = $this->db->insert("package_detail", $data);
		if (!empty($insert_id)) :
			modules::run('Emails/send_dynamic_email', $data);
		endif;
		// $insert_id = $this->db->insert_id();
		echo 'Data inserted successfully';
	}

	public function edit_client()
	{

		$query = "SELECT call_notes
			FROM package_detail 
			WHERE id = '" . $_POST['id'] . "' 
		";
		// echo $query;
		$res_call_notes = $this->admin_model->get_query($query)[0]->call_notes;
		if (!empty($res_call_notes)) {
			// $res_call_notes[0]
			$old_note = json_decode($res_call_notes, true);
		}
		// print_r($old_note[0]);die;

		$note = [['date_created' => date('Y-m-d H:i:s'), 'note' => $_POST['call_notes']]];
		if (!empty($old_note))
			$note = array_merge($note, $old_note);
		$note = json_encode($note);
		$query = "UPDATE package_detail set 
			sales_status = '" . $_POST['sales_status'] . "',
			disposition = '" . $_POST['disposition'] . "',
			call_notes = '" . $note . "'  
			WHERE id = '" . $_POST['id'] . "' 
		";
		// echo $query;die;
		$this->admin_model->query($query);
		echo 'Data updated successfully!!!';
	}

	function db_management()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if (!empty($isAdmin)) :

			// $query = "SELECT count(1) as sales_closed FROM package_detail
			// 	WHERE sales_status = 'Sale Closed'";
			// $record['sales_closed'] = $this->Admin_model->get_query($query)[0]->sales_closed;

			$template = "admin";
			$record['viewfile'] = "db_management";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		else :
			redirect('admin');
		endif;
	}


	public function edit_data()
	{

		$table = $_POST['db_type'];
		$name  = $_POST['db_value'];
		$db_id = $_POST['db_id'];

		$query = "UPDATE $table set 
			`name` = '$name'
			WHERE id = '$db_id' 
		";
		// echo $query;die;
		$this->admin_model->query($query);
		echo 'Data Updated successfully!!!';
	}

	function feedback()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if (!empty($isAdmin)) :

			$template = "admin";
			$record['viewfile'] = "feedback";
			$record['module'] = "package";
			echo modules::run('template/' . $template, $record);
		else :
			redirect('admin');
		endif;
	}

	function get_feedback_data()
	{
		$where = '';
		$post = $_POST;
		if (!empty($post['from_date']) && !empty($post['to_date'])) {
			$where = "WHERE date(createdate) >= '" . $post['from_date'] . "' AND date(createdate) <= '" . $post['to_date'] . "'";
		}
		$query = "SELECT `name`, `email`, `subject`, `description`, `createdate`
			FROM submitfeedback $where
		";
		// echo $query;die;
		$record['feedback_data'] = $this->admin_model->get_query($query);
		// print_r($record['feedback_data']);die;
		echo $this->load->view("package/feedback_table", $record);
	}
}

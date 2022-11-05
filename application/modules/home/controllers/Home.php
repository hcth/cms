<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('google_config');
		$this->load->library('google');
		$this->load->model('Home_Model');
	}

	public function index()
	{
		$params = [];
		$params['env']              = 'av';
		$params['select_data']      = '*';
		$params['table_name']       = 'countries';
		$params['where']            = false;
		//$params['print_query_exit']            = TRUE;
		$params['where_data']       = '1';
		$params['escape_fields']    = FALSE;
		$params['where_escape']     = FALSE;
		// $data['result']                = $this->Home_Model->get_table_data_with_type($params);



		//print_r($data['result']); die;
		// echo $this->config->item('google_redirect_url');exit;
		$record['realTraveler'] = $this->Home_Model->getWherewithlimit("realtraveller", array('status' => '1', 'isPublished' => '2'), '4');
		$record['stories'] = $this->Home_Model->getWherewithlimit("ti_stories", array('status' => '1', 'is_published' => '1', 'is_deleted' => '0'), '4');
		$record['thingstodo'] = $this->Home_Model->getWherewithlimit("thingstodo", array('is_published' => '1', 'isdeleted' => '0'), '4');
		$template = "home";
		$record['google_login_url'] = $this->google->get_login_url();
		$record['title'] = "Adventourist - Premium Experiential Travel Company in Mumbai";
		$record['descriptions'] = "Get your holidays, trips, vacations planned by real travellers and local guides at no extra cost. Best travel agency in Vile parle, Mumbai";
		$record['keywords'] = "Travel agency, Travel itineraries, Tour packages, Premium Adventure Travel, Leh Ladakh Tour, Things to do,Travel blog, Travel Agency in Mumbai, Travel Agency in Vile parle";
		$record['viewFile'] = "index";
		$record['module'] = "home";
		echo modules::run('template/' . $template, $record);
	}

	public function oauth2callback()
	{
		echo 22;
		// 		$google_data=$this->google->validate();
		// 		print_r($google_data);
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

	public function subscribeEmail()
	{
		$email = $this->input->post('subEmail');
		$this->form_validation->set_rules("subEmail", "Email", "required|trim|valid_email");
		if ($this->form_validation->run() == FALSE) :
			echo 2;
		else :
			$checkemail = $this->Home_Model->getWhere('subscribeemail', array('email' => $email));
			if ($checkemail == "no") :
				$data = array(
					'email' => $email,
					'createdDate' => date('Y-m-d H:i:s'),
					'modifiedDate' => date('Y-m-d H:i:s'),
				);
				$this->db->insert("subscribeemail", $data);
				echo 1;
			else :
				echo 3;
			endif;
		endif;
	}

	public function getTotalCount($table)
	{
		if ($table == "ti_itineraries") {
			$condition = array('is_deleted' => '0', 'status' => '2');
		} else if ($table == "ti_stories") {
			$condition = array('is_deleted' => '0', 'is_published' => '1');
		} else {
			$condition = array('isdeleted' => '0', 'is_published' => '1');
		}
		$checkemail = $this->Home_Model->getWhere($table, $condition);
		if (is_array($checkemail)) :
			echo count($checkemail);
		else :
			echo 0;
		endif;
	}

	public function submitProfiles()
	{
		$record = $this->input->post();

		$this->form_validation->set_rules("username", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("mobile", "Mobile", "required|trim|numeric");
		$this->form_validation->set_rules("desc", "Description", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = $this->Home_Model->getWhere('submitTraveller', array('email' => $record['email']));
			if ($checkemail == "no") :
				$data = array(
					'name' => $record['username'],
					'email' => $record['email'],
					'mobile' => $record['mobile'],
					'description' => $record['desc'],
					'createdate' => date('Y-m-d H:i:s'),
				);
				$this->db->insert("submitTraveller", $data);
				echo 1;
			else :
				echo 3;
			endif;
		endif;
	}


	public function submitfeedbacks()
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("username", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("subject", "Subject", "required|trim");
		$this->form_validation->set_rules("desc", "Description", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = $this->Home_Model->getWhere('submitfeedback', array('email' => $record['email']));
			if ($checkemail == "no") :
				$data = array(
					'name' => $record['username'],
					'email' => $record['email'],
					'subject' => $record['subject'],
					'description' => $record['desc'],
					'createdate' => date('Y-m-d H:i:s'),
				);
				$this->db->insert("submitfeedback", $data);
				echo 1;
			else :
				echo 3;
			endif;
		endif;
	}


	public function expertitineraries()
	{
		$record = $this->input->post();

		$this->form_validation->set_rules("username", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("knowdescription", "Description", "required|trim");
		$this->form_validation->set_rules("mobile", "Mobile", "required|trim|numeric");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = 'no'; //$this->Home_Model->getWhere('itinerariesExpert',array('email'=>$record['email'],'itid'=>$record['itinerariesId']));
			if ($checkemail == "no") :

				$clientCondition = array('email' => $record['email']);
				$clientData = $this->Home_Model->getwhere("package_detail", $clientCondition);
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
					$code_data = $this->Home_Model->getwhere("monthly_traveller_code", $conditionArray);
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
					'name' => $record['username'],
					'email' => $record['email'],
					'phone' => $record['mobile'],
					'package' => $record['knowdescription'],
					'destination' => $record['destination'],
					'landing' => $record['platform'],
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
				endif;
			else :
				echo 3;
			endif;
		endif;
	}


	public function signup()
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("username", "Name", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("password", "Password", "required|trim|min_length[5]");
		$this->form_validation->set_rules("confirmpassword", "Confirm Password", "required|trim|matches[password]");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = $this->Home_Model->getWhere('register', array('email' => $record['email']));
			if ($checkemail == "no") :
				$data = array(
					'name' => $record['username'],
					'email' => $record['email'],
					'password' => sha1($record['password']),
					'createddate' => date('Y-m-d H:i:s'),
					'modifieddate' => date('Y-m-d H:i:s'),
				);
				$this->db->insert("register", $data);
				echo 1;
			else :
				echo 3;
			endif;
		endif;
	}

	public function signin()
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		$this->form_validation->set_rules("password", "Password", "required|trim");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = $this->Home_Model->getWhere('register', array('email' => $record['email'], 'password' => $record['password'], 'status' => '1'));
			if (is_array($checkemail)) :
				$adminSession = array(
					'frontid' => $checkemail[0]->id,
					'frontStatus' => $checkemail[0]->status,
					'frontName' => $checkemail[0]->name
				);
				$this->session->set_userdata($adminSession);
				echo 1;
			else :
				echo 3;
			endif;
		endif;
	}


	public function logout()
	{
		$array_items = array('frontid', 'frontStatus', 'frontName');
		$this->session->unset_userdata($array_items);
		redirect('/');
	}


	public function myprofile()
	{
		$id = $this->session->userdata('frontid');
		if (!empty($id) && intval($id)) :
			//$isStatus = $this->session->userdata('admin_Status');
			if (!empty($id)) :
				$conditionArray = array('id' => $this->session->userdata('frontid'));

				$adminRecord = $this->Home_Model->getwhere("register", $conditionArray);

				if (is_array($adminRecord)) :
					$record['rec'] = $adminRecord;
				endif;

				$template = "dash";
				$record['viewFile'] = "myprofile";
				$record['module'] = "home";

				echo modules::run('template/' . $template, $record);
			else :
				show_404();
			endif;
		else :
			show_404();
		endif;
	}


	public function bucketlist()
	{
		$id = $this->session->userdata('frontid');
		if (!empty($id) && intval($id)) :
			//$isStatus = $this->session->userdata('admin_Status');
			if (!empty($id)) :
				$conditionArray = array('id' => $this->session->userdata('frontid'));

				$adminRecord = $this->Home_Model->getwhere("register", $conditionArray);

				if (is_array($adminRecord)) :
					$record['rec'] = $adminRecord;
				endif;

				$record['storiesBucket'] = modules::run('story/getStoriesFavs', $this->session->userdata('frontid'), '');

				$template = "dash";
				$record['viewFile'] = "bucketpage";
				$record['module'] = "home";

				echo modules::run('template/' . $template, $record);
			else :
				show_404();
			endif;
		else :
			show_404();
		endif;
	}


	public function getSearchRec()
	{
		$text = $this->input->post('searchtext');
		if (empty($text)) : ?>
			<a href="#">No Record found!</a>
			<?php else :
			$searchRecord = $this->Home_Model->getsearchRecordformItineraries($text);
			if (is_array($searchRecord)) : ?>
				<div class="dropheading">
					Itineraries
				</div>
				<?php
				foreach ($searchRecord as $rec) {
				?>

					<a href="<?php echo base_url() ?>itinerary/<?php echo $rec->url; ?>"><?php echo $rec->headline; ?></a>
				<?php }
			endif;

			$searchRecordstories = $this->Home_Model->getsearchRecordformStories($text);
			if (is_array($searchRecordstories)) : ?>
				<div class="dropheading">
					Stories
				</div>
				<?php foreach ($searchRecordstories as $rec) {
				?>

					<a href="<?php echo base_url() ?>itinerary/<?php echo $rec->meta_url; ?>"><?php echo $rec->story_head; ?></a>
				<?php }
			endif;

			$searchRecordthings = $this->Home_Model->getsearchRecordformThingstodo($text);
			if (is_array($searchRecordthings)) : ?>
				<div class="dropheading">
					Things to do
				</div>
				<?php foreach ($searchRecordthings as $rec) { ?>

					<a href="<?php echo base_url() ?>things_to_do/<?php echo $rec->url; ?>"><?php echo $rec->articleHeadline; ?></a>
<?php }
			endif;

		endif;
	}

	public function getUserRecord($ids)
	{
		$conditionalArray = array('id' => $ids, 'status' => '1');
		$frontUserRecord = $this->Home_Model->getwhere("register", $conditionalArray);
		return $frontUserRecord;
	}

	public function forgotup()
	{
		$record = $this->input->post();
		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$checkemail = $this->Home_Model->getWhere('register', array('email' => $record['email'], 'status' => '1'));
			if (is_array($checkemail)) :
				$email = $checkemail[0]->email;
				$id = $checkemail[0]->id;
				$name = $checkemail[0]->name;
				$emaildata = array('to' => $email, 'name' => $name, 'id' => $id);
				$email = modules::run('Emails/forgotmail', $emaildata);
				echo $email;
			else :
				echo 3;
			endif;
		endif;
	}

	public function forgotpasswords($id)
	{
		$template = "home";
		$record['id'] = $id;
		$record['viewFile'] = "fpassword";
		$record['module'] = "home";
		echo modules::run('template/' . $template, $record);
	}


	public function submitChangePassword()
	{
		$post = $this->input->post();
		$this->form_validation->set_rules("pass", "Password", "required|trim");
		$this->form_validation->set_rules("cpass", "Confirm Password", "required|trim|matches[pass]");
		if ($this->form_validation->run() == FALSE) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :
			$pass = $this->input->post('pass');
			$id = $this->input->post('custid');

			$data = array('password' => sha1(
				$pass
			), 'modifieddate' => date('Y-m-d H:i:s'));


			$this->db->where('id', $id);
			$this->db->update('register', $data);
			echo 1;
		endif;
	}


	function getSchemes($api_param = [])
	{
		//	if (stripos($_SERVER['REQUEST_METHOD'], 'get') !== FALSE) {
		$count = 0;
		$count1 = 0;
		$post_arr  = $this->input->post();

		// x($post_arr);
		$data = [];
		$data1 = [];
		$result_arr = $this->getSchemesData($post_arr['query']);
		// x($result_arr);
		if (!empty($result_arr['scheme_priority'])) {
			foreach ($result_arr['scheme_priority'] as $k => $v) {
				foreach ($result_arr['schemes'][$k] as $key => $value) {
					$data[$k][$count]['id']         = $count;
					// $data[$k][$count]['text']       = ucwords(strtolower($value->Scheme_Name)).' ['.$value->asset_type.']';
					$data[$k][$count]['text']       	= ucwords(strtolower($value->Scheme_Name));
					$data[$k][$count]['opt_code']   	= base_url($value->slug . '/nav/' . $value->Unique_No);
					$data[$k][$count]['asset_code'] 	= 1;
					$data[$k][$count]['amc_code']  		= $value->Amc_code;
					$data[$k][$count]['smart_sip_flag'] = $value->smart_sip_flag;
					$data[$k][$count]['smart_sip_withtp_xirr'] = $value->smart_sip_withtp_xirr;
					$data[$k][$count]['sip_xirr'] = $value->sip_xirr;
					$count++;
				}
			}
		}

		// x($data);

		if (!empty($result_arr['kc_title'])) {
			foreach ($result_arr['kc_title'] as $k => $v) {
				// $remove_tags 	= strip_tags($v['post_content']);
				$remove_tags 	= trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($v['post_content']))))));
				$post_desc 		= substr($remove_tags, 0, 230);
				if (strlen($remove_tags) > 230)
					$post_desc = $post_desc . '...';
				$data1[$count1]['id']         = $count;
				$data1[$count1]['text']       = "<span class='ht-kb-search-result-title'>" . $v['post_title'] . "</span><span class='ht-kb-search-result-excerpt'>" . $post_desc . "</span>";
				$data1[$count1]['opt_code']   = KC_URL . '/articles/' . $v['post_name'];
				$data1[$count1]['asset_code'] = $v['post_title'];
				$count++;
				$count1++;
			}
		}

		if (!empty($result_arr['kc_desc'])) {
			foreach ($result_arr['kc_desc'] as $k => $v) {
				// $remove_tags 	= strip_tags($v['post_content']);
				$remove_tags 	= trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($v['post_content']))))));
				$post_desc 		= substr($remove_tags, 0, 230);
				if (strlen($remove_tags) > 230)
					$post_desc = $post_desc . '...';
				$data1[$count1]['id']         = $count;
				$data1[$count1]['text']       = "<span class='ht-kb-search-result-title'>" . $v['post_title'] . "</span><span class='ht-kb-search-result-excerpt'>" . $post_desc . "</span>";
				$data1[$count1]['text']  	  = str_replace('"', "'", $data1[$count1]['text']);
				$data1[$count1]['opt_code']   = KC_URL . '/articles/' . $v['post_name'];
				$data1[$count1]['asset_code'] = $v['post_title'];
				$count++;
				$count1++;
			}
		}

		$return_arr[0] = $data;
		$return_arr[1] = $data1;
		$return_arr[2] = $result_arr['schemes_cnt'];
		$return_arr[3] = $result_arr['kc_cnt'];
		$return_arr[4] = $result_arr['scheme_priority'];
		$return_arr[5] = $post_arr['request'];
		$session_data = $this->session->userdata();
		if (!empty($session_data['client_id']) || !empty($session_data['user_acc_id']))
			$return_arr[6] = 1;
		else
			$return_arr[6] = 0;
		if ($api_param['api_response'] == 1) {
			return $return_arr;
		} else {
			echo json_encode($return_arr);
			die;
		}

		//}
	}


	function getSchemesData($keyword)
	{

		// $this->benchmark->mark('start');
		if (!empty($keyword)) {
			$keyword = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $keyword);
			$keyword_exploded = explode(' ', $keyword);
			$keyword_exploded = array_filter($keyword_exploded);
			$full_text_search = '+' . implode('* +', $keyword_exploded) . '*';

			$priority = [];
			$result = [];

			$tcount = 0;
			/* $params                     = [];
			$params['env']              = 'av';
			$params['select_data']      = '*';
			$params['table_name']       = 'thingstodo';
			$params['where']            = TRUE;
			$params['where_data']       = "MATCH(articleHeadline) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and is_published = '1'";
			$params['order_by']         = 'viewcount';
			//$params['print_query_exit'] = 'true';
			$params['return_array'] = 'true';
			$search_results = $this->Home_Model->get_table_data_with_type($params);
			$total_results = [];

			if (!empty($search_results)) {

				foreach ($search_results as  $ttd) {
					$total_result[$tcount]['url'] = base_url() . "things-to-do/" . $ttd['url'];
					$total_result[$tcount]['name'] =  $ttd['articleHeadline'];
					$total_result[$tcount]['metaDesc'] =  $ttd['metaDesc'];
					$total_result[$tcount]['metatag'] =  $ttd['metatag'];
					$total_result[$tcount]['type'] =  'thingstodo';
					$total_result[$tcount]['by'] =  '';
					$tcount = $tcount + 1;
				}
			}




			$params                     = [];
			$params['env']              = 'av';
			$params['select_data']      = '*';
			$params['table_name']       = 'ti_stories';
			$params['where']            = TRUE;
			$params['where_data']       = "MATCH(story_head ) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and is_published = '1' and is_deleted = '0'";
			$params['join']             = TRUE;
			$params['join_table']       = 'realtraveller';
			$params['join_on']          = 'ti_stories.real_traveller = realtraveller.id';
			$params['join_type']        = 'left';
			$params['order_by']         = 'views_count';
			//$params['print_query_exit'] = 'true';
			$params['return_array'] = 'true';
			$search_results = $this->Home_Model->get_table_data_with_type($params);
			$total_results = [];

			if (!empty($search_results)) {

				foreach ($search_results as  $story) {
					$total_result[$tcount]['url'] =  base_url() . 'story/' . $story['meta_url'];
					$total_result[$tcount]['name'] =  $story['story_head'];
					$total_result[$tcount]['metaDesc'] =  $story['meta_description'];
					$total_result[$tcount]['by'] =  ($story['name'] != null) ? $story['name'] : 'Team Adventourist';
					$total_result[$tcount]['type'] =  'stories';
					$tcount = $tcount + 1;
				}
			} */


			$params                     = [];
			$params['env']              = 'av';
			$params['select_data']      = '*';
			$params['table_name']       = 'ti_itineraries';
			$params['where']            = TRUE;
			$params['where_data']       = "MATCH(headline ) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and status = '2' and is_deleted = '0'";
			// 		$params['join']             = TRUE;
			// $params['join_table']       = 'realtraveller';
			// $params['join_on']          = 'ti_stories.real_traveller = realtraveller.id';
			// $params['join_type']        = 'left';
			$params['order_by']         = 'views';
			//$params['print_query_exit'] = 'true';
			$params['return_array'] = 'true';
			$search_results = $this->Home_Model->get_table_data_with_type($params);
			$total_results = [];

			if (!empty($search_results)) {

				foreach ($search_results as  $it) {
					$total_result[$tcount]['url'] =  base_url() . 'itinerary/' . $it['url'];
					$total_result[$tcount]['name'] =  strip_tags($it['headline']);
					$total_result[$tcount]['metaDesc'] =  $it['meta_description'];
					$total_result[$tcount]['by'] =  '';
					$total_result[$tcount]['type'] =  'itenaries';
					$tcount = $tcount + 1;
				}
			}

			echo json_encode($total_result);
			die;
			$total_kc_results = 0;

			print_r($total_result);
			die;

			// get top 5 most viewed articles based on title search 
			$params                     = [];
			$params['env']              = 'kc';
			$params['select_data']      = 'amf_posts.ID,amf_posts.post_content,amf_posts.post_title,amf_posts.post_name,amf_post_views.count meta_value';
			$params['table_name']       = 'amf_posts';
			// $params['where_like']       = TRUE;
			// $params['where_like_data']  = array('amf_posts.post_title' => $keyword);
			$params['where']            = TRUE;
			// $params['where_data']       = array('amf_posts.post_status' => 'publish','amf_postmeta.meta_key' => '_ht_kb_post_views_count');
			$params['where_data']       = "MATCH(amf_posts.post_title) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and amf_posts.post_status = 'publish' and amf_post_views.period = 'total'";
			// $params['order_by']         = '';
			$params['limit_data']       = '5';
			$params['limit_start']      = '0';
			$params['join']         	= TRUE;
			$params['join_table']   	= 'amf_post_views';
			$params['join_on']      	= 'amf_posts.ID = amf_post_views.id';
			$params['join_type']    	= 'INNER';
			$params['order_by']    	    = "amf_post_views.count desc";
			$params['return_array']    	= TRUE;
			// $params['print_query_exit'] = true;
			// $params['query_type']   = 'select';

			// $api_data 	= $this->get_api_content_by_curl($params);
			// $kc_result  = json_decode($api_data);
			$kc_result 	= $this->sn->get_table_data_with_type($params);
			// x($api_data);

			// x($kc_result);

			// foreach ($kc_result as $key => $value) {
			// 	$post_ids[$value->ID] = $value;
			// }

			if (!empty($kc_result)) {
				$post_unique_ids = array_column($kc_result, 'ID');
				$params                     = [];
				$params['env']              = 'kc';
				$params['select_data']      = 'count(1) as total_cnt';
				$params['table_name']       = 'amf_posts';
				// $params['where_like']       = TRUE;
				// $params['where_like_data']  = array('amf_posts.post_title' => $keyword);
				$params['where']            = TRUE;
				// $params['where_data']       = array('amf_posts.post_status' => 'publish','amf_postmeta.meta_key' => '_ht_kb_post_views_count');
				$params['where_data']       = "MATCH(amf_posts.post_title) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and amf_posts.post_status = 'publish' and amf_post_views.period = 'total'";
				$params['join']         	= TRUE;
				$params['join_table']   	= 'amf_post_views';
				$params['join_on']      	= 'amf_posts.ID = amf_post_views.id';
				$params['join_type']    	= 'INNER';
				// $params['order_by']    	    = "sd_postmeta.meta_value +0 desc";
				// $params['print_query_exit'] = true;
				// $params['query_type']   = 'select';

				// $api_data 	= $this->get_api_content_by_curl($params);
				// x($api_data);
				// $total_kc_cnt1  	= json_decode($api_data);
				$total_kc_cnt1 	= $this->sn->get_table_data_with_type($params);
				$total_kc_results += $total_kc_cnt1[0]->total_cnt;
			}


			// get top 5 most viewed articles based on desc search 
			$params                     = [];
			$params['env']              = 'kc';
			$params['select_data']      = 'amf_posts.ID,amf_posts.post_content,amf_posts.post_title,amf_posts.post_name,amf_post_views.count meta_value';
			$params['table_name']       = 'amf_posts';
			// $params['where_like']       = TRUE;
			// $params['where_like_data']  = array('amf_posts.post_content' => $keyword);
			$params['where']            = TRUE;
			// $params['where_data']       = array('amf_posts.post_status' => 'publish','amf_postmeta.meta_key' => '_ht_kb_post_views_count');
			$params['where_data']       = "MATCH(amf_posts.post_content) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and amf_posts.post_status = 'publish' and amf_post_views.period = 'total'";
			// $params['order_by']         = '';
			$params['limit_data']       = '5';
			$params['limit_start']      = '0';
			$params['join']         	= TRUE;
			$params['join_table']   	= 'amf_post_views';
			$params['join_on']      	= 'amf_posts.ID = amf_post_views.id';
			$params['join_type']    	= 'INNER';
			$params['order_by']    	    = "amf_post_views.count desc";
			$params['return_array']     = TRUE;
			if (!empty($post_unique_ids)) {
				$params['where_not_in']         = TRUE;
				$params['where_not_in_field']   = "amf_posts.ID";
				$params['where_not_in_array']   = $post_unique_ids;
			}

			// $params['print_query_exit'] = true;
			// $params['query_type']   = 'select';

			// $api_data1 	= $this->get_api_content_by_curl($params);
			// x($api_data);
			// $kc_result1  = json_decode($api_data1);
			$kc_result1 	= $this->sn->get_table_data_with_type($params);
			// x($kc_result1);

			// foreach ($kc_result1 as $key => $value) {
			// 	$post_ids1[$value->ID] = $value;
			// }

			// x($post_ids1);

			if (!empty($kc_result1)) {
				$params                     = [];
				$params['env']              = 'kc';
				$params['select_data']      = 'count(1) as total_cnt';
				$params['table_name']       = 'amf_posts';
				// $params['where_like']       = TRUE;
				// $params['where_like_data']  = array('amf_posts.post_content' => $keyword);
				$params['where']            = TRUE;
				// $params['where_data']       = array('amf_posts.post_status' => 'publish','amf_postmeta.meta_key' => '_ht_kb_post_views_count');
				$params['where_data']       = "MATCH(amf_posts.post_content) AGAINST ('" . $full_text_search . "' IN BOOLEAN MODE) and amf_posts.post_status = 'publish' and amf_post_views.period = 'total'";
				$params['join']         	= TRUE;
				$params['join_table']   	= 'amf_post_views';
				$params['join_on']      	= 'amf_posts.ID = amf_post_views.id';
				$params['join_type']    	= 'INNER';
				// $params['print_query_exit'] = true;
				// $params['query_type']   = 'select';

				// $api_data1 	= $this->get_api_content_by_curl($params);
				// x($api_data);
				// $total_kc_cnt2  	= json_decode($api_data1);
				$total_kc_cnt2 	= $this->sn->get_table_data_with_type($params);
				$total_kc_results += $total_kc_cnt2[0]->total_cnt;
			}

			// x($total_kc_results);
			//    $keys_arr1=[];$keys_arr2 =[];
			//    if(!empty($post_ids))
			//    	$keys_arr1 = array_keys($post_ids);
			//    if(!empty($post_ids1))
			//    	$keys_arr2 = array_keys($post_ids1);
			//    // x($keys_arr2);
			//    $keys_to_search = array_merge($keys_arr1,$keys_arr2);
			//    // y($post_ids);
			//    // y($post_ids1);
			//    // x($keys_to_search,2);

			//    // x(array_keys($post_ids));

			//    //get description for top 5 articles
			//    $top5_article_title = [];
			// $top5_article_desc = [];
			//    if(!empty($keys_to_search)){
			//    	$params                     = [];
			// 	$params['env']              = 'kc';
			// 	$params['select_data']      = 'post_id,meta_value';
			// 	$params['table_name']       = 'amf_postmeta';
			// 	$params['where_in']       	= TRUE;
			// 	$params['where_in_field']  	= 'post_id';
			// 	$params['where_in_data']  	= $keys_to_search;
			// 	$params['where']            = TRUE;
			// 	$params['where_data']       = array('amf_postmeta.meta_key' => '_aioseop_description');

			// 	// $params['print_query_exit'] = true;
			// 	// $params['query_type']   = 'select';

			//     // $api_data2 	= $this->get_api_content_by_curl($params);
			//     // x($api_data2);
			//     // $kc_desc  = json_decode($api_data2);
			//     $kc_desc 	= $this->sn->get_table_data_with_type($params);
			//     // x($kc_desc,454);
			//     foreach ($kc_desc as $key => $value) {
			//     	if(!empty($post_ids[$value->post_id])){
			//     		$top5_article_title[$key]['post_id'] 	= $value->post_id;
			// 	    	$top5_article_title[$key]['post_title'] = $post_ids[$value->post_id]->post_title;
			// 	    	$top5_article_title[$key]['post_name'] 	= $post_ids[$value->post_id]->post_name;
			// 	    	$top5_article_title[$key]['post_desc'] 	= $value->meta_value;
			//     	}else{
			//     		$top5_article_desc[$key]['post_id'] 	= $value->post_id;
			// 	    	$top5_article_desc[$key]['post_title'] 	= $post_ids1[$value->post_id]->post_title;
			// 	    	$top5_article_desc[$key]['post_name'] 	= $post_ids1[$value->post_id]->post_name;
			// 	    	$top5_article_desc[$key]['post_desc'] 	= $value->meta_value;
			//     	}

			//     }
			//    }


			// y($top5_article_title);
			// x($top5_article_desc);

			$return_arr 					= [];
			$return_arr['schemes'] 			= $result;
			$return_arr['schemes_cnt'] 		= $total_results;
			$return_arr['kc_title'] 		= $kc_result;
			$return_arr['kc_desc'] 			= $kc_result1;
			$return_arr['kc_cnt'] 			= $total_kc_results;
			asort($priority);
			$return_arr['scheme_priority']  = $priority;

			// x($return_arr);


			return $return_arr;
		}
	}
}

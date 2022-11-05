<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Itineraries extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Itineraries_model');
		$this->load->model('admin/admin_model');
	}

	public function index()
	{
		if (!empty($_POST)) {
			$record = $this->input->post();
			// print_r($_POST) ; die;

			if (is_array($record)) :
				$record["itinerariesRecs"]  = $this->Itineraries_model->getfilterRecord($record);
				$template = "home";
				$record['title'] = "Advent Tourist | Itineraries Page";
				$record['viewFile'] = "Itineraries";
				$record['module'] = "itineraries";
				echo modules::run('template/' . $template, $record);
			else :
				show_404();
			endif;
		} else {
			$limit_per_page = 8;
			$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$total_records = count($this->Itineraries_model->getwhere("ti_itineraries", array('status' => '2', 'is_deleted' => '0')));
			if ($total_records > 0) {
				// get current page records
				$record["itinerariesRecs"] = $this->Itineraries_model->get_current_page_records($limit_per_page, $start_index);

				$config['base_url'] = base_url() . 'itineraries/index';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;

				$this->pagination->initialize($config);

				// build paging links
				$record["links"] = $this->pagination->create_links();
			}
			$template = "home";

			//$record['itinerariesRecs'] = $this->Itineraries_model->getwhere("ti_itineraries",array('status'=>'2','is_deleted'=>'0'));
			$record['title'] = "Adventourist | Trips, Itineraries and Tour Packages";
			$record['descriptions'] = "Get trips, tours and itineraries for leh ladakh, thailand, maldives and many more destinations planned by travel experts on Adventourist.";
			$record['keywords'] = "tour plans, travel itineraries, trip, vacation ideas";
			$record['viewFile'] = "Itineraries";
			$record['module'] = "itineraries";

			echo modules::run('template/' . $template, $record);
		}
	}


	public function itinerary()
	{

		if (!empty($_POST)) {
			$record = $this->input->post();
			// print_r($_POST) ; die;

			if (is_array($record)) :
				$record["itinerariesRecs"]  = $this->Itineraries_model->getfilterRecord($record);
				$template = "home";
				$record['title'] = "Advent Tourist | Itineraries Page";
				$record['viewFile'] = "Itineraries";
				$record['module'] = "itineraries";
				echo modules::run('template/' . $template, $record);
			else :
				show_404();
			endif;
		} else {
			$limit_per_page = 8;
			$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$total_records = count($this->Itineraries_model->getwhere("ti_itineraries", array('status' => '2', 'is_deleted' => '0')));
			if ($total_records > 0) {
				// get current page records
				$record["itinerariesRecs"] = $this->Itineraries_model->get_current_page_records($limit_per_page, $start_index);

				$config['base_url'] = base_url() . 'itineraries/index';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;

				$this->pagination->initialize($config);

				// build paging links
				$record["links"] = $this->pagination->create_links();
			}
			$template = "home";

			//$record['itinerariesRecs'] = $this->Itineraries_model->getwhere("ti_itineraries",array('status'=>'2','is_deleted'=>'0'));



			// START  	------- Counts of itineraies based on theme
			$condition['theme'] = ['Nature'];
			$record['Nature']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition['theme'] = ['Beach'];
			$record['Beach']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition['theme'] = ['Mountain'];
			$record['Mountain']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition['theme'] = ['Urban'];
			$record['Urban']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition['theme'] = ['Rural'];
			$record['Rural']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition['theme'] = ['Others'];
			$record['Others']  = count($this->Itineraries_model->getfilterRecord($condition));
			
			$condition1['timevisit'] = ['January'];
			$record['January']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['February'];
			$record['February']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['March'];
			$record['March']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['April'];
			$record['April']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['May'];
			$record['May']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['June'];
			$record['June']  = count($this->Itineraries_model->getfilterRecord($condition1));

			$condition1['timevisit'] = ['July'];
			$record['July']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['August'];
			$record['August']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['September'];
			$record['September']  = count($this->Itineraries_model->getfilterRecord($condition1));

			$condition1['timevisit'] = ['October'];
			$record['October']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['November'];
			$record['November']  = count($this->Itineraries_model->getfilterRecord($condition1));
			
			$condition1['timevisit'] = ['December'];
			$record['December']  = count($this->Itineraries_model->getfilterRecord($condition1));
			// END 		------- Counts of itineraies based on theme

			$record['title'] = "Adventourist | Trips, Itineraries and Tour Packages";
			$record['descriptions'] = "Get trips, tours and itineraries for leh ladakh, thailand, maldives and many more destinations planned by travel experts on Adventourist.";
			$record['keywords'] = "tour plans, travel itineraries, trip, vacation ideas";
			$record['viewFile'] = "Itineraries";
			$record['module'] = "itineraries";

			echo modules::run('template/' . $template, $record);
		}
	}

	public function test123()
	{
		$limit_per_page = 4;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records = count($this->Itineraries_model->getwhere("ti_itineraries", array('status' => '2', 'is_deleted' => '0')));
		if ($total_records > 0) {
			// get current page records
			$record["itinerariesRecs"] = $this->Itineraries_model->get_current_page_records($limit_per_page, $start_index);

			$config['base_url'] = base_url() . 'itineraries/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);

			// build paging links
			$record["links"] = $this->pagination->create_links();
		}
		$template = "home";

		//$record['itinerariesRecs'] = $this->Itineraries_model->getwhere("ti_itineraries",array('status'=>'2','is_deleted'=>'0'));
		$record['title'] = "Adventourist: Itineraries and Trips Planned by Real Travel Experts.";
		$record['descriptions'] = "Get a list of all itineraries by adventourist, travel influencers and local guides.";
		$record['keywords'] = "adventourist feedback, feedback, complaints and suggestions .";
		$record['viewFile'] = "Itineraries";
		$record['module'] = "itineraries";

		echo modules::run('template/' . $template, $record);

		//echo modules::run('comingsoon');
	}

	public function detail($id)
	{
		if (!empty($id)) :

			$storiesRec = $this->admin_model->getwhere("ti_itineraries", array('is_deleted' => '0', 'url' => $id));
			if (is_array($storiesRec)){

				$viewCount = $storiesRec[0]->views;
				$updatedCount = $viewCount + 1;
	
				$data = array('views' => $updatedCount);
				$this->db->where('url', $id);
				$this->db->update('ti_itineraries', $data);
	
				$template = "home";
				$itinerariesRecord = $this->Itineraries_model->getDetailItineraries($id);
	
				if (is_array($itinerariesRecord)) :
					$record['itinerariesId'] = $itinerariesRecord[0]->itiid;
				endif;
				$record['itinerariesRecs'] = $itinerariesRecord;
	
				$record['stories'] = $this->Itineraries_model->getWherewithlimit("ti_stories", array('status' => '1', 'is_published' => '1', 'is_deleted' => '0'), '4');
				//$record['title'] = "Advent Tourist | Itineraries Page";
				$record['viewFile'] = "Itinerariesdetailnew";
				$record['module'] = "itineraries";
				echo modules::run('template/' . $template, $record);
			}else
				show_404();
		else :
			show_404();
		endif;
	}
	public function detail2($id)
	{
		if (!empty($id)) :

			$storiesRec = $this->admin_model->getwhere("ti_itineraries", array('is_deleted' => '0', 'url' => $id));
			if (is_array($storiesRec)) :

				$viewCount = $storiesRec[0]->views;
				$updatedCount = $viewCount + 1;

				$data = array('views' => $updatedCount);
				$this->db->where('url', $id);
				$this->db->update('ti_itineraries', $data);
			endif;

			$template = "home";
			$itinerariesRecord = $this->Itineraries_model->getDetailItineraries($id);

			if (is_array($itinerariesRecord)) :
				$record['itinerariesId'] = $itinerariesRecord[0]->itiid;
			endif;
			$record['itinerariesRecs'] = $itinerariesRecord;

			$record['stories'] = $this->Itineraries_model->getWherewithlimit("ti_stories", array('status' => '1', 'is_published' => '1', 'is_deleted' => '0'), '4');
			//$record['title'] = "Advent Tourist | Itineraries Page";
			$record['viewFile'] = "Itinerariesdetail";
			$record['module'] = "itineraries";
			echo modules::run('template/' . $template, $record);
		else :
			show_404();
		endif;
	}


	function viewItineraries()
	{
		$validate = validate_module_access('itineraries/viewItineraries');
		if (!empty($validate)):
			$adminIds = $this->session->userdata('adminid');
			$istraveler = $this->session->userdata('istraveler');
			$conditionArray = array('id' => $this->session->userdata('adminid'));
			if (isset($istraveler) && $istraveler == 1) :
				$adminRecord = $this->admin_model->getwhere("realtraveller", $conditionArray);
			else :
				$adminRecord = $this->admin_model->getwhere("adminmaster", $conditionArray);
			endif;

			if (is_array($adminRecord)) :
				$record['rec'] = $adminRecord;
			endif;

			$itid = $this->session->userdata('itinerariesId');
			if (!empty($itid)) :
				$itinerariesAllRecord = $this->admin_model->getwhere("ti_itineraries", array('deleted_by' => 0));
				if (is_array($itinerariesAllRecord)) :
					$record['itineraries'] = $itinerariesAllRecord;
					$record['count'] = count($itinerariesAllRecord);
				endif;
			endif;

			$istraveler = $this->session->userdata('istraveler');
			if (isset($istraveler) && !empty($istraveler)) :
				$itinerariesRecord = $this->admin_model->getwhere("ti_itineraries", array('is_deleted' => 0, 'real_traveller' => $adminIds));
			else :
				$itinerariesRecord = $this->admin_model->getwhere("ti_itineraries", array('is_deleted' => 0));
			endif;

			if (is_array($itinerariesRecord)) :
				$record['itinerariesAllRecord'] = $itinerariesRecord;
				$record['count'] = count($itinerariesRecord);
			endif;

			//$record['city'] = getcity();
			$template = "admin";
			$record['viewfile'] = "itineraries_details";
			$record['module'] = "itineraries";
			echo modules::run('template/' . $template, $record);
		else :
			redirect('admin');
		endif;
	}

	function itineraries_details_ajax()
	{
		$record = $this->input->post();
		$record['admin_page'] = 1;
		$record["itinerariesAllRecord"]  = $this->Itineraries_model->getfilterRecord($record);
		//print_r($record); die;
		$html = $this->load->view('itinerary_table_filter', $record, TRUE);
		print_r($html);
		die;
		$itinerariesAllRecord = $this->admin_model->getwhere("ti_itineraries", $where);
		if (is_array($itinerariesAllRecord)) :
			$record['itineraries'] = $itinerariesAllRecord;
			$record['count'] = count($itinerariesAllRecord);
		endif;
	}

	function addItineraries($id = '')
	{
		if ($id == '') :
			$this->session->unset_userdata('itinerariesId');
		endif;
		$itid = $this->session->userdata('itinerariesId');
		if (!empty($itid)) :
			$itinerariesRecord = $this->admin_model->getwhere("ti_itineraries", array('id' => $itid));
			if (is_array($itinerariesRecord)) :
				$record['itineraries'] = $itinerariesRecord[0];
			endif;
		endif;

		$itid = $this->session->userdata('itinerariesId');
		if (!empty($itid)) :
			$tripdetailsRecord = $this->admin_model->getwhere("ti_itineraries_details", array('master_id' => $itid));
			if (is_array($tripdetailsRecord)) :
				$record['trip_details'] = $tripdetailsRecord;
			endif;
		endif;
		$record['cities'] = $this->Itineraries_model->getcities();
		$template = "admin";
		$record['viewfile'] = "view_itineraries_details";
		$record['module'] = "itineraries";

		echo modules::run('template/' . $template, $record);
	}

	function itinerarySeoData()
	{

		$id = $this->session->userdata('adminid');
		$istraveller = $this->session->userdata('istraveler');

		if ($istraveller != '') {
			$adminRecs = 0;
		} else {

			$adminRecs = 1;
		}

		$postRecord = $this->input->post();
		$this->form_validation->set_rules("meta_tags", 'Meta Tag', 'required|trim|xss_clean');
		$this->form_validation->set_rules("meta_description", 'Meta Description', 'required|trim|xss_clean');
		$this->form_validation->set_rules("viewcount", 'Count', 'required|trim|xss_clean|numeric');
		$this->form_validation->set_rules("url", 'Url', 'required|trim|xss_clean');
		$this->form_validation->set_rules("meta_title", 'Meta Title', 'required|trim|xss_clean');

		if ($this->form_validation->run() == false) :
			echo json_encode($this->form_validation->error_array());
		else :
			$sessionTravel = $this->session->userdata('itinerariesId');
			if (isset($sessionTravel) && !empty($sessionTravel) && is_numeric($sessionTravel)) :
				$dataArray = array(
					'meta_tags' => $postRecord['meta_tags'],
					'meta_description' => $postRecord['meta_description'],
					'views' => $postRecord['viewcount'],
					'url' => str_replace(" ", "-", $postRecord['url']),
					'meta_title' => $postRecord['meta_title'],
					'modified_on' => date('Y-m-d H:i:s'),
					'status' => '1',
					'real_traveller' => $id,
					'isAdmin' => $adminRecs
				);


				$this->Itineraries_model->update("ti_itineraries", $sessionTravel, $dataArray);
			else :
				$dataArray = array(
					'meta_tags' => $postRecord['meta_tags'],
					'meta_description' => $postRecord['meta_description'],
					'views' => $postRecord['viewcount'],
					'url' => str_replace(" ", "-", $postRecord['url']),
					'meta_title' => $postRecord['meta_title'],
					'created_on' => date('Y-m-d H:i:s'),
					'modified_on' => date('Y-m-d H:i:s'),
					'status' => '0',
					'real_traveller' => $id,
					'isAdmin' => $adminRecs
				);

				$this->db->insert("ti_itineraries", $dataArray);
				$lastId = $this->db->insert_id();
				$this->session->set_userdata('itinerariesId', $lastId);
			endif;
			echo 1;
		endif;
	}


	function itineraryTripDetail()
	{
		$postRecord = $this->input->post();
		$itid = $this->session->userdata('itinerariesId');


		$this->form_validation->set_rules("heading", 'Itineraries Heading', 'required|trim|xss_clean');
		$this->form_validation->set_rules("about", 'About Itineraries', 'required|trim|xss_clean');
		$this->form_validation->set_rules("things", 'Important things', 'required|trim|xss_clean');

		if ($this->form_validation->run() == false) :
			echo json_encode($this->form_validation->error_array());
		else :
			if (empty($itid)) :
				echo 2;
			else :
				$dataArray = array(
					'headline' => $postRecord['heading'],
					'about' => $postRecord['about'],
					'imp_things' => $postRecord['things'],
					'modified_on' => date('Y-m-d H:i:s'),
					'status' => 1
				);

				$updateRec = $this->Itineraries_model->update("ti_itineraries", $itid, $dataArray, "id");
				echo 1;
			endif;
		endif;
	}

	function itinerarysummary()
	{
		$summaryRecord = $this->input->post();

		$itid = $this->session->userdata('itinerariesId');

		//$this->form_validation->set_rules("start_point",'Start Point','required|trim|xss_clean');
		$this->form_validation->set_rules("end_point", 'destination Point', 'required|trim|xss_clean');

		$this->form_validation->set_rules("total_trip_days", 'trip days', 'required|trim|xss_clean');
		$this->form_validation->set_rules("total_budget", 'Budget', 'required|trim|xss_clean|numeric');
		/*$this->form_validation->set_rules("trip_category",'Category','required|trim|xss_clean');
		$this->form_validation->set_rules("trip_type",'type','required|trim|xss_clean');
		$this->form_validation->set_rules("transport_mode",'transport mode','required|trim|xss_clean');*/


		if ($this->form_validation->run() == false) {
			echo json_encode($this->form_validation->error_array());
			die;
		}


		if ($_POST['itinerariesThumb'] == 'undefined'  || $_POST['itinerariesThumb'] == 'undefined'  || empty($_POST['itinerariesThumb'])) {
			$filenames = $summaryRecord['listthumbmails'];
		} else {
			$dataimage = $_POST['itinerariesThumb'];
			// print_r(['nn' => $dataimage]); die;
			$filenames = 'itn-' . date('ymdHis') . '.png';


			//$dataimage2 = preg_replace('#^data:image/\w+;base64,#i', '', $dataimage);
			$dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
			$dataimage2 = str_replace(' ', '+', $dataimage2);


			$path = getcwd() . '/uploads/itinerariesthumb/' . $filenames;
			file_put_contents($path, base64_decode($dataimage2));
			$path_jpg = str_replace("png", "jpg", $path);
			$this->png2jpg($path, $path_jpg, -1);
			$filenames = str_replace("png", "jpg", $filenames);
		}




		$endPoint = $summaryRecord['end_point'];
		$season_to_visit = implode(",", array_filter($summaryRecord['season_to_visit']));
		$trip_category = implode(",", $summaryRecord['trip_category']);
		$trip_type = implode(",", $summaryRecord['trip_type']);

		$dataArray = array(
			'departure' => $summaryRecord['start_point'],
			'destination' => $endPoint,
			'month_to_visit' => $season_to_visit,
			'trip_days' => $summaryRecord['total_trip_days'],
			'trip_nights' => $summaryRecord['total_trip_nights'],
			'budget' => $summaryRecord['total_budget'],
			'category' => $trip_category,
			'type' => $trip_type,
			'listthumbnail' => $filenames,
			'modified_on' => date('Y-m-d H:i:s'),
			'status' => 1
		);


		$updateRec = $this->Itineraries_model->update("ti_itineraries", $itid, $dataArray, "id");
		echo 1;
	}


	public function itineraryPackageList()
	{
		$listRecord = $this->input->post();
		$itid = $this->session->userdata('itinerariesId');

		$this->form_validation->set_rules("food", 'Food', 'required|trim|xss_clean');
		$this->form_validation->set_rules("accessories", 'Accessories', 'required|trim|xss_clean');
		$this->form_validation->set_rules("clothes", 'Clothes', 'required|trim|xss_clean');
		$this->form_validation->set_rules("medicines", 'medicine', 'required|trim|xss_clean');

		/*$this->form_validation->set_rules("trip_category",'Category','required|trim|xss_clean');
		$this->form_validation->set_rules("trip_type",'type','required|trim|xss_clean');
		$this->form_validation->set_rules("transport_mode",'transport mode','required|trim|xss_clean');*/


		if ($this->form_validation->run() == false) :
			echo json_encode($this->form_validation->error_array());
		else :
			if (empty($itid)) :
				echo 2;
			else :
				$dataArray = array(
					'food' => $listRecord['food'],
					'accessories' => $listRecord['accessories'],
					'clothes' => $listRecord['clothes'],
					'medicines' => $listRecord['medicines'],
					'modified_on' => date('Y-m-d H:i:s')
				);
				$updateRec = $this->Itineraries_model->update("ti_itineraries", $itid, $dataArray, "id");
				echo 1;
			endif;
		endif;
	}


	public function get_daywise_itineraries_details()
	{
		$days = $this->input->post('days');
		$tripId = $this->session->userdata('itinerariesId');
		// $data['date_start'] = $this->input->post('date_start');
		// $data['date_end'] = $this->input->post('date_end');
		$data['trip_id'] = $tripId;
		$data['days'] = $days;
		//$data['cities'] = $this->Itineraries_model->getwhere("cities",array('state_id'=>22));
		$trip_details = $this->Itineraries_model->getwhere("ti_itineraries_details", array('master_id' => $tripId, 'is_deleted' => 0));
		//print_r($trip_details); die;
		if ($trip_details == "no") :
			$data['trip_details'] = [];
		else :
			$data['trip_details'] = $trip_details;
		endif;
		$html = $this->load->view('view_itineraries_details_ajax', $data, TRUE);
		echo $html;
		die;
	}

	public function upload_image()
	{
		$user_id = $this->session->userdata['adminid'];
		$tripId = $this->session->userdata('itinerariesId');
		$path = getcwd() . '/uploads/' . $user_id . '/itineraries/';

		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$filenames = time() . $_FILES['file']['name'];
		$uploadfile = $path . basename($filenames);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
			if (!$this->session->userdata('ad_id')) {
				$insert_data = [
					'master_id' => $tripId,
					'upload_type' => 'image',
					'created_on' => date('Y-m-d H:i:s'),
					'filename' => $filenames,
					'created_by' => $user_id,
				];
				$this->db->insert("ti_itineraries_uploads", $insert_data);
				$ad_id = $this->db->insert_id();
			}
			echo json_encode(array('status' => 'success', 'SuccessDesc' => 'File uploaded Succesfully!', 'image_id' => $ad_id));
		} else {
			echo json_encode(array('status' => 'failure', 'ErrorDesc' => 'Please Try Again!'));
		}
	}


	public function SaveTripGallery()
	{
		$user_id = $this->session->userdata['adminid'];
		$tripId = $this->session->userdata('itinerariesId');

		$video_url = $this->input->post('video_url');

		$videoDetails = $this->Itineraries_model->getwhere("ti_itineraries_uploads", array('master_id' => $tripId, 'upload_type' => 'video'));


		if ($videoDetails == "no") :
			$insert_data = [
				'master_id' => $tripId,
				'upload_type' => 'video',
				'filename' => $video_url,
				'status' => 1,
				'created_on' => date('Y-m-d H:i:s'),
				'created_by' => $user_id,
			];
			$result_update = $this->db->insert("ti_itineraries_uploads", $insert_data);
		else :
			$this->db->where('master_id', $tripId);
			$this->db->where('upload_type', 'video');
			$result_update = $this->db->update("ti_itineraries_uploads", array('filename' => $video_url));
		endif;

		if (!empty($result_update)) {
			echo json_encode(array('status' => 'success', 'trip_id' => $tripId));
		} else
			echo json_encode(array('status' => 'error'));
	}


	public function getVideoImageRec($id)
	{
		if (!empty($id)) :
			$record = $this->Itineraries_model->getwhere("ti_itineraries_uploads", array('master_id' => $id));
			return $record;
		else :
			show_404();
		endif;
	}

	public function delete_itineraries()
	{
		$user_id = $this->session->userdata['adminid'];
		$id = $this->input->post('itinerary_id');
		$update_data = [
			'is_deleted' => 1,
			'deleted_by' => $user_id
		];
		$this->db->where('id', $id);
		$result_update = $this->db->update('ti_itineraries', $update_data);
		if (!empty($result_update))
			echo json_encode(array('status' => 'success'));
		else
			echo json_encode(array('status' => 'error'));

		die;
	}

	public function view_itineraries_details($id)
	{
		$this->session->set_userdata('itinerariesId', $id);
		redirect('itineraries/addItineraries/1');
	}


	public function saveItineraryDetails()
	{
		$records = $this->input->post();
		$itinerary_size = $this->input->post('itinerary_size');
		$itinerary_details_id =  $this->session->userdata('itinerariesId');

		$user_id = $this->session->userdata['adminid'];


		for ($i = 1; $i <= 1; $i++) {
			//     $this->form_validation->set_rules("hours_".$i,'Hours','required|trim|xss_clean|numeric');
			// $this->form_validation->set_rules("min_".$i,'Minute','required|trim|xss_clean|numeric');
			// $this->form_validation->set_rules("distance_".$i,'Clothes','required|trim|xss_clean');
			$this->form_validation->set_rules("details_" . $i, 'details', 'required|trim|xss_clean');
			// $this->form_validation->set_rules("stay_".$i,'medicine','required|trim|xss_clean');
			// $this->form_validation->set_rules("food_".$i,'medicine','required|trim|xss_clean');
			// $this->form_validation->set_rules("things_to_do_".$i,'medicine','required|trim|xss_clean');
		}

		/*$this->form_validation->set_rules("trip_category",'Category','required|trim|xss_clean');
		$this->form_validation->set_rules("trip_type",'type','required|trim|xss_clean');
		$this->form_validation->set_rules("transport_mode",'transport mode','required|trim|xss_clean');*/


		if ($this->form_validation->run() == false) :
			echo json_encode($this->form_validation->error_array());
			exit;
		else :

			//echo $user_id;
			//print_r($itinerary_size); die;

			for ($i = 1; $i <= $itinerary_size; $i++) {
				$key = $i;
				//  $trip_date = $this->input->post('trip_date' . $key);
				$from_city = $this->input->post('from_city_' . $key);
				$to_city = $this->input->post('to_city_' . $key);
				// $mode_of_transport = $this->input->post('mode_of_transport_' . $key);
				// $hour = $this->input->post('hours_' . $key);
				// $min = $this->input->post('min_' . $key);
				// if(empty($hour) && empty($min)){
				//     $travel_time = "0-0";
				// } else {
				// $travel_time = $hour."-".$min;
				// }

				// $distance = $this->input->post('distance_' . $key);
				$details = $this->input->post('details_' . $key);
				// $stay = $this->input->post('stay_' . $key);
				// $food = $this->input->post('food_' . $key);
				// $things_to_do = $this->input->post('things_to_do_' . $key);

				$result = $this->Itineraries_model->getwhere('ti_itineraries_details', array('master_id' => $itinerary_details_id, 'day_no' => $key));
				if ($result == "no") {
					$insertData = [
						'master_id' => $itinerary_details_id,
						'day_no' => $key,
						//'date' => $trip_date,
						'from_city' => $from_city,
						'to_city' => $to_city,
						//'mode_of_transport' => $mode_of_transport,
						//'travel_time' => $travel_time,
						//'distance' => $distance,
						//'mode_of_transport' => $mode_of_transport,
						'details' => $details,
						//  'stay' => $stay,
						//  'food' => $food,
						//  'things_to_do' => $things_to_do,
						'created_on' => date('Y-m-d H:i:s'),
						'created_by' => $user_id,
					];

					//

					$insertdata = $this->db->insert("ti_itineraries_details", $insertData);
					echo 1;
				} else {
					$update_data = [
						//  'date' => $trip_date,
						'from_city' => $from_city,
						'to_city' => $to_city,
						//  'mode_of_transport' => $mode_of_transport,
						//  'travel_time' => $travel_time,
						//  'distance' => $distance,
						//  'mode_of_transport' => $mode_of_transport,
						'details' => $details,
						//  'stay' => $stay,
						//  'food' => $food,
						//    'things_to_do' => $things_to_do,
						'modified_by' => $user_id,
					];


					$result_update = $this->Itineraries_model->updateitineray("ti_itineraries_details", $itinerary_details_id, $key, $update_data);
					echo 1;
				}
			}

			$itid = $this->session->userdata('itinerariesId');
			$dataArray = array(

				'status' => 1
			);


			$updateRec = $this->Itineraries_model->update("ti_itineraries", $itid, $dataArray, "id");

		endif;
	}

	function getTravellerName($id)
	{

		if (empty($id)) :
			echo "-";
		else :
			$gettraveller = $this->Itineraries_model->getwhere("realtraveller", array('id' => $id));
			if (is_array($gettraveller)) :
				return $gettraveller[0]->name;
			else :
				echo $gettraveller;
			endif;
		endif;
	}
	function getTravellerUrl($id)
	{

		if (empty($id)) :
			echo "-";
		else :
			$gettraveller = $this->Itineraries_model->getwhere("realtraveller", array('id' => $id));
			if (is_array($gettraveller)) :
				return $gettraveller[0]->url;
			else :
				echo $gettraveller;
			endif;
		endif;
	}
	function getCityName($id)
	{

		if (empty($id)) :
			echo "-";
		else :
			$getCityRec = $this->Itineraries_model->getCity('cities', $id);
			if (is_array($getCityRec)) :
				$counts = count($getCityRec);
				$i = 1;
				foreach ($getCityRec as $val) {
					if ($counts > $i) :
						echo $val->name . ",";
					else :
						echo $val->name;
					endif;
					$i++;
				}
			else :
				echo $getCityRec;
			endif;
		endif;
	}

	public function deleteItinerariesImage()
	{
		$id = $this->input->post('id');
		if (!empty($id)) :
			$this->db->where('id', $id);
			$this->db->delete('ti_itineraries_uploads');
			echo 1;
		else :
			echo 2;
		endif;
	}

	public function deleteItinerariesImages()
	{
		$id = $this->input->post('id');
		if (!empty($id)) :
			$this->db->where('filename', $id);
			$this->db->delete('ti_itineraries_uploads');
			echo 1;
		else :
			echo 2;
		endif;
	}

	public function profilestatus()
	{
		$id = $this->input->post('id');
		$value = $this->input->post('statusValue');
		$profileRec = array('status' => $value);
		$editRecord = $this->Itineraries_model->update("ti_itineraries", $id, $profileRec, 'id');
	}


	public function getItinerariesMedia($id)
	{
		if (!empty($id)) :
			$result = $this->Itineraries_model->getwhere('ti_itineraries_uploads', array('master_id' => $id));
			return $result;
		endif;
	}

	public function getItinerariesDetails($id)
	{
		if (!empty($id)) :
			$result = $this->Itineraries_model->getwhere('ti_itineraries_details', array('master_id' => $id));
			return $result;
		endif;
	}

	public function getitinerairesSimilar()
	{
		$result = $this->Itineraries_model->getwhere('ti_itineraries', array('status' => '2', 'is_deleted' => '0'));
		return $result;
	}

	public function getLatestItineraries()
	{
		$data['latest'] = $this->Itineraries_model->getLatestItineraries();
		return $this->load->view('menu', $data);
	}

	public function getCityNameForSelect($id)
	{
		if (empty($id)) :
			echo "-";
		else :
			$getCityRec = $this->Itineraries_model->getCitySelect('cities', $id);
			if (is_array($getCityRec)) :
				return $getCityRec;
			else :
				echo $getCityRec;
			endif;
		endif;
	}


	public function favItineraries()
	{
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		if ($type == "like") {
			$favstatus = '1';
		} else {
			$favstatus = '0';
		}

		$data = array(
			'storiesId' => $id,
			'userid' => $this->session->userdata['adminid'],
			'favstatus' => $favstatus,
			'type' => 2,
			'createddate' => date('Y-m-d H:i:s'),
			'modifieddate' => date('Y-m-d H:i:s'),
		);


		$checkStatus = $this->admin_model->getwhere("fav", array('userid' => $this->session->userdata['adminid'], 'storiesId' => $id, 'type' => 2));
		if ($checkStatus == 'no') :
			$this->db->insert("fav", $data);
		else :
			unset($data['createddate']);
			$this->db->where('id', $checkStatus[0]->id);
			$this->db->update("fav", $data);
		endif;
		echo 1;
	}


	public function favBucketList()
	{
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		if ($type == "like") {
			$favstatus = '1';
		} else {
			$favstatus = '0';
		}

		$tables = $this->input->post('tables');
		echo $tables;
		exit;
		if ($tables == 1) {
			$buckType = 1;
		} else {
			$buckType = 2;
		}

		$data = array(
			'buketlist' => $id,
			'userid' => $this->session->userdata['frontid'],
			'bucketStatus' => $favstatus,
			'type' => $buckType,
			'createddate' => date('Y-m-d H:i:s'),
			'modifieddate' => date('Y-m-d H:i:s'),
		);



		$checkStatus = $this->admin_model->getwhere("bucketList", array('userid' => $this->session->userdata['frontid'], 'buketlist' => $id, 'type' => $buckType));
		if ($checkStatus == 'no') :
			$this->db->insert("bucketList", $data);
		else :
			unset($data['createddate']);
			$this->db->where('id', $checkStatus[0]->id);
			$this->db->update("bucketList", $data);
		endif;
		echo 1;
	}

	function getBucketList($storyid, $userid, $types)
	{
		$checkStatus = $this->admin_model->getwhere("bucketList", array('userid' => $userid, 'buketlist' => $storyid, 'type' => $types));
		if ($checkStatus == 'no') :
			return "no";
		else :
			return $checkStatus;
		endif;
	}

	function getSearchRec()
	{
		$text = $this->input->post('searchtext');
		if (empty($text)) : ?>
			<a href="#">No Record found!</a>
			<?php else :
			$searchRecord = $this->Itineraries_model->getsearchRecord($text);
			if (is_array($searchRecord)) :
				foreach ($searchRecord as $rec) {
			?>
					<a href="<?php echo base_url() ?>itinerary/<?php echo $rec->url; ?>"><?php echo $rec->headline; ?></a>
<?php }
			endif;
		endif;
	}

	function getFilter()
	{
		$record = $this->input->post();
		// print_r($_POST) ; die;

		if (is_array($record)) :
			$record["itinerariesRecs"]  = $this->Itineraries_model->getfilterRecord($record);
			if ($record["itinerariesRecs"] == 'no') {
				echo "<h4>No results Found</h4>";
				die;
			}
			$html = $this->load->view('searchresultfront', $record, TRUE);
			echo $html;
			die;

		else :
			show_404();
		endif;
	}

	function explore_itinerary()
	{
		$post = $_GET;
		$record['breadcrum'] = 'Explore all itineraries';
		if (isset($post['theme'])){
			$record['breadcrum'] = 'Explore destinations with theme ' . $post['theme'];
			$arrData['theme'][] = $post['theme'];
		}
		if (isset($post['timevisit'])){
			$record['breadcrum'] = 'Explore destinations you can visit in ' . $post['timevisit'];
			$arrData['timevisit'][] = $post['timevisit'];
		}

		$record["itinerariesRecs"]  = $this->Itineraries_model->getfilterRecord($arrData);
		$template 			= "home";
		$record['title'] 	= "Advent Tourist | Explore Itineraries";
		$record['viewFile'] = "explore";
		$record['module'] 	= "itineraries";
		echo modules::run('template/' . $template, $record);
	}

	function getitinerairesUnder15000()
	{
		$result = $this->Itineraries_model->getwhere('ti_itineraries', array('budget <= ' => '15000', 'is_deleted' => '0'));
		return $result;
	}

	function getitinerairesUnder25000()
	{
		$result = $this->Itineraries_model->getwhere('ti_itineraries', array('budget > ' => '15000', 'budget <= ' => '25000', 'is_deleted' => '0'));
		return $result;
	}
}

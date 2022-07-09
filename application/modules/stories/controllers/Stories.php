<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Stories_model');
		$this->load->model('admin/admin_model');
		$this->load->model('itineraries/itineraries_model');
		$this->load->model('traveller/traveler_model');


	}

	public function index()
	{
		$template = "home";
		$record['stories'] = $this->admin_model->getwhere("ti_stories",array('status'=>'1','is_published'=>'1','is_deleted'=>'0'));
			$record['title'] = "Adventourist: Real Travel Stories and Expriences from Across India.";
		$record['descriptions'] = "Read travel stories, expriences and travel blogs from real travellers, local guide and travel experts.";
		$record['keywords'] = "travel stories, travel stories in india, travel stories rep, travel stories blog, travel blog, travel experiences, travel blogger india, travel blogging.";
		$record['viewFile'] = "frontstories";
		$record['module'] = "stories";
		echo modules::run('template/'.$template,$record);
	}

	function viewtraveler()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['realTravelerRec'] = $this->traveler_model->getwhere("realtraveller",array('isDeleted'=>'0'));

			$template = "admin";
			$record['viewfile'] = "real_travellers";
			$record['module'] = "traveller";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}

		function addstories()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
		    $conditionArray = array('id'=>$this->session->userdata('adminid'));
				if(isset($istraveler) && $istraveler == 1):
					$adminRecord = $this->admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				endif;	

			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
			
			
			/*$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;*/

			$stories = $this->admin_model->getwhere("ti_stories",array('is_deleted'=>'0'));
			if(is_array($stories)):
				$record['stories'] = $stories;
			endif;

			$template = "admin";
			$record['viewfile'] = "stories";
			$record['module'] = "stories";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}
	


	function add_stories()
	{
		$isAdmin = $this->session->userdata('isAdmin');
			$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
		$conditionArray = array('id'=>$this->session->userdata('adminid'));
				if(isset($istraveler) && $istraveler == 1):
					$adminRecord = $this->admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				endif;	

			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['cities'] = $this->itineraries_model->getwhere("cities",array('state_id'=>22));
			$record['realTravelerRec'] = $this->traveler_model->getwhere("realtraveller",array('isDeleted'=>'0','isPublished' => '2'));

			$template = "admin";
			$record['viewfile'] = "edit_stories";
			$record['module'] = "stories";

			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}


	function edit_stories($id)
	{
		if(empty($id)):
			show_404();
		else:
			$isAdmin = $this->session->userdata('isAdmin');
			if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('adminid'));
				$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;

				$realTravel = $this->admin_model->getwhere("ti_stories",array('id'=>$id,'is_deleted'=>'0'));
				$record['realTravelerRec'] = $this->traveler_model->getwhere("realtraveller",array('isDeleted'=>'0','isPublished' => '2'));

				if(is_array($realTravel)):
					$record['realTravels'] = $realTravel;
					 $citiRecForTravel = modules::run('itineraries/getCityNameForSelect',$realTravel[0]->destination);
				    if(is_array($citiRecForTravel)):
				        $record['storiescities'] = $citiRecForTravel;
				    endif;
				endif;

				$template = "admin";
				$record['viewfile'] = "edit_stories_form";
				$record['module'] = "stories";
				echo modules::run('template/'.$template ,$record);
			else :
				redirect('admin');
			endif;	
		endif;	
	}

	function logout(){	
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$this->session->sess_destroy();
			redirect('admin');
		else :
			redirect('admin');
		endif;	
	}

	function getCityFromState(){
		$stateid = $this->input->post('state');
		$stateRec = getcity($stateid);
		if(is_array($stateRec)):
			$record ='';
			foreach ($stateRec as $value) {
				$record.="<option value='".$value->id."'>".$value->name."</option>";	
			}
			echo $record;
		endif;	
	}
	
	function url($url) {
   $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
   $url = trim($url, "-");
   $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
   $url = strtolower($url);
   $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
   return $url;
 }

	function saveStories(){
		$record = $this->input->post();
		$this->form_validation->set_rules('meta_tags','Meta Tags','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_url','Meta Url','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_title','Meta Title','required|trim|xss_clean');
		$this->form_validation->set_rules('views_count','Counts','required|trim|xss_clean|numeric');
		$this->form_validation->set_rules('story_head','heading','required|trim|xss_clean');
		if(isset($record['story_video']) && !empty($record['story_video'])){
		$this->form_validation->set_rules('story_video','Story Video','required|trim|xss_clean');
		}
		//$this->form_validation->set_rules('destination','destination','required|trim|xss_clean');
	
		$this->form_validation->set_rules('storiesDesc','Description','required|trim|xss_clean');


		if($this->form_validation->run() == false){
			echo json_encode($this->form_validation->error_array());
		}
		else{
		
			

            	if(!empty($record['storiesThumb']) || $record['storiesThumb'] != 'undefined' ){
			
	            	$dataimage = $_POST['storiesThumb'];
				    $filenames = 'stories-'.date('ymdHis').'.png';
	                $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
					$dataimage2 = str_replace(' ', '+', $dataimage2);
	                $path = getcwd() . '/assets/frontImage/stories/'.$filenames;
					file_put_contents($path, base64_decode($dataimage2));
					$path_jpg = str_replace("png","jpg",$path);
					$this->png2jpg($path,$path_jpg, -1);
					$filenames = str_replace("png","jpg",$filenames);

                }



			if(isset($record['trip_category']) && is_array($record['trip_category']) && !empty($record['trip_category'])):
				$trip_category = implode(",",$record['trip_category']);
			else:
				$trip_category ='';
			endif;	




			if(isset($record['trip_type']) && is_array($record['trip_type']) && !empty($record['trip_type'])):
				$trip_type = implode(",",$record['trip_type']);
			else:
				$trip_type ='';
			endif;	


            if(empty($record['destination'])):
                $destination = "";    
            else:
                $destination = $record['destination'];
            endif;

            if(empty($record['story_video'])):
                $story_video = "";    
            else:
                $story_video = trim($record['story_video']);
            endif;
           
         
            
			$data=array(
			'story_head'=>$record['story_head'],				
			'story_details'=>$record['storiesDesc'],
			'real_traveller'=>$record['traveller_id'],
			'story_video'=>$story_video,
			'destination'=>$destination,
		//	'suitable'=>$trip_category,
			//'theme'=>$trip_type,
			'views_count'=>$record['views_count'],
			'meta_tags'=>$record['meta_tags'],
			'meta_description'=>$record['meta_description'],
			'meta_url'=>$this->url($record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'storiesImage'=>$filenames,
			//'is_published'=>$record['is_published'],
			'status'=>'0',
			'createdDate'=>date('Y-m-d h:i:s'),
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	

			if(empty($record['storiesThumb']) || $record['ttstoriesumb'] == 'undefined' ){
					unset($data['storiesImage']);
				}
			$records = $this->db->insert("ti_stories",$data);
			echo 1;
		}
			
	}

	function saveeditStories(){
		$record = $this->input->post();
		
		$this->form_validation->set_rules('meta_tags','Meta Tags','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_url','Meta Url','required|trim|xss_clean');
		$this->form_validation->set_rules('views_count','Counts','required|trim|xss_clean|numeric');
		$this->form_validation->set_rules('meta_title','Meta Title','required|trim|xss_clean');
		$this->form_validation->set_rules('story_head','heading','required|trim|xss_clean');
		
		//$this->form_validation->set_rules('destination','destination','required|trim|xss_clean');
	
		$this->form_validation->set_rules('storiesDesc','Description','required|trim|xss_clean');


		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
		
			    
			    if(!empty($record['storiesThumb']) || $record['storiesThumb'] != 'undefined' ){
			
	            	$dataimage = $_POST['storiesThumb'];
				    $filenames = 'stories-'.date('ymdHis').'.png';
	                $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
					$dataimage2 = str_replace(' ', '+', $dataimage2);
	                $path = getcwd() . '/assets/frontImage/stories/'.$filenames;
					file_put_contents($path, base64_decode($dataimage2));
					$path_jpg = str_replace("png","jpg",$path);
					$this->png2jpg($path,$path_jpg, -1);
					$filenames = str_replace("png","jpg",$filenames);	

                }
		
		



			if(isset($record['trip_category']) && is_array($record['trip_category']) && !empty($record['trip_category'])):
				$trip_category = implode(",",$record['trip_category']);
			else:
				$trip_category ='';
			endif;	




			if(isset($record['trip_type']) && is_array($record['trip_type']) && !empty($record['trip_type'])):
				$trip_type = implode(",",$record['trip_type']);
			else:
				$trip_type ='';
			endif;	
            
            if(empty($record['destination'])):
                $destination = "";    
            else:
                $destination = $record['destination'];
            endif;

             if(empty($record['story_video'])):
                $story_video = "";    
            else:
                $story_video = trim($record['story_video']);
            endif;
            
            
        
			$data=array(
			'story_head'=>$record['story_head'],				
			'story_details'=>$record['storiesDesc'],
			'real_traveller'=>$record['traveller_id'],
			'story_video'=>$story_video,
			'destination'=>$destination,
			//'suitable'=>$trip_category,
			//'theme'=>$trip_type,
			'views_count'=>$record['views_count'],
			'meta_tags'=>$record['meta_tags'],
			'meta_description'=>$record['meta_description'],
			'meta_url'=>$this->url($record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'storiesImage'=>$filenames,
		//	'is_published'=>$record['is_published'],
			'status'=>'0',
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	

			if(empty($record['storiesThumb']) || $record['storiesThumb'] == 'undefined' ){
				unset($data['storiesImage']);
			}
			$storiesId = $record['storyid'];



			$this->db->where('id',$storiesId);
			$this->db->update("ti_stories",$data);
			echo 1;
			
		endif;	
	}
	function traveleredit(){
		$record = $this->input->post();
		$this->form_validation->set_rules('full_name','Name','required|trim|xss_clean');
		$this->form_validation->set_rules('state','state','required|trim');
		$this->form_validation->set_rules('city','city','required|trim');

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
			
			if(!empty($_FILES['userfile']['name'])){
				$userprofile = time().$_FILES['userfile']['name'];
				$res = preg_replace("/[^a-zA-Z1-9\.]/", "", $userprofile);
            	$img = $res;
            	$uploadfiles = $this->uploadFile($img,'userfile','userprofiles',"");
            	if($uploadfiles != 1):
            		echo 3;
            	endif;	
			} else if(isset($record['profileImages'])){
				$img = $record['profileImages'];
			} else {
				$img = "";
			}	




			if(isset($record['places_travelled']) && is_array($record['places_travelled']) && !empty($record['places_travelled'])):
				$placeToTravel = implode(",",$record['places_travelled']);
			else:
				$placeToTravel ='';
			endif;	

			if(isset($record['meta_tag']) && !empty($record['meta_tag'])):
				$meta_tag = $record['meta_tag'];
			endif;	

			if(isset($record['meta_description']) && !empty($record['meta_description'])):
				$meta_description = $record['meta_description'];	
			endif;	

			if(isset($record['meta_url']) && !empty($record['meta_url'])):
				$meta_url = $record['meta_url'];
			endif;	



			$data=array(	
			'name'=>$record['full_name'],
			'state'=>$record['state'],
			'city'=>$record['city'],
			'birthday'=>$record['dob'],
			'profession'=>$record['occupation'],
			'travelplace'=>$placeToTravel,
			'bio'=>$record['about'],
			'mobile'=>$record['mobile'],
			'profileImage'=>$img,
			'facebook'=>$record['facebook'],
			'instagram'=>$record['instagram'],
			'twitter'=>$record['twitter'],
			'linkdin'=>$record['linkedin'],
			'createdDate'=>date('Y-m-d h:i:s'),
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	

			if(isset($record['meta_tag'])){
				$data['metatag'] = $meta_tag;
			}
			if(isset($record['meta_description'])){
				$data['metaDesc'] = $meta_description;
			}
			if(isset($record['meta_url'])){
				$data['url'] = $meta_url;
			}

			$id=$record['editId'];

			$editRecord = $this->traveler_model->update("realtraveller",$id,$data,'id');
			echo $editRecord;
			/*if(!empty($records)):
				$email = modules::run('emails/email_confirmation',$record['email']);
				echo $email;
			endif;*/	
		endif;	
	}
	 		  public function uploadFile($imageName,$key,$folderName,$type)
	   {
	   		    //echo $imageName."--".$key."--".$folderName;
	   			$config['file_name'] = $imageName;
			    $config['upload_path'] = './assets/frontImage/'.$folderName;
			    if($type == "profile")
			    {
			        $config['allowed_types'] = "jpg|png|jpeg";
			    }else
			    {
				$config['allowed_types'] = "jpg|png|pdf|jpeg";
			    }
				$config['max_width']  = '5000';
				$config['max_height']  = '5000';
				$config['max_size']    = '2000';

				
                $this->load->library('upload',$config);
				$this->upload->initialize($config);
				   
				 if (!$this->upload->do_upload($key))
					 {
						return $err=$this->upload->display_errors();
					 } else {
					     return 1;
					 }
	    }


	    public function editTraveler($id){
	    if(!empty($id) && intval($id)):
	    	$isAdmin = $this->session->userdata('isAdmin');
	    	$isStatus = $this->session->userdata('admin_Status');
	    	$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('adminid'));
				if(isset($istraveler) && $istraveler == 1):
					$adminRecord = $this->admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				endif;			
				
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;


				$editTravelerRecord = $this->traveler_model->getwhere("realtraveller",array('id'=>$id));


				$record['editRec'] = $editTravelerRecord; 
				$record['state'] = getstate();
				$record['city'] = getcity($editTravelerRecord[0]->state);
				$template = "admin";
				$record['viewfile'] = "real_travellers_edit_form"; 
				$record['module'] = "traveller";
				echo modules::run('template/'.$template ,$record);
			else :
				show_404();
			endif;	
	    else:
	    	show_404();	
	    endif;	
	    }


	    public function travelerInfo(){
	    $id = $this->session->userdata('adminid');		
	    if(!empty($id) && intval($id)):
	    	$isAdmin = $this->session->userdata('isAdmin');
	    	$isStatus = $this->session->userdata('admin_Status');
	    	$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('adminid'));
				if(isset($istraveler) && $istraveler == 1):
					$adminRecord = $this->admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				endif;		
				
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;


				$editTravelerRecord = $this->traveler_model->getwhere("realtraveller",array('id'=>$id));
				$record['editRec'] = $editTravelerRecord; 

				$record['state'] = getstate();
				$record['city'] = getcity($editTravelerRecord[0]->state);
				$template = "admin";
				$record['viewfile'] = "real_travellers_view_form"; 
				$record['module'] = "traveller";
				echo modules::run('template/'.$template ,$record);
			else :
				show_404();
			endif;	
	    else:
	    	show_404();	
	    endif;	
	    }


	    function deleteRecord(){
	    	$deleteid = $this->input->post('deleteid');
	    		$this->db-> where('id',$deleteid);
  				$this->db-> delete('realtraveller');
  				echo 1;
	    }

	    public function travellerDetail($url){
	    	if(!empty($url)):
	    		$template = "home";
				$record['realtravellerDetail'] = $this->traveler_model->getwhere("realtraveller",array('status'=>'1','url'=>$url));
				
				$record['title'] = "Advent Tourist | Real Traveller Page";
				$record['viewFile'] = "travelerDetail";
				$record['module'] = "Traveller";
				echo modules::run('template/'.$template,$record);
	    	else:
	    		show_404();
	    	endif;	
	    }


	    public function login(){
	    	$record = $this->input->post();
			$this->form_validation->set_rules('email','Email','required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim|xss_clean');

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
			$checkLogin = $this->traveler_model->getwhere("realtraveller",array('email'=>$record['email'],'password'=>$record['password']));
			if(isset($checkLogin) && is_array($checkLogin)):
				$status = $checkLogin[0]->status;
				if($status == '1'):
					$adminSession = array(
						'isAdmin' => 1,
						'adminid' => $checkLogin[0]->id,
						'adminStatus'=> $checkLogin[0]->status,
						'adminName'=>$checkLogin[0]->name,
						'istraveler'=>1
					);
					$this->session->set_userdata($adminSession);
					echo 1;
				else :
					echo 2;
				endif;	
			else :
				echo 3;
			endif;	
		endif;	
	    }


	    public function verificationPage($id=''){
	    	if(!empty($id)):
	    		$decryptid=str_replace(array('-', '_', '~'), array('+', '/', '='),$id);
				$updateid=$this->encrypt->decode($decryptid);

	    		$password = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8);
	    		$updateData = array('status'=>'1','password'=>sha1($password),'isPublished'=>'1');
	    		$editRecord = $this->traveler_model->update("realtraveller",$updateid,$updateData,"id");	
	    		// update password 
	    		if($editRecord):
	    			$getEmailid = $this->traveler_model->getwhere("realtraveller",array('status'=>'1','id'=>$updateid));
	    			if(is_array($getEmailid)):
	    				$emaildata = array('to' => $getEmailid[0]->email,'name' => $getEmailid[0]->name,'password'=>$password);
	    				
				$email = modules::run('emails/loginCredential',$emaildata);
	    			endif;	
	    		endif;

	    		$template = "home";
				$record['title'] = "Advent Tourist | Traveler Verfication Success Page";
				$record['viewFile'] = "verificationSuccess";
				$record['module'] = "Traveller";
				echo modules::run('template/'.$template,$record);
	    	else:
	    		show_404();
	    	endif;	
	    }

	    public function profilestatus(){
	    	$id = $this->input->post('id');	
	    	$value = $this->input->post('statusValue');		
	    	$profileRec = array('isPublished'=>$value);
	    	$editRecord = $this->traveler_model->update("realtraveller",$id,$profileRec,'id');

	    }

	     public function exports_data(){
	     	$result1 = array('id','metatag','metaDesc','url','name','birthday','profession','email','mobile','facebook','instagram','twitter','linkdin','createdDate','modifiedDate');
	     	$result = $this->traveler_model->get("realtraveller");
	     	array_unshift($result,$result1);
	     
            header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=\"traveller".".csv\"");
            header("Pragma: no-cache");
            header("Expires: 0");

            $handle = fopen('php://output', 'w');

            if(is_array($result)):
            foreach ($result as $data) {
                fputcsv($handle, $data);
            }
                fclose($handle);
        	endif;
            exit;

        }


        function deleteStories(){
        	$id = $this->input->post('story_id');
        	$this->db->where("id",$id);
        	$this->db->update("ti_stories",array('is_deleted'=>1));
        	echo 1;
        }
        
        function deleteComment(){
        	$id = $this->input->post('story_id');
        	$this->db->where("id",$id);
            $this->db->delete('comment');
        	echo 1;
        }

        function updateStoriesStatus(){
        	$id = $this->input->post('id');
        	$vals = $this->input->post('vals');
        	$this->db->where("id",$id);
        	$this->db->update("ti_stories",array('status'=>$vals));
        	echo 1;	
        }

 function updateCommentStatus(){
        	$id = $this->input->post('id');
        	$vals = $this->input->post('vals');
        	$this->db->where("id",$id);
        	$this->db->update("comment",array('is_published'=>$vals));
        	
        	echo 1;	
        }


        public function detail($url){
        	if(empty($url)):
        		show_404();
        	else:
        		$storiesRec = $this->admin_model->getwhere("ti_stories",array('status'=>'1','is_published'=>'1','is_deleted'=>'0','meta_url'=>$url));
        		if(is_array($storiesRec)):
        	    $viewCount = $storiesRec[0]->views_count;
        	    $updatedCount = $viewCount + 1;
        	    
        	    $data= array('views_count'=>$updatedCount);
        	    $this->db->where('meta_url',$url);
                $this->db->update('ti_stories',$data);
        	
        	    
        		$record['storiesDetail'] = $storiesRec;	
        		$record['stories'] = $this->Stories_model->getRandomStories("ti_stories",array('status'=>'1','is_published'=>'1','is_deleted'=>'0'));
        		$record['commentstories'] = $this->Stories_model->getCommentsByStories($url);
        		$template = "home";
				//$record['title'] = "Adventourist | Travel Stories";
				$record['viewFile'] = "storiesdetails";
				$record['module'] = "stories";
			
				echo modules::run('template/'.$template,$record);
				else:
					show_404();
				endif;	
        	endif;	
        }

        public function favStories(){
        	$id = $this->input->post('id');
        	$type = $this->input->post('type');
        	if($type == "like"){
        		$favstatus = '1';
        	} else{
        		$favstatus = '0';
        	}

            if(isset($this->session->userdata['adminid']) && !empty($this->session->userdata['adminid'])){
                $users = $this->session->userdata['adminid'];
            } else {
                $users = $this->session->userdata['frontid'];
            }


        	$data = array(
        		'storiesId' => $id,
        		'userid'=>$users,
        		'favstatus'=>$favstatus,
        		'type'=>1,
        		'createddate'=>date('Y-m-d h:i:s'),
        		'modifieddate'=>date('Y-m-d h:i:s'),
        	);

        	$checkStatus = $this->admin_model->getwhere("fav",array('userid'=>$users,'storiesId'=>$id,'type'=>1));	
        	if($checkStatus == 'no'):
        		$this->db->insert("fav",$data);
        	else:
        		unset($data['createddate']);
        		$this->db->where('id',$checkStatus[0]->id);
        		$this->db->update("fav",$data);
        	endif;	
        	echo 1;
        }


        function getfavRec($storyid,$userid,$types){
        	$checkStatus = $this->admin_model->getwhere("fav",array('userid'=>$userid,'storiesId'=>$storyid,'type'=>$types));	
        	if($checkStatus == 'no'):
        		return "no";
        	else:	
        		return $checkStatus;
        	endif;	
        }


        public function addcomment(){
            if(isset($this->session->userdata['adminid'])){
            $isadmin = $this->session->userdata['adminid'];
            } else{
               $isadmin =""; 
            }
        	if(!empty($isadmin)){
        	$comment = $this->input->post();
        	$this->form_validation->set_rules('email','Email','required|trim|xss_clean|valid_email');
			$this->form_validation->set_rules('name','Name','required|trim|xss_clean');
		//	$this->form_validation->set_rules('website','Website','required|trim|xss_clean');
			$this->form_validation->set_rules('content','Content','required|trim|xss_clean');
		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
			$data = array(
				'storyid'=>$comment['storyid'],
				'userid'=>$this->session->userdata['adminid'],
				'name'=>$comment['name'],
				'email'=>$comment['email'],
				//'website'=>$comment['website'],
				'content'=>$comment['content'],
				'createdDate'=>date('Y-m-d h:i:s'),
				'modifiedDate'=>date('Y-m-d h:i:s')
			);
			$this->db->insert("comment",$data);
			echo 1;
		endif;	
        	} else{
        	    echo 2;
        	}
        }	

         public function getRealTravellerStoriesCount($id){
            if(empty($id)):
               echo "0";
            else:
                $counts = $this->Stories_model->getRealTravellerStoriesCounts($id);    
                echo $counts;
            endif;    
        }
        
        public function storiescomment(){
		$isAdmin = $this->session->userdata('isAdmin');
		$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin) && $istraveler != 1):
			$conditionArray = array('id'=>$this->session->userdata('adminid'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
			$record['commentRec'] = $this->itineraries_model->getwhere("comment",array('status'=>1));
			$template = "admin";
			$record['viewfile'] = "comment_stories";
			$record['module'] = "stories";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	 
        }
        
        public function getStoriesName($id){
           if(empty($id)):
               echo "N/A";
            else :
                $storyName = $this->Stories_model->getwhere("ti_stories",array('id'=>$id));
                if(is_array($storyName)):
                    echo $storyName[0]->story_head;    
                endif;    
            endif;    
        }  
        
         public function getStoriesRecs($id){
           if(empty($id)):
               echo "N/A";
            else :
                $storyName = $this->Stories_model->getwhere("ti_stories",array('id'=>$id));
                if(is_array($storyName)):
                    return $storyName;
                endif;    
            endif;    
        }  
        
        
           public function getStoriesUrl($id){
           if(empty($id)):
               echo "N/A";
            else :
                $storyName = $this->Stories_model->getwhere("ti_stories",array('id'=>$id));
                if(is_array($storyName)):
                    echo $storyName[0]->meta_url;    
                endif;    
            endif;    
        }  
        
        
        public function getAllCounts(){
            $storyName = $this->Stories_model->getAllCounts();
                if(is_array($storyName)):
                    echo $storyName[0]->meta_url;    
                endif; 
        }
        
        public function getStoriesFavs($id,$resulttype){
            $favStories = $this->Stories_model->getwhere("fav",array('userid'=>$id,'type'=>1,'favstatus'=>'1'));
            if(is_array($favStories)){
                if($resulttype == 1){
                    return count($favStories);
                } else {
                    return $favStories;
                }   
            }
        }

}

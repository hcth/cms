<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Things_to_do extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Things_to_do_model');
		$this->load->model('admin/admin_model');
		$this->load->model('itineraries/itineraries_model');
	}

	public function index()
	{
		$template = "home";
		$record['thingstodo'] = $this->admin_model->getwhere("thingstodo",array('is_published'=>'1','isdeleted'=>'0'));
		$record['title'] = "Adventourist: Top Things to do Collated by Travel Experts.";
		$record['descriptions'] = "Get a complete list of things to do and places to visit collated by travel experts and local guides.";
		$record['keywords'] = "things to do,things to do in, things to do list, top things to do, places to visit, must see places, must visit places.";
		$record['viewFile'] = "thingstodo";
		$record['module'] = "things_to_do";
		echo modules::run('template/'.$template,$record);
	}

function add_things_to_do_form($id='')
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
    
            if(!empty($id)):
                $thingsids = $this->session->set_userdata('thingsSessionId',$id);
            else:
                $this->session->unset_userdata('thingsSessionId');
            endif;
            
            $thingsids = $this->session->userdata('thingsSessionId');
            if(isset($thingsids) && !empty($thingsids)):
	    	$editrecords = $this->admin_model->getwhere("thingstodo",array('isdeleted'=>'0','id'=>$thingsids));
			if(is_array($editrecords)):
				$record['thingsRecord'] = $editrecords;
			endif;
		
			$editthingsrecords = $this->admin_model->getwhere("thingdetail",array('thingstodo'=>$thingsids,'isdeleted'=>'0'));
			if(is_array($editthingsrecords)):
				$record['thingsDetailRecord'] = $editthingsrecords;
			endif;
			
		endif;
            $record['editid']=$id;
			$template = "admin";
			$record['viewfile'] = "things_to_do";
			$record['module'] = "things_to_do";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}


function edit_things_to_dos($id='')
	{
	    echo $id;
	    exit;
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
    
            if(!empty($id)):
                $thingsids = $this->session->set_userdata('thingsSessionId',$id);
            else:
                $this->session->unset_userdata('thingsSessionId');
            endif;
            $record['editid']=$id;
			$template = "admin";
			$record['viewfile'] = "things_to_do";
			$record['module'] = "things_to_do";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}

function add_things_to_do_forms($id='')
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;
    
            if(!empty($id)):
                $thingsids = $this->session->set_userdata('thingsSessionId',$id);
            else:
                $this->session->unset_userdata('thingsSessionId');
            endif;
            
            $thingsids = $this->session->userdata('thingsSessionId');
            if(isset($thingsids) && !empty($thingsids)):
	    	$editrecords = $this->admin_model->getwhere("thingstodo",array('isdeleted'=>'0','id'=>$thingsids));
			if(is_array($editrecords)):
				$record['thingsRecord'] = $editrecords;
			endif;
		
			$editthingsrecords = $this->admin_model->getwhere("thingdetail",array('thingstodo'=>$thingsids,'isdeleted'=>'0'));
			if(is_array($editthingsrecords)):
				$record['thingsDetailRecord'] = $editthingsrecords;
			endif;
			
		endif;

           
            $record['editid']=$id;
			$template = "admin";
			$record['viewfile'] = "things_to_dos";
			$record['module'] = "things_to_do";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}


	function edit_things_to_do($id)
	{
		if(empty($id)):
			show_404();
		else:		
		  	
			$isAdmin = $this->session->userdata('isAdmin');
			if(!empty($isAdmin)):
			    $this->session->set_userdata('thingsSessionId',$id);
				$conditionArray = array('id'=>$this->session->userdata('id'));
				$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;

				$editrecords = $this->admin_model->getwhere("thingdetail",array('isdeleted'=>'0','id'=>$id));
				
    
                if(is_array($editrecords)):
					$record['editrecords'] = $editrecords;
				endif;

				$record['thingsid'] = $id;
				$template = "admin";
				$record['viewfile'] = "things_to_do_edit";
				$record['module'] = "things_to_do";
				echo modules::run('template/'.$template ,$record);
			else :
				redirect('admin');
			endif;	
		endif;
	}


		function add_things_to_do()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$thingstodo = $this->admin_model->getwhere("thingstodo",array('isdeleted'=>'0'));
			if(is_array($thingstodo)):
				$record['thingstodo'] = $thingstodo;
				$record['thingsCount'] = count($thingstodo);
			else:
				$record['thingsCount'] = 0;
			endif;

			$template = "admin";
			$record['viewfile'] = "things_to_do_view";
			$record['module'] = "things_to_do";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}
	


 		 function updateStatus(){
        	$id = $this->input->post('id');
        	$vals = $this->input->post('vals');
        	$this->db->where("id",$id);
        	$this->db->update("thingstodo",array('is_published'=>$vals));
        	echo 1;	
        }


function insertSeoData(){
		$record = $this->input->post();
	//print_r($_POST); die;
		$this->form_validation->set_rules('meta_tags','Meta Tags','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_url','Meta Url','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_title','Meta Title','required|trim|xss_clean');
		$this->form_validation->set_rules('views_count','Counts','required|trim|xss_clean|numeric');
		$this->form_validation->set_rules('article_headline','Article Headline','required|trim|xss_clean');
		$this->form_validation->set_rules('article_description','Article Description','required|trim|xss_clean');
		$this->form_validation->set_rules('start_point','Place','required|trim|xss_clean');

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :

            if(!empty($record['ttdThumb']) && $record['ttdThumb'] != 'undefined' ):
			 //    $image_info = getimagesize($_FILES["storiesfile"]["tmp_name"]); 
				// $userprofile = time().$_FILES['storiesfile']['name'];
				// $res = preg_replace("/[^a-zA-Z1-9\.]/", "", $userprofile);
    //         	$img = $res;
    //         	$uploadfiles = $this->uploadFile($img,'storiesfile','thingstodothumb',"");
            	$dataimage = $_POST['ttdThumb'];
		  // print_r(['nn' => $dataimage]); die;
			   $filenames = 'ttd-'.date('ymdHis').'.png';

			   //$dataimage2 = preg_replace('#^data:image/\w+;base64,#i', '', $dataimage);
			   $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
				$dataimage2 = str_replace(' ', '+', $dataimage2);


			   $path = getcwd() . '//assets/frontImage/thingstodothumb/'.$filenames;
				file_put_contents($path, base64_decode($dataimage2));
				$path_jpg = str_replace("png","jpg",$path);
			    $this->png2jpg($path,$path_jpg, -1);
			    $filenames = str_replace("png","jpg",$filenames);
            	if(!$path):
            		echo json_encode(['status'=>3,'id' =>$id]);
            	endif;	
			  
			else :
				$img = "";
			endif;	





			$data=array(
			'metatag'=>$record['meta_tags'],
			'metaDesc'=>$record['meta_description'],
			'url'=>str_replace(" ","-",$record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'viewcount'=>$record['views_count'],
			'articleHeadline'=>$record['article_headline'],
			'articleDesc'=>$record['article_description'],
			'articleplace'=>$record['start_point'],
			'is_published'=> '0',
			'profileImage'=>$filenames,
			'createdate'=>date('Y-m-d h:i:s'),
			'modified'=>date('Y-m-d h:i:s')
			);	
				
				if(empty($record['ttdThumb']) || $record['ttdThumb'] == 'undefined' ){
					unset($data['profileImage']);
				}
			 $thigsSessId = $this->session->userdata('thingsSessionId');
			 if(isset($thigsSessId) && !empty($thigsSessId)):
			    unset($data['createdate']);
			    $this->db->where('id',$thigsSessId);
		    	$this->db->update("thingstodo",$data);
			    echo json_encode(['status'=>1,'id' =>$thigsSessId]);
			 else:
			     $this->db->insert("thingstodo",$data);
			     $id = $this->db->insert_id();
			     $this->session->set_userdata('thingsSessionId',$id);
			     echo json_encode(['status'=>1,'id' =>$id]);
			 endif;   
		endif;	
	}

	function editSeoData(){
		$record = $this->input->post();
		$thingsid = $this->input->post('thingsid');
		$this->form_validation->set_rules('meta_tags','Meta Tags','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_url','Meta Url','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_title','Meta Title','required|trim|xss_clean');
		$this->form_validation->set_rules('views_count','Counts','required|trim|xss_clean|numeric');
		$this->form_validation->set_rules('article_headline','Article Headline','required|trim|xss_clean');
		$this->form_validation->set_rules('article_description','Article Description','required|trim|xss_clean');
		$this->form_validation->set_rules('start_point','Place','required|trim|xss_clean');

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :

			$data=array(
			'metatag'=>$record['meta_tags'],
			'metaDesc'=>$record['meta_description'],
			'url'=>str_replace(" ","-",$record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'viewcount'=>$record['views_count'],
			'articleHeadline'=>$record['article_headline'],
			'articleDesc'=>$record['article_description'],
			'articleplace'=>$record['start_point'],
			'is_published'=> '0',
			'modified'=>date('Y-m-d h:i:s')
			);	
			

			$this->db->where('id',$thingsid);
			$this->db->update("thingstodo",$data);
			echo 1;
			
		endif;	
	}
	
	
	function edit_stories($id)
	{
		if(empty($id)):
			show_404();
		else:
			$isAdmin = $this->session->userdata('isAdmin');
			if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('id'));
				$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;

				$record['cities'] = $this->itineraries_model->getwhere("cities",array('state_id'=>22));

				$realTravel = $this->admin_model->getwhere("ti_stories",array('id'=>$id,'is_deleted'=>'0'));
				if(is_array($realTravel)):
					$record['realTravels'] = $realTravel;
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

	function insertthingstododata(){
		$record = $this->input->post();
	
		$this->form_validation->set_rules('things_names','Things Name','required|trim|xss_clean');
		$this->form_validation->set_rules('things_headline','Things Headline','required|trim|xss_clean');
		$this->form_validation->set_rules('article_description','Things Description','required|trim|xss_clean');
	

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
		    $ids = $this->session->userdata('thingsSessionId');
		    if(empty($ids)):
		        echo 2;
		    else:      
			//if(!empty($_FILES['thingsImage']['name'])):
			    if(!empty($record['ttdetailThumb']) && $record['ttdetailThumb'] != 'undefined' ):
			
            	$dataimage = $_POST['ttdetailThumb'];
			    $filenames = 'ttdetail-'.date('ymdHis').'.png';

			    $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
				$dataimage2 = str_replace(' ', '+', $dataimage2);
				
				$path = getcwd() . '/assets/frontImage/thingstodo/'.$filenames;
				file_put_contents($path, base64_decode($dataimage2));
				$path_jpg = str_replace("png","jpg",$path);
				$this->png2jpg($path,$path_jpg, -1);
				$filenames = str_replace("png","jpg",$filenames);
			
            	//echo 3;
            	
			else :
				$filenames = "";
			endif;	

    
			$data=array(
			'name'=>$record['things_names'],				
			'headline'=>$record['things_headline'],
			'description'=>$record['article_description'],
			'thingsimage'=>$filenames,
			'thingstodo'=>$ids,
			'createdDate'=>date('Y-m-d h:i:s'),
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	
			$records = $this->db->insert("thingdetail",$data);
			echo 1;
			endif;
			
		endif;	
	}
	
	function editthingstododata(){
		$record = $this->input->post();
	   
		$this->form_validation->set_rules('things_names','Things Name','required|trim|xss_clean');
		$this->form_validation->set_rules('things_headline','Things Headline','required|trim|xss_clean');
		$this->form_validation->set_rules('article_description','Things Description','required|trim|xss_clean');
	

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
		    $ids = $this->session->userdata('thingsSessionId');
		    if(empty($ids)):
		        echo 2;
		    else:      
			 if(!empty($record['ttdetailThumb']) && $record['ttdetailThumb'] != 'undefined' ):
			
            	$dataimage = $_POST['ttdetailThumb'];
			    $filenames = 'ttdetail-'.date('ymdHis').'.png';

			    $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
				$dataimage2 = str_replace(' ', '+', $dataimage2);
				
				$path = getcwd() . '/assets/frontImage/thingstodo/'.$filenames;
				file_put_contents($path, base64_decode($dataimage2));
				$path_jpg = str_replace("png","jpg",$path);
				$this->png2jpg($path,$path_jpg, -1);
				$filenames = str_replace("png","jpg",$filenames);
				$path_jpg = str_replace("png","jpg",$path);
				$this->png2jpg($path,$path_jpg, -1);
				$filenames = str_replace("png","jpg",$filenames);
			
            	
			else :
				$img = "";
			endif;	

    
			$data=array(
			'name'=>$record['things_names'],				
			'headline'=>$record['things_headline'],
			'description'=>$record['article_description'],
			'thingsimage'=>$filenames,
			'thingstodo'=>$record['thingstodoIds'],
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	
            $updatedId = $record['thingsIds'];
            if(empty($record['ttdetailThumb']) && $record['ttdetailThumb'] == 'undefined' ){
            	unset($data['thingsimage']);
            }
            
            $this->db->where("id",$updatedId);
            $this->db->update("thingdetail",$data);
            
            // update the things to do record
            $data1 = array(
            'is_published'=>'0',
            'modified'=>date('Y-m-d h:i:s')
            );
            
            $this->db->where("id",$record['thingstodoIds']);
            $this->db->update("thingstodo",$data1);
           
			echo 1;
			endif;
			
		endif;	
	}
    
	function saveeditStories(){
		$record = $this->input->post();
		
		$this->form_validation->set_rules('meta_tags','Meta Tags','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','required|trim|xss_clean');
		$this->form_validation->set_rules('meta_url','Meta Url','required|trim|xss_clean');
		$this->form_validation->set_rules('views_count','Counts','required|trim|xss_clean|numeric');
		$this->form_validation->set_rules('meta_title','Meta Title','required|trim|xss_clean');
		$this->form_validation->set_rules('story_head','heading','required|trim|xss_clean');
	
		$this->form_validation->set_rules('storiesDesc','Description','required|trim|xss_clean');


		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
		
			if(!empty($_FILES['storiesfile']['name'])){
			    
			    $image_info = getimagesize($_FILES["storiesfile"]["tmp_name"]); 
			    if(is_array($image_info)){
				$userprofile = time().$_FILES['storiesfile']['name'];
				$res = preg_replace("/[^a-zA-Z1-9\.]/", "", $userprofile);
            	$img = $res;
            	$uploadfiles = $this->uploadFile($img,'storiesfile','stories',"");
            	if($uploadfiles != 1){
            		echo 3;
            	}
			    } else{
			        echo 4;
			        exit;
			    }
			} else if(!empty($record['storiesImages'])){
				$img = $record['storiesImages'];
			} else {
				$img = "";			
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

			$data=array(
			'story_head'=>$record['story_head'],				
			'story_details'=>$record['storiesDesc'],
			'real_traveller'=>$this->session->userdata['adminid'],
			//'stay_days'=>$record['stay_days'],
			'destination'=>$destination,
			//'suitable'=>$trip_category,
			//'theme'=>$trip_type,
			'views_count'=>$record['views_count'],
			'meta_tags'=>$record['meta_tags'],
			'meta_description'=>$record['meta_description'],
			'meta_url'=>str_replace(" ","-",$record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'storiesImage'=>$img,
			'is_published'=>$record['is_published'],
			'status'=>'2',
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	

				
			$storiesId = $record['storyid'];



			$this->db->where('id',$storiesId);
			$this->db->update("ti_stories",$data);
			echo 1;
			
		endif;	
	}
	
	       function delete_things_to_do(){
        	$id = $this->input->post('story_id');
        	$this->db->where("id",$id);
        	$this->db->update("thingstodo",array('isdeleted'=>'1'));
        	echo 1;
        }
        
          function delete_delete_things_to_do(){
        	$id = $this->input->post('story_id');
        	$this->db->where("id",$id);
        	$this->db->update("thingdetail",array('isdeleted'=>'1'));
        	echo 1;
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
				$conditionArray = array('id'=>$this->session->userdata('id'));
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
	    $id = $this->session->userdata('id');		
	    if(!empty($id) && intval($id)):
	    	$isAdmin = $this->session->userdata('isAdmin');
	    	$isStatus = $this->session->userdata('admin_Status');
	    	$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('id'));
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

        public function detail($url){
        	if(empty($url)):
        		show_404();
        	else:
        		$storiesRec = $this->Things_to_do_model->getwhere("thingstodo",array('url'=>$url,'is_published'=>'1','isdeleted'=>'0'));
        		//print_r($storiesRec); die;
        		if(is_array($storiesRec)):
        		$viewCount = $storiesRec[0]->viewcount;
        		$updatedCount = $viewCount + 1;
        	    $data= array('viewcount'=>$updatedCount);
        	    $this->db->where('url',$url);
                $this->db->update('thingstodo',$data);
        	    $ttid = $storiesRec[0]->id;
        		$record['thingsDetails'] = $this->Things_to_do_model->getDetailRecord($ttid);   
        		$record['getThingsRecord'] = $this->Things_to_do_model->getwhere("thingstodo",array('is_published'=>'1','isdeleted'=>'0')); 
        		$record['getThingsRecord'] = array_slice($record['getThingsRecord'], 0, 3) ;
        		$record['thingstodo'] = $storiesRec;	
        		$template = "home";
				//$record['title'] = "Adventourist | Things to do";
				$record['viewFile'] = "thingsdetail";
				$record['module'] = "things_to_do";
				echo modules::run('template/'.$template,$record);
				else:
					show_404();
				endif;	
        	endif;	
        }
        
        
        public function getArticleName($id){
            if(empty($id)):
                echo "-";
            else:
                	$resultArticleName = $this->Things_to_do_model->getwhere("thingstodo",array('id'=>$id));
                    if(is_Array($resultArticleName)):
                        echo $resultArticleName[0]->articleHeadline;
                    else:
                        echo "-";
                    endif;    
            endif;    
        }
        
        
        public function getSearchRec(){
            $text = $this->input->post('searchtext');
            if(empty($text)):?>
                <a href="#">No Record found!</a>
            <?php else:
                $searchRecord = $this->Things_to_do_model->getsearchRecord($text);
                if(is_array($searchRecord)):
                    foreach($searchRecord as $rec){
                    ?>
                       <a href="<?php echo base_url()?>things_to_do/detail/<?php echo $rec->url;?>"><?php echo $rec->articleHeadline;?></a>
                    <?php }
                endif;   
            endif;    
        }


}

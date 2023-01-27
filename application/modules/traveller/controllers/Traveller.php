<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traveller extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Traveler_model');
		$this->load->model('admin/Admin_model');
	}

	public function index()
	{	
		header("Location: https://adventourist.in"); die;
		$template = "home";
		$record['realtraveller'] = $this->Traveler_model->getwhere("realtraveller",array('status'=>'1','isPublished'=>'2'));
		$record['title'] = "Adventourist Verified Travel Experts and Travel Influencers.";
			$record['descriptions'] = "real traveller network and travel bloggers in india, travel expert and local guides list who help plan trip.";
		$record['keywords'] = "travel bloggers, travel blog, real traveller, travel blogger names, travel blogger network, travel blogger website, travel influencer.";
		
		$record['viewFile'] = "traveler";
		$record['module'] = "traveller";
		echo modules::run('template/'.$template,$record);
	}

	function viewtraveler()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->Admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['realTravelerRec'] = $this->Traveler_model->getwhere("realtraveller",array('isDeleted'=>'0'));

			$template = "admin";
			$record['viewfile'] = "real_travellers";
			$record['module'] = "traveller";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
		endif;	
	}

		function addtraveler()
	{
		$isAdmin = $this->session->userdata('isAdmin');
		if(!empty($isAdmin)):
			$conditionArray = array('id'=>$this->session->userdata('id'));
			$adminRecord = $this->Admin_model->getwhere("adminmaster",$conditionArray);
			if(is_array($adminRecord)):
				$record['rec'] = $adminRecord;
			endif;

			$record['state'] = getstate();
			$template = "admin";
			$record['viewfile'] = "real_travellers_edit";
			$record['module'] = "traveller";
			echo modules::run('template/'.$template ,$record);
		else :
			redirect('admin');
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

	function travelerInsert(){
		$record = $this->input->post();
		$this->form_validation->set_rules('full_name','Name','required|trim|xss_clean');
		$this->form_validation->set_rules('email','Email','required|trim|xss_clean|valid_email[realtraveller.email]');
	

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
			
			 if(!empty($record['realtravthumb']) || $record['realtravthumb'] != 'undefined' ):
			
            	$dataimage = $_POST['realtravthumb'];
			    $filenames = 'realtrav-'.date('ymdHis').'.png';

			    $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
				$dataimage2 = str_replace(' ', '+', $dataimage2);
				
				$path = getcwd() . '/assets/frontImage/userprofiles/'.$filenames;
				file_put_contents($path, base64_decode($dataimage2));
				$path_jpg = str_replace("png","jpg",$path);
				$this->png2jpg($path,$path_jpg, -1);
				$filenames = str_replace("png","jpg",$filenames);
				echo 1;
			else :
				$filenames = "";
			endif;	
			if(isset($record['places_travelled']) && is_array($record['places_travelled']) && !empty($record['places_travelled'])):
				$placeToTravel = implode(",",$record['places_travelled']);
			else:
				$placeToTravel ='';
			endif;	

			$data=array(
			'metatag'=>$record['meta_tag'],				
			'metaDesc'=>$record['meta_description'],
			'url'=>str_replace(" ","-",$record['meta_url']),
			'meta_title'=>$record['meta_title'],
			'name'=>$record['full_name'],
			// 'state'=>$record['state'],
			// 'city'=>$record['city'],
			'birthday'=>date('Y-m-d',strtotime($record['dob']) ),
			'profession'=>$record['occupation'],
			// 'travelplace'=>$placeToTravel,
			'bio'=>$record['about'],
			'email'=>$record['email'],
			'mobile'=>$record['mobile'],
			'profileImage'=>$filenames,
			'facebook'=>$record['facebook'],
			'instagram'=>$record['instagram'],
			'twitter'=>$record['twitter'],
			'linkdin'=>$record['linkedin'],
			'status'=>'1',
			'isPublished'=>'0',
			'createdDate'=>date('Y-m-d h:i:s'),
			'modifiedDate'=>date('Y-m-d h:i:s')
			);	


			$records = $this->db->insert("realtraveller",$data);
			 $insert_id = $this->db->insert_id();
			 //$encid = $this->encryption->encrypt($insert_id);
			 //$enc_id=str_replace(array('+', '/', '='), array('-', '_', '~'), $encid);
			if(!empty($insert_id)):
				// $emaildata = array('to' => $record['email'],'name' => $record['full_name'],'id'=>$enc_id);
				// $email = modules::run('Emails/email_confirmation',$emaildata);
				// echo $email;
			endif;	
		endif;	
	}


	function traveleredit(){
		$record = $this->input->post();
		$this->form_validation->set_rules('full_name','Name','required|trim|xss_clean');

		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else :
			
			
			if( $record['realtravthumb'] != 'undefined' ){
			
            	$dataimage = $_POST['realtravthumb'];
			    $filenames = 'realtrav-'.date('ymdHis').'.png';

			    $dataimage2 = str_replace('data:image/png;base64,', '', $dataimage);
				$dataimage2 = str_replace(' ', '+', $dataimage2);
				
				$path = getcwd() . '/assets/frontImage/userprofiles/'.$filenames;
				file_put_contents($path, base64_decode($dataimage2));
				$path_jpg = str_replace("png","jpg",$path);
				$this->png2jpg($path,$path_jpg, -1);
				$filenames = str_replace("png","jpg",$filenames);

			} else if(isset($record['profileImages'])){
				$filenames = $record['profileImages'];
			} else {
				$filenames = "";
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
			
				if(isset($record['meta_title']) && !empty($record['meta_title'])):
				$meta_title = $record['meta_title'];
			endif;	



			$data=array(	
			'name'=>$record['full_name'],
			'birthday'=>date('Y-m-d',strtotime($record['dob']) ),
			'profession'=>$record['occupation'],
			'bio'=>$record['about'],
			'mobile'=>$record['mobile'],
			'profileImage'=>$filenames,
			'facebook'=>$record['facebook'],
			'instagram'=>$record['instagram'],
			'twitter'=>$record['twitter'],
			'linkdin'=>$record['linkedin'],
			'isPublished'=>'1',
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
			
			if(isset($record['meta_title'])){
				$data['meta_title'] = $meta_title;
			}

			$id=$record['editId'];

			$editRecord = $this->Traveler_model->update("realtraveller",$id,$data,'id');
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
					$adminRecord = $this->Admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->Admin_model->getwhere("adminmaster",$conditionArray);
				endif;			
				
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;


				$editTravelerRecord = $this->Traveler_model->getwhere("realtraveller",array('id'=>$id));
                $citiRecForTravel = modules::run('itineraries/getCityNameForSelect',$editTravelerRecord[0]->travelplace);
				if(is_array($citiRecForTravel)):
				$record['travelcities'] = $citiRecForTravel;
				endif;
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


	    public function travelerInfo($travellerid=''){
	    if(!empty($travellerid)):
	        $records = $this->Traveler_model->getRealtravellerIdByUrl($travellerid);
	      
	        if(is_Array($records)):
	           $id = $records[0]->id; 
	        else:
	           show_404(); 
	       endif;     
	    else:      
	    $id = $this->session->userdata('id');		
	    endif;
	    if(!empty($id) && intval($id)):
	    	$isAdmin = $this->session->userdata('isAdmin');
	    	$isStatus = $this->session->userdata('admin_Status');
	    	$istraveler = $this->session->userdata('istraveler');
		if(!empty($isAdmin)):
				$conditionArray = array('id'=>$this->session->userdata('id'));
				if(isset($istraveler) && $istraveler == 1):
					$adminRecord = $this->Admin_model->getwhere("realtraveller",$conditionArray);
				else :	
					$adminRecord = $this->Admin_model->getwhere("adminmaster",$conditionArray);
				endif;		
				
				if(is_array($adminRecord)):
					$record['rec'] = $adminRecord;
				endif;


				$editTravelerRecord = $this->Traveler_model->getwhere("realtraveller",array('id'=>$id));
			    
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
	    
	    function date_compare($a, $b)
        {
            $t1 = strtotime($a['createdDate']);
            $t2 = strtotime($b['createdDate']);
            return $t1 - $t2;
        }

	    public function travellerDetail($url){

	    	header("Location: https://adventourist.in");
	    	die;
	    	if(!empty($url)):
	    		$template = "home";
				$getDetails = $this->Traveler_model->getwhere("realtraveller",array('status'=>'1','url'=>$url));
			    if(is_array($getDetails)){
			        $id = $getDetails[0]->id;
			       $record['getitineraries'] = $this->Traveler_model->getTravellerRecord($id);
			       $record['getstories'] = $this->Traveler_model->getwhere("ti_stories",array('status'=>'1','is_published'=>'1','is_deleted'=>'0','real_traveller'=>$id));
			     //   $record['getRecords'] =  $this->Traveler_model->getTravellerRecord($id);
			    }
			    
			    $finalarray = array();
			      $i = 0;
			    if(isset($record['getitineraries']) && is_array($record['getitineraries']))
			    {
			      
			        foreach($record['getitineraries'] as $val)
			        {
			            $record['finalarray'][$i] = $val;
			            $record['finalarray'][$i]->createdDate = $val->tdate;
			            $record['finalarray'][$i]->type = 'itenaries';
			            $i++;
			        }
			    }
			    
			    if(isset($record['getstories']) && is_array($record['getstories']))
			    {
			        $j = $i;
			        foreach($record['getstories'] as $val)
			        {
			            $record['finalarray'][$j] = $val;
			            $record['finalarray'][$j]->createdDate = date('Y-m-d',strtotime($val->createdDate));
			            $record['finalarray'][$j]->type = 'stories';
			            $j++;
			        }
			    }
			    
			    if(isset($record['finalarray']) && is_array($record['finalarray'])){ 
			    usort($record['finalarray'], function ($a, $b, $i = 'createdDate') { 
                    $t1 = $a->$i;
                    $t2 = $b->$i;
                    return $t1 < $t2;
                });
			    }
			    
			    $record['realtravellerDetail'] = $getDetails;
				$record['viewFile'] = "travelerDetail";
				$record['module'] = "traveller";
				
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
			$checkLogin = $this->Traveler_model->getwhere("realtraveller",array('email'=>$record['email'],'password'=>$record['password']));
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
	    	    $checkmails = $this->Traveler_model->getwhere("realtraveller",array('id'=>$updateid,'isMail'=>'1'));
	    	    
	    		if(is_Array($checkmails)){
	    		    redirect('/');
	    		} else {
	    		$password = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8);
	    		
	    		$updateData = array('status'=>'1','password'=>sha1($password),'isPublished'=>'1','isMail'=>'1');
	    		
	    		$editRecord = $this->Traveler_model->update("realtraveller",$updateid,$updateData,"id");	
	    		// update password 
	    		if($editRecord == 1):
	    			$getEmailid = $this->Traveler_model->getwhere("realtraveller",array('status'=>'1','id'=>$updateid));
	    			if(is_array($getEmailid)):
	    				$emaildata = array('to' => $getEmailid[0]->email,'name' => $getEmailid[0]->name,'password'=>$password);
				        $email = modules::run('Emails/loginCredential',$emaildata);
				        	$template = "home";
			            	$record['title'] = "Advent Tourist | Traveler Verfication Success Page";
				            $record['viewFile'] = "verificationSuccess";
			            	$record['module'] = "traveller";
			            	echo modules::run('template/'.$template,$record);       
	    			endif;	
	    		endif;

	    		}
	    	else:
	    		show_404();
	    		
	    	endif;	
	    }

	    public function profilestatus(){
	    	$id = $this->input->post('id');	
	    	$value = $this->input->post('statusValue');		
	    	$profileRec = array('isPublished'=>$value);
	    	$editRecord = $this->Traveler_model->update("realtraveller",$id,$profileRec,'id');

	    }

	     public function exports_data(){
	     	$result1 = array('id','metatag','metaDesc','url','name','birthday','profession','email','mobile','facebook','instagram','twitter','linkdin','createdDate','modifiedDate');
	     	$result = $this->Traveler_model->get("realtraveller");
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
        
        public function getcitysearch(){
            $data = array();
            $searchKey = $this->input->post('searchTerm');
           	$editRecord = $this->Traveler_model->getcitySearch($searchKey);
            if(is_array($editRecord)){
                foreach($editRecord as $row) {
                   
                    $data[] = array("id"=>$row->id, "text"=>$row->name);
                }
                echo json_encode($data);
            }
        }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Cms/cms_model');

		$this->load->model('admin/admin_model');
	}


	public function index()
	{	
		$conditionArray = array('id'=>$this->session->userdata('adminid'));
		$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
	
		if(is_array($adminRecord)):
			$record['rec'] = $adminRecord;
		endif;

		$record['adminRec'] = $this->cms_model->getdata("cms");
		$template = "admin";
		$record['viewfile'] = "view_cms_list";
		$record['module'] = "cms";
		echo modules::run('template/'.$template ,$record);
	}
	
	function add_page()
	{
		$conditionArray = array('id'=>$this->session->userdata('adminid'));
		$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
		if(is_array($adminRecord)):
			$record['rec'] = $adminRecord;
		endif;

		$template = "admin";
		$record['viewfile'] = "add_page";
		$record['module'] = "cms";
		
		echo modules::run('template/'.$template ,$record);
	}

	function pageadd()
	{
		$postRecord = $this->input->post();
       
		$this->form_validation->set_rules("title",'title','required|trim|xss_clean|is_unique[cms.page_title]');
		$this->form_validation->set_rules("title",'title','required|trim|xss_clean|is_unique[cms.page_title]');
		$this->form_validation->set_rules("storiesDesc",'Page Details','required|trim|xss_clean');
		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else:
			
		if(!empty($_FILES['storiesfile']['name'])):
			    $image_info = getimagesize($_FILES["storiesfile"]["tmp_name"]); 
			    if(is_array($image_info)){
				$userprofile = time().$_FILES['storiesfile']['name'];
				$res = preg_replace("/[^a-zA-Z1-9\.]/", "", $userprofile);
            	$img = $res;
            	$uploadfiles = $this->uploadFile($img,'storiesfile','cms',"");
            	if($uploadfiles != 1):
            		echo 3;
            	endif;	
			    } else{
			        echo 4;
			        exit;
			    }
			else :
				$img = "";
			endif;	
			
		$dataArray = array(
			'page_title'=>$postRecord['title'],
			'slug'=>str_replace(" ","_",strtolower($postRecord['title'])),
			'cms_data'=>$postRecord['storiesDesc'],
			'cmsImage'=>$img,
			'admin_createdDate'=>date('Y-m-d H:i:s')
		); 

		$table = "cms";
		$datainsert = $this->cms_model->insertwhere($table,$dataArray);
		echo 1;
		endif;
	}


	public function  editcms($id)
	{
		$conditionArray = array('id'=>$this->session->userdata('adminid'));
		$adminRecord = $this->admin_model->getwhere("adminmaster",$conditionArray);
		if(is_array($adminRecord)):
			$record['rec'] = $adminRecord;
		endif;
		$record['cms_data'] = $this->cms_model->getwhere("cms",array('id='=>$id));
		$template = "admin";
		$record['viewfile'] = "edit_page";
		$record['module'] = "cms";

		echo modules::run('template/'.$template ,$record);
	}

	public function  page_edit()
	{
		$postRecord = $this->input->post();
		$this->form_validation->set_rules("storiesDesc",'Page Details','required|trim|xss_clean');
		if($this->form_validation->run() == false):
			echo json_encode($this->form_validation->error_array());
		else:
			
		$dataArray = array(
			'cms_data'=>$postRecord['storiesDesc'],
			'admin_modifiedDate'=>date('Y-m-d H:i:s')
		); 
		$table = "cms";
		$col = "id";
		$id = $this->input->post('id');
		$datainsert = $this->cms_model->updatewhere($table,$id,$dataArray,$col);
		echo 1;
		endif;
	}
	

	public function  delete_cms()
	{
		$postRecord = $this->input->post();
		$dataArray = array(
			'status'=> '0',
			'admin_modifiedDate'=>date('Y-m-d H:i:s')
		); 
		$table = "cms";
		$col = "id";
		$id = $this->input->post('deleteid');
		$datainsert = $this->cms_model->updatewhere($table,$id,$dataArray,$col);
		echo 1;
	}

	public function  active_cms()
	{
		$postRecord = $this->input->post();
		$dataArray = array(
			'status'=> '1',
			'admin_modifiedDate'=>date('Y-m-d H:i:s')
		); 
		$table = "cms";
		$col = "id";
		$id = $this->input->post('deleteid');
		$datainsert = $this->cms_model->updatewhere($table,$id,$dataArray,$col);
		echo 1;
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
	
       	public function  cmscontent($keyword)
	{
	    $getRec = $this->db->get_where("cms",array('slug'=>$keyword));
	    if($getRec->num_rows() > 0){
	        $finalRes = $getRec->result();
	        return $finalRes;
	    }
	}
}

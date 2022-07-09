<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Stories_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getwhere($table,$condition){
    	$checkLogin = $this->db->order_by('id','DESC')->get_where($table,$condition);
    	if($checkLogin->num_rows() > 0):
    		return $checkLogin->result();
    	else:
    		return "no";
    	endif;	
    }
    public function get($table){
       $this->db->select('id,metatag,metaDesc,url,name,birthday,profession,email,mobile,facebook,instagram,twitter,linkdin,createdDate,modifiedDate');
       $this->db->from($table);
       $checkLogin = $this->db->get();
        if($checkLogin->num_rows() > 0):
            return $checkLogin->result_array();
        else:
            return "no";
        endif;  
    }

    public function insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function update($table,$id,$data,$col){
        $this->db->where($col,$id);
        $this->db->update($table,$data);
        return 1;
    }

    public function getRandomStories(){
        $where = array('status'=>'1','is_published'=>'1','is_deleted'=>'0');
        $this->db->select('*');
        $this->db->from('ti_stories');
        $this->db->where($where);
        $this->db->order_by("id",'RANDOM');
        $this->db->limit(5);
        $record = $this->db->get();
        if($record->num_rows() > 0):
            return $record->result();
        else:
            return "no";
        endif;    
    }    
    
    
   public function getRealTravellerStoriesCounts($id){
       $getrec = $this->db->get_where("ti_stories",array('is_deleted'=>'0','real_traveller'=>$id));
        if($getrec->num_rows() > 0):
            echo $getrec->num_rows();  
        else:
            echo 0;    
        endif;    
   }
   
   public function getCommentsByStories($url){
        $this->db->select('*');
        $this->db->from('comment');            
        $this->db->join('ti_stories','comment.storyid=ti_stories.id');
        $this->db->where('ti_stories.meta_url',$url);
        $this->db->where('comment.is_published','1');
        $queryRec = $this->db->get();
        if($queryRec->num_rows() > 0):
            return $queryRec->result();
        else:
            return "no";
        endif;    
   }
   
   public function getAllCounts(){
        $where = array('is_published'=>'1','is_deleted'=>'0');
      $this->db->select_sum('views_count');
        $this->db->from('ti_stories');
        $this->db->where($where);
        $ans = $this->db->get();
        if($ans->num_rows() > 0):
           $count  = $ans->result();           
            if(is_array($count)):
                echo $count[0]->views_count;  
            else:
                echo 0;
            endif;   
        endif;    
   }

}
?>
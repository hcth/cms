<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Model extends MY_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getWhere($table,$condition){
    	$record = $this->db->get_where($table,$condition);
    	
    	if($record->num_rows() > 0):
    		return $record->result();
    	else:
    		return "no";
    	endif;	
    }
    public function getWherewithlimit($table,$condition,$limit){
    	$this->db->select('*');
    	$this->db->from($table);
    	$this->db->where($condition);
        $this->db->order_by("id", "desc");
    	if($limit != ""):
    	$this->db->limit($limit);	
    	endif;

    	$record = $this->db->get();
    	if($record->num_rows() > 0):
    		return $record->result();
    	else:
    		return "no";
    	endif;	
    }
    public function getsearchRecordformItineraries($key){
        $this->db->select('*');
        $this->db->from('ti_itineraries');
        $this->db->where('is_deleted','0');
        $this->db->like('headline',$key);
        $searchRecord = $this->db->get();
       if($searchRecord->num_rows() > 0):
           $ans = $searchRecord->result();
            return $ans;
        else:
            return "no";
        endif;   
    }
    
    public function getsearchRecordformStories($key){
        $this->db->select('*');
        $this->db->from('ti_stories');
        $this->db->where('is_deleted','0');
        $this->db->like('story_head',$key);
        $searchRecord = $this->db->get();
       if($searchRecord->num_rows() > 0):
           $ans = $searchRecord->result();
            return $ans;
        else:
            return "no";
        endif;   
    }
    
    
    public function getsearchRecordformThingstodo($key){
     $this->db->select('*');
        $this->db->from('thingstodo');
        $this->db->where('isdeleted','0');
        $this->db->like('articleHeadline',$key);
        $searchRecord = $this->db->get();
       if($searchRecord->num_rows() > 0):
           $ans = $searchRecord->result();
            return $ans;
        else:
            return "no";
        endif;    
    }
    
    
    
}
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Traveler_model extends CI_Model {

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
    
    public function getcitySearch($key){
        $this->db->select('id,name');
        $this->db->from('cities');
        $this->db->where("name LIKE '%$key%'");
        $citySearch = $this->db->get();
        if($citySearch->num_rows() > 0){
            return $citySearch->result();
        } else {
            return "no";
        }
    }
    
    public function getRealtravellerIdByUrl($urls){
        $records = $this->db->get_where("realtraveller",array('url'=>$urls,'isPublished !='=>'0'));
        if($records->num_rows() > 0):
            $rec = $records->result();
            return $rec; 
        else:
            return "no";
        endif;    
    }
    
    public function getTravellerRecord($id){
         $where = array('ti_itineraries.status'=>'2','ti_itineraries.real_traveller'=>$id,'ti_itineraries.is_deleted'=>'0');
        $this->db->select('*,ti_itineraries.id as itiid,DATE(ti_itineraries.created_on) as tdate');
        $this->db->from('ti_itineraries');
        $this->db->join('realtraveller','realtraveller.id=ti_itineraries.real_traveller');
        $this->db->where($where);
        $this->db->order_by('ti_itineraries.created_on', 'desc'); 
        $recordIti = $this->db->get();   
        // echo $this->db->last_query();exit;
        if($recordIti->num_rows() > 0):
            return $recordIti->result();
        else :
            return "no";
        endif;    
        
    }
    
    


}
?>
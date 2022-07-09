<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Itineraries_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getwhere($table,$condition){
    	$checkLogin = $this->db->get_where($table,$condition);
    	if($checkLogin->num_rows() > 0):
    		return $checkLogin->result();
    	else:
    		return "no";
    	endif;	
    }

     public function update($table,$id,$data){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
        return 1;
    }

    public function updateitineray($table,$masterid,$dayno,$data){
        $this->db->where('master_id',$masterid);
        $this->db->where('day_no',$dayno);
        $this->db->update($table,$data);
        return 1;
    }

    public function getCity($table,$id){
        $idArray = explode(",",$id);
        $this->db->select('name');
        $this->db->from($table);
        $this->db->where_in('id', $idArray);
        $rec = $this->db->get();
        if($rec->num_rows() > 0):
            return $rec->result();
        else:
            return "-";
        endif;    
    }
    
     public function getCitySelect($table,$id){
        $idArray = explode(",",$id);
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where_in('id', $idArray);
        $rec = $this->db->get();
        if($rec->num_rows() > 0):
            return $rec->result();
        else:
            return "-";
        endif;    
    }


    public function getDetailItineraries($id){
        
        $recs = $this->db->get_where("ti_itineraries",array('ti_itineraries.status'=>'2','is_deleted' => '0','ti_itineraries.url'=>$id));
        if($recs->num_rows() > 0){
        $records = $recs->result();
        if(is_Array($records)) { 
        $isAdmins = $records[0]->isAdmin;
        
        
        
        $where = array('ti_itineraries.status'=>'2','ti_itineraries.url'=>$id);
        $this->db->select('*,ti_itineraries.id as itiid');
        $this->db->from('ti_itineraries');
        if($isAdmins == '1'){
        $this->db->join('adminmaster','adminmaster.id=ti_itineraries.real_traveller');
        } else {
        $this->db->join('realtraveller','realtraveller.id=ti_itineraries.real_traveller');    
        }
        $this->db->where($where);
        
        
        
        $recordIti = $this->db->get();   
   //   echo $this->db->last_query();
    //    exit;
        if($recordIti->num_rows() > 0):
            return $recordIti->result();
        else :
            return "no";
        endif;    
        } else {
            return "no";
        }
        }
    }

    public function getLatestItineraries(){
        $result = $this->db
        ->from('ti_itineraries')
        ->where(array('status' => '2','is_deleted'=>'0'))
        ->order_by('modified_on', 'DESC')
        ->limit(3)
        ->get()
        ;
        return $result->result();
    }
    
    public function getcities(){
        $where = array('states.country_id'=>'101');
        $this->db->select('cities.*');
        $this->db->from('cities');
        $this->db->join('states','cities.state_id=states.id');
        $this->db->where($where);
        $recordIti = $this->db->get();   
       
        if($recordIti->num_rows() > 0):
            return $recordIti->result();
        else :
            return "no";
        endif;    
    }
    
        public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query =  $this->db->get_where("ti_itineraries",array('status'=>'2','is_deleted'=>'0'));
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
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
    
       public function getsearchRecord($key){
     // $searchRecord =  $this->db->select('*')->from('ti_itineraries')->where("articleHeadline LIKE '%$key%'")->get();
       
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
     
      public function getfilterRecord($filterArray){
       
        $this->db->select('*');
        $this->db->from('ti_itineraries');
        
        if(isset($filterArray['duration']) && !empty($filterArray['duration'])):
        $this->db->where('trip_days',$filterArray['duration']);    
        endif;
        
        if(isset($filterArray['budget']) && !empty($filterArray['budget']) && str_replace(' ', '', $filterArray['budget']) != "0-0"):
        $budgetRange = array_map('intval', explode('-', $filterArray['budget']));
        $this->db->where('budget >=', $budgetRange[0]);
        $this->db->where('budget <=', $budgetRange[1]);
        endif;
        
        if(isset($filterArray['cityName']) && !empty($filterArray['cityName'])):
        $keySearch = $filterArray['cityName'];    
        $this->db->like("headline",$keySearch);   
        endif;
        
        if(isset($filterArray['suitable']) && !empty($filterArray['suitable'])):
        $suitable = $filterArray['suitable'];    
        //$where = "FIND_IN_SET('".$suitable."', category)";  
        //$where = "CONCAT(',', `category`, ',') REGEXP ',(Family|Friends|Honeymoon)),'";
        if(is_array($suitable)){
            $count = count($suitable);
            $i=1;
            $ans="(";
            foreach($suitable as $vals){
                if($i<$count){
                $ans .= "category Like '%".$vals."%' OR ";
                } else {
                $ans .= "category Like '%".$vals."%'";    
                }
                $i++; }
            $ans.=")";
            $this->db->where($ans);
        }
        //$this->db->where_in('category', $suitable);
        endif;
        
        
        if(isset($filterArray['theme']) && !empty($filterArray['theme'])):
        $theme = $filterArray['theme'];    
           if(is_array($theme)){
            $count = count($theme);
            $i=1;
            $ans="(";
            foreach($theme as $vals){
                if($i<$count){
                $ans .= "type Like '%".$vals."%' OR ";
                } else {
                $ans .= "type Like '%".$vals."%'";    
                }
                $i++; }
            $ans.=")";
            $this->db->where($ans);
           }
        endif;
        
        if(isset($filterArray['timevisit']) && !empty($filterArray['timevisit'])):
        $timetovisit = $filterArray['timevisit'];    
          if(is_array($timetovisit) && ! (in_array("All", $timetovisit)) ){
            $count = count($timetovisit);
            $i=1;
            $ans="(";
            foreach($timetovisit as $vals){
                $ans .= "month_to_visit Like '%".$vals."%' OR ";
               
               }
               $ans .= "month_to_visit Like '%All%'"; 
            $ans.=")";
            $this->db->where($ans);
           }
        endif;
        
       
        $this->db->where('is_deleted','0');
        if(empty($filterArray['admin_page'])){
           $this->db->where('status','2');

        }
        $searchRecord = $this->db->get();
       //print_r($this->db->last_query() ); die;
       if($searchRecord->num_rows() > 0):
           $ans = $searchRecord->result();


            return $ans;
        else:
            return "no";
        endif;    
   }
   
   
}
?>
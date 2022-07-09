<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
    
        public function getwheres($data,$table){
        $this->db->select($data)->from($table);
        $getdata = $this->db->get();
    	if($getdata->num_rows() > 0):
    		return $getdata->result();
    	else:
    		return "no";
    	endif;	
	}
	
	public function get_query($query=null){
		$getdata = $this->db->query($query);
		return $getdata->result();
	}

	public function query($query=null){
		$getdata = $this->db->query($query);
		return $getdata;
	}


}
?>
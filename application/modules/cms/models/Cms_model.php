<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cms_model extends CI_Model {

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


    public function getdata($table){
        $checkLogin = $this->db->order_by('id','DESC')->get($table);
        if($checkLogin->num_rows() > 0):
            return $checkLogin->result();
        else:
            return "no";
        endif;  
    }


    public function insertwhere($table,$dataArray)
    {

        if($this->db->insert($table,$dataArray))
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function updatewhere($table,$id,$data,$col){
        $this->db->where($col,$id);
        $this->db->update($table,$data);
        return 1;
    }

    
}
?>
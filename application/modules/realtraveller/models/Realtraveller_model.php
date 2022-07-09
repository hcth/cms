<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Realtraveller_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getwhere($data,$table){
        $this->db->select($data)->from($table);
        $getdata = $this->db->get();
     
    	if($getdata->num_rows() > 0):
    		return $getdata->result();
    	else:
    		return "no";
    	endif;	
    }

}
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Itneraiesexpert_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getitinerariesExpert(){
        $this->db->select('itinerariesExpert.* , ti_itineraries.headline');
        $this->db->from('itinerariesExpert')->join('ti_itineraries','itinerariesExpert.itid = ti_itineraries.id');
        $getdata = $this->db->get();      
        if($getdata->num_rows() > 0):
            return $getdata->result();
        else:
            return "no";
        endif;  

    }

    public function getitinerariesExpert_csv(){
        $this->db->select('ti_itineraries.headline,name as name,email as email,mobile as mobile, whattoknow as Whattoknow');
        $this->db->from('itinerariesExpert')->join('ti_itineraries','itinerariesExpert.itid = ti_itineraries.id');
        $getdata = $this->db->get();      
        if($getdata->num_rows() > 0):
            return $getdata->result();
        else:
            return "no";
        endif;  

    }


}
?>
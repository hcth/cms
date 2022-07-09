<?php
if ( ! function_exists('getcity'))
{
	function getcity($id ='')
	{
		$CI =& get_instance();
		if($id == ''):
			$city = $CI->db->get("cities");	
		else :	
			$city = $CI->db->get_where("cities",array('state_id'=>$id));
		endif;
		if($city->num_rows() > 0):
			return $city->result();
		endif;
	}
	function getcitybyId($id ='')
	{
		$CI =& get_instance();
		$city = $CI->db->get_where("cities",array('id'=>$id));
		if($city->num_rows() > 0):
			$cities = $city->result();
			echo $cities[0]->name;
		endif;
	}
	function getstate()
	{
		$CI =& get_instance();
		$city = $CI->db->get("states");
		if($city->num_rows() > 0):
			return $city->result();
		endif;
	}
	
		function getcitiesbytravelplace($rec)
	{
		$CI =& get_instance();
        $cityRecs = explode(",",$rec);
        echo "<pre>";
        print_R($cityRecs);
        exit;
		$city = $CI->db->get("states");
		if($city->num_rows() > 0):
			return $city->result();
		endif;
	}
	
	
	
	
	
}

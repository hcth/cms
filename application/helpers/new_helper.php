<?php
if (!function_exists('getcity')) {
	function getcity($id = '')
	{
		$CI = &get_instance();
		if ($id == '') :
			$city = $CI->db->get("cities");
		else :
			$city = $CI->db->get_where("cities", array('state_id' => $id));
		endif;
		if ($city->num_rows() > 0) :
			return $city->result();
		endif;
	}
}
function getcitybyId($id = '')
{
	$CI = &get_instance();
	$city = $CI->db->get_where("cities", array('id' => $id));
	if ($city->num_rows() > 0) :
		$cities = $city->result();
		echo $cities[0]->name;
	endif;
}
function getstate()
{
	$CI = &get_instance();
	$city = $CI->db->get("states");
	if ($city->num_rows() > 0) :
		return $city->result();
	endif;
}
function getcitiesbytravelplace($rec)
{
	$CI = &get_instance();
	$cityRecs = explode(",", $rec);
	echo "<pre>";
	print_R($cityRecs);
	exit;
	$city = $CI->db->get("states");
	if ($city->num_rows() > 0) :
		return $city->result();
	endif;
}
function x($data=[''],$desc=''){
    echo '<pre>';
    print_r($desc);
    print_r($data);
    die;
}
function y($data=[''],$desc=''){
    echo '<pre>';
    print_r($desc);
    print_r($data);
}

function validate_module_access($module){
	$arr_modules = $_SESSION['module'];
	// x($arr_modules, $module);
	if(!empty($_SESSION['id']) && !empty($_SESSION['module'])){
		$arr_modules = $_SESSION['module'];
		if(in_array(trim($module),$arr_modules)){
			return true;
		}
	}
	return false;
	// redirect('admin');
}

function get_assigned_to_user(){
	$CI = &get_instance();
	$next_assigned_to = '';
	
	$query = "SELECT `value` FROM admin WHERE `name` = 'auto_assign_leads'";
	$auto_assign_leads = $CI->admin_model->get_query($query)[0]->value;
	if ($auto_assign_leads == 'on') {
		$query = "SELECT id, `assigned_to` FROM package_detail WHERE `assigned_to` IS NOT NULL ORDER BY id DESC LIMIT 1";
		$assigned_to = $CI->admin_model->get_query($query)[0];
		if(!empty($assigned_to)){
			$assigned_to = $assigned_to->assigned_to;
	
			$query = "SELECT user.id FROM user JOIN role on role.id = user.role WHERE user.id > $assigned_to AND `assign_leads` = 1 AND user.is_deleted = 0 AND role.is_deleted = 0 LIMIT 1";
			$next_assigned_to = $CI->admin_model->get_query($query)[0];
		}
	
		if(empty($next_assigned_to)){
			$query = "SELECT user.id FROM user JOIN role on role.id = user.role WHERE `assign_leads` = 1 AND user.is_deleted = 0 AND role.is_deleted = 0 LIMIT 1";
			$next_assigned_to = $CI->admin_model->get_query($query)[0];
		}
		$next_assigned_to = $next_assigned_to->id;
	};	
	return $next_assigned_to;
}
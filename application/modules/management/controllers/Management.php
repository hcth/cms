<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');
	}

	// Role Management Module Code Start here
	public function role_management()
	{
		$validate = validate_module_access('management/role_management');
		if (!empty($validate)) {
			$template = "admin";
			$record['viewfile'] = "role_management";
			$record['module'] = "management";
			echo modules::run('template/' . $template, $record);
		} else {
			redirect('admin');
		}
	}

	public function get_all_roles()
	{
		$query = "SELECT `id`, `name`, `module`, `assign_leads`, `is_admin`, `created_at`
			FROM role
			WHERE `is_deleted` = '0' 
		";
		$record['all_roles'] = $this->admin_model->get_query($query);
		return $this->load->view("management/role_management_table", $record);
	}

	public function create_role()
	{
		$data = array(
			'name'			=> $_POST['role_name'],
			'module'		=> json_encode($_POST['modules'], JSON_FORCE_OBJECT),
			'assign_leads'	=> $_POST['assign_leads'] == 1 ? 1 : 0,
			'is_admin'	    => $_POST['is_admin'] == 1 ? 1 : 0,
			'created_at'	=> date('Y-m-d H:i:s'),
		);
		$result = $this->db->insert('role', $data);
		if ($result) {
			$result = ['status' => 'success', 'msg' => 'success', 'data' => ''];
		} else
			$result = ['status' => 'failed', 'msg' => 'Something went wrong', 'data' => ''];

		echo json_encode($result);
	}

	public function delete_role()
	{
		$id = $_POST['id'];

		$query = "UPDATE role set 
			`is_deleted` = '1'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status' => 'success', 'msg' => 'Role Deleted Successfully', 'data' => '']);
	}

	public function edit_role()
	{
		$id = $_POST['id'];
		$is_admin     = $_POST['is_admin'] == 1 ? 1 : 0;
		$assign_leads = $_POST['assign_leads'] == 1 ? 1 : 0;
		$query = "UPDATE role set 
			name = '" . $_POST['role_name'] . "',
			module = '" .  json_encode($_POST['modules'], JSON_FORCE_OBJECT) . "',
			assign_leads = " . $assign_leads . ",
			is_admin = " . $is_admin . "
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status' => 'success', 'msg' => 'Role Updated Successfully', 'data' => '']);
	}
	// Role Management Module Code End here

	// User Management Module Code Start here
	public function user_management()
	{
		$validate = validate_module_access('management/user_management');
		if (!empty($validate)) {
			$template = "admin";
			$record['viewfile'] = "user_management";
			$record['module'] = "management";

			$query = "SELECT `id`, `name`
				FROM role
				WHERE `is_deleted` = '0' 
			";
			$record['all_roles'] = $this->admin_model->get_query($query);
			echo modules::run('template/' . $template, $record);
		} else {
			redirect('admin');
		}
	}

	public function get_all_users()
	{
		$query = "SELECT 
			`user`.`id`,
			`user`.`name`,
			`user`.`email`,
			`user`.`mobile`,
			`user`.`password`,
			`role`.`name` as role_name,
			`user`.`created_at`
			FROM `user`
			LEFT JOIN `role` ON role.id = user.role
			WHERE `user`.`is_deleted` = '0' 
		";
		$record['all_roles'] = $this->admin_model->get_query($query);
		return $this->load->view("management/user_management_table", $record);
	}

	public function create_user()
	{
		$data = array(
			'name'			=> $_POST['user_name'],
			'email'			=> $_POST['user_email'],
			'mobile'		=> $_POST['user_mobile'],
			'password'		=> md5($_POST['user_password']),
			'role'			=> $_POST['role'],
			'created_at'	=> date('Y-m-d H:i:s'),
		);
		$result = $this->db->insert('user', $data);
		if ($result) {
			$result = ['status' => 'success', 'msg' => 'success', 'data' => ''];
		} else
			$result = ['status' => 'failed', 'msg' => 'Something went wrong', 'data' => ''];

		echo json_encode($result);
	}

	public function delete_user()
	{
		$id = $_POST['id'];

		$query = "UPDATE user set 
			`is_deleted` = '1'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status' => 'success', 'msg' => 'User Deleted Successfully', 'data' => '']);
	}

	public function edit_user()
	{
		$id = $_POST['id'];
		$assign_leads = $_POST['assign_leads'] == 1 ? 1 : 0;
		$query = "UPDATE user set 
			name = '" . $_POST['user_name'] . "',
			email = '" . $_POST['user_email'] . "',
			mobile = '" . $_POST['user_mobile'] . "',
			password = '" . md5($_POST['user_password']) . "',
			role = '" . $_POST['role'] . "'
			WHERE id = $id 
		";
		$this->admin_model->query($query);
		echo json_encode(['status' => 'success', 'msg' => 'User Updated Successfully', 'data' => '']);
	}

	// User Management Module Code End here

}

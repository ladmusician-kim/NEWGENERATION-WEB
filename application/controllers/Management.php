<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends NG_Controller {
	function __construct () {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->__require_admin_login();
	}

	function index () {
		$page = $this->input->get('page');
		$perPage = $this->input->get('perPage');

		if ($page === null || $perPage === null) {
			$page = 1;
			$perPage = 10;
		}		

		$users = $this->user_model->get_users(null, null, $page, $perPage);
		$total_count = $this->user_model->get_all_user_count();

		$last_page = ceil($total_count / $perPage);

		$this->__get_mg_views('Management/index', 
			array ('users' => $users->return_body, 'page' => $page, 'perPage' => $perPage, 'last_page' => $last_page));		
	}

	function user () {
		$page = $this->input->get('page');
		$per_page = $this->input->get('perPage');

		if ($page === null || $perPage === null) {
			$page = 1;
			$perPage = 10;
		}		

		$users = $this->user_model->get_users(null, null, $page, $perPage);
		$total_count = $this->user_model->get_all_user_count();

		$last_page = ceil($total_count / $perPage);

		$this->__get_mg_views('Management/user', 
			array ('users' => $users->return_body, 'page' => $page, 'perPage' => $perPage, 'last_page' => $last_page));	
	}

	function notice () {
		$this->__get_mg_views('Management/notice');
	}

	function create_notice () {
		$this->__get_mg_views('Management/create_notice');	
	}

	function upload() {
		var_dump($this->input->post('smarteditor'));
	}
}

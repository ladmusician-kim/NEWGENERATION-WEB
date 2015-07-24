<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends NG_Controller {
	function __construct () {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	function index () {
		//$this->load->library('table');

		//$users = $this->user_model->gets();
		//echo $this->table->generate($users);
		$result = $this->user_model->get_users(null, null, 1, 10);
		//var_dump(json_encode($users));
		$this->__get_mg_views('Management/index', array ('users' => $result->return_body));		
	}

	function user () {
		$this->__get_mg_views('Management/user');		
	}

	function upload() {
		var_dump($this->input->post('smarteditor'));
	}
}

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
		$this->__get_mg_views('Management/index');		
	}

	function user () {
		$this->__get_mg_views('Management/user');		
	}

	function upload() {
		var_dump($this->input->post('smarteditor'));
	}
}

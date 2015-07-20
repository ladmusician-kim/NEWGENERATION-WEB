<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Home extends NG_Controller {
	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	function index() {
		if ($this->session->userdata('is_login')) {
			$this->getViews('Home/index');
		} else {
			redirect('/Auth/login');
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Home extends NG_Controller {
	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	function index() {
		$this->__require_login();
		$this->__getViews('Home/index');
		/*
		if ($this->session->userdata('is_login')) {

		} else {
			redirect('/Auth/login?returnURL='.rawurlencode(site_url('/Home/index')));
		}
		*/
	}
}

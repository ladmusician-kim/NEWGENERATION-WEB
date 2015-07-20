<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	function index() {
		if ($this->session->userdata('is_login')) {
			$this->getViews('Home/index');
		} else {
			redirect('/Login/index');
		}
	}

	function getViews($viewStr) {
		$this->load->view('_Layout/header.php');
		$this->load->view($viewStr);
		$this->load->view('_Layout/footer.php');
	}
}

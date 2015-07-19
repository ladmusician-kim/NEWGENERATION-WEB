<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct () {
		parent::__construct();
	}

	function index() {
		$this->getViews('Home/index');
	}

	function getViews($viewStr) {
		$this->load->view('_Layout/header.php');
		$this->load->view($viewStr);
		$this->load->view('_Layout/footer.php');
	}
}

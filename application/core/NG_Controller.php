<?php
class NG_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function getViews($viewStr) {
		$this->load->view('_Layout/header.php');
		$this->load->view('_Layout/left_navbar.php');
		$this->load->view('_Layout/profile_navbar.php');
		$this->load->view($viewStr);
		$this->load->view('_Layout/footer.php');
	}
}
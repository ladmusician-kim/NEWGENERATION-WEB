<?php
class NG_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();

		if(!$this->input->is_cli_request())
			$this->load->library('session');
	}

	function __getViews($viewStr, $data = null) {
		$this->load->view('_Layout/header.php');
		$this->load->view('_Layout/left_navbar.php');
		$this->load->view('_Layout/profile_navbar.php');

		if ($data != null) {
			$this->load->view($viewStr, $data);
		} else {
			$this->load->view($viewStr);
		}

		$this->load->view('_Layout/footer.php');
	}
}
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



	function get_notices () {
		$this->load->model('notice_model');
		$page = $this->input->get('page');
		$per_page = $this->input->get('perPage');

		if ($page === null || $perPage === null) {
			$page = 1;
			$perPage = 10;
		}		

		$notices = $this->notice_model->get_items(null, null, $page, $perPage);
		$total_count = $this->notice_model->get_all_count();

		$last_page = ceil($total_count / $perPage);

		$this->__get_mg_views('Partial/card_list', 
			array ('notices' => $notices->return_body, 'page' => $page, 'perPage' => $perPage, 'last_page' => $last_page));	
	}
}

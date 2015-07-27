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

	/* user */
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


	/* notice */
	function notice () {
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

		$this->__get_mg_views('Management/notice', 
			array ('notices' => $notices->return_body, 'page' => $page, 'perPage' => $perPage, 'last_page' => $last_page));	
	}
	function notice_detail () {
		$this->load->model('notice_model');
		$notice_id = $this->input->get('noticeid');
		$notice = $this->notice_model->get_by_id($notice_id);

		$this->__get_mg_views('Management/notice_detail', array('notice' => $notice));
	}
	function notice_create () {
		$this->__get_mg_views('Management/notice_create');	
	}
	function notice_submitted () {
		$this->load->model('notice_model');
		$input_data = array (
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        );

		$this->load->model('notice_model');
		$rtv = $this->notice_model->add($input_data);

		if ($rtv != null && $rtv > 0) {
			$this->session->set_flashdata('message', '공지사항을 성공적으로 저장하였습니다.');
	      	redirect('Management/notice');
		} else {
			$this->session->set_flashdata('message', '공지사항을 저장하는데 오류가 발생했습니다.');
	      	redirect('Management/notice_create');
		}
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/Common_Controller.php';

class Login extends Common_Controller {
  function __construct () {
    parent::__construct();
    $this->load->helper('url');
	$this->load->library('form_validation');
  }

  function index () {
    $this->form_validation->set_rules('login-username', '이메일', 'required|valid_email');
    $this->form_validation->set_rules('login-password', '비밀번호', 'required');

	$this->getViews('Login/index');
  } 	
}

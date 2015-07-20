<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/Common_Controller.php';

class Auth extends Common_Controller {
  function __construct () {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url');

  }

  function index() {
    redirect('/Login/index');
  }

  function authentication () {
    $username = $this->input->post('login-username');
    $password = $this->input->post('login-password');
    $remember = $this->input->post('login-remember');

    $auth = $this->config->item('authentication');

    if ($username == $auth['username'] && $password == $auth['password']) {
      echo '일치';
      $this->session->set_userdata('is_login', true);
      redirect('Home/index');
    } else {
      $this->session->set_flashdata('message', '로그인에 실패하였습니다.');
      redirect('Login/index');
    }

    /*
    if ($this->form_validation->run() == FALSE) {
      $this->getViews('Auth/index');
    } else {
      $this->user_model->login($username, $password);
      echo 'success';
    }
    */
  }
}

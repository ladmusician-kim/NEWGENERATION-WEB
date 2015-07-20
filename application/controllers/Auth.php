<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Auth extends NG_Controller {
  function __construct () {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('form_validation');
  }

  function index() {
    redirect('/Auth/login');
  }

  function login() {
    $this->form_validation->set_rules('login-username', '이메일', 'required|valid_email');
    $this->form_validation->set_rules('login-password', '비밀번호', 'required');

    $this->getViews('Auth/login');
  }

  function register() {
    $this->form_validation->set_rules('register-username', '이메일', 'required|valid_email');
    $this->form_validation->set_rules('register-password', '비밀번호', 'required|matches[register-password-confirm]');
    $this->form_validation->set_rules('register-password-confirm', '비밀번호 확인', 'required');

    $this->getViews('Auth/register'); 
   //echo base_url();
  }








  function authentication () {
    $username = $this->input->post('login-username');
    $password = $this->input->post('login-password');
    $remember = $this->input->post('login-remember');

    $auth = $this->config->item('authentication');

    if ($username == $auth['username'] && $password == $auth['password']) {
      $this->session->set_userdata('is_login', true);
      redirect('Home/index');
    } else {
      $this->session->set_flashdata('message', '로그인에 실패하였습니다.');
      redirect('Auth/login');
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

  function logout () {
    $this->session->sess_destroy();
    redirect('/Home/index');
  }
}

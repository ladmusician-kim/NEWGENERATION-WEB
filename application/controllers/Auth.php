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

  /* 로그인 */
  function login() {
    $this->form_validation->set_rules('login_email', '이메일', 'required|valid_email');
    $this->form_validation->set_rules('login_password', '비밀번호', 'required');

    $isValidate = $this->form_validation->run();

    if($isValidate) {
      $input_data = array ('email' => $this->input->post('login_email'));

      $user = $this->user_model->get_user_by_email($input_data);

      if ($user != null &&
          $user->email == $input_data['email'] &&
          password_verify($this->input->post('login_password'), $user->password)
         ) {
          $this->session->set_flashdata('message', '로그인에 성공하였습니다.');
          $this->session->set_userdata('is_login', true);

          $returnURL = $this->input->get('returnURL');
          if ($returnURL === false) {
            redirect('Home/index');            
          } 

          redirect($returnURL);
      } else {
          $this->session->set_flashdata('message', '로그인에 실패하였습니다.');
          redirect('Auth/login');
      }
    } else {
      $this->getViews('Auth/login', array('returnURL' => $this->input->get('returnURL')));
    }
  }

  /* 회원가입 */
  function register() {
    $this->form_validation->set_rules('register-username', '이메일', 'required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('register-password', '비밀번호', 'required|matches[register-password-confirm]');
    $this->form_validation->set_rules('register-password-confirm', '비밀번호 확인', 'required');

    $isRegister = $this->form_validation->run();

    if($isRegister) {
      $input_data = array (
        'email' => $this->input->post('register-username'),
        'password' => password_hash($this->input->post('register-password'), PASSWORD_BCRYPT)
        );

      $rtv = $this->user_model->add($input_data);
      if($rtv) {
        $this->session->set_flashdata('message', '회원가입에 성공하였습니다.');
        redirect('Auth/login');
      } else {
        $this->session->set_flashdata('message', '회원가입에 실패하였습니다.');
        redirect('Auth/register');
      }

    } else {
     $this->getViews('Auth/register');
   }
  }

  /* 로그아웃 */
  function logout () {
    $this->session->sess_destroy();
    redirect('/Home/index');
  }
}

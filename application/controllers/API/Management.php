<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Management extends NG_Controller {
    function __construct () {
        parent::__construct();
        $this->load->helper('url');
    }

    function get_admin_users () {
        $this->load->model('user_model');

        $users = $this->user_model->get_admin_users();

        $this->__get_partial_view('Partial/user_list',
            array ('users' => $users));
    }
}

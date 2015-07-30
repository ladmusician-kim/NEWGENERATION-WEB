<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Management extends NG_Controller {
    function __construct () {
        parent::__construct();
        $this->load->helper('url');
    }

    function get_users () {
        $this->load->model('user_model');
        $page = $this->input->get('page');
        $per_page = $this->input->get('perPage');

        if ($page === null || $per_page === null) {
            $page = 1;
            $perPage = 10;
        }

        $users = $this->user_model->get_users(null, null, $page, $perPage);
        $total_count = $this->user_model->get_all_user_count();

        $last_page = ceil($total_count / $perPage);

        $this->__get_partial_view('Partial/user_list',
            array ('users' => $users->return_body, 'page' => $page, 'perPage' => $perPage, 'last_page' => $last_page));
    }
}

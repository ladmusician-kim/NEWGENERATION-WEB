<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . '/libraries/Common_Controller.php';

class Test extends NG_Controller {
  function __construct () {
    parent::__construct();
  }

  function index() {
    $this->getViews('Home/index');
  }
}

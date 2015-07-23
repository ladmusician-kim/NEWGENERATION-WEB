<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends NG_Controller {
	function index () {
		$this->__getViews('Test/index');		
	}

	function upload() {
		var_dump($this->input->post('smarteditor'));
	}
}

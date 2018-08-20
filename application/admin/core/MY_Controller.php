<?php

if (!defined("BASEPATH")) {
	exit('No direct script access allowed');
}

/**
 * 扩展 Controller 类
 */
class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
}


/**
 * 后台控制类
 */
class Admin_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();

		// 验证登录
		$this->load->library('auth');
		//echo uri_string();
		//exit;
		$this->auth->is_login(uri_string());

		//
	}

}
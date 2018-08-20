<?php

if (!defined("BASEPATH")) {
	exit('No direct script access allowed');
}

class Auth {

	var $CI;

	var $session_expire = 3600;

	function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();

		// session信息
		$manager_session_config = array(
			'sess_cookie_name' => 'manager_session_config',
			'sess_expiration' => 0,
		);
		$this->CI->load->library('session', $manager_session_config, 'manager_session');
	}

	// 判断是否登录
	function is_login($redirect=false, $default_redirect=true) {
		// 获取用户登录信息
		$manager = $this->CI->manager_session->manger;
		// 无登录信息，跳转到登录页
		if (!$manger) {
			if ($redirect) {
				$this->CI->manager_session->redirect = $redirect;
			}
			if ($default_redirect) {
				redirect($this->CI->config->item('admin_folder') . 'login?redirect='.$redirect, 'location');
			}
			return;
		} else {  // 包含用户信息
			//
			exit(222);
		}
	}

}

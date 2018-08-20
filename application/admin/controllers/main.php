<?php

if (!defined("BASEPATH")) {
	exit('No direct script access allowed');
}

// 管理主页面
class Main extends Admin_Controller {

	// 用户登录信息
	public $manager = null;

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo 'main index';
	}

}
<?php

namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function __construct()
	{
			parent::__construct();
			$this->checkLogin();
	}
	public function checkLogin()
	{
			if(!$_SESSION['admin']){
				$this->error('请先登录吧',U('Login/login'));
			}
	}
}
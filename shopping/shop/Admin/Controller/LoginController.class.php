<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){     
	 if(IS_POST){
		 $uname=I('uname');
		 $password=md5(I('password'));
		 $code=I('code');
		 $verify=new \Think\Verify();
		 if(!$verify->check($code)){
			$this->error('验证码错误');
		 }
		 if(D('User')->checkUser($uname,$password)){
			 $this->success('登录成功',U('Index/index'),1);
		 }else{
			 $this->error('用户名或密码错误');
		 }
	 }
	   $this->display();	   
    }
    public function code()
	{
		$Verify=new \Think\Verify();
		$Verify->entry();
	}
	public function loginout()
	{
			session('[destroy]');
			$this->success('注销成功',U('Login/login'),1);
	}
}
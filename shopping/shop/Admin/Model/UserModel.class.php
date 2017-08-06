<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
		public function checkUser($uname,$password){
			$data['uname']=$uname;
			$data['password']=$password;
			if($admin=$this->where($data)->find()){
				session('admin',$admin);
				return true;
			}else{
				return false;
			}
		}
		protected $_validate=array(
			array('uname','require','用户名不能为空'),
			array('uname','','用户名已经存在！',0,'unique',3),
			array('email','email','请输入正确的邮箱格式！'),
			array('email','require','邮箱不能为空'),
			array('email','','邮箱已经存在！',0,'unique',3),
			array('phone','require','电话不能为空'),
			array('phone',11,'请输入11位手机号',0,'length'),
		);
}
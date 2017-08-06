<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController{
   
 
	public function index(){
		$u=M('user');
		$count=$u->count();
		$Page=new \Think\Page($count,10);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show=$Page->show();
		$info=$u->order('uid asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('info',$info);
		$this->assign('page',$show);
		$this->display();		
			
	}
    public function add(){
        if(IS_POST){
	     $data['email']=I('email');
		 $data['uname']=I('uname');
		 $data['password']=md5(I('password'));
		 $data['phone']=I('phone');
		 $m=D('user');
        if($m->create($data)){			
			if($m->add()){
				 $this->success('添加成功',U('User/index'),1);
			 }else{
				 $this->error('添加失败');
			 }
		}else{
		   $this->error($m->getError());
		}
		return;
	 }
	   $this->display();	  
	}
	
	public function edit()
	{
		$uid=I('uid');
		 $m=M('user');

		if(IS_POST){
			$data['email']=I('email');
			$data['uname']=I('uname');
			$data['password']=md5(I('password'));
			$data['phone']=I('phone');
			if(M('user')->where(array("uid"=>$uid))->save($data)){
				$this->success('更新成功',U('User/index'),1);
			}else{
				$this->error('更新失败');
			}
			return;
		}else{
			$info=$m->find($uid);
			//$info=$m->where('uid='.$uid.'')->select();
			//var_dump($info);
			$this->ajaxReturn (json_encode($info),'JSON');
		}

	}

	public function delete()
	{
	    $uid  = $_POST['uid'];
        $res = M("user")->where(array("uid"=>$uid))->delete();
        if($res){
                $this->success('删除成功',U('User/index'),1);
				//$this->ajaxReturn($result,"删除成功！",1);        
        }else{
		   $this->error('删除失败');
		}
	}
	public function email()
    	{
    		$u=M('user');

    		if(IS_POST){
    		 	$email=I('email');
    		 	$res=$u->where(array('email'=>$email))->find();
    			if($res){

                     $this->success(U('User/index'),1);

    			}else{
    			$this->error('不存在');
    			}

			}

		}
		public function uname()
            	{
            		$u=M('user');

            		if(IS_POST){
            		 	$uname=I('uname');
            		 	$res=$u->where(array('uname'=>$uname))->find();
            			if($res){
                             $this->success(U('User/index'),1);

            			}else{
            				$this->error("不存在");
            			}

        			}

        		}
}
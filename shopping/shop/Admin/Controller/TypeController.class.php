<?php

namespace Admin\Controller;
use Think\Controller;
class TypeController extends BaseController{

	public function index(){
		$t=M('type');
		$count=$t->count();
		$Page=new \Think\Page($count,6);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show=$Page->show();
		$info=$t->order('tid asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('info',$info);
		$this->assign('page',$show);
		$this->display();		
	}
    public function add()
	{
		 if(IS_POST){
			 $data['typename']=I('typename');			
			 $m=D('type');
			if($m->create($data)){			
				if($m->add()){
					 $this->success('添加成功',U('Type/index'),1);
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
			$tid=I('tid');
			if(IS_POST){
				$data['typename']=I('typename');				
				if(M('type')->where(array("tid"=>$tid))->save($data)){
					$this->success('更新成功',U('Type/index'),1);
				}else{
					$this->error('更新失败');
				}
				return;
			}else{
				$info=M('type')->find($tid);		
				$this->assign('info',$info);
				$this->display();
			}
	}
	public function delete()
	{
	  $tid  = $_POST['tid'];
        $res = M("type")->where(array("tid"=>$tid))->delete();
        if($res){
                $this->success('删除成功',U('type/index'),1);
				
        }else{
		   $this->error('删除失败');
		}
	}
}
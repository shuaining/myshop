<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends BaseController{
   
   
	public function index(){
		
		$cats=D('category')->catTree();
	    $this->assign('cats',$cats);
		$this->display();		
	}
    public function add(){
	//
   if(IS_POST){
	     $data['cname']=I('cname');
		 $data['keywords']=I('keywords');
		 $data['title']=I('title');
		 $data['description']=I('description');
		 $data['sort']=I('sort');
		 $data['display']=I('display');
		 $data['pid']=I('pid',0,'int');
		 $c=D('category');
        if($c->create($data)){			
			if($c->add()){
				 $this->success('添加成功',U('Category/index'),1);
			 }else{
				 $this->error('添加失败');
			 }
		}else{
		   $this->error($c->getError());
		}
		return;
	 }
	  $cats=D('category')->catTree();
	  $this->assign('cats',$cats);
	   $this->display();	  
	}
	
	public function edit()
	{
	    $cid=I('cid');
		 if(IS_POST){
				 $data['cname']=I('cname');
				 $data['keywords']=I('keywords');
				 $data['title']=I('title');
				 $data['description']=I('description');
				 $data['sort']=I('sort');
				 $data['display']=I('display');
				 $data['pid']=I('pid',0,'int');
				 $data['cid']=I('cid',0,'int');
			     $c=D('category');
				 $ids=$c->getSubIds($data['cid']);
				 if(in_array($data['pid'],$ids)){
					 $this->error('不能把当前分类及其子分类作为上级分类');
				 }
			  if($c->create($data)){			
					if($c->save()){
						 $this->success('修改成功',U('Category/index'),1);
					 }else{
						 $this->error('修改失败');
					 }
				}else{
				   $this->error($c->getError());
				}
				return;		
			}else{
				$cat = M('category')->find($cid);
				//获取所有的分类信息
				$cats = D('category')->catTree();
				$this->assign('cat',$cat);
				$this->assign('cats',$cats);
				$this->display();
			}
    }
	public function delete()
	{
	   $cid = I('cid',0,'int');
		//如果不是叶子分类，则不允许删除
		$c = D('category');
		$ids = $c->getSubIds($cid);
		if (count($ids) > 1) {
			$this->error('该分类有子分类，请先删除其子分类');
		}
		if (M('category')->delete($cid)) {
			$this->success('删除成功',U('index'),1);
		} else {
			$this->error('删除失败');
		}
	}
}
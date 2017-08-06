<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model {
	    protected $_validate=array(
			array('title','require','标题名称不能为空'),
		);
		public function catTree()
		{
			$cats=$this->select();
			return $this->tree($cats);
		}
	    public function tree($arr,$pid = 0,$level = 0)
		{
			static $tree=array();
			foreach($arr as $v){
				if($v['pid'] == $pid){
					$v['level']=$level;
					$tree[]=$v;
					$this->tree($arr,$v['cid'],$level+1);
				}
			}
			return $tree;
		}
		public function getSubIds($cid)
		{
			$cats=$this->select();
			$list=$this->tree($cats,$cid);
			$res=array();
			foreach($list as $v){
				$res[]=$v['cid'];
			}
			$res[]=$cid;
			return $res;
		}
}
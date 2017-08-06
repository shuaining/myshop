<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model {
		
		protected $_validate=array(
			array('typename','require','类别名称不能为空'),
			
		);
}
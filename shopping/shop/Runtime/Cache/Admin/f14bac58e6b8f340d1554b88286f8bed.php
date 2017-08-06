<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>pintuer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>admin.css" />
<script href="<?php echo Admin_JS ?>pintuer.js"></script>
<script href="<?php echo Admin_JS ?>angularJS.js"></script>

<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Theme_Min_CSS ?>" />
<script href="<?php echo Bootstrap_Min_JS ?>"></script>
<script href="<?php echo Bootstrap_Npm_JS ?>"></script>
<!--【bootstrap结束】-->
<!--【Jquery】-->
<script href="<?php echo Jquery ?>"></script>

<script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
<!-- <link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css"> -->
<!-- <script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script> -->
</head>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='/shop/index.php?s=/Admin/category/tianjia'"><span class="icon-plus-square-o"></span> 添加分类</button>
  </div>
  <table class="table table-striped text-center table-bordered table-hover">
    <tr class="info">
      <th width="5%">ID</th>
      <th width="10%">分类名称</th>
      <th width="10%">关键字</th>
      <th width="10%">描述</th>
      <th width="10%">排序</th>
      <th width="10%">父类</th>
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($r["cid"]); ?></td>
      <td><?php echo ($r["cname"]); ?></td>
      <td><?php echo ($r["keywords"]); ?></td>
      <td><?php echo ($r["description"]); ?></td>
      <td><?php echo ($r["sort"]); ?></td>
      <td><?php echo ($r["pid"]); ?></td>        
      <td><div class="button-group" > <a class="button border-main" href="<?php echo U('update?id='.$r['cid']);?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:;" ng-click="delete(<?php echo ($r["cid"]); ?>)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>

<script>
var m=angular.module('hd',[]);
m.controller('ctrl',['$scope',function($scope){
	
}]);

</script>

</body>
</html>
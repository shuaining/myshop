<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>pintuer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>menu.css" />
<!--【Jquery】-->
<script src="<?php echo Jquery ?>"></script>
<!--【Jquery结束】-->

<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<script src="<?php echo BootstrapJs ?>"></script>
<!--【bootstrap结束】-->

<!--【angular开始】-->
<script src="<?php echo An ?>"></script>
<script src="<?php echo Anr ?>"></script>
<!--【angular结束】-->

<!--【layer开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo LayerCss ?>" />
<script src="<?php echo LayerJs ?>"></script>
<!--【layer结束】-->


</head>
<body style="background-color:#f2f9fd;">



<div class="header bg-main">
 <div class="leftnav-title"><strong><a class="button button-little bg-green toggle" id="menu-toggle1" href="javascript:;" target="_blank"><span class="icon-home"></span> 菜单列表</a></strong></div>
  <div class="logo margin-big-left fadein-top">
    <h1>后台管理中心</h1>
  </div>
  <div class="head-l"> &nbsp;&nbsp;<a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<button class="button button-little bg-red" id="zhuxiao"><span class="icon-power-off"></span> 退出登录</button> </div>
</div>
<style>

</style>
 <ul class="menu" data-menu data-menu-toggle="#menu-toggle1">
    <li>
      <a href="/shopping/shop/index.php/Admin/user/index" target="right">用户管理</a>
    </li>
    <li class="menu-separator"></li>
    <li>
      <a href="/shopping/shop/index.php/Admin/category/index" target="right">栏目管理</a>
    </li>
	<li class="menu-separator"></li>
    <li>
      <a href="/shopping/shop/index.php/Admin/type/index" target="right">类型管理</a>
    </li>
	<li class="menu-separator"></li>
    <li>
      <a href="#">商品管理</a>
    </li>
    <li class="menu-separator"></li>
    <li>
      <a href="#">Excepteur sint</a>
    </li>
  </ul>
  
<script>
$(document).ready(function(){
	$("#zhuxiao").click(function(){ 	
		layer.confirm('你确定要退出吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(msg){
		  $.get("/shopping/shop/index.php/Admin/Login/loginout", function(msg){
					 window.location.href = msg.url;
				});
		 
		}, function(){
		  layer.msg('继续操作吧');
		});
	});
});
</script>



<div class="admin" >
  <iframe scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%"></iframe>
</div>

<script src="<?php echo Menu ?>"></script>
 <script>$('[data-menu]').menu();</script>
</body>
</html>
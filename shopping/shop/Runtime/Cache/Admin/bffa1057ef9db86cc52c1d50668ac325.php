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
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo Admin_IMG ?>y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<button class="button button-little bg-red" id="zhuxiao"><span class="icon-power-off"></span> 退出登录</button> </div>
</div>
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


<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="pass.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="page.html" target="right"><span class="icon-caret-right"></span>单页管理</a></li>  
    <li><a href="adv.html" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   
    <li><a href="book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>     
    <li><a href="column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>
  </ul>   
  <a href="/shopping/shop/index.php/Admin/user/index" target="right"><h2><span class="icon-pencil-square-o"></span>用户管理</h2></a>
  <a href="/shopping/shop/index.php/Admin/category/index" target="right"><h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <a href="/shopping/shop/index.php/Admin/type/index" target="right"> <h2><span class="icon-pencil-square-o"></span>类型管理</h2></a>


</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>


<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%"></iframe>
</div>



</body>
</html>
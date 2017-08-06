<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
<!-- <link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>pintuer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>footer.css" /> -->
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/admin/css/pintuer.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/admin/css/header.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/admin/css/admin.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/admin/css/footer.css" />

<!--【jquery插件】-->
<script src="<?php echo Jquery ?>"></script>
<script src="<?php echo DHJS ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo DH ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo DHCSSfontcss ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo DHCSS ?>" />
<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Theme_Min_CSS ?>" />
<script href="<?php echo Bootstrap_Min_JS ?>"></script>
<script href="<?php echo Bootstrap_Npm_JS ?>"></script>
<!--【bootstrap结束】-->
</head>
<body>
<div class="content" style="width:100%;height:648px;">
<!--【头部开始】-->
<div class="top" style="width:100%;float:left;">



<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo Admin_IMG ?>y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a>  
  </div>
</div>


</div>
<!--【头部结束】-->
<div class="bottom" style="width:100%;height:100%;float:left;border:10px slide white;background-color:#f2f9fd;;position:relative;">
<!--【内容左侧导航开始】-->
<div id="left" style="float:left;width:135px;"> 
		<div class="leftnav-title">
			<strong><span class="icon-list"></span>菜单列表</strong> 
		</div>		
		<!--【左侧导航】-->
		
			
<div class="nav-main">
<div class="nav-box">
<div class="nav">
 <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <ul class="nav-ul">
  	<li><a href="#" class="home"><span>首页</span></a></li>
  	<li><a href="#" class="develop" ><span>基本设置</span></a></li>
  	<li><a href="#" class="wechat"><span>栏目管理</span></a></li>
  	<li><a href="#" class="case"><span>项目案例</span></a></li>
  	<li><a href="#" class="news"><span>信息资讯</span></a></li>
  	<li><a href="#" class="contact"><span>关于我们</span></a></li>
  </ul>
</div>
<div class="nav-slide">
    <div class="nav-slide-o"></div>
    <div class="nav-slide-o">
    	<ul>
    		<li><a href="info.html" target="right"><span>网站设置</span></a></li>
    		<li><a href="list.html" target="right"><span>修改密码</span></a></li>
    		<li><a href="#" target="right"><span>单页管理</span></a></li>
    	
    	</ul>
    </div>
    <div class="nav-slide-o">
    	<ul>
			<li><a href="<?php echo U('Admin/Category/show');?>" target="right"><span>查看栏目</span></a></li>
    		
    	</ul>
    </div>
    <div class="nav-slide-o">
    	<ul>
    		<li><a href="#"><span>查看栏目</span></a></li>
    		
    	</ul>
    </div>
    <div class="nav-slide-o">
    	<ul>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    		<li><a href="#"><span>企业建站</span></a></li>
    	</ul>
    </div>
</div>
</div>
</div>

<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript">
	$(function(){
	var thisTime;
	$('.nav-ul li').mouseleave(function(even){
			thisTime	=	setTimeout(thisMouseOut,1000);
	})

	$('.nav-ul li').mouseenter(function(){
		clearTimeout(thisTime);
		var thisUB	=	$('.nav-ul li').index($(this));
		if($.trim($('.nav-slide-o').eq(thisUB).html()) != "")
		{
			$('.nav-slide').addClass('hover');
			$('.nav-slide-o').hide();
			$('.nav-slide-o').eq(thisUB).show();
		}
		else{
			$('.nav-slide').removeClass('hover');
		}
		
	})
	
	function thisMouseOut(){
		$('.nav-slide').removeClass('hover');
	}
	 
	$('.nav-slide').mouseenter(function(){
		clearTimeout(thisTime);
		$('.nav-slide').addClass('hover');
	})
	$('.nav-slide').mouseleave(function(){
		$('.nav-slide').removeClass('hover');
	})

})
</script>

		
</div>
<!--【内容左侧导航结束】-->
<!--【右侧内容开始】-->
<div id="right" style="float:left;width:1214px;height:648px;"> 
<ul class="bread">
  <li><a href="//shop/index.php?s=/admin/CategoryController/show" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
	<div class="admin">
	  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>  
	</div>	
</div>
<!--【右侧内容开始】-->
</div>

</div>
<div id="foot">

	<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
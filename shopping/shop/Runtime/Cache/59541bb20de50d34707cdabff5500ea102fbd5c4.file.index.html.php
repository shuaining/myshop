<?php /* Smarty version Smarty-3.1.6, created on 2016-11-09 15:08:06
         compiled from "D:/wamp/www/myshop/shop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:92095822c15310ea50-42218564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59541bb20de50d34707cdabff5500ea102fbd5c4' => 
    array (
      0 => 'D:/wamp/www/myshop/shop/Admin/View\\Index\\index.html',
      1 => 1478675284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92095822c15310ea50-42218564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5822c1531ed50',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5822c1531ed50')) {function content_5822c1531ed50($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="<?php echo @Admin_CSS_URL;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @Admin_CSS_URL;?>
admin.css">
    <script src="<?php echo @Admin_JS_URL;?>
jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo @Admin_IMG_URL;?>
y.jpg" class="radius-circle rotate-hover" height="50" alt="" />美团网后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="__CONTROLLER__/login"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="__MODULE__/index/info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="__MODULE__/index/pass.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="__MODULE__/index/page.html" target="right"><span class="icon-caret-right"></span>单页管理</a></li>  
    <li><a href="__MODULE__/index/adv.html" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   
    <li><a href="__MODULE__/index/book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>     
    <li><a href="__MODULE__/index/column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="__MODULE__/goods/show" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
    <li><a href="__MODULE__/goods/tianjia" target="right"><span class="icon-caret-right"></span>添加商品</a></li>
           
  </ul>  
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
<ul class="bread">
  <li><a href="" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="__MODULE__/index/info.html" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html><?php }} ?>
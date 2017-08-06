<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html>
<head>
    <title>优社电商 优秀商城选优社 ——微商城开发,商城模板,商城建设 选优社- 登录</title>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="优社电商,采用.net开发结合ecmall、nop、urshop、 ABP、Virto、Orchard、ECShop、HiShop等国内外商城购物系统进行多年研发而成的新一代B2B、B2C、B2B2C、O2O、跨境电商系统 提供电商模板 网站模板，系统支持多插件、多种第三方登陆方式、国内外主流支付方式、配送方式、物流跟踪及交易购物为一身。系统在跨境电商、O2O、垂直电商、平台电商均有广泛应用。经典案例有utsource、茶七网、茶途网、易充网等" />
    <meta name="keywords" content=",广州电商建设,深圳商城开发,商城系统,生鲜电商,美妆商城,茶酒电商,dotnet电商系统,网店系统,商城交易系统,电商模板,商城模板,B2C模板,O2O网站,电子商务网站,跨境电商开发,ecshop模板" />
    <meta property="qc:admins" content="52516704676523545346375" />
    <meta property="wb:webmaster" content="7c478538ace87087" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/global.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/dialog.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/login.css" />

<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/artdialog6.0.5.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.ajaxcart.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.common.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/reg-exp.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/login.js"></script>
<!--   
<link href="<?php echo CSS_URL;?>global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_URL;?>dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_URL;?>login.css" rel="stylesheet" type="text/css" /> -->

<!-- <script src="<?php echo JS_URL;?>jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>artdialog6.0.5.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.ajaxcart.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.common.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>reg-exp.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>login.js" type="text/javascript"></script> -->
</head>
<body>
    
    


<!-- 头部 -->
<div id="header">
    <div class="hd_bar">
        <div class="bd">
            <div class="logo">
                <a href="/" title="优社电商">
                  <img src="/myshop/shop/Public/home/Picture/0002913.png" title="优社电商" /></a>
            </div>
            <div class="hd_lbar">
                <a class="link" href="/" title="优社电商">首页</a>
            </div>
            <div class="hd_rbar">
                <a class="link" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1542823084&amp;site=qq&amp;menu=yes" target="_blank" id="zixun-btn">
                    <i class="iconfont">&#524;</i>
                    在线咨询
                </a>
                <span>020-28170928</span>
            </div>
        </div>
    </div>
</div>









<div id="main" class="cle">
    <div class="box-pic">
        <div class="img" id="left_pic">
            <img src="/myshop/shop/Public/home/Picture/login-box-bg.jpg" width="500" height="450" />
        </div>
    </div>
    <div class="g_box">
        <div id="login-box">
            <h2>
                <div class="trig">
                    没有帐号？
                    <a href="/register" class="trigger-box">点击注册</a>
                </div>
                登录
            </h2>
            <div class="form-bd">
                <div class="form_box cle" id="login_form">
<form action="/login" method="post">                        <ul class="form">
                            <li class="text_input">
                                <span class="iconfont">&#338;</span>
                                <input class="text" id="AccountName" name="AccountName" placeholder="邮箱/手机号" type="text" value="" />
                            </li>
                            <span class="field-validation-valid" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
                            <li class="text_input">
                                <span class="iconfont">&#247;</span>
                                <input class="text" id="Password" name="Password" placeholder="密码" type="password" />
                            </li>
                            <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                            
                            <li class="error" style="display:none">
                                <p><i class="iconfont">Ÿ</i><span></span></p>
                            </li>
                            <li class="other">
                                <div style="float:left;">
                                    <input type="checkbox" name="RememberMe" id="RememberMe" value="false" style="float: left; margin-top: 3px;" />&nbsp; 记住我
                                </div>
                                <a href="/passwordrecovery">忘记密码?</a>>
                            </li>
                            <li class="last">
                                <input type="submit" id="loginBtn" class="btn" value="登 录" />
                            </li>
                        </ul>
</form>                </div>
            </div>
            
<ul class="form other-form">
    <li>
        <h5>使用第三方帐号登录</h5>
    </li>
    <li class="other-login">
    </li>
</ul>

        </div>
    </div>
</div>


<div id="footer">
    <div class="ft_main">
        <div class="ft_nav">
            <a href="/t/aboutus" class="noborder">关于我们</a>
            <cite>/</cite>
            <a href="/t/sysdeliver_alipay">配送政策</a>
            <cite>/</cite>
            <a href="/t/joinus">加入我们</a>
            <cite>/</cite>
            <a href="/t/aboutus" target="_blank">帮助中心</a>
            <cite>/</cite>
            <a href="/jieshao/daili" target="_blank">加盟代理</a>
            <cite>/</cite>
            <a href="/sitemap">站点地图</a>
            <cite>/</cite>
            <a href="/t/contactus">联系我们</a>
            <cite>/</cite>
            <a href="/t/links">友情链接</a>
        </div>
        <div class="ft_txt">
            <p>
                Copyright 2016, 广州商宇网络科技有限公司 URSELECT.COM 
                    备案号：<a rel="nofollow" href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备14084822号-2</a>
            </p>
            <p class="ft_contact">
                    <span>服务时间：09:00-18:00 (法定节假日除外)</span>
                                    <span class="ft_phone">
                        客服热线:
                        <em>020-28170928</em>
                    </span>
            </p>
            <p class="flink">
                <a href="http://www.orchardch.com" target="_blank">Orchard中文</a>
                <a href="http://www.58img.com" target="_blank">Web前端资源网</a>
                <a href="http://www.itjiangtan.com" target="_blank">IT讲坛</a>
                <a href="http://cuiqingcai.com" target="_blank">静觅</a>
				<a href="http://www.urselect.com" target="_blank">广州微商城开发</a>
                <a href="http://gw.urselect.com" target="_blank">商宇科技</a>
                <a href="http://www.72byte.com/thread" target="_blank">72变</a>
                <a href="http://www.maidouvr.com" target="_blank">麦逗VR</a>
				<a href="http://z5a.com" target="_blank">智能产品网</a>
				<a href="http://www.cnfeelings.com/" target="_blank">情怀网</a>
				<a href="http://www.xp510.com" target="_blank">系统之家</a>
				<a href="http://www.urshop.cn" target="_blank">UrShop</a>
				<a href="http://www.cssmoban.com" target="_blank">模板之家</a>
				<a href="http://www.eecco.co" target="_blank">EECCO合伙人</a>
				<a href="http://www.urselect.com" target="_blank">商城模板</a>
				<a href="http://www.mb5u.com" target="_blank">模板无忧</a>
            </p>
        </div>
        <div class="fsm fsm">
            <a>
                <img src="/myshop/shop/Public/home/Picture/qrcode.jpg" alt="关注优社电商微信">
                <p>
                    <i class="iconfont"></i>
                    <br>扫描关注微信公众号
                </p>
            </a>
        </div>
    </div>
</div>


    
    
    
    
	
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?a6a3a9ed4b42dada31c3bf2b04b959bd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?190eb351957ec86ed77493499670f82a";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
    </script>
	<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/d3c222c25810ff58b0d5da1adb71d227.js"></script>
   <!--  <script src="<?php echo JS_URL;?>d3c222c25810ff58b0d5da1adb71d227.js" defer async></script> -->
</body>
</html>
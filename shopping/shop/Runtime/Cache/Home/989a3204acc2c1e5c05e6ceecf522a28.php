<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <title>优社电商 优秀商城选优社 ——微商城开发,商城模板,商城建设 选优社- 主题模板</title>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="优社电商,采用.net开发结合ecmall、nop、urshop、 ABP、Virto、Orchard、ECShop、HiShop等国内外商城购物系统进行多年研发而成的新一代B2B、B2C、B2B2C、O2O、跨境电商系统 提供电商模板 网站模板，系统支持多插件、多种第三方登陆方式、国内外主流支付方式、配送方式、物流跟踪及交易购物为一身。系统在跨境电商、O2O、垂直电商、平台电商均有广泛应用。经典案例有utsource、茶七网、茶途网、易充网等" />
    <meta name="keywords" content=",广州电商建设,深圳商城开发,商城系统,生鲜电商,美妆商城,茶酒电商,dotnet电商系统,网店系统,商城交易系统,电商模板,商城模板,B2C模板,O2O网站,电子商务网站,跨境电商开发,ecshop模板" />
    <meta property="qc:admins" content="52516704676523545346375" />
    <meta property="wb:webmaster" content="7c478538ace87087" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/global.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/dialog.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/hb_main.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/sidebar.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/search.css" />
<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/home/css/common.css" />    

<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/artdialog6.0.5.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.ajaxcart.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.common.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/list.js"></script>
<script type="text/javascript" src="/myshop/shop/Public/home/Scripts/public.js"></script>

<!-- <link  href="<?php echo CSS_URL;?>global.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo CSS_URL;?>dialog.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo CSS_URL;?>hb_main.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo CSS_URL;?>search.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo CSS_URL;?>common.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo CSS_URL;?>sidebar.css" rel="stylesheet" type="text/css" /> -->

<!-- <script src="<?php echo JS_URL;?>jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>artdialog6.0.5.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.ajaxcart.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.common.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>list.js" type="text/javascript"></script>
<script src="<?php echo JS_URL;?>public.js" type="text/javascript"></script> -->  
</head>
<body>
    
    


<div class="top_bar">
    <div class="top_bar_bd cle">
        <ul class="bar_fl">
                <li class="topbar_user">
                    <a href="/login">登 录</a>
                    <s>&nbsp;</s>
                    <a href="/register">免费注册</a>
                </li>
        </ul>
        <ul class="bar_fr" id="topbar_nav">
            <li class="more_menu" id="header_guanzhu">
                <a href="javascript:;">关注我们</a> 
                <i class="iconfont arrow"> </i>
                <div class="more_bd">
                    <div class="list">
                    </div>
                </div>
            </li>
            <li>
                <a href="/t/aboutus">帮助中心</a>
            </li>
            <li>
                <a id="favorite_wb" href="javascript:addToFav();">
                    <i class="iconfont">Ū</i>
                    收藏
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="header">
    <div class="hd_main cle">
        <div class="logo">
    <p>
        <a href="/" class="lizi_logo" title="优社电商">
            <img src="/myshop/shop/Public/home/Picture/0002912.png" title="优社电商" alt="优社电商" />
        </a>
    </p>
</div>

        <div id="nav">
            <ul>
                <li><a href="/" title=优社网>首页</a></li>
                <li>
                    <a href="javascript:;">商城系统</a>
                    <div class="drop-down" style="display:none;">
                            <ul>
                                <li>
                                    <a href="/jieshao/pc" title="商城定制">商城定制</a>
                                </li>
                                <li>
                                    <a href="/jieshao/yidong" title="微商城">微商城</a>
                                </li>
                                <li>
                                    <a href="/jieshao/fuwu" title="商城服务">商城服务</a>
                                </li>
                            </ul>
                    </div>
                </li>
                <li><a href="/cat-42" title="主题模板">主题模板</a></li>
                <li><a href="/extensions" title="插件">插件</a></li>
                <li><a href="/news" title="合作推广">电商资讯</a></li>
            </ul>
        </div>
        
<div class="search_box">
<form action="/search" id="search_fm" method="get" name="search_fm">        <input class="sea_input" type="text" name="q" id="small-searchterms"  autocomplete="off" value="搜索所有商品"
               onfocus="if(this.value=='搜索所有商品')this.value=''" onblur="if(this.value=='') {this.value = '搜索所有商品';}">
        <button type="submit" class="sea_submit">搜索</button>
</form></div>

        
<div class="head_right">
    <div class="head_cart" id="header_cart">
        <a class="tit" href="/cart">
            <b class="iconfont">ŭ</b>
            购物车
            <em class="cartnum" style='visibility:hidden'>0</em>
        </a>
        
<div class="more_bd" id="flyout-cart">
        <div class="error_msg">您的购物车里没有商品</div>
</div>


    </div>
</div>

<script type="text/javascript">
    AjaxCart.init(true, '.cartnum', '', '#flyout-cart');
    $(function () {
        $("#sidebar_cartnum").html(0);
    });
</script>

    </div>
</div>




<div id="wrapper">
    <div class="search-selected">
            <span class="search-min-nav">
                <a href="/">首页</a>
                     &gt;
                    <a href="/cat-42" title="主题模板">主题模板</a>
            </span>
            </div>
            <div class="sort">
            <div class="sort_bd">
                <a title="默认（默认排序）" href="/cat-42?orderby=0" class="current">
                    <span>默认</span>
                </a>|
                <a title="价格" href="/cat-42?orderby=10" class="">
                    <span>价格</span>
                </a>|
                <a title="上新" href="/cat-42?orderby=15" class="">
                    <span>上新</span>
                </a>
            </div>
        </div>
            <div class="productlist" id="productlist">
            <ul class="cle">

<li>
    <a href="/item-886" title="2016 美妆商城 化妆品商城解决方案 电脑端+手机端">
        <img alt="2016 美妆商城 化妆品商城解决方案 电脑端+手机端" src="/myshop/shop/Public/home/Picture/0002915_2016-_300.jpeg" title="2016 美妆商城 化妆品商城解决方案 电脑端+手机端" />
        <p class="txt">2016 美妆商城 化妆品商城解决方案 电脑端+手机端</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;7500</span>
        <span class="fr">已售9件</span>
    </p>
</li>


<li>
    <a href="/item-888" title="电子元器件 多语言 外贸网站跨境电商商城方案  ">
        <img alt="电子元器件 多语言 外贸网站跨境电商商城方案  " src="/myshop/shop/Public/home/Picture/0002870_-_300.jpeg" title="电子元器件 多语言 外贸网站跨境电商商城方案  " />
        <p class="txt">电子元器件 多语言 外贸网站跨境电商商城方案  </p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;6800</span>
        <span class="fr">已售6件</span>
    </p>
</li>


<li>
    <a href="/nop-brooklyn-theme" title="服装类商城 PC端 解决方案">
        <img alt="服装类商城 PC端 解决方案" src="/myshop/shop/Public/home/Picture/0002871_-pc-_300.jpeg" title="服装类商城 PC端 解决方案" />
        <p class="txt">服装类商城 PC端 解决方案</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;8300</span>
        <span class="fr">已售4件</span>
    </p>
</li>


<li>
    <a href="/item-890" title="高科技产品电商网站">
        <img alt="高科技产品电商网站" src="/myshop/shop/Public/home/Picture/0002865_300.png" title="高科技产品电商网站" />
        <p class="txt">高科技产品电商网站</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;15800</span>
        <span class="fr">已售4件</span>
    </p>
</li>


<li>
    <a href="/nitrodemo" title="家居生活PC端网店系统 商城模板">
        <img alt="家居生活PC端网店系统 商城模板" src="/myshop/shop/Public/home/Picture/0002919_pc-_300.jpeg" title="家居生活PC端网店系统 商城模板" />
        <p class="txt">家居生活PC端网店系统 商城模板</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;8900</span>
        <span class="fr">已售4件</span>
    </p>
</li>


<li>
    <a href="/item-909" title="京东商城模板 电商网站解决方案 电脑端（PC） ">
        <img alt="京东商城模板 电商网站解决方案 电脑端（PC） " src="/myshop/shop/Public/home/Picture/0003124_-pc_300.jpeg" title="京东商城模板 电商网站解决方案 电脑端（PC） " />
        <p class="txt">京东商城模板 电商网站解决方案 电脑端（PC） </p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;13000</span>
        <span class="fr">已售5件</span>
    </p>
</li>


<li>
    <a href="/yueyangna-theme" title="母婴进口电商 进口商城 电商PC站 手机站 微信商城 三合一  解决方案">
        <img alt="母婴进口电商 进口商城 电商PC站 手机站 微信商城 三合一  解决方案" src="/myshop/shop/Public/home/Picture/0003107_-pc-_300.jpeg" title="母婴进口电商 进口商城 电商PC站 手机站 微信商城 三合一  解决方案" />
        <p class="txt">母婴进口电商 进口商城 电商PC站 手机站 微信商城 三合一  解决方案</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;8200</span>
        <span class="fr">已售5件</span>
    </p>
</li>


<li>
    <a href="/item-887" title="生鲜绿色农产品专属解决方案 电脑版">
        <img alt="生鲜绿色农产品专属解决方案 电脑版" src="/myshop/shop/Public/home/Picture/0002920_-_300.jpeg" title="生鲜绿色农产品专属解决方案 电脑版" />
        <p class="txt">生鲜绿色农产品专属解决方案 电脑版</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;9200</span>
        <span class="fr">已售5件</span>
    </p>
</li>


<li>
    <a href="/mega-menu-pro" title="数码产品电商商城解决方案 电脑版">
        <img alt="数码产品电商商城解决方案 电脑版" src="/myshop/shop/Public/home/Picture/0002921_-_300.jpeg" title="数码产品电商商城解决方案 电脑版" />
        <p class="txt">数码产品电商商城解决方案 电脑版</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;10200</span>
        <span class="fr">已售4件</span>
    </p>
</li>


<li>
    <a href="/copy-of-mobile-wap-themes" title="通用电子商务手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件">
        <img alt="通用电子商务手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件" src="/myshop/shop/Public/home/Picture/0003150_-wap-_300.jpeg" title="通用电子商务手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件" />
        <p class="txt">通用电子商务手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;5900</span>
        <span class="fr">已售3件</span>
    </p>
</li>


<li>
    <a href="/item-873" title="通用进口电商进口外贸商城 手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件">
        <img alt="通用进口电商进口外贸商城 手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件" src="/myshop/shop/Public/home/Picture/0003154_-wap-_300.jpeg" title="通用进口电商进口外贸商城 手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件" />
        <p class="txt">通用进口电商进口外贸商城 手机站 Wap站 微商城        现在购买即送微信支付、微信登陆插件</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;6800</span>
        <span class="fr">已售13件</span>
    </p>
</li>


<li>
    <a href="/item-908" title="小京东 2016 电商网站解决方案 电脑端+手机端">
        <img alt="小京东 2016 电商网站解决方案 电脑端+手机端" src="/myshop/shop/Public/home/Picture/0003126_-2016-_300.jpeg" title="小京东 2016 电商网站解决方案 电脑端+手机端" />
        <p class="txt">小京东 2016 电商网站解决方案 电脑端+手机端</p>
    </a>
    <p class="cle ">
        <span class="orange fl">&#165;15000</span>
        <span class="fr">已售6件</span>
    </p>
</li>

            </ul>
        </div>
        <div class="pagenav">
            
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

<div id="g_sidebar" class="g_sidebar">
    <ul class="sb_top">
        <li class="sb_cart">
            <a href="/cart">
                <i class="iconfont">&#x19e;</i>
                <span>购物车</span>
                <em id="sidebar_cartnum" class="cartnum">0</em>
            </a>
        </li>
    </ul>
    <ul class="sb_btm">
        <li>
            <a href="/orders">
                <i class="iconfont">&#xe652;</i>
            </a>
            <div class="tip">
                <cite class="iconfont"></cite>
                <a href="/orders">用户中心</a>
            </div>
        </li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=1542823084&site=qq&menu=yes" target="_blank">
                <i class="iconfont">&#x20c;</i>
            </a>
            <div class="tip">
                <cite class="iconfont"></cite>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=1542823084&site=qq&menu=yes" target="_blank">QQ联系</a>
            </div>
        </li>
        <li>
            <a href="/">
                <i class="iconfont">&#xe653;</i>
            </a>
            <div class="tip">
                <cite class="iconfont"></cite>
                <a href="/">返回首页</a>
            </div>
        </li>
        <li class="back2top">
            <a href="javascript:;">
                <i class="iconfont">&#xe646;</i>
            </a>
            <div class="tip">
                <cite class="iconfont"></cite>
                <a href="javascript:;">返回顶部</a>
            </div>
        </li>
    </ul>
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
    <script src="<?php echo JS_URL;?>d3c222c25810ff58b0d5da1adb71d227.js" defer async></script>
</body>
</html>
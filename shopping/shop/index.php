<?php
//开启调试模式
define('APP_DEBUG',true);

define('show_error_msg',true);
//============================【定义前台导入文件路径】=========================//
define('Home_CSS','/shopping/shop/Public/home/Css/');
define('Home_IMG','/shopping/shop/Public/home/Images/');
define('Home_Picture','/shopping/shop/Public/home/Picture/');
define('Home_JS','/shopping/shop/Public/home/Scripts/');
//=============================================================================//


//============================【定义后台导入文件路径】=========================//
define('Admin_CSS','/shopping/shop/Public/admin/css/');
define('Admin_IMG','/shopping/shop/Public/admin/images/');
define('Admin_JS','/shopping/shop/Public/admin/js/');
//=============================================================================//
//============================【定义公共文件路径】=========================//
define('Public_Url','/shopping/shop/Public/public/');


//=============================================================================//
//============================【前后台公共文件】==============================//
//【导入jquery】
//define('Jquery','/shopping/shop/Public/public/jquery/jquery.js');
define('Jquery','/shopping/shop/Public/public/jquery/jquery-3.1.1.min.js');
//【jquery第三方插件库】
//导航
define('DH','/shopping/shop/Public/org/jquery-dh/css/nav.css');
define('DHJS','/shopping/shop/Public/org/jqdh/js/jquery-accordion-menu.js');
define('DHCSSfontcss','/shopping/shop/Public/org/jqdh/css/font-awesome.css');
define('DHCSS','/shopping/shop/Public/org/jqdh/css/jquery-accordion-menu.css');
//【导入bootstrap】
define('Bootstrap_Min_CSS','/shopping/shop/Public/public/bootstrap/css/bootstrap.min.css');
define('Bootstrap_Theme_Min_CSS','/shopping/shop/Public/public/bootstrap/css/bootstrap-theme.min.css');
define('BootstrapJs','/shopping/shop/Public/public/bootstrap/js/bootstrap.min.js');
define('Bootstrap_Npm_JS','/shopping/shop/Public/public/bootstrap/js/npm.js');
//【angularjs】
define('An','/shopping/shop/Public/public/angularjs/angular.min.js');
define('Anr','/shopping/shop/Public/public/angularjs/angularrouter.js');
//【bootstrap+jquery模态框插件】
define('ModelCss','/shopping/shop/Public/public/model/css/model.css');
define('ModelJs','/shopping/shop/Public/public/model/js/velocity.min.js');
define('ModelUiJs','/shopping/shop/Public/public/model/js/velocity.ui.min.js');
//【layer插件】
define('LayerCss','/shopping/shop/Public/org/layer/skin/default/layer.css');
define('LayerJs','/shopping/shop/Public/org/layer/layer.js');
//【导入MenuJS】
define('Menu','/shopping/shop/Public/public/menu/js/menu.js');
//【导入bootstrape插件模态框】
define('Tanchuceng-Classie-Js','/shopping/shop/Public/public/tanchuceng/js/classie.js');
define('Tanchuceng-ModalEffects-Js','/shopping/shop/Public/public/tanchuceng/js/modalEffects.js');
define('Tanchuceng-Component-Css','/shopping/shop/Public/public/tanchuceng/css/component.css');
define('Tanchuceng-Bootstrap-Css','/shopping/shop/Public/public/tanchuceng/css/bootstrap.css');
//================================================================================//


//导入ThinkPHP接口文件
include('../ThinkPHP/ThinkPHP.php');



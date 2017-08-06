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

<div ng-app="hd" ng-controller="ctrl">
        <div ui-view="top"></div>
        <div ui-view="left"></div>
		<div class="admin" ui-view="mean"></div>
		<div ui-view="model"></div>
		<div ui-view="edit"></div>		
	
</div>

        <script>
        var m=angular.module('hd',['ui.router']);
		
        m.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider){
        $urlRouterProvider.otherwise('/hd');
        
        $stateProvider
				.state('default',{
						url:'/hd',
						views:{
						top:{templateUrl:'head.html'},
						left:{templateUrl:'menu.html'},
						mean:{templateUrl:'info.html'},
						
						}
					})
				.state('shezhi',{
						url:'/shezhi',
						views:{
						top:{templateUrl:'head.html'},
						left:{templateUrl:'menu.html'},
						mean:{templateUrl:'/myshop/shop/index.php/Admin/Category/show'},
						model:{templateUrl:'/myshop/shop/index.php/Admin/Category/tianjia'}
						}
					})
				.state('us',{
						url:'/us',
						views:{
						top:{templateUrl:'head.html'},
						left:{templateUrl:'menu.html'},	
						mean:{templateUrl:'/myshop/shop/index.php/Admin/User/show'},
						model:{templateUrl:'/myshop/shop/index.php/Admin/User/add'},
						edit:{templateUrl:'/myshop/shop/index.php/Admin/User/edit'}
						}
					})
				
				
        }])
        m.controller('ctrl',['$scope',function($scope){
				console.log($scope);
				
        }]);
		
        </script>

</body>
</html>
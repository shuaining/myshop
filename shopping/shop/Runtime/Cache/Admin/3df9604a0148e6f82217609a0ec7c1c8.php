<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>基于Bootstrap的简洁登录界面设计效果</title>
<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<script src="<?php echo BootstrapJs ?>"></script>
<!--【结束】-->
	<link rel="stylesheet" type="text/css" href="/myshop/shop/Public/admin/css/login.css">

	<!--[if IE]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="demo" style="padding: 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<form class="form-horizontal" action="/myshop/shop/index.php/Admin/Index/login" method="post">
						<span class="heading">管理员登录</span>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="用户名或电子邮件" name="uname">
							<i class="fa fa-user"></i>
						</div>
						<div class="form-group help">
							<input type="password" class="form-control" placeholder="密　码" name="password">
							<i class="fa fa-lock"></i>
							<a href="#" class="fa fa-question-circle"></a>
						</div>
						<div style="margin:10px 0px 0px 30px;" class="col-xs-4">
						    <input type="text" class="form-control" placeholder="验证码" name="code"/>							
						</div>
						<img src="/myshop/shop/index.php/Admin/Index/code" onclick=this.src="/myshop/shop/index.php/Admin/Index/code/"+Math.random() />
						<div class="form-group" style="margin-top:20px;"> 
							<div class="main-checkbox">
								<input type="checkbox" value="None" id="checkbox1" name="check" name="code"/>
								<label for="checkbox1"></label>
							</div>
							<span class="text">记住密码</span>
							<!-- <button type="submit" class="btn btn-default">登录</button> -->
							<input type="submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div style="text-align:center;">
<p>登录后台管理</p>
</div>
</body>
</html>
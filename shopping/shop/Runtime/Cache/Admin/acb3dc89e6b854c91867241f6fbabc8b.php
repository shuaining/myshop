<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>基于Bootstrap的简洁登录界面设计效果</title>
<!--【Jquery】-->
<script src="<?php echo Jquery ?>"></script>
<!--【Jquery结束】-->

<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<script src="<?php echo BootstrapJs ?>"></script>
<!--【bootstrap结束】-->
<!--【layer开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo LayerCss ?>" />
<script src="<?php echo LayerJs ?>"></script>
<!--【layer结束】-->

<link rel="stylesheet" type="text/css" href="/shopping/shop/Public/admin/css/login.css">

	<!--[if IE]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="demo" style="padding: 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<form class="form-horizontal" action="" method="post">
						<span class="heading">管理员登录</span>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="用户名或电子邮件" name="uname" id="uname"/>
							<i class="fa fa-user"></i>
						</div>
						<div class="form-group help">
							<input type="password" class="form-control" placeholder="密　码" name="password" id="password" />
							<i class="fa fa-lock"></i>
							<a href="#" class="fa fa-question-circle"></a>
						</div>
						<div style="margin:10px 0px 0px 30px;" class="col-xs-4">
						    <input type="text" class="form-control" placeholder="验证码" name="code" id="code"/>							
						</div>
						<img src="/shopping/shop/index.php/Admin/Login/code" onclick=this.src="/shopping/shop/index.php/Admin/Login/code/"+Math.random() />
						<div class="form-group" style="margin-top:20px;"> 
							<div class="main-checkbox">
								<input type="checkbox" value="None" id="checkbox1" name="check" name="code"/>
								<label for="checkbox1"></label>
							</div>
							<span class="text">记住密码</span>
							<button type="button" class="btn btn-default" id="b">登录</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div style="text-align:center;">
<p>登录后台管理</p>
</div>
<script>
$(document).ready(function(){
 $("#b").click(function(){ 
 var user = {        
            uname:$("#uname").val(),
            password:$("#password").val(),
            code:$("#code").val(),
        };

$.post("<?php echo U('admin/Login/login');?>",user,function(msg){		
		  console.log(msg);
		 if(msg.status==1){
		    alert('aa');
		 }else{
			alert('bbb');
		 }
		});
		
  });

});
</script>
</body>
</html>
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
<!--【layer开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo LayerCss ?>" />
<script src="<?php echo LayerJs ?>"></script>
<!--【layer结束】-->

</head>
<body style="background-color:#f2f9fd;">
<style>
 .input{width:50%;}
</style>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>类别名称：</label>
        </div>
        <div class="field">
          <input type="email" class="input" id="typename" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="button" id="aa"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
 $(function(){
    $('#aa').click(function(){
     var user = {
            typename:$("#typename").val(),
           
	 };
     var url="<?php echo U('admin/Type/add');?>";
      $.post(url,user,function(msg){
			if(msg.status==1){
			  window.location.href = msg.url;
			}else{
			  layer.msg(msg.info);
			}
			//console.log(msg);
      });
    })  
  });

</script>

</body>
</html>
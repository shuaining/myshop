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
<div class="panel admin-panel">
  <div class="panel-head" style="background-color:#f2f9fd;"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
<button type="button" class="button border-yellow" onclick="window.location.href='/shopping/shop/index.php/Admin/User/add'"><span class="icon-plus-square-o"></span>添加分类</button>

  </div>
  <table class="table table-striped text-center table-bordered table-hover">

    <tr class="info">
      <th width="5%">ID</th>
      <th width="10%">邮箱</th>
      <th width="10%">用户名</th>
      <th width="10%">密码</th>
      <th width="10%">电话</th>
   
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr>	
      <td><?php echo ($r["uid"]); ?></td>
      <td><?php echo ($r["email"]); ?></td>
      <td><?php echo ($r["uname"]); ?></td>
      <td><?php echo ($r["password"]); ?></td>
      <td><?php echo ($r["phone"]); ?></td>   
      <td><div class="button-group" > <button  onclick="window.location.href='/shopping/shop/index.php/Admin/User/edit/uid/<?php echo ($r["uid"]); ?>'" class="button border-main" id="en" type="button"><span class="icon-edit"></span> 修改</button></a> <button class="button border-red" id="delete" onclick="dele(<?php echo ($r["uid"]); ?>)"><span class="icon-trash-o"></span> 删除</button> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
   <td>
    <?php echo ($page); ?>
   </td>
</tr>

  </table>
</div>
<script>
function dele(uid){
 layer.confirm('你确定要退出吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(msg){
				$.post("<?php echo U('admin/User/delete');?>",{'uid':uid},function(msg){		
					if(msg.status==1){
						window.location.href = msg.url;
					}else{
						layer.msg(msg.info);
					}
				});
		 
		}, function(){
		  layer.msg('继续浏览吧');
		});
}
</script>
</body>
</html>
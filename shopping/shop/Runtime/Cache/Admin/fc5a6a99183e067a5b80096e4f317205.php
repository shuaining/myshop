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
<button type="button" class="button border-yellow" onclick="window.location.href='/shopping/shop/index.php/Admin/Type/add'"><span class="icon-plus-square-o"></span>添加分类</button>

  </div>
  <table class="table table-striped text-center table-bordered table-hover">

    <tr class="info">
      <th width="5%">ID</th>
      <th width="10%">类型</th>
      
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr>	
      <td><?php echo ($r["tid"]); ?></td>
      <td><?php echo ($r["typename"]); ?></td>    
      <td><div class="button-group" > <button style="margin-right:15px;border-radius: 15px;" onclick="window.location.href='/shopping/shop/index.php/Admin/Attribute/index/tid/<?php echo ($r["tid"]); ?>'" class="button border-main" id="en" type="button"><span class="icon-edit"></span> 查看属性</button></a> <button style="margin-right:15px;border-radius: 15px;" onclick="window.location.href='/shopping/shop/index.php/Admin/Type/edit/tid/<?php echo ($r["tid"]); ?>'" class="button border-main" id="en" type="button"><span class="icon-edit"></span> 修改</button></a> <button style="border-radius: 15px;" class="button border-red" id="delete" onclick="dele(<?php echo ($r["tid"]); ?>)"><span class="icon-trash-o"></span> 删除</button> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
   <td>
    <?php echo ($page); ?>
   </td>
</tr>

  </table>
</div>
<script>
function dele(tid){
 layer.confirm('你确定要退出吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(msg){
				$.post("<?php echo U('admin/type/delete');?>",{'tid':tid},function(msg){		
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
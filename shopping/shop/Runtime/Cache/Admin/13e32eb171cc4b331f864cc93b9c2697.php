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
<button type="button" class="button border-yellow" onclick="window.location.href='/shopping/shop/index.php/Admin/Category/add'"><span class="icon-plus-square-o"></span>添加分类</button>

  </div>
  <table class="table table-striped text-center table-bordered table-hover">

    <tr class="info">
     
      <th>类别名称</th>
      <th >关键词</th>
      <th>标题</th>
      <th width="10%">描述</th>
      <th width="10%">排序</th>
      <th width="10%">显示状态</th>
      <th width="10%">父类ID</th>	  
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>	
     	
      <td align="left" class="first-cell">
	  
            <?php echo (str_repeat("&nbsp;&nbsp;&nbsp;",$vo["level"])); ?>
						<img src="<?php echo Admin_IMG ?>menu_minus.gif" style="margin-left:0em" >
						<span><a href=="goods.php?act=list&amp;cat_id=1"><?php echo ($vo["cname"]); ?></a></span>
					 </td>
      <td><?php echo ($vo["keywords"]); ?></td>
      <td><?php echo ($vo["title"]); ?></td>
      <td><?php echo ($vo["description"]); ?></td>
      <td><?php echo ($vo["sort"]); ?></td>   
      <td><?php echo ($vo["display"]); ?></td>   
      <td><?php echo ($vo["pid"]); ?></td>   
      <td><div class="button-group" > <button  onclick="window.location.href='/shopping/shop/index.php/Admin/Category/edit/cid/<?php echo ($vo["cid"]); ?>'" class="button border-main" id="en" type="button"><span class="icon-edit"></span> 修改</button></a> <button class="button border-red" id="delete" onclick="dele(<?php echo ($vo["cid"]); ?>)"><span class="icon-trash-o"></span> 删除</button> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
   <td>
    <?php echo ($page); ?>
   </td>
</tr>

  </table>
</div>

<script>
function dele(cid){
 layer.confirm('你确定要退出吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(msg){
				$.post("<?php echo U('admin/category/delete');?>",{'cid':cid},function(msg){		
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
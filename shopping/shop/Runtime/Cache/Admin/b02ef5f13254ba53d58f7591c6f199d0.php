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
    <button type="button" class="button border-yellow" onclick="window.location.href='/shopping/shop/index.php/Admin/Attribute/add'"><span class="icon-plus-square-o"></span>添加属性</button>     
<div style="float:right;">
<span style="float:left;line-height:30px;">
<label>按商品类型显示：</label>
</span>
<select class="form-control" style="width:200px;float:left;" onchange="searchAttr(this.value)">
 <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["tid"]); ?>" <?php if($vo['tid'] == $tid ): ?>selected='selected'<?php endif; ?> >
		<?php echo ($vo["typename"]); ?>
		</option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
  <script type='text/javascript'>
      function searchAttr(tid) {
        window.location.href = "__SLEF__/tid/"+tid;
      }
  </script>
</div>
 </div>

 
  <table class="table table-striped text-center table-bordered table-hover">
    <tr class="info">
      <th width="5%">编号</th>
      <th width="10%">属性名称</th>
      <th width="10%">商品类型</th>
      <th width="10%">属性的类型</th>
      <th width="10%">属性录入方式</th>
      <th width="10%">可选值列表</th>
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($attrs)): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr>	
      <td><?php echo ($r["aid"]); ?></td>
      <td><?php echo ($r["attr_name"]); ?></td>
      <td><?php echo ($r["tid"]); ?></td>
      <td><?php echo ($r["attr_type"]); ?></td>
      <td><?php echo ($r["attr_input_type"]); ?></td>
      <td><?php echo ($r["attr_value"]); ?></td>   
      <td><div class="button-group" > <button  onclick="window.location.href='/shopping/shop/index.php/Admin/Attribute/edit/aid/<?php echo ($r["aid"]); ?>'" class="button border-main" id="en" type="button"><span class="icon-edit"></span> 修改</button></a> <button class="button border-red" id="delete" onclick="dele(<?php echo ($r["aid"]); ?>)"><span class="icon-trash-o"></span> 删除</button> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
   <td>
    <?php echo ($page); ?>
   </td>
</tr>

  </table>
</div>
<script>
function dele(aid){
 layer.confirm('你确定要退出吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(msg){
				$.post("<?php echo U('admin/attribute/delete');?>",{'aid':aid},function(msg){		
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
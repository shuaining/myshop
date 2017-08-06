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
          <label>属性名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="attr_name" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group" >
          <div class="label">
            <label>所属商品类型：</label>
          </div>
          <div class="field">
	<select name="tid" id="tid" class="input w50" style="width:200px;">
		  <option value="0">请选择类型</option>
	      <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["tid"]); ?>"><?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
            <div class="tips"></div>
          </div>
      </div>
	  <div class="form-group">
          <div class="label">
            <label>属性是否可选：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            <input  name="attr_type" type="radio" value="0" />唯一属性
            <input  name="attr_type" type="radio" value="1"/> 单选属性
            <input  name="attr_type" type="radio" value="2"/> 多选属性         
          </div>
        </div>
	  <div class="form-group">
          <div class="label">
            <label>属性值录入方式:</label>
          </div> 
          <div class="field" style="padding-top:8px;"> 
               <input name="attr_input_type" type="radio" value="0"/>  手工录入
               <input name="attr_input_type" type="radio" value="1"/> 从下拉框录入
               <input name="attr_input_type" type="radio" value="2"/> 多行文本          
          </div>
        </div>
	 <div class="form-group">
        <div class="label">
          <label>可选值列表：</label>
        </div>
        <div class="field">
          <textarea class="input" name="attr_value" id="attr_value" style=" height:90px;"></textarea>
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
            attr_name:$("#attr_name").val(),
            attr_type:$("input[name='attr_type']:checked").val(),
            attr_input_type:$("input[name='attr_input_type']:checked").val(),
            attr_value:$("#attr_value").val(),
			tid:$('#tid').val(),
	 };
     var url="<?php echo U('admin/attribute/add');?>";
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
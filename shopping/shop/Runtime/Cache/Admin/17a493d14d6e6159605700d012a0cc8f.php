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

<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
	<input type="hidden" name="cid" id="cid" value="<?php echo ($cat["cid"]); ?>" />
	   <div class="form-group">
          <div class="label">
            <label>选择类别：</label>
          </div>
          <div class="field">
            <select class="input w50" id="pid">
              <option value="0">顶级分类</option>
	 <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cid"]); ?>" <?php if($vo['cid'] == $cat['pid']): ?>selected='selected'<?php endif; ?> >	
              <?php echo (str_repeat("&nbsp;&nbsp;",$vo["level"])); ?>			  
			  <?php echo ($vo["cname"]); ?>
			  </option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
		
	  <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($cat["cname"]); ?>" name="cname"/>
          <div class="tips"></div>
        </div>
      </div>
    
      <div class="form-group">
        <div class="label">
          <label>关键词：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="keywords" value="<?php echo ($cat["keywords"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>
	   <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="title" value="<?php echo ($cat["title"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>
     <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" id="description" style=" height:90px;" ><?php echo ($cat["description"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
	  <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="sort" value="<?php echo ($cat["sort"]); ?>"  />
          <div class="tips"></div>
        </div>
      </div>
	  <div class="form-group">
          <div class="label">
            <label>显示状态：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
		
            隐藏 <input class="display"  name="display" type="radio" value="0"  <?php if($cat["display"] == 0): ?>checked='checked'<?php endif; ?> />
            显示 <input class="display" name="display" type="radio" value="1"  <?php if($cat["display"] == 1): ?>checked='checked'<?php endif; ?>/>
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
            cname:$("input[name='cname']").val(),
            keywords:$("#keywords").val(),
            title:$("#title").val(),
            description:$("#description").val(),
            sort:$("#sort").val(),
            display:$("input[name='display']").val(),
            pid:$("#pid").val(),
			cid:$("#cid").val(),
	 };
     var url="<?php echo U('admin/Category/edit');?>";
      $.post(url,user,function(msg){
			if(msg.status==1){
			  window.location.href = msg.url;
			}else{
			  layer.msg(msg.info);
			}
		
      });
    })  
  });

</script>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>pintuer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Admin_CSS ?>admin.css" />


<!--【bootstrap开始】-->
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Min_CSS ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo Bootstrap_Theme_Min_CSS ?>" />
<script href="<?php echo Bootstrap_Min_JS ?>"></script>
<script href="<?php echo Bootstrap_Npm_JS ?>"></script>
<!--【bootstrap结束】-->
<!--【Jquery】-->
<script href="<?php Jquery ?>"></script>
</head>

<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o">
		</span>添加内容</strong>
  </div>
  <div class="body-content">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table class ="table table-striped text-center table-bordered table-hover"  style="width:700px;margin:0px auto;">
   <form method="post" action="<?php echo U('update?id='.$vo['cid']);?>">
   <input type="hidden" name="cid" value="<?php echo ($vo["cid"]); ?>"/>
<tr>
        <td style="width:100px;">名称</td>
        <td>值</td>
</tr>
<tr>
        <td style="width:100px;">分类名称</td>
        <td>
<select class="form-control " style="width:300px;margin:0px auto;" name="cname" value="<?php echo ($vo["cname"]); ?>">

  <option >请选择分类</option>

  <option>2</option>

</select>
        </td>
</tr>
<tr>
        <td style="width:100px;">关键词</td>
        <td>
          <input type="text" class="form-control" name="keyworks" value="<?php echo ($vo["keywords"]); ?>"/>
        </td>
</tr>
<tr>
        <td style="width:100px;">标题</td>
        <td>
          <input type="text" class="form-control" name="title" value="<?php echo ($vo["title"]); ?>"/>
        </td>
</tr>
<tr>
        <td style="width:100px;">描述</td>
        <td>
          <textarea class="form-control"  rows="5"  name="description"><?php echo ($vo["description"]); ?></textarea>
        </td>
</tr>
<tr>
        <td style="width:100px;">排序</td>
        <td>
          <input type="text" class="form-control" name="sort" value="<?php echo ($vo["sort"]); ?>"/>
        </td>
</tr>
<tr>
        <td style="width:100px;">是否显示</td>
        <td>
        显示： <input type="radio" name="display" id="optionsRadios2" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         隐藏：<input type="radio" name="display" id="optionsRadios2" value="0">
        </td>
</tr>
<tr >
        <td colspan="2" >
        <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </td>
</tr>
    </form>
         </table><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</body>
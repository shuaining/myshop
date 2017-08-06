<?php if (!defined('THINK_PATH')) exit();?>
<div class="panel admin-panel">
  <div class="panel-head" style="background-color:#f2f9fd;"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
<button type="button" class="button border-yellow" data-toggle="modal" data-target="#myModal"><span class="icon-plus-square-o"></span>添加分类</button>

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
      <td><div class="button-group" > <a  href="/myshop/shop/index.php/Admin/User/edit/uid/<?php echo ($r["uid"]); ?>"><button  class="button border-main" id="en" type="button" data-toggle="modal" data-target="#edModal"><span class="icon-edit"></span> 修改</button></a> <a class="button border-red" href="/myshop/shop/index.php/Admin/User/delete/uid/<?php echo ($r["uid"]); ?>"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
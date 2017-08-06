<?php if (!defined('THINK_PATH')) exit();?><div class="panel admin-panel">
  <div class="panel-head" style="background-color:#f2f9fd;"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
<button type="button" class="button border-yellow" data-toggle="modal" data-target="#myModal"><span class="icon-plus-square-o"></span>添加分类</button>

  </div>
  <table class="table table-striped text-center table-bordered table-hover">
    <tr class="info">
      <th width="5%">ID</th>
      <th width="10%">分类名称</th>
      <th width="10%">关键字</th>
      <th width="10%">描述</th>
      <th width="10%">排序</th>
      <th width="10%">父类</th>
      <th width="15%">操作</th>
    </tr>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($r["cid"]); ?></td>
      <td><?php echo ($r["cname"]); ?></td>
      <td><?php echo ($r["keywords"]); ?></td>
      <td><?php echo ($r["description"]); ?></td>
      <td><?php echo ($r["sort"]); ?></td>
      <td><?php echo ($r["pid"]); ?></td>        
      <td><div class="button-group" > <a class="button border-main" href="<?php echo U('update?id='.$r['cid']);?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:;" ng-click="delete(<?php echo ($r["cid"]); ?>)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
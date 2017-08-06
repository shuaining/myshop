<?php if (!defined('THINK_PATH')) exit();?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">            
            </button>
            <h4 class="modal-title" id="myModalLabel">
				添加类别
            </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" id="formid" >
			<input type="hidden" name="token" value="${token}"/>
			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">父类</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" name="pid" value="0"/>
					</div>
				  </div>
				 <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">类别名称</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" name="title" id="t" value=""/>
					</div>
				  </div>
				 <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">关键词</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputPassword3" name="keywords" value=""/>
					</div>
				  </div>
				 <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">描述</label>
					<div class="col-sm-10">
					  <textarea class="form-control" rows="3" name="description"></textarea>
					</div>
			      </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">排序</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputPassword3" name="sort" value=""/>
					</div>
				  </div>
				  <div class="form-group">
					  <label for="inputPassword3" class="col-sm-2 control-label">显示状态</label>
					  <input type="radio" value="0" name="display" style="margin-left:20px;">显示
					  <input type="radio" value="1" name="display">隐藏
				  </div>
            </form>
         </div>
         <div class="modal-footer" style="text-align:center;">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
            <button type="button" class="btn btn-primary" onclick = "checkUser()">提交</button>
         </div>
      </div>
</div>
</div>
<script>
function checkUser(){

    $.ajax({
    type : "POST",
    url : "<?php echo U('admin/Category/tianjia');?>",   
    success : function (data) {
         alert(data);  //data即为后y台返回的数据
    }
});

}

</script>
</script>
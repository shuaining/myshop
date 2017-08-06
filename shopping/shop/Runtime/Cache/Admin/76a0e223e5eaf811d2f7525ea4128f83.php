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
    <!--【弹出层开始】-->
    <link rel="stylesheet" type="text/css" href="<?php echo Public_Url ?>tcpwd/css/style.css" />
    <script src="<?php echo Public_Url ?>tcpwd/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo Public_Url ?>tcpwd/js/jquery.leanModal.min.js"></script>
    <!--【弹出层结束】-->
    <style>

        .state1{
            color:#7988a3;
        }
        .state2{
            color:#000;
        }
        .state3{
            color:red;
        }
        .state4{
            color:green;
        }
    </style>

</head>
<body style="background-color:#f2f9fd;z-index:3;">

<div class="panel admin-panel">
    <div class="panel-head" style="background-color:#f2f9fd;"><strong class="icon-reorder"> 内容列表</strong></div>
    <div class="padding border-bottom">
        <a href="#addmodal"  id="modaltrigger" ><button id="myModal" type="button" class="button border-yellow" ></span><span class="icon-plus-square-o">添加分类</button></a>


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
                    <td>
                        <div class="button-group" >
                            <button   class="button border-main"  type="button" onclick="edit(<?php echo ($r["uid"]); ?>)"><span class="icon-edit" ></span><a href="#editnmodal" class="edit"   >修改</a> </button>
                            <button class="button border-red" id="delete"><span class="icon-trash-o"></span> 删除</button>
                        </div>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <tr>

            </tr>

        </table>
    </div>
</div>


<div id="editnmodal" style="display:none;width: 300px;background: white;padding: 20px;">

    <h1>添加管理员</h1>

    <form id="editform"  method="post" action="">

        <h3 class="editusername" class="state1">用户名:</h3>

        <input type="text" name="editusername" id="edituname" class="txtfield" value="">



        <h3 class="editpassword" class="state1" >密码:</h3>

        <input type="password" name="editpassword" id="editpassword" class="txtfield" >
        <h3 class="editrepass"  class="state1">再次确认密码:</h3>

        <input type="password" name="editrepass" id="editrepass" class="txtfield" >

        <h3 class="editemail"  class="state1">邮箱:</h3>

        <input type="text" name="editemail" id="editemail" class="txtfield" >

        <h3 class="editphone"  class="state1">电话:</h3>

        <input type="test" name="editphone" id="editphone" class="txtfield" >

        <div><button type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu">提交</button><button type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" style="float:right;">关闭</button> </div>

    </form>

</div>

<div id="addmodal" style="display:none;">
    <style>
        #addmodal{
            background: white;
            width: 301px;
            padding: 20px;
        }
    </style>
    <h1>添加管理员</h1>

    <form id="loginform"  method="post" action="">

        <h3 class="usernametext" class="state1">用户名:</h3>

        <input type="text" name="username" id="uname" class="txtfield" value="">



        <h3 class="passwordtext" class="state1" >密码:</h3>

        <input type="password" name="password" id="password" class="txtfield" >
        <h3 class="repasstext"  class="state1">再次确认密码:</h3>

        <input type="password" name="repass" id="repass" class="txtfield" >

        <h3 class="emailtext"  class="state1">邮箱:</h3>

        <input type="text" name="email" id="email" class="txtfield" >

        <h3 class="phonetext"  class="state1">电话:</h3>

        <input type="test" name="phone" id="phone" class="txtfield" >

        <div><button type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu">提交</button><button type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" style="float:right;">关闭</button> </div>

    </form>

</div>


<script>
    $(function(){
        $('.edit').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
        //验证开始
        var ok1=false;
        var ok2=false;
        var ok3=false;
        var ok4=false;
        var ok5=false;
        var mess="请填写数据";
        // 验证用户名
        $('input[name="editusername"]').focus(function(){

            $(".editusername").text('用户名应该为3-20位之间').removeClass('state1').addClass('state4');
        }).blur(function(){

            if($(this).val().length >= 3 && $(this).val().length <=12 && $(this).val()!=''){
                //ajax验用户是否被注册
                var user = {
                    uname:$("#uname").val(),
                };
                var url="<?php echo U('admin/User/uname');?>";
                $.post(url,user,function(msg){
                    console.log(msg);
                    if(msg.status==1){
                        $(".editusername").text('该用户已被注册').removeClass('state4').addClass('state3');
                    }else{
                        ok4=true;
                        $(".editusername").text('输入成功').removeClass('state1').addClass('state4');
                    }
                });

                ok1=true;
                $(".editusername").text('输入成功').removeClass('state1').addClass('state4');

            }else{

                $(".editusername").text('用户名应该为3-20位之间').removeClass('state4').addClass('state3');
            }

        });

        //验证密码
        $('input[name="editpassword"]').focus(function(){
            $(".editpassword").text('密码应该为6-20位之间').removeClass('state1').addClass('state4');
        }).blur(function(){
            if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!=''){
                $(".editpassword").text('输入成功').removeClass('state1').addClass('state4');
                ok2=true;
            }else{
                $(".editpassword").text('密码应该为6-20位之间').removeClass('state4').addClass('state3');
            }

        });

        //验证确认密码
        $('input[name="editrepass"]').focus(function(){
            $(".editrepass").text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state1').addClass('state4');
        }).blur(function(){
            if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!='' && $(this).val() == $('input[name="password"]').val()){
                $(".editrepass").text('输入成功').removeClass('state1').addClass('state4');
                ok3=true;
            }else{

                $(".editrepass").text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state4').addClass('state3');
            }

        });

        //验证邮箱
        $('input[name="editemail"]').focus(function(){
            $(".editemail").text('请输入正确的EMAIL格式').removeClass('state1').addClass('state4');
        }).blur(function(){

            var reg=/^\w{3,}@\w+(\.\w+)+$/;
            if(reg.test($(this).val())){
                //ajax验证邮箱是否被注册
                var user = {
                    email:$("#email").val(),
                };
                var url="<?php echo U('admin/User/email');?>";
                $.post(url,user,function(msg){

                    if(msg.status==1){
                        $(".editemail").text('该邮箱已被注册').removeClass('state4').addClass('state3');
                    }else{
                        ok4=true;
                        $(".editemail").text('输入成功').removeClass('state1').addClass('state4');
                    }
                });
                //验证邮箱格式
                ok4=true;
                $(".editemail").text('输入成功').removeClass('state1').addClass('state4');
            }else{

                $(".editemail").text('请输入正确的EMAIL格式').removeClass('state4').addClass('state3');

            }


        });
        //验证手机号
        $('input[name="editphone"]').focus(function(){
            $(".editphone").text('请输入11位手机号码').removeClass('state1').addClass('state4');
        }).blur(function(){
            var phone=/^((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)$/;
            if($(this).val().length >= 11 && $(this).val().length <12 && phone.test($(this).val())){
                $(".editphone").text('输入成功').removeClass('state1').addClass('state4');
                ok5=true;
            }else{

                $(".editphone").text('请输入正确的手机号').removeClass('state4').addClass('state3');
            }

        });
    });
    function edit(uid){
  console.log(uid);
        var u = {
            uid:uid,
        };
        var url="<?php echo U('admin/User/edit');?>";
        $.get(url,u,function(msg){
            var obj = $.parseJSON(msg);
            $('#edituname').attr('value',obj.uname);
            $('#editpassword').attr('value',obj.password);
            $('#editrepass').attr('value',obj.password);
            $('#editemail').attr('value',obj.email);
            $('#editphone').attr('value',obj.phone);
        });

    }
</script>




<script>
    $(function(){
        //加载模态框
        $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });

        //验证开始
        var ok1=false;
        var ok2=false;
        var ok3=false;
        var ok4=false;
        var ok5=false;
        var mess="请填写数据";
        // 验证用户名
        $('input[name="username"]').focus(function(){

            $(".usernametext").text('用户名应该为3-20位之间').removeClass('state1').addClass('state4');
        }).blur(function(){

            if($(this).val().length >= 3 && $(this).val().length <=12 && $(this).val()!=''){
                //ajax验用户是否被注册
                var user = {
                    uname:$("#uname").val(),
                };
                var url="<?php echo U('admin/User/uname');?>";
                $.post(url,user,function(msg){
                    console.log(msg);
                    if(msg.status==1){
                        $(".usernametext").text('该用户已被注册').removeClass('state4').addClass('state3');
                    }else{
                        ok4=true;
                        $(".usernametext").text('输入成功').removeClass('state1').addClass('state4');
                    }
                });

                ok1=true;
                $(".usernametext").text('输入成功').removeClass('state1').addClass('state4');

            }else{

                $(".usernametext").text('用户名应该为3-20位之间').removeClass('state4').addClass('state3');
            }

        });

        //验证密码
        $('input[name="password"]').focus(function(){
            $(".passwordtext").text('密码应该为6-20位之间').removeClass('state1').addClass('state4');
        }).blur(function(){
            if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!=''){
                $(".passwordtext").text('输入成功').removeClass('state1').addClass('state4');
                ok2=true;
            }else{
                $(".passwordtext").text('密码应该为6-20位之间').removeClass('state4').addClass('state3');
            }

        });

        //验证确认密码
        $('input[name="repass"]').focus(function(){
            $(".repasstext").text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state1').addClass('state4');
        }).blur(function(){
            if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!='' && $(this).val() == $('input[name="password"]').val()){
                $(".repasstext").text('输入成功').removeClass('state1').addClass('state4');
                ok3=true;
            }else{

                $(".repasstext").text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state4').addClass('state3');
            }

        });

        //验证邮箱
        $('input[name="email"]').focus(function(){
            $(".emailtext").text('请输入正确的EMAIL格式').removeClass('state1').addClass('state4');
        }).blur(function(){

            var reg=/^\w{3,}@\w+(\.\w+)+$/;
            if(reg.test($(this).val())){
                //ajax验证邮箱是否被注册
                var user = {
                    email:$("#email").val(),
                };
                var url="<?php echo U('admin/User/email');?>";
                $.post(url,user,function(msg){

                    if(msg.status==1){
                        $(".emailtext").text('该邮箱已被注册').removeClass('state4').addClass('state3');
                    }else{
                        ok4=true;
                        $(".emailtext").text('输入成功').removeClass('state1').addClass('state4');
                    }
                });
                //验证邮箱格式
                ok4=true;
                $(".emailtext").text('输入成功').removeClass('state1').addClass('state4');
            }else{

                $(".emailtext").text('请输入正确的EMAIL格式').removeClass('state4').addClass('state3');

            }


        });
        //验证手机号
        $('input[name="phone"]').focus(function(){
            $(".phonetext").text('请输入11位手机号码').removeClass('state1').addClass('state4');
        }).blur(function(){
            var phone=/^((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)$/;
            if($(this).val().length >= 11 && $(this).val().length <12 && phone.test($(this).val())){
                $(".phonetext").text('输入成功').removeClass('state1').addClass('state4');
                ok5=true;
            }else{

                $(".phonetext").text('请输入正确的手机号').removeClass('state4').addClass('state3');
            }

        });
        //提交按钮,所有验证通过方可提交

        $('#loginbtn').click(function(){
            if(ok1 && ok2 && ok3 && ok4 && ok5){

                var user = {
                    uname:$("#uname").val(),
                    password:$("#password").val(),
                    email:$("#email").val(),
                    phone:$("#phone").val(),
                };
                var url="<?php echo U('admin/User/add');?>";
                $.post(url,user,function(msg){
                    if(msg.status==1){
                        console.log(msg);
                        window.location.href = msg.url;
                    }else{
                        console.log(msg);
                        layer.msg(msg.info);
                        return false;
                    }
                    //console.log(msg);
                });

            }else{
                layer.msg(mess);
                return false;

            }
        });



        //验证密码
        $('id').focus(function(){
            $(".passwordtext").text('密码应该为6-20位之间').removeClass('state1').addClass('state4');
        }).blur(function(){
            if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!=''){
                $(".passwordtext").text('输入成功').removeClass('state1').addClass('state4');
                ok2=true;
            }else{
                $(".passwordtext").text('密码应该为6-20位之间').removeClass('state4').addClass('state3');
            }

        });
    });
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

<script>


</script>
</body>
</html>
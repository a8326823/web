<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:33:"./template/pc/users\users_reg.htm";i:1571728724;s:72:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:71:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\users_reg_field.htm";i:1571728724;s:57:"./public/static/template/users/users_reg_field_mobile.htm";i:1571728724;s:57:"./public/static/template/users/users_reg_field_extend.htm";i:1571728724;s:49:"./public/static/template/users/users_loginapi.htm";i:1575106785;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>账号注册-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__; ?>
    
<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style>
    .panel-default .panel-heading strong{border-bottom: 2px solid <?php echo $theme_color; ?>;color: <?php echo $theme_color; ?>;}
    .panel-default .panel-heading span{color:<?php echo $theme_color; ?>}
    .btn-primary{background: <?php echo $theme_color; ?> !important; border:1px solid <?php echo $theme_color; ?> !important}
    .btn-primary:hover,.btn-primary:focus,.btn-primary:active{background: <?php echo $theme_color; ?> !important;}
    .ey-head .user-info .breadcrumb a{ color:<?php echo $theme_color; ?>;}
    .reg .header{background-color: <?php echo $theme_color; ?>; }
    .radio-primary input[type=radio]:checked+label::before{border-color: <?php echo $theme_color; ?>;}
    .checkbox-primary input[type=radio]:checked+label::before, .checkbox-primary input[type=checkbox]:checked+label::before{border-color: <?php echo $theme_color; ?>; background:<?php echo $theme_color; ?>}
    a.list-group-item.active, a.list-group-item.active:focus, a.list-group-item.active:hover{background: <?php echo $theme_color; ?>;}
    footer.container a{ color:<?php echo $theme_color; ?>  }
    input.form-control:hover,input.form-control:active,input.form-control:focus,input.input-txt:hover,input.input-txt:active,input.input-txt:focus{border-color:<?php echo $theme_color; ?>;outline:none }
    .hamburger.is-closed .hamb-top,.hamburger.is-closed .hamb-middle,.hamburger.is-closed .hamb-bottom,.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-top{background:<?php echo $theme_color; ?>}
    .btn-outline.btn-success{color: <?php echo $theme_color; ?>;border-color: <?php echo $theme_color; ?>;}
    .btn-outline.btn-success.active, .btn-outline.btn-success:active, .btn-outline.btn-success:focus, .btn-outline.btn-success:hover, .open>.btn-outline.btn-success.dropdown-toggle {border-color:<?php echo $theme_color; ?>;background-color:<?php echo $theme_color; ?>;}
    .list-group-item a{ text-align:center; padding-left:0; }
    .panel-heading span.fr a{ color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting h4{color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting .price{color:<?php echo $theme_color; ?>;}
    .shop-address li.selected a.addr-list{border: 1px solid <?php echo $theme_color; ?>}
</style>

<script type="text/javascript">
    var __root_dir__ = "";
    var __version__ = "<?php echo $version; ?>";
</script>
    
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/global.js","","",""); echo $__VALUE__; ?>
</head>

<body class="reg regi">
<div class="register_index ey-member">
    <div class="container">
        <form name='theForm' id="theForm" method="post" class="form-register panel-body fv-form">
            <div class="mip-reg-logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a></div>
            <div class="mip-reg-heading">账号注册</div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="username" required class="form-control" placeholder="用户名"/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" required class="form-control" placeholder="登录密码"/>
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password2" required data-password="password" class="form-control" placeholder="重复密码"/>
                </div>
            </div>

            <!-- 更多资料中的会员属性 -->
            <?php if(is_array($users_para) || $users_para instanceof \think\Collection || $users_para instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $users_para;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <div class="form-group" style="display: none;">                
                    <div class="row">
                        <div class="ey-form-file-title col-md-3"></div>
                        <div class="col-md-9">
                            <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                        </div>
                    </div>
                </div>
                <!-- 隐藏域 start -->
            <?php break; case "mobile": ?>
                <!-- 手机文本框 start -->
                
                <!-- 手机文本框 start -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-mobile"></i>
                        </span>
                        <?php if($vo['is_required'] == '1'): ?><em class="tis">(必填)</em><?php endif; ?>
                        <input type="text" class="form-control" required id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>"  placeholder="<?php echo $vo['title']; ?>" >
                    </div>
                </div>
                
                <!-- <script type="text/javascript">
                    function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code(){
                        
                    }
                </script> -->
                <!-- 手机文本框 end -->
                <!-- 手机文本框 end -->
            <?php break; case "email": ?>
                <!-- 邮箱文本框 start -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <?php if($vo['is_required'] == '1'): ?><em class="tis">(必填)</em><?php endif; ?>
                        <input type="text" class="form-control" required id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" placeholder="<?php echo $vo['title']; ?>" >
                    </div>
                </div>

                <?php if(isset($usersConfig['users_verification']) && 2 == $usersConfig['users_verification']): ?>
                <div class="form-group">
                    <div class="input-group btn-direction">
                        <span class="input-group-addon">
                            <i class="fa fa-shield"></i>
                            <!-- <span style="color:red;">*</span> -->
                        </span>
                        <input type="text" class="form-control" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code]" value="" placeholder="邮箱验证码">
                        <input type="button" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code();" class="btn btn-primary sento" value="点击发送" />
                    </div>
                </div>
                <script type="text/javascript">
                    function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code(){
                        var email = $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").val();
                        var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
                        // 邮箱格式不正确
                        if(!reg.test(email)){
                            layer.msg('请正确输入邮箱地址！', {time: 1500});
                            return false;
                        }

                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").val('发送中…');
                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").attr('disabled', 'disabled');
                        $.ajax({
                            // async:false,
                            url: "<?php echo url("user/Smtpmail/send_email","",true,false,null,null,null);?>",
                            data: {type:'reg',email:email,title:'账号注册',scene:2},
                            type:'post',
                            dataType:'json',
                            success:function(res){
                                if(res.code == 1){
                                    <?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_countdown();
                                    layer.msg(res.msg, {time: 1500});
                                }else{
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").val('点击发送');
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").removeAttr("disabled");
                                    layer.alert(res.msg, {icon: 2});
                                }
                            },
                            error : function() {
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").val('点击发送');
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").removeAttr("disabled");
                                layer.alert('发送失败，请尝试重新发送！', {icon: 5});
                            }
                        });
                    }

                    function <?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_countdown(){
                        // 倒计时
                        var setTime;
                        var time = <?php echo config('global.email_send_time'); ?>;
                        setTime = setInterval(function(){
                            if(0 >= time){
                                clearInterval(setTime);
                                return;
                            }
                            time--;
                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").val(time+'秒');
                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").attr('disabled', 'disabled');

                            if(time == 0){
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").val('点击发送');
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").removeAttr("disabled");
                            }
                        },1000);
                    }
                </script>
                <?php endif; ?>
                <!-- 邮箱文本框 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-paper-plane-o"></i>
                        </span>
                        <?php if($vo['is_required'] == '1'): ?><em class="tis">(必填)</em><?php endif; ?>
                        <input type="text" class="form-control" required id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" placeholder="<?php echo $vo['title']; ?>">
                    </div>
                </div>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <div class="form-group">
                    <div class="input-group">
                        <textarea rows="5" cols="60" class="form-control" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" <?php if($vo['is_required'] == '1'): ?> placeholder="<?php echo $vo['title']; ?>（必填)" <?php else: ?> placeholder="<?php echo $vo['title']; ?>" <?php endif; ?>><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                    </div>
                </div>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <div class="form-group">
                    <fieldset>
                        <legend><?php echo $vo['title']; if(1 == $vo['is_required']): ?>(必填)<?php endif; ?></legend>
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><label><?php echo $v2; ?></label>
                            </div>
                        <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; ?>
                    </fieldset>
                </div>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <div class="form-group">
                    <fieldset>
                        <legend><?php echo $vo['title']; if(1 == $vo['is_required']): ?>(必填)<?php endif; ?></legend>
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>>
                                <label><?php echo $v2; ?></label>
                            </div>
                         <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; ?>
                    </fieldset>
                </div>
                <!-- 单选项 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <div class="form-group">
                    <div class="select">
                    <div class="dt"><?php echo $vo['title']; if(1 == $vo['is_required']): ?>(必填)<?php endif; ?></div>
                        <div class="dd">
                            <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="form-control">
                                <option value="">请选择</option>
                                <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                    <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                                <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 下拉框 end -->
            <?php break; ?>
            <!-- 扩展 start -->
            <!-- 扩展 -->
            <!-- 扩展 end -->
        <?php endswitch; ?>
<?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
            <!-- 结束 -->

            <?php if($is_vertify == '1'): ?>
                <div class="form-group">
                    <div class="input-group input-group-icon">
                    <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                    <div class="formText">
                        <input type="text" name="vertify" autocomplete="off" class="form-control" placeholder="图片验证码" />
                        <img src="<?php echo url("api/Ajax/vertify","type=users_reg",true,false,null,null,null);?>" class="chicuele" id="imgVerifys" onclick="fleshVerify();" title="看不清？点击更换验证码" align="absmiddle">
                    </div>
                    </div>
                </div>
            <?php endif; ?>

            <input type="button" onclick="checkUser();" class="btn btn-lg btn-primary btn-block" value="立即注册"/>
            <div class="login-link"><a href="<?php echo url("user/Users/login","",true,false,null,null,null);?>">已有账号？</a></div>

            <!-- 第三方账号登录 -->
            
<?php if(!empty($weapp_wxlogin) || !empty($weapp_qqlogin)): ?>
    <div class="login_type text-xs-center m-t-20">
        <!-- <p>第三方账号登录</p> -->
        <ul class="blocks-3 m-0">
            <?php if(!(empty($weapp_qqlogin) || (($weapp_qqlogin instanceof \think\Collection || $weapp_qqlogin instanceof \think\Paginator ) && $weapp_qqlogin->isEmpty()))): ?>
            <li class="m-b-0"><a title="QQ登录" href="<?php echo url("plugins/QqLogin/login","",true,false,1,null,0);?>"><i class="fa fa-qq font-size-30"></i></a></li>
            <?php endif; if(!(empty($weapp_wxlogin) || (($weapp_wxlogin instanceof \think\Collection || $weapp_wxlogin instanceof \think\Paginator ) && $weapp_wxlogin->isEmpty()))): ?>
            <li class="m-b-0"><a title="微信登录" href="<?php echo url("plugins/WxLogin/login","",true,false,1,null,0);?>"><i class="fa fa-weixin light-green-600 font-size-30"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>

            <!-- 第三方账号登录 -->
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).keydown(function(event){
        if(event.keyCode ==13){
            checkUser();
            return false;
        }
    });

    function fleshVerify(){
        var src = "<?php echo url("api/Ajax/vertify","type=users_reg",true,false,null,null,null);?>";
        if (src.indexOf('?') > -1) {
            src += '&';
        } else {
            src += '?';
        }
        src += 'r='+ Math.floor(Math.random()*100);
        $('#imgVerifys').attr('src', src);
    }

    function checkUser(){
        var username = $('#theForm input[name=username]');
        var password = $('#theForm input[name=password]');
        var password2 = $('#theForm input[name=password2]');

        if(username.val() == ''){
            layer.msg('用户名不能为空！', {time: 1500});
            username.focus();
            return false;
        }

        if(password.val() == ''){
            layer.msg('登录密码不能为空！', {time: 1500});
            password.focus();
            return false;
        }

        if(password2.val() != password.val()){
            layer.msg('两次密码不一致！', {time: 1500});
            password.focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            // async:false,
            url: "<?php echo url("user/Users/reg","",true,false,null,null,null);?>",
            data: $('#theForm').serialize(),
            type:'post',
            dataType:'json',
            success:function(response){
                layer.closeAll();
                var res = response.data;
                if(res.status == 0){
                    layer.msg(response.msg, {time: 1500}, function(){
                        window.location = response.url;
                    });
                } else if ('vertify' == res.status) {
                    fleshVerify();
                    layer.msg(response.msg, {time: 2000});
                }else if(res.status == 1){
                    layer.msg(response.msg, {time: 2000});
                }else if(res.status == 2){
                    layer.msg(response.msg, {time: 1500}, function(){
                        window.location = response.url;
                    });
                }else if(res.status == 3){
                    layer.msg(response.msg, {time: 1500}, function(){
                        window.location = response.url;
                    });
                }else{
                    fleshVerify();
                    layer.msg(response.msg, {time: 2000});
                }
            },
            error : function() {
                layer.closeAll();
                fleshVerify();
                layer.alert('网络失败，请刷新页面后重试', {icon: 5});
            }
        });
    };
</script>

</body>
</html>
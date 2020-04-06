<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:36:"./template/pc/users\level_centre.htm";i:1574068471;s:72:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:68:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:66:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\users_left.htm";i:1571728724;s:68:"D:\phpstudy_pro\WWW\bendi.web.com\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $eyou['field']['title']; ?>-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__; ?>
    
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
    
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/tag_global.js","","",""); echo $__VALUE__; ?>
    
    <style type="text/css">
		@media (max-width: 640px){
			.panel-body {
			     padding:18px; 
		    }
			/*.centre .panel-body {
                padding: 18px;
            }*/
		}
	</style>
</head>

<body class="pay shop">
<!-- 头部 -->
<?php if($is_mobile == '1'): ?>
    <!-- 头像上传 -->
    <div id="update_mobile_file" style="display: none;">
        <form id="form1" style="text-align: center;" >
            <input type="button" value="点击上传" onclick="up_f.click();" class="btn btn-primary"/><br>
            <p><input type="file" id="up_f" name="up_f" onchange="MobileHeadPic();" style="display:none"/></p>
        </form>
    </div>

    <script type="text/javascript">
        function MobileHeadPic(){
            $.getScript('/public/plugins/layer_mobile/layer.js?v=<?php echo $version; ?>', function(){
                // 提示信息，2秒自动关闭
                function MsgOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'msg',
                        time: 2,
                    });
                }

                // 提示信息，估计在底部提示，点击空白处关闭
                function FooterOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'footer',
                    });
                }

                // 提示动画
                function LoaDing(){
                    var loading = layer.open({
                        type:2,
                        content: '正在处理',
                    });
                    return loading;
                }

                UpdateMobileHeadPic();

                // 移动端更换头像
                function UpdateMobileHeadPic()
                {
                    // 正在处理提示动画
                    var loading = LoaDing();
                    // 获取表单对象
                    var data = new FormData($('#form2')[0]);
                    // 上传类型
                    var UpFileType = $('#UpFileType').val();
                    $.ajax({
                        url: "<?php echo url("user/Uploadify/imageUp","savepath=allimg&pictitle=head_pic&dir=images",true,false,null,null,null);?>", 
                        type: 'post',  
                        data: data,  
                        dataType: 'json',
                        cache: false,  
                        processData: false,  
                        contentType: false,
                        success:function(res){
                            if (res.state == 'SUCCESS') {
                                layer.closeAll();
                                MsgOpen('上传成功！');
                                if (1 == UpFileType) {
                                    parent.$("#litpic_inpiut").val(res.url);
                                    parent.$("#litpic_img").attr('src', res.url);
                                }else{
                                    MobileHeadPic(res.url);
                                }
                            }else{
                                layer.close(loading);
                                MsgOpen(res.state);
                            }
                        },
                        error : function() {
                            layer.close(loading);
                            FooterOpen('网络失败，请刷新页面后重试');
                        }
                    });
                };

                // 上传头像成功后加载到页面
                function MobileHeadPic(fileurl_tmp)
                {
                    $("#head_pic").val(fileurl_tmp);
                    $("#head_pic_a").attr('src', fileurl_tmp);
                    // 正在处理提示动画
                    var loading = LoaDing();
                    $.ajax({
                        url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                        data: {filename:fileurl_tmp},
                        type:'post',
                        dataType:'json',
                        success:function(res){
                            if (1 == res.code) {
                                layer.closeAll();
                                MsgOpen(res.msg);
                            } else {
                                layer.close(loading);
                                MsgOpen(res.msg);
                            }
                        }
                    });
                }
            })
        }
    </script>
    <!-- 头像上传结束 -->

    <!-- 弹出侧边栏 -->
    <div id="wrapper">
        <div class="overlay" style="display: none;"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back_mobile')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
            <div class="list-group">
                <!-- 插件菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 插件菜单 -->
                <li class="list-group-item ">
                    <a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" class="list-group-item">退出登录</a>
                </li>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
          var trigger  = $('.hamburger'),
              overlay  = $('.overlay'),
              isClosed = false;

            trigger.click(function () {
                hamburger_cross();      
            });

            function hamburger_cross() {
                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                    window.location.reload();
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
          
            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });
        });
    </script>
    <!-- 弹出侧边栏结束 -->
<?php endif; ?>

<!-- 头像默认更换路径 -->
<script type="text/javascript">
    var GetUploadify_url = "<?php echo url("user/Uploadify/upload","",true,false,null,null,null);?>";
</script>

<!-- 头部信息 -->
<div class="ey-head">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 logo">
                <ul class="list-none">
                    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a></li>
                    <li>会员中心</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 user-info">
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo url("user/Users/centre","",true,false,null,null,null);?>"><?php echo $nickname; ?></a></li>
                    <li><a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" title="退出登录">退出登录</a></li>
                </ol>
                <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 头部信息结束 -->
<!-- 头部结束 -->

<div class="member-profile ey-member">
	<div class="container">
		<div class="member-profile-content ">
			<div class="row">
				<!-- 侧边 -->
                <?php if($is_mobile == '2'):  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__; ?>
    <script type="text/javascript">
        // 头像加载
        function head_pic_call_back(fileurl_tmp)
        {
            $("#head_pic").val(fileurl_tmp);
            $("#head_pic_a").attr('src', fileurl_tmp);
            layer_loading('正在处理');
            $.ajax({
                url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                data: {filename:fileurl_tmp},
                type:'post',
                dataType:'json',
                success:function(res){
                    if (1 == res.code) {
                        layer.msg(res.msg, {icon:6, time:1500});
                    } else {
                        layer.closeAll();
                        layer.alert(res.msg, {icon:5});
                    }
                }
            });
        }
    </script>

    <div class="col-sm-2 sidebar panel" >
        <div class="sidebar-box">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
              
            <div class="list-group">
                <!-- 扩展菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 扩展菜单 -->
            </div>
        </div>
    </div>
<?php endif; ?>


                <!-- 侧边结束 -->

                <!-- 中部 -->
                <div class="col-xs-12 col-sm-10 ey-member-index">
                    <div class="panel panel-default m-b-0" style="min-height: 486px;">
                        <div class="panel-heading">
                            <strong><?php echo $eyou['field']['title']; ?></strong>
                        </div>
                        <div class="panel-body shop-finance">
                            <div class="row">
                                <div class="clearfix">
                                    <div class="pull-xs-left">
                                        您的会员等级：<?php echo $users['level_name']; if($users['level'] != '1'): ?>
                                            &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                                            剩余会员天数：<?php echo $users['maturity_date']; endif; ?>
                                    </div>
                                </div>
                                <form name='theForm' id="theForm">
                                <div id="finance-list_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer clearfix">
                                    <table class="dataTable table table-bordered table-hover table-striped w-full m-t-10 no-footer dtr-inline" cellspacing="0" id="finance-list" data-table-ajaxurl="" data-table-pagelength="20" data-plugin="selectable" role="grid" aria-describedby="finance-list_info" >
                                        <thead>
                                            <tr role="row">
                                                <th  style="width: 50px; text-align: center;">选择</th>
                                                <th  style="width: 262px; text-align: center;">产品名称</th>
                                                <th  style="width: 200px; text-align: center;">产品价格</th>
                                                <th  style="width: 155px; text-align: center;">会员期限</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(empty($users_type) || (($users_type instanceof \think\Collection || $users_type instanceof \think\Paginator ) && $users_type->isEmpty())): ?>
                                                <tr class="odd">
                                                    <td valign="top" colspan="6" class="dataTables_empty">当前没有会员升级产品</td>
                                                </tr>
                                            <?php else: if(is_array($users_type) || $users_type instanceof \think\Collection || $users_type instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $users_type;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                                    <tr class="odd">
                                                        <td style="text-align: center;">
                                                            <label>
                                                                <input type="radio" <?php if($key == '0'): ?>checked<?php endif; ?> name="type_id" value="<?php echo $vo['type_id']; ?>">
                                                            </label>
                                                        </td>
                                                        <td  style="text-align: center;">
                                                            <?php echo $vo['type_name']; ?>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            ￥<?php echo $vo['price']; ?>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php echo (isset($member_limit_arr[$vo['limit_id']]) && ($member_limit_arr[$vo['limit_id']] !== '')?$member_limit_arr[$vo['limit_id']]:''); ?>
                                                        </td>
                                                    </tr>
                                                <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br/><br/>
                                <div class="form-group m-b-0">
                                    <label>
                                        <input type="radio" checked name='pay_id' value="1">
                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/pay_yiyou.png" alt="余额支付">
                                    </label>
                                    <?php if(empty($is_open_wechat) || (($is_open_wechat instanceof \think\Collection || $is_open_wechat instanceof \think\Paginator ) && $is_open_wechat->isEmpty())): ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name='pay_id' value="2">
                                         <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/pay_weixin.png" alt="微信支付">
                                    </label>
                                    <?php endif; if(empty($is_open_alipay) || (($is_open_alipay instanceof \think\Collection || $is_open_alipay instanceof \think\Paginator ) && $is_open_alipay->isEmpty())): ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name='pay_id' value="3">
                                         <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/pay_zhifubao.png" alt="支付宝支付">
                                    </label>
                                    <?php endif; ?>
                                </div>
                                <br/>
                                <input type="hidden" name='order_number' id="UnifiedNumber" value="<?php echo $OrderNumber; ?>">
                                <div class="form-group m-b-0">
                                    <a href="JavaScript:void(0);" id='Pay' onclick="CheckSubmit();" class="btn btn-primary">
                                        去付款
                                    </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- 中部结束 -->
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function CheckSubmit(){
        // 禁用支付按钮
        $('#Pay').prop("disabled",true).css("pointer-events","none");
        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url('Level/level_type_pay', ['_ajax'=>1]); ?>",
            data: $('#theForm').serialize(),
            type:'POST',
            dataType:'json',
            success:function(res){
                layer.closeAll();
                $('#Pay').prop("disabled",false).css("pointer-events","");
                if (1 == res.code) {
                    if (1 == res.msg.ReturnCode) {
                        // 余额支付逻辑
                        if (0 == res.msg.ReturnPay) {
                            // 余额不足支付
                            IsRecharge(res.msg);
                        } else {
                            // 支付完成
                            layer.msg(res.msg.ReturnMsg, {time: 1500},function(){
                                window.location.href = res.msg.ReturnUrl;
                            });
                        }
                    } else if (2 == res.msg.ReturnCode) {
                        // 微信支付逻辑
                        if (0 == res.msg.ReturnPay) {
                            // 加载订单号到隐藏域
                            $('#UnifiedNumber').val(res.msg.ReturnOrder);
                            // 根据返回值选择支付方式
                            if ('WeChatScanCode' == res.msg.WeChatType) {
                                WeChatScanCode(res.msg.ReturnUrl);
                            } else if ('WeChatH5' == res.msg.WeChatType) {
                                WeChatH5(res.msg.ReturnUrl);
                            } else if ('WeChatInternal' == res.msg.WeChatType) {
                                WeChatInternal(res.data);
                            }
                        } else {
                            // 支付完成
                            layer.msg(res.msg.ReturnMsg, {time: 1500},function(){
                                window.location.href = res.msg.ReturnUrl;
                            });
                        }
                    } else if (3 == res.msg.ReturnCode) {
                        // 支付宝支付逻辑
                        if (0 == res.msg.ReturnPay) {
                            AliPay(res.msg.ReturnUrl);
                        }
                    }
                } else {
                    layer.alert(res.msg, {icon:0});
                }
            }
        });
    }

    // 支付宝支付
    function AliPay(ReturnUrl = '')
    {
        // 新页面跳转
        window.open(ReturnUrl);

        // 弹出支付是否完成确认框
        layer.confirm('支付完成？', {
            title:false,
            btn: ['完成','其他方式支付'],
            cancel: function(index, layero){
                layer.closeAll();
            }
        }, function(){
            layer.closeAll();
            window.location.reload();
        }, function(index){
            layer.closeAll();
        });
    }

    // 微信扫码支付，用于PC端
    function WeChatScanCode(url)
    {
        //iframe窗
        layer.open({
            type: 2,
            title: '充值支付',
            shadeClose: false,
            maxmin: false, //开启最大化最小化按钮
            area: ['310px', '350px'],
            content: url
        });
    }

    // H5支付
    function WeChatH5(ReturnUrl = '')
    {
        // 新页面跳转
        window.open(ReturnUrl);

        // 循环执行订单查询
        var num = 0;
        if (num >= 0) {
            num = setInterval('WeChatOrderInquiry()', 1500);
        }

        // 弹出支付是否完成确认框
        layer.confirm('支付完成？', {
            title:false,
            btn: ['完成','其他方式支付'],
            // 当会员点击关闭按钮时，停止定时器查询
            cancel: function(index, layero){
                clearInterval(num);
            }
        }, function(){
            WeChatOrderInquiry();
        }, function(index){
            // 当会员点击关闭按钮时，停止定时器查询
            clearInterval(num);
            layer.closeAll(index);
        });
    }

    // 微信内部中进行支付
    function WeChatInternal(OrderData)
    {
        var unified_id       = OrderData.unified_id;
        var unified_number   = OrderData.unified_number;
        var transaction_type = OrderData.transaction_type;
        $.ajax({
            url: "<?php echo url("user/Pay/wechat_pay","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number,transaction_type:transaction_type},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.code) {
                    Callpay(res.msg);
                }else{
                    layer.alert(res.msg, {icon:0});
                }
            }
        });
    }

    //调用微信JS api 支付
    function jsApiCall(data)
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',data,
            function(res){
                if(res.err_msg == "get_brand_wcpay_request:ok"){  
                    layer.msg('微信支付完成！', {time: 1000}, function(){
                        WeChatOrderInquiry();
                    });
                }else if(res.err_msg == "get_brand_wcpay_request:cancel"){
                    layer.alert('用户取消支付，请选择支付方式！', {icon:0});
                }else{
                    layer.alert('支付失败', {icon:0});
                }  
            }
        );
    }
    
    // 微信内部支付时，先进行数据判断
    function Callpay(data)
    {
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{
            jsApiCall(data);
        }
    }

    // 支付后跳转
    function WeChatOrderInquiry(){
        var unified_number   = $('#UnifiedNumber').val();
        var transaction_type = 1;
        $.ajax({
            url: "<?php echo url("user/Level/wechat_order_inquiry","",true,false,null,null,null);?>",
            data: {unified_number:unified_number,transaction_type:transaction_type},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.data.status) {
                    window.location.href = res.url;
                }
            }
        });
    }

    // 是否要去充值
    function IsRecharge(data){
        layer.confirm(data.ReturnMsg, {
            title:false,
            btn: ['去充值','其他方式支付'],
            cancel: function(index, layero){ 
                $('#Pay').prop("disabled",false).css("pointer-events","");
            }
        }, function(){
            // 去充值
            window.location.href = data.ReturnUrl;
        }, function(index){
            // 选择其他方式支付时，恢复禁用的余额支付按钮
            $('#Pay').prop("disabled",false).css("pointer-events","");
            layer.closeAll(index);
        });
    }
</script>
<!-- 底部 -->
	<div class="ey-footer">
    <footer class="container">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    </footer>
</body>
</html>


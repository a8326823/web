<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/weapp\setting.htm";i:1576727145;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\layout.htm";i:1571728724;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;min-width: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width: auto;box-shadow:none;">
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>安全验证：请设置好相关的问题答案，并记好答案！方便下次安装插件时回答验证。</li>
        </ul>
    </div>
    <form class="form-horizontal" id="post_form" method="post" onsubmit="return false;">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="ask"><em>*</em>安全问题列表</label>
                </dt>
                <dd class="opt" style="width: auto;">
                    <select name="ask" id="ask" class="w210">
                        <option value="">请选择…</option>
                        <?php if(is_array($weapp_askanswer_list) || $weapp_askanswer_list instanceof \think\Collection || $weapp_askanswer_list instanceof \think\Paginator): $i = 0; $__LIST__ = $weapp_askanswer_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="answer"><em>*</em>设置答案内容</label>
                </dt>
                <dd class="opt" style="width: auto;">
                    <input type="text" name="answer" value="" id="answer" class="w200">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <div class="bot" style="padding-bottom:0px;"><a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a></div>
        </div>
    </form>
</div>
<script type="text/javascript">

    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引

    $("body").bind('keydown', function(event){
        if(event.keyCode ==13){
            checkForm();
        }
    });

    function checkForm()
    {
        if($('select[name=ask]').val() == ''){
            showErrorMsg('请选择安全问题…');
            $('select[name=ask]').focus();
            return false;
        }
        if($('input[name=answer]').val() == ''){
            showErrorMsg('答案内容不能为空！');
            $('input[name=answer]').focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url('Weapp/setting', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#post_form').serialize(),
            success: function(res){
                layer.closeAll();
                if (res.code == 1) {
                    var _parent = parent;
                    _parent.layer.close(parentObj);
                    _parent.layer.msg(res.msg, {shade: 0.3, time: 1000}, function(){
                        _parent.window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {icon:5});
                }
                return false;
            },
            error: function(e){
                layer.closeAll();
                layer.alert('操作失败', {icon:5});
                return false;
            }
        });
    }
</script>
<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>
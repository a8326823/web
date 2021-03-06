<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./application/admin/template/arctype\batch_add.htm";i:1576580338;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\layout.htm";i:1571728724;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>批量增加栏目</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Arctype/batch_add'); ?>" method="post">
        <!-- 常规选项 -->
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="current_channel">内容模型</label>
                </dt>
                <dd class="opt">
                    <select class="small form-control" id="current_channel" name="current_channel" onchange="ajax_get_template();">
                        <?php if(is_array($channeltype_list) || $channeltype_list instanceof \think\Collection || $channeltype_list instanceof \think\Paginator): $i = 0; $__LIST__ = $channeltype_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" data-nid="<?php echo $vo['nid']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="" id="notic_current_channel"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="parent_id">所属栏目</label>
                </dt>
                <dd class="opt">
                    <select class="small form-control" id="parent_id" name="parent_id" onchange="set_grade(this);">
                        <?php echo $select_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic">如果选择上级栏目，那么新增的栏目则为被选择上级栏目的子栏目</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>隐藏栏目</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_hidden1" class="cb-enable">是</label>
                        <label for="is_hidden0" class="cb-disable selected">否</label>
                        <input id="is_hidden1" name="is_hidden" value="1" type="radio">
                        <input id="is_hidden0" name="is_hidden" value="0" type="radio" checked="checked">
                    </div>
                    <p class="notic">隐藏之后，不显示在前台页面</p>
                </dd>
            </dl>
            <dl class="row" id="dl_templist">
                <dt class="tit">
                    <label for="templist"><em>*</em>列表模板</label>
                </dt>
                <dd class="opt">
                    <select name="templist" id="templist">
                    </select>
                    <span class="err"></span>
                    <p class="notic">列表模板命名规则：<br/>lists_<font class="font_nid">模型标识</font>.html<br/>lists_<font class="font_nid">模型标识</font>_自定义.html</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl('lists');" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row" id="dl_tempview">
                <dt class="tit">
                    <label for="tempview"><em>*</em>文档模板</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                    </select>
                    <span class="err"></span>
                    <p class="notic">文档模板命名规则：<br/>view_<font class="font_nid">模型标识</font>.html<br/>view_<font class="font_nid">模型标识</font>_自定义.html</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl('view');" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row flexigrid">
                <dt class="tit">
                    <label for="title"><em>*</em>栏目填写</label>
                </dt>
                <dd class="opt bDiv">
                    <div class="hDiv">
                        <div class="hDivBox">
                            <table cellspacing="0" cellpadding="0" style="width: 100%">
                                <thead>
                                <tr id="thead_header_0" class="">
                                    <th abbr="article_time" axis="col6" class="w60">
                                        <div class="tc">排序</div>
                                    </th>
                                    <th abbr="article_time" axis="col6" class="w200">
                                        <div class="tc"><font color="red" style="font: bold 14px/20px tahoma, verdana;margin-right: 5px;">*</font>顶级栏目名称</div>
                                    </th>
                                    <th abbr="article_title" axis="col3" class="">
                                        <div style="text-align: left; padding-left: 10px;" class="">子栏目(用"目录名称1,目录名称2..."这样表示多个栏目)</div>
                                    </th>
                                    <th axis="col1" class="w60">
                                        <div class="tc">
                                            <a href="javascript:void(0);" class="btn blue" onclick="batch_add_tr(0);"><i class="fa fa-pencil-square-o"></i>添加</a>
                                        </div>
                                    </th>
                                </tr>
                                <tr id="thead_header_1" class="none">
                                    <th abbr="article_time" axis="col6" class="w60">
                                        <div class="tc">排序</div>
                                    </th>
                                    <th abbr="article_title" axis="col3" class="">
                                        <div style="text-align: left; padding-left: 10px;" class=""><font color="red" style="font: bold 14px/20px tahoma, verdana;margin-right: 5px;">*</font>栏目名称</div>
                                    </th>
                                    <th axis="col1" class="w60">
                                        <div class="tc">
                                            <a href="javascript:void(0);" class="btn blue" onclick="batch_add_tr(1);"><i class="fa fa-pencil-square-o"></i>添加</a>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="bDiv" style="height: auto;">
                        <div cellpadding="0" cellspacing="0" border="0">
                            <table style="width: 100%;">
                                <tbody id="batch_list_0">
                                    <?php $__FOR_START_919204296__=1;$__FOR_END_919204296__=6;for($i=$__FOR_START_919204296__;$i < $__FOR_END_919204296__;$i+=1){ ?>
                                    <tr id="tr_0_<?php echo $i; ?>" class="">
                                        <td class="sort">
                                            <div class="w60 tc">
                                                <input type="text" name="sort_order[]" value="100" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'');" />
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="w200 tc">
                                                <input type="text" name="toptype[]" class="w150" value="" />
                                            </div>
                                        </td>
                                        <td class="" style="width: 100%;">
                                            <div class="tl" style="padding-left: 10px;">
                                                <input type="text" name="sontype[]" style="width: 96%;" value="" />
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="w60 tc btn_del_0">
                                                <?php if($i == '1'): ?>
                                                <a class="btn" href="javascript:void(0);" style="background: #e6e6e6;"><i class="fa fa-trash-o"></i>删除</a>
                                                <?php else: ?>
                                                <a class="btn red" href="javascript:void(0);" onclick="$('#tr_0_<?php echo $i; ?>').remove();"><i class="fa fa-trash-o"></i>删除</a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tbody id="batch_list_1" class="none">
                                    <?php $__FOR_START_1782822661__=1;$__FOR_END_1782822661__=6;for($i=$__FOR_START_1782822661__;$i < $__FOR_END_1782822661__;$i+=1){ ?>
                                    <tr id="tr_1_<?php echo $i; ?>">
                                        <td class="sort">
                                            <div class="w60 tc">
                                                <input type="text" name="sort_order_1[]" value="100"  onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'');" />
                                            </div>
                                        </td>
                                        <td class="" style="width: 100%;">
                                            <div class="tl" style="padding-left: 10px;">
                                                <input type="text" name="reltype[]" style="width: 96%;" value="" />
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="w60 tc btn_del_1">
                                                <?php if($i == '1'): ?>
                                                <a class="btn" href="javascript:void(0);" style="background: #e6e6e6;"><i class="fa fa-trash-o"></i>删除</a>
                                                <?php else: ?>
                                                <a class="btn red" href="javascript:void(0);" onclick="$('#tr_1_<?php echo $i; ?>').remove();"><i class="fa fa-trash-o"></i>删除</a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="iDiv" style="display: none;"></div>
                    </div>
                </dd>
            </dl>
        </div>
        <!-- 常规选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="grade" id="grade" value="0">
                <input type="hidden" value="<?php echo $dirpath; ?>" name="dirpath" id="dirpath">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>

<div id="append_tr" class="none"></div>

<script type="text/javascript">

    var templateList = <?php echo json_encode($templateList); ?>;

    $(document).ready(function(){    
        ajax_get_template();
    });

    /*根据模型ID获取模板文件名*/
    function ajax_get_template() {
        var obj = $('#current_channel');
        var channel = parseInt($(obj).find('option:selected').val());
        var js_allow_channel_arr = <?php echo $js_allow_channel_arr; ?>;
        $('#notic_current_channel').html('');

        // 重新定义模板变量，专用于新建模板功能
        $.ajax({
            url: "<?php echo url('Arctype/ajax_getTemplateList'); ?>",
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                if (res.code == 1) {
                    templateList = res.data.templateList;
                }
            }
        });
        // end

        if (templateList[channel] == undefined || templateList[channel] == '') {
            showErrorMsg('模板文件不存在！');
            return false;
        } else if (templateList[channel]['msg'] != '') {
            $('#notic_current_channel').html(templateList[channel]['msg']);
        }

        $('#templist').html(templateList[channel]['lists']);
        if ($.inArray(channel, js_allow_channel_arr) == -1) {
            if (channel == 6) {
                $('#dl_templist').find('label[for=templist]').html('<em>*</em>单页模板');
            } else if (channel == 8) {
                $('#dl_templist').find('label[for=templist]').html('<em>*</em>留言模板');
            }
            $('#dl_tempview').hide();
        } else {
            $('#dl_templist').find('label[for=templist]').html('<em>*</em>列表模板');
            $('#dl_tempview').show();
        }
        $('#tempview').html(templateList[channel]['view']);

        $('.font_nid').html(templateList[channel]['nid']);

        return false;
    }
    /*--end*/

    function set_grade(obj) {
        var grade = parseInt($(obj).find("option:selected").attr("data-grade"));
        $('#grade').val(grade + 1);
        var dirpath = $(obj).find("option:selected").attr("data-dirpath");
        $('#dirpath').val(dirpath);

        if (-1 == grade) {
            $('#batch_list_0').show();
            $('#thead_header_0').show();
            $('#batch_list_1').hide();
            $('#thead_header_1').hide();
        } else {
            $('#batch_list_0').hide();
            $('#thead_header_0').hide();
            $('#batch_list_1').show();
            $('#thead_header_1').show();
        }
    }

    function check_submit(){
        if (0 < $('input[name=grade]').val()) {
            var is_empty = true;
            $('input[name^=reltype]').each(function(index, item){
                if ($.trim($(item).val())) {
                    is_empty = false;
                }
            });
            if (is_empty) {
                showErrorMsg('至少填写一个栏目名称！');
                $($('input[name^=reltype]').get(0)).focus();
                return false;
            }
        } else {
            var is_empty = true;
            $('input[name^=toptype]').each(function(index, item){
                if ($.trim($(item).val())) {
                    is_empty = false;
                }
            });
            if (is_empty) {
                showErrorMsg('至少填写一个顶级栏目名称！');
                $($('input[name^=toptype]').get(0)).focus();
                return false;
            }
        }

        if($('#templist').val() == ''){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $($('.tab-base').find('.tab').get(1)).addClass('current');
            $('.tab_div_1').hide();
            $('.tab_div_2').show();
            showErrorMsg('请选择列表模板');
            $('#templist').focus();
            return false;
        }

        var channel = parseInt($('#current_channel').find('option:selected').val());
        var js_allow_channel_arr = <?php echo $js_allow_channel_arr; ?>;
        if($('#tempview').val() == '' && $.inArray(channel, js_allow_channel_arr) != -1){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $($('.tab-base').find('.tab').get(1)).addClass('current');
            $('.tab_div_1').hide();
            $('.tab_div_2').show();
            showErrorMsg('请选择文档模板');
            $('#tempview').focus();
            return false;
        }

        $('#post_form').submit();
    }

    function newtpl(type)
    {
        var nid = $('#current_channel').find('option:selected').attr('data-nid');
        var url = "<?php echo url('Arctype/ajax_newtpl'); ?>";
        if (url.indexOf('?') > -1) {
            url += '&';
        } else {
            url += '?';
        }
        url += 'type='+type+'&nid='+nid;

        if ('lists' == type) {
            var title = '新建列表模板';
        } else {
            var title = '新建文档模板';
        }
        //iframe窗
        layer.open({
            type: 2,
            title: title,
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url
        });
    }

    function batch_add_tr(type)
    {
        $('#batch_list_0').hide();
        $('#thead_header_0').hide();
        $('#batch_list_1').hide();
        $('#thead_header_1').hide();
        $('#batch_list_'+type).show();
        $('#thead_header_'+type).show();

        var tr = $($('#batch_list_'+type+' tr').get(0));
        var id = parseInt($('#batch_list_'+type+' tr').length) + 1;
        var html = "<tr id='tr_"+type+"_"+id+"'>"+$(tr).html()+"</tr>";
        $('#append_tr').html(html);
        $('#append_tr').find('.btn_del_'+type).html('<a class="btn red" href="javascript:void(0);" onclick="$(\'#tr_'+type+'_'+id+'\').remove();"><i class="fa fa-trash-o"></i>删除</a>');

        var htmlnew = $('#append_tr').html();
        $('#batch_list_'+type).append(htmlnew);
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
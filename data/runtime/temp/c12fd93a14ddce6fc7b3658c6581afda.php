<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"./application/admin/template/shop\spec_template.htm";i:1573115083;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\layout.htm";i:1571728724;s:78:"D:\phpstudy_pro\WWW\bendi.web.com\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); padding-right: 0px; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>1、新增规格模板，方便管理员快捷选择商品规格复制到商品发布页里</li>
            <li>2、在规格库里编辑，修改，删除商品规格模板并<i style="color: red;">不影响</i>已发布的商品里的规格值</li>
            <li>3、如果编辑商品规格时需要和规格库里规格模板一致，可以点击规格值右侧的刷新按钮 <i class="fa fa-refresh"></i> 同步</li>
        </ul>
    </div>
    <div class="flexigrid">
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w10" axis="col0">
                            <div class="tc"></div>
                        </th>
                        <th abbr="article_time" axis="col4" class="w180">
                            <div class="">规格名称</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="">规格值</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">排序</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <form id="PostForm">
                <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                    <table style="width: 100%">
                        <input type="hidden" name="mark_preset_ids" id='mark_preset_ids'>
                        <input type="hidden" name="mark_mark_ids" id='mark_mark_ids'>
                        <tbody id='Template'>
                            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr class="tr" id="tr_<?php echo $vo['preset_mark_id']; ?>">
                                    <td class="sign">
                                        <div class="w10 tc">
                                            <input type="hidden" name="preset_old[]" value="<?php echo $vo['preset_mark_id']; ?>">
                                        </div>
                                    </td>

                                    <td class="">
                                        <div class="w180 tc preset-bt3" style="text-align: left;">
                                            <span>
                                                <input type="text" name="preset_name_old_<?php echo $vo['preset_mark_id']; ?>[]" placeholder="请输入规格名称" onchange="MarkMarkId('<?php echo $vo['preset_mark_id']; ?>');" value="<?php echo $vo['preset_name']; ?>">
                                                <em data-id="tr_<?php echo $vo['preset_mark_id']; ?>" onclick="DelSpecTpl(this, '<?php echo $vo['preset_mark_id']; ?>')"><i style="position: absolute;right: 4px;" class="fa fa-times-circle" title="关闭"></i></em>
                                            </span>
                                        </div>
                                    </td>

                                    <td style="width: 100%">
                                        <div class="preset-bt3" style="text-align: left;">
                                            <span id="tr_td_input_old_<?php echo $vo['preset_mark_id']; ?>">
                                                <?php if(is_array($vo['preset_value']) || $vo['preset_value'] instanceof \think\Collection || $vo['preset_value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['preset_value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                                                    <span>
                                                        <input type="hidden" name="preset_id_old_<?php echo $vo['preset_mark_id']; ?>[]" value="<?php echo $value['preset_id']; ?>">
                                                        <input type="text" name="preset_value_old_<?php echo $vo['preset_mark_id']; ?>[]" placeholder="请输入规格值" onchange="MarkPresetId('<?php echo $value['preset_id']; ?>');" value="<?php echo $value['preset_value']; ?>"><em onclick="DelSpecTplValue(this, '<?php echo $value['preset_id']; ?>', '<?php echo $vo['preset_mark_id']; ?>')"><i  class="fa fa-times-circle" title="关闭"></i></em>
                                                    </span>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                <span style="background:#4fc0e8; float: right; color: #fff; border-radius: 4px; padding:4px 6px  4px 20px; position: relative;" class="red" data-id="tr_td_input_old_<?php echo $vo['preset_mark_id']; ?>" onclick="AddSpecTplValue(this,'<?php echo $vo['preset_mark_id']; ?>','old');">
                                                    <i class="fa fa-plus" style="position:absolute; left: 0; top:10px; margin: 0 6px; color: #fff"></i>添加规格值
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="sort">
                                        <div class="w60 tc">
                                            <input type="text" size="4" name="sort_order_<?php echo $vo['preset_mark_id']; ?>" value="<?php echo $vo['sort_order']; ?>">
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>    
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div style="border-left:1px solid #f6f6f6;height:60px;line-height:60px;padding-left:10px;font-size:14px;">
           <a href="JavaScript:void(0);" onclick="AddSpecTpl(this);">
                <input type="hidden" id="PresetMarkId" value="<?php echo $PresetMarkId; ?>">
                <span style="color:#0ba4da">+ 新增商品规格</span>
            </a>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton">
                    <a href="JavaScript:void(0);" onclick="SaveSpecTpl(this);">
                        <div class="add" title="保存更改">
                            <span class="red"><i class="fa fa-save"></i>保存更改</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });
    });

    // 追加规格模板
    function AddSpecTpl(obj){
        var PresetMarkId = $('#PresetMarkId').val();
        // 预设值标记ID，规格名称唯一标识
        if (!PresetMarkId || 0 == PresetMarkId) {
            // 标记ID出错则提示
            layer.alert('数据出错，请刷新重试~', {icon: 2, title:false});
        }
        // 拼装html
        var AddHtml = 
        [
            '<tr class="tr" id="tr_'+PresetMarkId+'">'+
                '<td class="sign">'+
                    '<div class="w10 tc">'+
                        '<input type="hidden" name="preset_new[]" value="'+PresetMarkId+'">'+
                        '<input type="hidden" name="preset_id_'+PresetMarkId+'[]">'+
                    '</div>'+
                '</td>'+

                '<td class="">'+
                    '<div class="w180 tc preset-bt3" style="text-align: left;">'+
                        '<span>'+
                        '<input type="text" name="preset_name_'+PresetMarkId+'[]" placeholder="请输入规格名称"><em data-id="tr_'+PresetMarkId+'" onclick="DelSpecTpl(this);"><i style="position: absolute;right: 4px;" class="fa fa-times-circle" title="关闭"></i></em>'+
                        '</span>'+
                    '</div>'+
                '</td>'+

                '<td style="width: 100%">'+
                    '<div class="preset-bt3" >'+
                        '<span id="tr_td_input_'+PresetMarkId+'">'+
                            '<span>'+
                                '<input type="text" name="preset_value_'+PresetMarkId+'[]" placeholder="请输入规格值">'+
                                '<em onclick="DelSpecTplValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em>'+
                            '</span>'+

                            '<span style="background:#4fc0e8; float:right; color: #fff; border-radius: 4px; padding:4px 6px  4px 20px; position: relative;" class="red" data-id="tr_td_input_'+PresetMarkId+'" onclick="AddSpecTplValue(this, '+PresetMarkId+');"><i class="fa fa-plus" style="position:absolute;left: 0; top:10px;margin: 0 6px; color: #fff"></i>添加规格值'+
                            '</span>'+
                        '</span>'+
                    '</div>'+
                '</td>'+

                '<td class="sort">'+
                    '<div class="w60 tc">'+
                        '<input type="text" name="sort_order_'+PresetMarkId+'" size="4" value="100">'+
                    '</div>'+
                '</td>'+
            '</tr>'
        ];

        // 追加规格名称规格值框架
        $('#Template').append(AddHtml);
        // 更新标记ID数
        PresetMarkId++;
        $('#PresetMarkId').val(PresetMarkId);
    }

    // 追加规格值
    function AddSpecTplValue(obj, PresetMarkId, type){
        var tr_td_input_id = $(obj).attr('data-id');
        var AddValue = [
            '<span>'
        ];
        if ('old' == type) {
            AddValue += [
                '<input type="hidden" name="preset_id_old_'+PresetMarkId+'[]">'+
                '<input type="text" name="preset_value_old_'+PresetMarkId+'[]" placeholder="请输入规格值">'+
                '<em onclick="DelSpecTplValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em>'
            ];
        }else{
            AddValue += [
                '<input type="text" name="preset_value_'+PresetMarkId+'[]" placeholder="请输入规格值">'+
                '<em onclick="DelSpecTplValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em>'
                
            ];
        }
        AddValue += [
            '</span>'
        ];
        $('#'+tr_td_input_id).append(AddValue);
    }

    // 删除规格模板
    function DelSpecTpl(obj, preset_mark_id){
        layer.confirm('<font color="red">此操作将和规格值一起删除</font>，确认删除规格名称？', {
            title: false,
            btn: ['确定', '取消']
        }, function () {
            layer_loading('正在处理');
            if (preset_mark_id) {
                var url = "<?php echo url('Shop/spec_delete'); ?>";
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : {preset_mark_id:preset_mark_id,_ajax:1},
                    dataType : 'json',
                    success : function(data){
                        layer.closeAll();
                        if(0 == data.code){
                            layer.alert(data.msg, {icon: 2, title:false});
                        }
                    }
                });
            }
            // 确定
            $('#'+$(obj).attr('data-id')).remove();
            layer.closeAll();
            layer.msg('操作成功！', {icon: 1, time:1500});
            if (preset_mark_id) {
                // 调用父级方法，更新预设规格下拉框的信息
                parent.UpPresetSpecData(preset_mark_id);
            }
        }, function (index) {
            // 取消
            layer.closeAll(index);
        });
    }

    // 删除指定规格值
    function DelSpecTplValue(obj, preset_id, preset_mark_id){
        layer_loading('正在处理');
        if (preset_id) {
            var url = "<?php echo url('Shop/spec_delete'); ?>";
            $.ajax({
                type : 'post',
                url  : url,
                data : {preset_id:preset_id,_ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(0 == data.code){
                        layer.alert(data.msg, {icon: 2, title:false});
                    }else{
                        layer.msg(data.msg, {icon: 1, time:1000});
                        $(obj).parent().remove();
                        parent.RefreshPresetValue(preset_id, preset_mark_id);
                    }
                }
            });
        }else{
            layer.closeAll();
            layer.msg('删除成功！', {icon: 1, time:1000});
            $(obj).parent().remove();
        }
    }

    // 保存规格信息
    function SaveSpecTpl(obj){
        layer_loading('正在处理');
        var mark_preset_ids = $('#mark_preset_ids').val();
        var mark_mark_ids = $('#mark_mark_ids').val();
        var url = "<?php echo url('Shop/spec_template', ['_ajax'=>1]); ?>";
        $.ajax({
            type : 'post',
            url  : url,
            data : $('#PostForm').serialize(),
            dataType : 'json',
            success : function(data){
                layer.closeAll();
                if(data.code == 1){
                    // 关闭自身
                    parent.UpPresetSpecData(null, mark_preset_ids, mark_mark_ids);
                    parent.layer.closeAll();
                    parent.layer.msg(data.msg, {icon: 1, time:1500});
                    // 调用父级方法，更新预设规格下拉框的信息
                }else{
                    layer.alert(data.msg, {icon: 2, title:false});
                }
            }
        });
    }

    // 标记预设规格值ID
    function MarkPresetId(preset_id) {
        var mark_preset_ids = $('#mark_preset_ids').val();
        if (mark_preset_ids) {
            var mark_preset = mark_preset_ids.split(',');
            var is_mark = mark_preset.indexOf(preset_id);
            if (-1 == is_mark) {
                $('#mark_preset_ids').val(mark_preset_ids+','+preset_id);
            }
        }else{
            $('#mark_preset_ids').val(preset_id);
        }
    }

    // 标记预设规格名称ID
    function MarkMarkId(mark_id) {
        var mark_mark_ids = $('#mark_mark_ids').val();
        if (mark_mark_ids) {
            var mark_mark = mark_mark_ids.split(',');
            var is_mark = mark_mark.indexOf(mark_id);
            if (-1 == is_mark) {
                $('#mark_mark_ids').val(mark_mark_ids+','+mark_id);
            }
        }else{
            $('#mark_mark_ids').val(mark_id);
        }
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
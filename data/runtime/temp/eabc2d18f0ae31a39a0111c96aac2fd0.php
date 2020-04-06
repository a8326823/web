<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"./template/mobile/lists_guestbook.htm";i:1580985230;s:60:"D:\phpstudy_pro\WWW\bendi.web.com\template\mobile\header.htm";i:1571728724;s:60:"D:\phpstudy_pro\WWW\bendi.web.com\template\mobile\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<!--页面seo标题-->
<title><?php echo $eyou['field']['seo_title']; ?></title>
<!--页面seo描述-->
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<!--页面seo关键词-->
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<!--网站地址栏图标-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/app.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/ueditor.config.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/ueditor.all.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/app.js","","",""); echo $__VALUE__; ?>
</head>
<body>
<!--网站公用头部——开始-->
<header class="header">
<!--会员模块——开始-->
 <?php  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
  <div class="am-fr"><a  href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" class="am-icon-user am-icon-sm"></a></div>
 <?php echo $field['hidden']; endif; $field = []; ?> 
 <!--会员模块——结束-->
  <div class="am-fl"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav_top'}"></a></div>
  <!--网站LOGO——开始-->
  <div class="logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_13"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /></a></div>
  <!--网站LOGO——结束-->
  <div class="clear"></div>
</header>
<!--导航——开始-->
<div class="nav am-offcanvas" id="nav_top">
  <div class="am-offcanvas-bar">
    <ul id="collapase-nav">
      <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">网站首页</a></li>
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li class="am-panel"><?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?> <span class="am-icon-angle-right" data-am-collapse="{parent:'#collapase-nav', target:'#nav_<?php echo $i; ?>'}"></span> <?php endif; ?><a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a>
       <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
        <ul class="am-collapse" id="nav_<?php echo $i; ?>">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a> </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>   
        </ul>
        <?php endif; ?>
      </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
  </div>
</div>
<!--导航——结束-->
<!--网站公用头部——结束-->
<article>
  <section>
    <div class="subject">
    <?php if($eyou['field']['grade'] > '0'): ?>
    	<span class="more"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav'}"></a></span>
    <?php else: if(!(empty($eyou['field']['has_children']) || (($eyou['field']['has_children'] instanceof \think\Collection || $eyou['field']['has_children'] instanceof \think\Paginator ) && $eyou['field']['has_children']->isEmpty()))): ?>
		<span class="more"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav'}"></a></span>
		<?php endif; endif; ?>
     <b><?php echo $eyou['field']['typename']; ?></b> </div>
    <div class="clear"></div>
    <div class="am-padding"></div>
    <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <form method="POST" class="am-form am-form-horizontal form-add" action="<?php echo $field['action']; ?>" <?php echo $field['formhidden']; ?> onsubmit="<?php echo $field['submit']; ?>">
      <div class="am-form-group">
        <label class="am-u-sm-3 am-form-label"><?php echo $field['itemname_1']; ?></label>
        <div class="am-u-sm-9">
          <input type="text" name="<?php echo $field['attr_1']; ?>" id="attr_1" size="20" value="">
          <span for="my_title" class="msg-box"></span> </div>
      </div>
      <div class="am-form-group">
        <label class="am-u-sm-3 am-form-label"><?php echo $field['itemname_2']; ?></label>
        <div class="am-u-sm-9">
          <input type="text" name="<?php echo $field['attr_2']; ?>" id="attr_2" size="20" maxlength="20" value="">
          <span for="my_truename" class="msg-box"></span> </div>
      </div>
      <div class="am-form-group">
        <label class="am-u-sm-3 am-form-label"><?php echo $field['itemname_3']; ?></label>
        <div class="am-u-sm-9">
          <select name="<?php echo $field['attr_3']; ?>" id="attr_3" class="w420">
            <option value=""><?php echo $field['itemname_3']; ?></option>
            <?php if(is_array($field['options_3']) || $field['options_3'] instanceof \think\Collection || $field['options_3'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['options_3'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <option value="<?php echo $vo['value']; ?>"><?php echo $vo['value']; ?></option>
            <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
          </select>
          <span for="my_sex" class="msg-box"></span> </div>
      </div>
      
      
      <div class="am-form-group">
        <div class="am-u-sm-9 am-u-sm-offset-3">
          <button type="submit" class="am-btn am-btn-primary am-radius">提交</button>
        </div>
      </div>
    <?php echo $field['hidden']; ?>
  </form>
<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
  </section>
</article>
<!--网站公用底部——开始-->
<footer>
  <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>　　<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>/sitemap.xml" class="am-icon-map-marker am-icon-sm" title="Xml网站地图"></a></p>
</footer>
<figure class="footnav">
  <div class="search">
    <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <form method="get" action="<?php echo $field['action']; ?>">
      <?php echo $field['hidden']; ?>
      <span><a href="javascript:;" onclick="$('.search').toggle()" class="am-close">&times;</a>站内搜索：</span>
      <input type="text" name="keywords" placeholder="请输入关键字" />
      <button type="submit">搜索</button>
    </form>
    <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
  </div>
  <ul>
    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><span class="am-icon-home"></span>首页</a></li>
    <li><a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>"><span class="am-icon-phone"></span>电话</a></li>
    <li><a href="<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "30"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo $field['typeurl']; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>"><span class="am-icon-comment-o"></span>留言</a></li>
    <li><a href="javascript:;" onclick="$('.search').toggle()"><span class="am-icon-search"></span>搜索</a></li>
  </ul>
</figure>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<!--网站公用底部——结束-->

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/toastr.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/dropzone.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/toastr.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.validator.min.js","","",""); echo $__VALUE__; ?> 
	
</body>
</html>
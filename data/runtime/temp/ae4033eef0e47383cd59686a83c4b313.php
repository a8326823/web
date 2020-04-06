<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:34:"./template/mobile/view_product.htm";i:1571728724;s:60:"D:\phpstudy_pro\WWW\bendi.web.com\template\mobile\header.htm";i:1571728724;s:60:"D:\phpstudy_pro\WWW\bendi.web.com\template\mobile\footer.htm";i:1571728724;}*/ ?>
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
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/app.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/app.js","","",""); echo $__VALUE__; ?>
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
  <div class="pro_show">
    <div class="swiper-container">
      <div class="swiper-wrapper"> 
        <!--图集循环调用——开始-->
        <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="swiper-slide"><img src="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>" /></div>
        <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
        <!--图集循环调用——结束-->
        </div>
      <div class="swiper-pagination"></div>
    </div>
    <!--产品标题-->
    <h1><?php echo $eyou['field']['title']; ?></h1>
    <!--产品描述-->
    <div class="intro"> <?php echo $eyou['field']['seo_description']; ?></div>
    
    
    <!--产品参数调用——开始-->
    <ul class="attribute">
      <?php  if(empty($aid)) : $aid_tmp = ""; endif;  $taid = 0;  if(!empty($aid_tmp)) : $taid = $aid_tmp; elseif(!empty($aid)) : $taid = $aid; endif; $tagAttribute = new \think\template\taglib\eyou\TagAttribute; $_result = $tagAttribute->getAttribute($taid, "auto"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$attr): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li><em><?php echo $attr['name']; ?>：</em><?php echo $attr['value']; ?> </li>
      <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $attr = []; ?>
    </ul>
    <!--产品参数调用——结束-->
    <?php  $tagSppurchase = new \think\template\taglib\eyou\TagSppurchase; $__LIST__ = $tagSppurchase->getSppurchase("");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
    <div class="price">价格：<span><?php echo $field['users_price']; ?></span><em>元</em></div>
    <?php endif; $field = []; ?>
  </div>
</section>
<!--商城购买行为调用——开始-->
<?php  $tagSppurchase = new \think\template\taglib\eyou\TagSppurchase; $__LIST__ = $tagSppurchase->getSppurchase("btn-danger");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?> 

<section> 
 <!-- 规格 标签开始 --> 
    <div class="ey-spec"> 
    <?php if(is_array($field['ReturnData']) || $field['ReturnData'] instanceof \think\Collection || $field['ReturnData'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['ReturnData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $i= intval($key) + 1;$mod = ($i % 2 ); ?> 
        <div class="row m-t-15"> 
            <label class="form-control-label col-sm-7"><?php echo $field2['spec_name']; ?></label> 
            <div class="col-sm-10"> 
            <?php if(is_array($field2['spec_value']) || $field2['spec_value'] instanceof \think\Collection || $field2['spec_value'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field2['spec_value'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $i= intval($key) + 1;$mod = ($i % 2 ); ?> 
                <a href="JavaScript:void(0);" <?php echo $field3['SpecData']; ?> class="btn btn-default btn-selected <?php echo $field3['SpecClass']; ?>"><?php echo $field3['spec_value']; ?></a> 
            <?php echo isset($field3["ey_1563185380"])?$field3["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field3["ey_1563185376"]))?$field3["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?> 
            </div> 
        </div> 
    <?php echo isset($field2["ey_1563185380"])?$field2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field2["ey_1563185376"]))?$field2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?> 
    </div> 
    <!-- 规格 标签结束 --> 
  <div class="ey-number">
    <label>数量</label>
    <div class="btn-input">
      <button class="layui-btn" <?php echo $field['ReduceQuantity']; ?>>-</button>
      <input type="text" class="layui-input" <?php echo $field['UpdateQuantity']; ?>>
      <button class="layui-btn" <?php echo $field['IncreaseQuantity']; ?>>+</button>
    </div>
  </div>
  <!-- 库存量 标签开始 --> 
    <span <?php echo $field['stock_show']; ?>>库存量：<?php echo $field['stock_count']; ?> 件</span> 
    <!-- 库存量 标签结束 --> 
  <div class="ey-buyaction"> 
   <a class="ey-joinin" href="JavaScript:void(0);" <?php echo $field['ShopAddCart']; ?>>加入购物车</a> 
   <a class="ey-joinbuy" href="JavaScript:void(0);" <?php echo $field['BuyNow']; ?>>立即购买</a> 
  </div>
</section>
    <?php echo $field['hidden']; endif; $field = []; ?> 
<!--商城购买行为调用——结束-->
<section>
  <div class="subject"> <b>产品介绍</b> </div>
  <div class="clear"></div>
  <div class="news_show">
    <div class="intro">
      <!--产品详情-->
      <?php echo $eyou['field']['content']; ?> 
      <div class="clear"></div>
    </div>
    <!--上下篇——开始-->
      <div class="prenext"> 
        <!--上一篇--> 
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="pre"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?></span> </a> <?php else: ?> <a class="pre"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; ?></a> <?php endif; $field = []; ?> 
        <!--下一篇--> 
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="next"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?> </span> </a> <?php else: ?> <a class="next"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; ?></a> <?php endif; $field = []; ?> 
      </div>
      <!--上下篇——结束-->
      <?php if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
      <hr class="am-margin-top-lg">
      <!--tag标签——开始-->
      <div class="tags">标签：
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "now", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="<?php echo $field['link']; ?>"  <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; ?> 
      </div>
      <!--tag标签——结束--> 
      <?php endif; ?>
    </div>
  </div>
</section>
<section>
<div class="subject"> <b>推荐产品</b> </div>
<div class="clear"></div>
<div class="home_pro">
<ul>
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'flag' => 'c',
  'orderby' => 'now',
  'titlelen' => '30',
  'row' => '5',
  'typeid' => '3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0","on");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
  <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">
    <div><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"></div>
    <p class="title"><?php echo $field['title']; ?></p>
    <p class="price"><span>点击数：<?php echo $field['click']; ?> </span>¥ <?php echo $field['users_price']; ?> </p>
    </a></li>
  <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
</ul>
<div class="clear"></div>
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

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swipe.js","","",""); echo $__VALUE__; ?> 
<script>
    var swiper=new Swiper('.swiper-container',{
        pagination:'.swiper-pagination',
        paginationClickable:true,
        spaceBetween:30,
        centeredSlides:true,
        autoplay:5000,
        autoplayDisableOnInteraction:false,
		loop:true
    });
    </script>
</body>
</html>
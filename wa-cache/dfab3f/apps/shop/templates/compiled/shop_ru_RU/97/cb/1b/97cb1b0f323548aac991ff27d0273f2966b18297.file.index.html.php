<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/index.html" */ ?>
<?php /*%%SmartyHeaderCode:5186575795fdfabff2d2387-81722898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97cb1b0f323548aac991ff27d0273f2966b18297' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/index.html',
      1 => 1608499978,
      2 => 'file',
    ),
    'c515c224e832bfb0ad78fdce9820f4c94b704401' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/header.layout.html',
      1 => 1608498918,
      2 => 'file',
    ),
    '4d23563ddc02d1233abcf7f985e94dbc83954ede' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/breadcrumbs.layout.html',
      1 => 1608498500,
      2 => 'file',
    ),
    'd117f56de8313b0db03b840e5d81da0c0e51f62c' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/sidebar.layout.html',
      1 => 1608498918,
      2 => 'file',
    ),
    'f2180b32a7d34321e76b29149bed048d3bbee2fb' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/footer.layout.html',
      1 => 1608498594,
      2 => 'file',
    ),
    'be806d66847908dcf12037df537f39c6c7a0aa06' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/pane.html',
      1 => 1608498918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5186575795fdfabff2d2387-81722898',
  'function' => 
  array (
    '_renderBreadcrumbs' => 
    array (
      'parameter' => 
      array (
        'breadcrumbs' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    '_renderPagesList' => 
    array (
      'parameter' => 
      array (
        'pages' => 
        array (
        ),
        'show_deep' => true,
      ),
      'compiled' => '',
    ),
    '_renderPage' => 
    array (
      'parameter' => 
      array (
        'page' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfabffcb4ed5_09356616',
  'variables' => 
  array (
    'wa' => 0,
    '_html_class' => 0,
    '_is_simplified' => 0,
    '_is_auth_page' => 0,
    '_html_classes' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_static_url' => 0,
    'wa_active_theme_path' => 0,
    'theme_settings' => 0,
    '_hide_breadcrumbs' => 0,
    '_global_header' => 0,
    '_global_header_html' => 0,
    '_hide_sidebar' => 0,
    '_is_personal_area' => 0,
    '_hide_shopinfo' => 0,
    '_schedule' => 0,
    '_day' => 0,
    '_show_banner' => 0,
    '_image_uri' => 0,
    '_hide_footer' => 0,
    '_hide_pane' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfabffcb4ed5_09356616')) {function content_5fdfabffcb4ed5_09356616($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_is_simplified'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("simplified"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_auth_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isAuthPage"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_pane'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("hidePane"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("hideSidebar"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("hideBreadcrumbs"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_footer'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("hideFooter"), null, 0);?><?php $_smarty_tpl->tpl_vars['_show_banner'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("showBottomBanner"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_shopinfo'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_html_classes'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_html_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("htmlClass"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_html_class']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_html_classes', null, 0);
$_smarty_tpl->tpl_vars['_html_classes']->value[] = $_smarty_tpl->tpl_vars['_html_class']->value;?><?php }?><?php if ($_smarty_tpl->tpl_vars['_is_simplified']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_html_classes', null, 0);
$_smarty_tpl->tpl_vars['_html_classes']->value[] = "is-simplified";?><?php $_smarty_tpl->tpl_vars['_hide_shopinfo'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_sidebar'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_footer'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_pane'] = new Smarty_variable(true, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_is_auth_page']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_html_classes', null, 0);
$_smarty_tpl->tpl_vars['_html_classes']->value[] = "is-simplified";?><?php $_smarty_tpl->createLocalArrayVariable('_html_classes', null, 0);
$_smarty_tpl->tpl_vars['_html_classes']->value[] = "is-auth-page";?><?php $_smarty_tpl->tpl_vars['_hide_breadcrumbs'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_shopinfo'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_sidebar'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_footer'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_pane'] = new Smarty_variable(true, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_locale_string'] = new Smarty_variable(substr((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->locale())===null||$tmp==='' ? "en" : $tmp),0,2), null, 0);?><!DOCTYPE html><html class="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_html_classes']->value," ");?>
" lang="<?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
<?php }else{ ?>en<?php }?>"><head><title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title><meta charset="UTF-8"><meta http-equiv="x-ua-compatible" content="IE=edge"><meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" /><meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" /><meta name="viewport" content="width=1000" /><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
favicon.ico" /><?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/custom.css?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" /><!-- /css --><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/custom.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><!-- /js --><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->head();?>
<!-- /head --></head><body><div class="s-main-wrapper" id="js-main-wrapper" style="<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_color'])){?>background-color: <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_color'];?>
<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_image'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_image'])){?><div class="s-branding-wrapper"><div class="s-branding-block"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_image'])){?><div class="s-branding left"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_image'];?>
" alt=""></a><?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_left_image'];?>
" alt=""><?php }?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_image'])){?><div class="s-branding right"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_image'];?>
" alt=""></a><?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['background_banner_right_image'];?>
" alt=""><?php }?></div><?php }?></div></div><?php }?><div class="s-main-block" id="js-main-block"><?php /*  Call merged included template "./header.layout.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./header.layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5186575795fdfabff2d2387-81722898');
content_5fdfc2334a8bf6_56230688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./header.layout.html" */?><?php if (empty($_smarty_tpl->tpl_vars['_hide_breadcrumbs']->value)){?><?php /*  Call merged included template "./breadcrumbs.layout.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./breadcrumbs.layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5186575795fdfabff2d2387-81722898');
content_5fdfc23376c7d5_92142586($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./breadcrumbs.layout.html" */?><?php }?><?php $_smarty_tpl->tpl_vars['_global_header'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader"), null, 0);?><?php $_smarty_tpl->tpl_vars['_global_header_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("globalHeaderHTML"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_global_header']->value)){?><h1 class="s-global-header"><?php echo $_smarty_tpl->tpl_vars['_global_header']->value;?>
</h1><?php }elseif($_smarty_tpl->tpl_vars['_global_header_html']->value){?><div class="s-global-header"><?php echo $_smarty_tpl->tpl_vars['_global_header_html']->value;?>
</div><?php }?><div class="s-layout"><?php if (empty($_smarty_tpl->tpl_vars['_hide_sidebar']->value)){?><aside class="s-sidebar-wrapper s-column" role="complementary"><div class="s-sidebar-block" id="js-sidebar-block"><?php /*  Call merged included template "./sidebar.layout.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./sidebar.layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5186575795fdfabff2d2387-81722898');
content_5fdfc2337e8145_31550554($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./sidebar.layout.html" */?><script>( function($, waTheme) {var $sidebar = $("#js-sidebar-block");waTheme.layout.$sidebar = $sidebar;<?php if (!empty($_smarty_tpl->tpl_vars['_is_personal_area']->value)){?>$(document).ready( function() {new waTheme.init.site.FixedBlock({$wrapper: $sidebar.closest(".s-sidebar-wrapper"),$section: $sidebar,type: "top",lift: 16});});<?php }?>})(jQuery, window.waTheme);</script></div></aside><?php }?><main class="s-content-wrapper s-column" itemscope itemtype="http://schema.org/WebPage" role="main"><div class="s-content-block" id="js-content-block"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (empty($_smarty_tpl->tpl_vars['_hide_shopinfo']->value)){?><div class="s-shop-info"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_address'])){?><div class="s-shop-address"><i class="svg-icon map-marker size-16 top"></i><span><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_address'];?>
</span></div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['use_shop_schedule'])&&method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'schedule')){?><?php $_smarty_tpl->tpl_vars['_schedule'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->schedule(), null, 0);?><div class="s-schedule-wrapper" id="js-checkout-schedule-wrapper"><div class="s-visible"><div class="s-label-wrapper js-show-schedule" title="<?php echo _wd("shop","Business hours");?>
"><i class="svg-icon clock size-16 top"></i> <?php echo _wd("shop","Business hours");?>
 <i class="s-icon"></i></div></div><div class="s-hidden top left"><div class="s-days-wrapper"><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['current_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
?><div class="s-day-wrapper"><div class="s-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="s-value"><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['work'])){?><div class="s-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }else{ ?><div class="s-text"><?php echo _wd("shop","day off");?>
</div><?php }?></div></div><?php } ?></div><i class="s-close-icon js-close-schedule" title="Закрыть"></i></div><script>( function($) {new window.waTheme.init.site.ScheduleSection({$wrapper: $("#js-checkout-schedule-wrapper")});})(jQuery);</script></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'])){?><div class="s-time-wrapper"><i class="svg-icon clock size-16 top"></i><span class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'], ENT_QUOTES, 'UTF-8', true);?>
</span></div><?php }?><?php }?></div><?php }?></div></main></div><?php if ($_smarty_tpl->tpl_vars['_show_banner']->value&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['bottom_banner_image'])){?><?php $_smarty_tpl->tpl_vars['_image_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value).((string)$_smarty_tpl->tpl_vars['theme_settings']->value['bottom_banner_image'])."?v".((string)$_smarty_tpl->tpl_vars['wa_theme_version']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['bottom_banner_href'])){?><a class="s-bottom-banner" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['bottom_banner_href'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_image_uri']->value;?>
" alt=""></a><?php }else{ ?><span class="s-bottom-banner"><img src="<?php echo $_smarty_tpl->tpl_vars['_image_uri']->value;?>
" alt=""></span><?php }?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_hide_footer']->value)){?><?php /*  Call merged included template "./footer.layout.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./footer.layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5186575795fdfabff2d2387-81722898');
content_5fdfc2339b3b66_74122935($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./footer.layout.html" */?><?php }?></div><script>( function($, waTheme) {waTheme.layout.$wrapper = $("#js-main-wrapper");waTheme.layout.$block = $("#js-main-block");waTheme.layout.$content = $("#js-content-block");new waTheme.init.site.Layout();})(jQuery, window.waTheme);</script></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&empty($_smarty_tpl->tpl_vars['_hide_pane']->value)){?><?php /*  Call merged included template "./pane.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./pane.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5186575795fdfabff2d2387-81722898');
content_5fdfc233bcc528_08312351($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./pane.html" */?><?php }?></body></html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/header.layout.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfc2334a8bf6_56230688')) {function content_5fdfc2334a8bf6_56230688($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['_phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone'), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount"), null, 0);?><header class="s-header-wrapper" id="s-header-wrapper"><section class="s-header-section"><div class="s-header-top s-layout"><div class="s-column left"><?php $_smarty_tpl->tpl_vars['_logo_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa_app_url']->value, null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_logo_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("shop/frontend"), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo'])){?><a class="s-site-logo" href="<?php echo $_smarty_tpl->tpl_vars['_logo_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo'];?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
" /></a><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_tip'])){?><a class="s-site-name" href="<?php echo $_smarty_tpl->tpl_vars['_logo_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo_tip'];?>
</a><?php }?></div><div class="s-column center"><?php if (!empty($_smarty_tpl->tpl_vars['_phone']->value)){?><div class="s-phone-wrapper"><i class="svg-icon phone size-16 top"></i><span class="s-phone"><?php echo $_smarty_tpl->tpl_vars['_phone']->value;?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_1'])){?><span class="s-tip"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_1'];?>
</span><?php }?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['additional_phone'])){?><div class="s-phone-wrapper"><i class="svg-icon phone size-16 top"></i><span class="s-phone"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['additional_phone'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_2'])){?><span class="s-tip"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_2'];?>
</span><?php }?></div><?php }?></div><div class="s-column right"><div class="s-shop-info"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_address'])){?><div class="s-shop-address"><i class="svg-icon map-marker size-16 top"></i><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_address'];?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['use_shop_schedule'])&&method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'schedule')){?><?php $_smarty_tpl->tpl_vars['_schedule'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->schedule(), null, 0);?><div class="s-schedule-wrapper" id="js-header-schedule-wrapper"><div class="s-visible"><div class="s-label-wrapper js-show-schedule" title="<?php echo _wd("shop","Business hours");?>
"><i class="svg-icon clock size-16 top"></i> <?php echo _wd("shop","Business hours");?>
 <i class="s-icon"></i></div></div><div class="s-hidden bottom right"><div class="s-days-wrapper"><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['current_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
?><div class="s-day-wrapper"><div class="s-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="s-value"><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['work'])){?><div class="s-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }else{ ?><div class="s-text"><?php echo _wd("shop","day off");?>
</div><?php }?></div></div><?php } ?></div><i class="s-close-icon js-close-schedule" title="Закрыть"></i></div><script>( function($) {new window.waTheme.init.site.ScheduleSection({$wrapper: $("#js-header-schedule-wrapper")});})(jQuery);</script></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'])){?><div class="s-time-wrapper"><i class="svg-icon clock size-16 top"></i><span class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'], ENT_QUOTES, 'UTF-8', true);?>
</span></div><?php }?><?php }?>
                </div>

            </div>
        </div>

        <div class="s-header-nav">
            <div class="s-layout">
                <div class="s-column left">

                    <ul class="s-nav-list">
                        <?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable(array(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='site-pages'){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->site){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?><?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='shop-pages'){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?><?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='blog-pages'){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->pages(), null, 0);?><?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='photos-pages'){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->pages(), null, 0);?><?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='hub-pages'){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->hub){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->hub->pages(), null, 0);?><?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='none'){?>
                            <?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->apps(), null, 0);?>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                            <?php if (!($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_url']->value&&$_smarty_tpl->tpl_vars['a']->value['name']==$_smarty_tpl->tpl_vars['wa']->value->accountName())){?>
                                <?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(false, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value&&!$_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')||strlen($_smarty_tpl->tpl_vars['a']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['a']->value['url'])){?>
                                    <?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(true, null, 0);?>
                                <?php }?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['_is_selected']->value){?>is-selected<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</a>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
                    <div class="s-column right">

                        <ul class="s-nav-list">
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                                <li>
                                    <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile'), null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                        <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/myOrders'), null, 0);?>
                                    <?php }?>

                                    <a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
                                        <i class="icon16 image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto2x(20);?>
');"></i>
                                        <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? "Личный кабинет" : $tmp);?>
</span>
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li>
                                    <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile'), null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                        <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/myOrders'), null, 0);?>
                                    <?php }?>
                                    <a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
                                        <i class="svg-icon entrance size-16"></i> <span>Вход</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a>
                                </li>
                            <?php }?>
                        </ul>

                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <?php if (empty($_smarty_tpl->tpl_vars['_is_personal_area']->value)){?>
        <div class="s-header-bottom">
            <div class="s-layout fixed">
                <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                    <?php $_smarty_tpl->tpl_vars['_categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,null,true), null, 0);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['_categories']->value)){?>
                        <?php $_smarty_tpl->tpl_vars['_is_shop_home'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isShopHome"), null, 0);?>

                        <div class="s-column left">

                            <?php $_smarty_tpl->tpl_vars['_catalog_classes'] = new Smarty_variable(array(), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['_is_shop_home']->value)){?>
                                <?php $_smarty_tpl->createLocalArrayVariable('_catalog_classes', null, 0);
$_smarty_tpl->tpl_vars['_catalog_classes']->value[] = "is-locked";?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['catalog_font_width']==="big"){?>
                                <?php $_smarty_tpl->createLocalArrayVariable('_catalog_classes', null, 0);
$_smarty_tpl->tpl_vars['_catalog_classes']->value[] = "is-big";?>
                            <?php }?>

                            <div class="s-catalog-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_catalog_classes']->value," ");?>
" id="s-header-catalog">
                                <button class="s-catalog-button <?php if (!empty($_smarty_tpl->tpl_vars['_is_shop_home']->value)){?>without-hover<?php }?>">Catalog</button>
                                <ul class="s-catalog-list">
                                    <?php  $_smarty_tpl->tpl_vars['_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_category']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_category']->key => $_smarty_tpl->tpl_vars['_category']->value){
$_smarty_tpl->tpl_vars['_category']->_loop = true;
 $_smarty_tpl->tpl_vars['_category']->iteration++;
?>
                                        <?php $_smarty_tpl->tpl_vars['_limit'] = new Smarty_variable(20, null, 0);?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['menu_limit'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['menu_limit']>0){?>
                                            <?php $_smarty_tpl->tpl_vars['_limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['menu_limit'], null, 0);?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['_category']->iteration>$_smarty_tpl->tpl_vars['_limit']->value){?><?php break 1?><?php }?>

                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_category']->value['name'];?>
</a>

                                            
                                            <?php if (!empty($_smarty_tpl->tpl_vars['_category']->value['childs'])){?>
                                                <div class="s-sub-wrapper">
                                                    <ul class="s-sub-list">
                                                    <?php  $_smarty_tpl->tpl_vars['_sub1_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub1_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_category']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sub1_category']->key => $_smarty_tpl->tpl_vars['_sub1_category']->value){
$_smarty_tpl->tpl_vars['_sub1_category']->_loop = true;
?>
                                                        <li class="s-sub-item">
                                                            <a class="s-sub-header" href="<?php echo $_smarty_tpl->tpl_vars['_sub1_category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_sub1_category']->value['name'];?>
</a>

                                                            
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['_sub1_category']->value['childs'])){?>
                                                                <ul>
                                                                    <?php  $_smarty_tpl->tpl_vars['_sub2_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub2_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sub1_category']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_sub2_category']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_sub2_category']->key => $_smarty_tpl->tpl_vars['_sub2_category']->value){
$_smarty_tpl->tpl_vars['_sub2_category']->_loop = true;
 $_smarty_tpl->tpl_vars['_sub2_category']->index++;
?>
                                                                        <?php $_smarty_tpl->tpl_vars['_limit'] = new Smarty_variable(5, null, 0);?>
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sub_menu_limit'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['sub_menu_limit']>0){?>
                                                                            <?php $_smarty_tpl->tpl_vars['_limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['sub_menu_limit'], null, 0);?>
                                                                        <?php }?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['_sub2_category']->index>=$_smarty_tpl->tpl_vars['_limit']->value){?>
                                                                            <li>
                                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_sub1_category']->value['url'];?>
">...</a>
                                                                            </li>
                                                                            <?php break 1?>
                                                                        <?php }?>
                                                                        <li>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_sub2_category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_sub2_category']->value['name'];?>
</a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php }?>

                                                        </li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                            <?php }?>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <script>
                                    ( function($) {
                                        new window.waTheme.init.shop.Catalog({
                                            $wrapper: $("#s-header-catalog"),
                                            is_locked: <?php if ($_smarty_tpl->tpl_vars['_is_shop_home']->value){?>true<?php }else{ ?>false<?php }?>
                                        });
                                    })(jQuery);
                                </script>
                            </div>

                        </div>
                    <?php }?>
                <?php }?>

                <div class="s-column">
                    <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable(false, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable('', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['wa_app']->value==="hub"){?>
                        <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("hub/frontend/search"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable("Поиск", null, 0);?>
                    <?php }elseif($_smarty_tpl->tpl_vars['wa_app']->value==="helpdesk"){?>
                        <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("helpdesk/frontend/search"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable("Поиск", null, 0);?>
                    <?php }elseif($_smarty_tpl->tpl_vars['wa_app']->value==="blog"){?>
                        <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("blog/frontend/search"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable("Поиск", null, 0);?>
                    <?php }elseif($_smarty_tpl->tpl_vars['wa_app']->value==="shop"){?>
                        <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("shop/frontend/search"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable("Найти товары", null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                        <?php $_smarty_tpl->tpl_vars['_search_action'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl("shop/frontend/search"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable("Найти товары", null, 0);?>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['_search_action']->value)){?>
                        <?php $_smarty_tpl->tpl_vars['_query'] = new Smarty_variable('', null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value==="shop"){?>
                            <?php $_smarty_tpl->tpl_vars['_query'] = new Smarty_variable(htmlspecialchars((($tmp = @$_GET['query'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true), null, 0);?>
                        <?php }?>

                        <div class="s-layout">
                            <div class="s-column">

                                <div class="s-search-wrapper" role="search">
                                    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['_search_action']->value;?>
">
                                        <input class="s-text-input" type="text" name="query" value="<?php if (!empty($_smarty_tpl->tpl_vars['_query']->value)){?><?php echo $_smarty_tpl->tpl_vars['_query']->value;?>
<?php }?>" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_placeholder']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <input class="s-submit-input" type="submit" value="Найти">
                                    </form>
                                </div>

                            </div>
                            <div class="s-column middle right">

                                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['promotion_uri'])&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['promotion_name'])){?>
                                    <a class="s-ad-link" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['promotion_uri'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['promotion_name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <i class="svg-icon attention size-12"></i>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['promotion_name'], ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                <?php }?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</header>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/breadcrumbs.layout.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfc23376c7d5_92142586')) {function content_5fdfc23376c7d5_92142586($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php if (!function_exists('smarty_template_function__renderBreadcrumbs')) {
    function smarty_template_function__renderBreadcrumbs($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderBreadcrumbs']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php $_smarty_tpl->tpl_vars['_is_main_page'] = new Smarty_variable(($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_home_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa_app_url']->value, null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_home_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/'), null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_is_main_page']->value)){?><ul class="s-breadcrumbs-wrapper" itemprop="breadcrumb"><li class="s-item"><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['_home_uri']->value;?>
" title="Магазин"><i class="svg-icon home top"></i></a></li><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php  $_smarty_tpl->tpl_vars['_breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_breadcrumb']->key => $_smarty_tpl->tpl_vars['_breadcrumb']->value){
$_smarty_tpl->tpl_vars['_breadcrumb']->_loop = true;
?><li class="s-item"><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['_breadcrumb']->value['url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }?></ul><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/sidebar.layout.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfc2337e8145_31550554')) {function content_5fdfc2337e8145_31550554($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?>
<?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable(($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount")||!empty($_smarty_tpl->tpl_vars['my_nav_selected']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_show_widgets'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("showWidgets"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['_is_personal_area']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
        <section class="s-sidebar-section">
            <div class="s-section-header">
                <h2 class="s-header">Личный кабинет</h2>
            </div>
            <div class="s-section-body">

                <nav class="s-nav-wrapper">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->myNav(false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value){
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
<?php } ?>
                        <li>
                            <a href="?logout">Выход</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>
    <?php }?>
<?php }?>

<?php if (!function_exists('smarty_template_function__renderPagesList')) {
    function smarty_template_function__renderPagesList($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderPagesList']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['_current_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->currentUrl(), null, 0);?>

    <?php if (!is_callable('smarty_modifier_join')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php if (!function_exists('smarty_template_function__renderPage')) {
    function smarty_template_function__renderPage($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderPage']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(false, null, 0);?>

        <?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1){?>
            <?php if ($_smarty_tpl->tpl_vars['_current_url']->value===$_smarty_tpl->tpl_vars['page']->value['url']){?>
                <?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(true, null, 0);?>
            <?php }elseif(strstr($_smarty_tpl->tpl_vars['_current_url']->value,$_smarty_tpl->tpl_vars['page']->value['url'])){?>
                <?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(true, null, 0);?>
            <?php }?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['_has_menu'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_deep']->value&&!empty($_smarty_tpl->tpl_vars['page']->value['childs'])), null, 0);?>

        <?php $_smarty_tpl->tpl_vars['_page_classes'] = new Smarty_variable(array(), null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['_is_selected']->value)){?>
            <?php $_smarty_tpl->createLocalArrayVariable('_page_classes', null, 0);
$_smarty_tpl->tpl_vars['_page_classes']->value[] = "is-selected";?>
            <?php $_smarty_tpl->createLocalArrayVariable('_page_classes', null, 0);
$_smarty_tpl->tpl_vars['_page_classes']->value[] = "is-opened";?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['_is_current']->value)){?>
            <?php $_smarty_tpl->createLocalArrayVariable('_page_classes', null, 0);
$_smarty_tpl->tpl_vars['_page_classes']->value[] = "is-current";?>
            <?php $_smarty_tpl->createLocalArrayVariable('_page_classes', null, 0);
$_smarty_tpl->tpl_vars['_page_classes']->value[] = "is-opened";?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['_has_menu']->value)){?>
            <?php $_smarty_tpl->createLocalArrayVariable('_page_classes', null, 0);
$_smarty_tpl->tpl_vars['_page_classes']->value[] = "has-menu";?>
        <?php }?>

        <li class="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_page_classes']->value," ");?>
">
            
            <?php if (!empty($_smarty_tpl->tpl_vars['_has_menu']->value)){?>
                <span class="s-toggle js-toggle"></span>
            <?php }?>

            <?php $_smarty_tpl->tpl_vars['_page_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['url'], null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['_is_selected']->value)&&empty($_smarty_tpl->tpl_vars['_has_menu']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_page_url'] = new Smarty_variable("javascript:void(0);", null, 0);?>
            <?php }?>

            
            <?php if (!empty($_smarty_tpl->tpl_vars['_is_current']->value)){?>
                <span class="s-link"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</span>
            <?php }else{ ?>
                <a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['_page_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a>
            <?php }?>

            
            <?php if (!empty($_smarty_tpl->tpl_vars['_has_menu']->value)){?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['_sub_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sub_page']->key => $_smarty_tpl->tpl_vars['_sub_page']->value){
$_smarty_tpl->tpl_vars['_sub_page']->_loop = true;
?>
                        <?php smarty_template_function__renderPage($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['_sub_page']->value));?>

                    <?php } ?>
                </ul>
            <?php }?>
        </li>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <?php if (!empty($_smarty_tpl->tpl_vars['pages']->value)){?>
        <ul class="<?php if (!empty($_smarty_tpl->tpl_vars['show_deep']->value)){?>js-deep-list<?php }?>">
            <?php  $_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->key => $_smarty_tpl->tpl_vars['_page']->value){
$_smarty_tpl->tpl_vars['_page']->_loop = true;
?>
                <?php smarty_template_function__renderPage($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['_page']->value));?>

            <?php } ?>
        </ul>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_is_personal_area'=>$_smarty_tpl->tpl_vars['_is_personal_area']->value), 0);?>


<?php if (empty($_smarty_tpl->tpl_vars['_is_personal_area']->value)){?>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_banner_image'])){?>
        <?php $_smarty_tpl->tpl_vars['_banner_uri'] = new Smarty_variable("#", null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_banner_link'])){?>
            <?php $_smarty_tpl->tpl_vars['_banner_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_banner_link'], null, 0);?>
        <?php }?>
        <div class="s-banner-wrapper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_banner_uri']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_banner_image'];?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
">
            </a>
        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['_show_widgets']->value)){?>
        
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
            <div class="b-widget-wrapper">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
            <div class="b-widget-wrapper">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
            <div class="b-widget-wrapper">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

            </div>
        <?php }?>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/footer.layout.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfc2339b3b66_74122935')) {function content_5fdfc2339b3b66_74122935($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['_phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone'), null, 0);?><?php }?><footer class="s-footer-wrapper" id="js-footer-wrapper"><div class="s-footer-block"><div class="s-footer-top"><div class="s-layout"><div class="s-column"><ul class="s-nav-list"><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='site-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->site){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='shop-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='blog-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->pages(), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='photos-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->pages(), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='hub-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->hub){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->hub->pages(), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='none'){?><?php $_smarty_tpl->tpl_vars['_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->apps(), null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php if (!($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_url']->value&&$_smarty_tpl->tpl_vars['a']->value['name']==$_smarty_tpl->tpl_vars['wa']->value->accountName())){?><?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value&&!$_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')||strlen($_smarty_tpl->tpl_vars['a']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['a']->value['url'])){?><?php $_smarty_tpl->tpl_vars['_is_selected'] = new Smarty_variable(true, null, 0);?><?php }?><li class="<?php if ($_smarty_tpl->tpl_vars['_is_selected']->value){?>is-selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</a></li><?php }?><?php } ?></ul><div class="s-layout inline"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_rating_widget'])){?><div class="s-column"><div class="s-rating-wrapper"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_rating_widget'];?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_subscribe_form_use'])&&$_smarty_tpl->tpl_vars['wa']->value->mailer&&$_smarty_tpl->tpl_vars['wa']->value->getUrl('mailer/frontend/subscribe')){?><div class="s-column"><section class="s-subscribe-section" id="js-subscribe-section"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_subscribe_form_title'])){?><h4 class="s-header"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_subscribe_form_title'];?>
</h4><?php }?><form><div class="s-visible"><input class="s-text-field js-email-field custom-placeholder" type="email" name="email" placeholder="your@email.here" required><input class="s-submit-button js-submit-button" type="submit" value="Подписаться"></div><div class="s-hidden"><?php echo $_smarty_tpl->tpl_vars['wa']->value->captcha(array('app_id'=>'mailer'));?>
</div></form><p class="js-success-message" style="display:none"><i>Спасибо! Будем держать вас в курсе.</i></p><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_subscribe_personal_data'])){?><div class="s-form-desc"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_subscribe_personal_data'];?>
</div><?php }?><script>( function($, waTheme) {new waTheme.init.site.SubscribeSection({$wrapper: $("#js-subscribe-section"),request_uri: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('mailer/frontend/subscribe');?>
"});})(jQuery, window.waTheme);</script></section></div><?php }?></div></div><div class="s-column right"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_phones_available'])){?><div class="s-phone-section"><div class="s-layout" style="width: auto;"><div class="s-column"><?php if (!empty($_smarty_tpl->tpl_vars['_phone']->value)){?><div class="s-phone-wrapper"><i class="svg-icon phone size-16 top"></i><span class="s-phone"><?php echo $_smarty_tpl->tpl_vars['_phone']->value;?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_1'])){?><span class="s-tip"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_1'];?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_address'])){?><span class="s-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_address'];?>
</span><?php }?></div><?php }?></div><div class="s-column s-phone-2"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['additional_phone'])){?><div class="s-phone-wrapper"><i class="svg-icon phone size-16 top"></i><span class="s-phone"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['additional_phone'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_2'])){?><span class="s-tip"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['tip_the_phone_2'];?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['use_shop_schedule'])&&method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'schedule')){?><?php $_smarty_tpl->tpl_vars['_schedule'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->schedule(), null, 0);?><div class="s-schedule-wrapper" id="js-footer-schedule-wrapper"><div class="s-visible"><div class="s-label-wrapper js-show-schedule" title="<?php echo _wd("shop","Business hours");?>
"><?php echo _wd("shop","Business hours");?>
 <i class="s-icon black"></i></div></div><div class="s-hidden top right"><div class="s-days-wrapper"><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['current_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
?><div class="s-day-wrapper"><div class="s-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="s-value"><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['work'])){?><div class="s-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }else{ ?><div class="s-text"><?php echo _wd("shop","day off");?>
</div><?php }?></div></div><?php } ?></div><i class="s-close-icon js-close-schedule" title="Закрыть"></i></div><script>( function($) {new window.waTheme.init.site.ScheduleSection({$wrapper: $("#js-footer-schedule-wrapper")});})(jQuery);</script></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'])){?><span class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><?php }?>
                                        </div>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>

        <div class="s-footer-middle">
            <div class="s-layout is-adaptive">
                <div class="s-column">

                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_payment_available'])){?>
                        <div class="s-payments-wrapper">
                            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_payment_title'])){?>
                                <h4 class="s-header"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_payment_title'];?>
</h4>
                            <?php }?>
                            <ul class="s-payments-list">
                                <?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_payments'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->payment(), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['_payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_payment']->key => $_smarty_tpl->tpl_vars['_payment']->value){
$_smarty_tpl->tpl_vars['_payment']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['_count']->value>=8){?><?php break 1?><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['_payment']->value['logo']){?>
                                        <?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_count']->value+1, null, 0);?>

                                        <li>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['_payment']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_payment']->value['name'];?>
">
                                        </li>
                                    <?php }?>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php }?>

                </div>
                <div class="s-column">

                    <!-- SOCIAL LINKS -->
                    <ul class="s-socials-list">
                        <?php $_smarty_tpl->tpl_vars['_socials_links'] = new Smarty_variable(array("vk_page_link"=>array("name"=>"Вконтакте","class"=>"vk"),"fb_page_link"=>array("name"=>"Facebook","class"=>"facebook"),"od_page_link"=>array("name"=>"Одноклассники","class"=>"od"),"mail_page_link"=>array("name"=>"Мой мир","class"=>"moimir"),"tw_page_link"=>array("name"=>"Twitter","class"=>"twitter"),"gplus_page_link"=>array("name"=>"Google+","class"=>"gplus"),"instagram_page_link"=>array("name"=>"Instagram","class"=>"instagram"),"youtube_page_link"=>array("name"=>"Youtube","class"=>"youtube"),"foursquare_page_link"=>array("name"=>"Foursquare","class"=>"foursquare")), null, 0);?>

                        <?php  $_smarty_tpl->tpl_vars['_social'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_social']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_socials_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_social']->key => $_smarty_tpl->tpl_vars['_social']->value){
$_smarty_tpl->tpl_vars['_social']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['_social']->key;
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value[$_smarty_tpl->tpl_vars['name']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value[$_smarty_tpl->tpl_vars['name']->value], null, 0);?>

                                <li>
                                    <a class="s-social-link <?php echo $_smarty_tpl->tpl_vars['_social']->value['class'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['_uri']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_social']->value['name'];?>
">
                                        <i class="icon"></i>
                                    </a>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>

    <script>
        ( function($, waTheme) {
            waTheme.layout.$footer = $("#js-footer-wrapper");
        })(jQuery, window.waTheme);
    </script>
</footer>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:29:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/pane.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfc233bcc528_08312351')) {function content_5fdfc233bcc528_08312351($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['_phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone'), null, 0);?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'), null, 0);?><?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl(), null, 0);?><?php }?><?php }?><section class="s-pane-section" id="js-pane-section"><div class="s-pane-wrapper js-pane-wrapper"><div class="s-pane-block"><div class="s-layout"><div class="s-column middle"><?php if ($_smarty_tpl->tpl_vars['wa_app']->value==="shop"&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['currency_toggle'])&&!empty($_smarty_tpl->tpl_vars['currencies']->value)&&count($_smarty_tpl->tpl_vars['currencies']->value)>1){?><div class="s-pane-item"><div class="s-styled-select"><select id="currency"><?php $_smarty_tpl->tpl_vars['currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(), null, 0);?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['c_code']->value==$_smarty_tpl->tpl_vars['currency']->value){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</option><?php } ?></select></div><script>( function($) {$("#currency").on("change", function() {var href = location.href;href += ( href.indexOf("?") >= 0 ) ? "&" : "?";location.href = href + 'currency=' + $(this).val();});})(jQuery);</script></div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa_app']->value==="shop"&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['language_toggle'])){?><div class="s-pane-item"><div class="s-styled-select"><select id="language"><?php  $_smarty_tpl->tpl_vars['lang_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang_name']->_loop = false;
 $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_from = waLocale::getAll('name'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang_name']->key => $_smarty_tpl->tpl_vars['lang_name']->value){
$_smarty_tpl->tpl_vars['lang_name']->_loop = true;
 $_smarty_tpl->tpl_vars['language']->value = $_smarty_tpl->tpl_vars['lang_name']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()==$_smarty_tpl->tpl_vars['language']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select></div><script>( function($) {$("#language").on("change", function () {var href = location.href;href += ( href.indexOf("?") >= 0 ) ? "&" : "?";location.href = href + 'locale=' + $(this).val();});})(jQuery);</script></div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['show_product_actions_on_main_page'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['enable_compare']))){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isComparePage"), null, 0);?><?php $_smarty_tpl->tpl_vars['_compare_item_classes'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_compare_item_classes', null, 0);
$_smarty_tpl->tpl_vars['_compare_item_classes']->value[] = "is-active";?><?php }?><div class="s-pane-item s-compare-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_compare_item_classes']->value," ");?>
" id="js-compare-wrapper"><i class="svg-icon compare size-12 js-compare-icon"></i>Сравнить <span class="s-count js-count">0</span><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl("shop/frontend");?>
compare/" title="Сравнить"></a><script>( function($, waTheme) {var $compare = $("#js-compare-wrapper");waTheme.apps["shop"].compare = new window.waTheme.init.shop.Compare({$wrapper: $compare,onChange: function(compare) {var hover_class = "with-hover";if (compare.count > 0) {$compare.addClass(hover_class);} else {$compare.removeClass(hover_class);}}});})(jQuery, window.waTheme);</script></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_phone']->value)){?><div class="s-pane-item s-phone-item"><div class="s-phone-wrapper"><i class="svg-icon phone-white size-16 lifted"></i><span class="s-phone"><?php echo $_smarty_tpl->tpl_vars['_phone']->value;?>
</span></div></div><?php }?></div><div class="s-column right middle"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&(!method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'hasRoutes')||$_smarty_tpl->tpl_vars['wa']->value->shop->hasRoutes())&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['show_cart'])){?><?php $_smarty_tpl->tpl_vars['_cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?><?php $_smarty_tpl->tpl_vars['_cart_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->count(), null, 0);?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable("Empty", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_cart_total']->value)){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(wa_currency_html($_smarty_tpl->tpl_vars['_cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency()), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(wa_currency_html(0,$_smarty_tpl->tpl_vars['wa']->value->shop->currency()), null, 0);?><?php }?><div class="s-pane-item <?php if (!empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?>with-hover<?php }?>"><div class="s-cart-wrapper <?php if (empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?>is-empty<?php }?>" id="js-cart-wrapper"><span class="s-label"><i class="icon16 cart"></i> Корзина </span><span class="s-count js-cart-count"><?php if (!empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?><?php echo $_smarty_tpl->tpl_vars['_cart_count']->value;?>
<?php }else{ ?>0<?php }?></span><span class="s-price js-cart-price"><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</span><a class="s-button" href="<?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
">Оформить заказ</a><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading_template", null); ob_start(); ?><div class="s-loading-section"><div class="s-loading-content"><i class="icon16 loading"></i></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                <script>
                                    ( function($, waTheme) {
                                        var $cart = $("#js-cart-wrapper"),
                                            $item = $cart.closest(".s-pane-item");

                                        var is_loading = false;
                                        $cart.closest(".s-pane-item").on("click", ".js-cart-link", function() {
                                            if (!is_loading) {
                                                is_loading = true;
                                                $("body").append(<?php echo json_encode($_smarty_tpl->tpl_vars['_loading_template']->value);?>
);
                                            }
                                        });

                                        waTheme.apps["shop"].cart = new window.waTheme.init.shop.Cart({
                                            $wrapper: $cart,
                                            count: <?php if (!empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?><?php echo intval($_smarty_tpl->tpl_vars['_cart_count']->value);?>
<?php }else{ ?>0<?php }?>
                                        });

                                        waTheme.apps["shop"].cart.onChange( function(cart) {
                                            var hover_class = "with-hover";
                                            if (cart.count > 0) {
                                                $item.addClass(hover_class);
                                            } else {
                                                $item.removeClass(hover_class);
                                            }
                                        });
                                    })(jQuery, window.waTheme);
                                </script>
                            </div>

                            <a class="s-link js-cart-link" href="<?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
" title="Корзина"></a>

                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>

    <script>
        ( function($) {
            new window.waTheme.init.site.Pane({
                $wrapper: $("#js-pane-section")
            });
        })(jQuery);
    </script>
</section>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?>
<?php }} ?>
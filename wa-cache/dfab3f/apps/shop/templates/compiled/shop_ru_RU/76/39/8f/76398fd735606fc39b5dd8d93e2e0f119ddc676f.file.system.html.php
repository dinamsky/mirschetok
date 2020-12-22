<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:02
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/system.html" */ ?>
<?php /*%%SmartyHeaderCode:5698805405fdfafd6f15bb8-83310240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76398fd735606fc39b5dd8d93e2e0f119ddc676f' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/system.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5698805405fdfafd6f15bb8-83310240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    '_theme_config' => 0,
    'cat' => 0,
    'id' => 0,
    'sub_id' => 0,
    'subcat' => 0,
    'subsub_id' => 0,
    'subsubcat' => 0,
    'subsubcat_id' => 0,
    'subsubsubcat' => 0,
    'query' => 0,
    'blog_query' => 0,
    'theme_favorite' => 0,
    'compare' => 0,
    '_tmp_capture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd734ff09_21822482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd734ff09_21822482')) {function content_5fdfafd734ff09_21822482($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_social_svg_styles'] = new Smarty_variable(array('vkontakte'=>array('id'=>'vk','icon'=>'<svg class="icon cent-icon" width="16" height="9"><use xlink:href="#icon-vk"></use></svg>'),'facebook'=>array('id'=>'fb','icon'=>'<svg class="icon cent-icon" width="7" height="16"><use xlink:href="#icon-fb"></use></svg>'),'google'=>array('id'=>'ggp','icon'=>'<svg class="icon cent-icon" width="18" height="10"><use xlink:href="#icon-gp"></use></svg>'),'twitter'=>array('id'=>'tw','icon'=>'<svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-tw"></use></svg>'),'yandex'=>array('id'=>'ya','icon'=>'<svg class="icon cent-icon" width="8" height="15"><use xlink:href="#icon-ya"></use></svg>'),'mailru'=>array('id'=>'magent','icon'=>'<svg class="icon cent-icon" width="16" height="15"><use xlink:href="#icon-magent"></use></svg>')), null, 0);?><?php $_smarty_tpl->tpl_vars['_theme_config'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='site-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->site){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->site->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='shop-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->shop->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='blog-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->blog->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='photos-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->photos->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='hub-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->hub){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->hub->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='none'){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['header_links'] = $_smarty_tpl->tpl_vars['wa']->value->apps();?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = array();?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='site-pages'){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->site->pages(true);?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='shop-categories'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (in_array($_smarty_tpl->tpl_vars['theme_settings']->value['header_design'],array('view-5-2','view-6-2','view-9-2','view-12-2','view-14-2','view-15-2'))){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,4,true,true);?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,3,true,true);?><?php }?><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cat']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['params']['childs_grid'])&&!empty($_smarty_tpl->tpl_vars['cat']->value['params']['childs_grid'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['_childs_grid'] = $_smarty_tpl->tpl_vars['cat']->value['params']['childs_grid'];?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['params']['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['cat']->value['params']['menu_icon'];?><?php }elseif(method_exists("shopWmimageincatPlugin","getCategoryImage")&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['cat']->value['id'],'icon')){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['menu_icon'] = shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['cat']->value['id'],'icon');?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['menu_icon'] = '';?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['submenu_mono_viewtype'] = (($tmp = @$_smarty_tpl->tpl_vars['cat']->value['params']['submenu_mono_viewtype'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_mono_viewtype'] : $tmp);?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_smarty_tpl->tpl_vars['sub_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
 $_smarty_tpl->tpl_vars['sub_id']->value = $_smarty_tpl->tpl_vars['subcat']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['submenu_mono_viewtype'] = (($tmp = @$_smarty_tpl->tpl_vars['subcat']->value['params']['submenu_mono_viewtype'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_mono_viewtype'] : $tmp);?><?php if (isset($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_icon'];?><?php }elseif(method_exists("shopWmimageincatPlugin","getCategoryImage")&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subcat']->value['id'],'icon')){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['menu_icon'] = shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subcat']->value['id'],'icon');?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['menu_icon'] = '';?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_smarty_tpl->tpl_vars['subsub_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
 $_smarty_tpl->tpl_vars['subsub_id']->value = $_smarty_tpl->tpl_vars['subsubcat']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['submenu_mono_viewtype'] = (($tmp = @$_smarty_tpl->tpl_vars['subsubcat']->value['params']['submenu_mono_viewtype'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_mono_viewtype'] : $tmp);?><?php if (isset($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_icon'];?><?php }elseif(method_exists("shopWmimageincatPlugin","getCategoryImage")&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subsubcat']->value['id'],'icon')){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['menu_icon'] = shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subsubcat']->value['id'],'icon');?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['menu_icon'] = '';?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?><?php  $_smarty_tpl->tpl_vars['subsubsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubsubcat']->_loop = false;
 $_smarty_tpl->tpl_vars['subsubcat_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subsubcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubsubcat']->key => $_smarty_tpl->tpl_vars['subsubsubcat']->value){
$_smarty_tpl->tpl_vars['subsubsubcat']->_loop = true;
 $_smarty_tpl->tpl_vars['subsubcat_id']->value = $_smarty_tpl->tpl_vars['subsubsubcat']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsubcat_id']->value]['submenu_mono_viewtype'] = (($tmp = @$_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['submenu_mono_viewtype'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_mono_viewtype'] : $tmp);?><?php if (isset($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsubcat_id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_icon'];?><?php }elseif(method_exists("shopWmimageincatPlugin","getCategoryImage")&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subsubsubcat']->value['id'],'icon')){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsubcat_id']->value]['menu_icon'] = shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['subsubsubcat']->value['id'],'icon');?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsub_id']->value]['childs'][$_smarty_tpl->tpl_vars['subsubcat_id']->value]['menu_icon'] = '';?><?php }?><?php } ?><?php }?><?php } ?><?php }?><?php } ?><?php }?><?php } ?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='shop-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->shop->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='blog-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->blog->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='photos-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->photos->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=='hub-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->hub){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->hub->pages(true);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']!='none'){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'] = $_smarty_tpl->tpl_vars['wa']->value->apps();?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']!='none'&&$_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']!='shop-categories'){?><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cat']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['childs_grid'])&&!empty($_smarty_tpl->tpl_vars['cat']->value['childs_grid'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['_childs_grid'] = $_smarty_tpl->tpl_vars['cat']->value['childs_grid'];?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['menu_icon'] = '';?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_smarty_tpl->tpl_vars['sub_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
 $_smarty_tpl->tpl_vars['sub_id']->value = $_smarty_tpl->tpl_vars['subcat']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])&&!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['menu_icon'] = $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['menu_icon'] = '';?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'][$_smarty_tpl->tpl_vars['id']->value]['childs'][$_smarty_tpl->tpl_vars['sub_id']->value]['submenu_mono_viewtype'] = (($tmp = @$_smarty_tpl->tpl_vars['subcat']->value['submenu_mono_viewtype'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_mono_viewtype'] : $tmp);?><?php } ?><?php }?><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['search_app']=='shop'){?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['query']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['search'] = array("class"=>"search__form-shop","url"=>((string)$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/search')),"query"=>$_tmp1,"placeholder"=>"Найти товары");?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['search_app']=='blog'){?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['blog_query']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['search'] = array("class"=>'',"url"=>((string)$_smarty_tpl->tpl_vars['wa']->value->getUrl('blog/frontend')),"query"=>$_tmp2,"placeholder"=>"Поиск");?><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl(), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['viewed'] = new Smarty_variable(explode(",",waRequest::cookie('balance_viewed')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><?php $_smarty_tpl->tpl_vars['theme_favorite'] = new Smarty_variable(waRequest::cookie('shop_favorite'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_favorite']->value)){?><?php $_smarty_tpl->tpl_vars['theme_favorite'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['theme_favorite']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['theme_favorite'] = new Smarty_variable(array(), null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><?php $_smarty_tpl->tpl_vars['compare'] = new Smarty_variable(waRequest::cookie('shop_compare'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['compare']->value)){?><?php $_smarty_tpl->tpl_vars['compare'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['compare']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['compare'] = new Smarty_variable(array(), null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['theme_viewed'] = new Smarty_variable(explode(",",waRequest::cookie('balance_viewed')), null, 0);?><?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?><?php $_smarty_tpl->tpl_vars['_topcart_items'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->items(), null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1_text']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1_text'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2_text']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2_text'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_address']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_address'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone1']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone1'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone2']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone2'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone_text']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone_text'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_address']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_address'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_email']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_email'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_tmp_capture", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['address_map']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['address_map'] = $_smarty_tpl->tpl_vars['_tmp_capture']->value;?><?php }} ?>
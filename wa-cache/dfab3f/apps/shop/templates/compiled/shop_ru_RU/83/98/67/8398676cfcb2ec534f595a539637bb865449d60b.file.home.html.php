<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:02
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.html" */ ?>
<?php /*%%SmartyHeaderCode:6585508715fdfafd6d29566-22789777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8398676cfcb2ec534f595a539637bb865449d60b' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6585508715fdfafd6d29566-22789777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_parent_theme_path' => 0,
    'wa' => 0,
    'wa_parent_theme_url' => 0,
    'theme_settings' => 0,
    'wa_theme_version' => 0,
    '_theme_config_sidebar' => 0,
    'section' => 0,
    '_viewed_pids' => 0,
    'limit' => 0,
    '_viewed_products' => 0,
    '_shop_tags' => 0,
    '_theme_config' => 0,
    '_shop_brands' => 0,
    'sidebar_posts' => 0,
    'sidebar_products' => 0,
    '_faq' => 0,
    'sidebar_block' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    '_theme_config_homepage' => 0,
    'homepage_block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd6f0d4d5_19975983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd6f0d4d5_19975983')) {function content_5fdfafd6f0d4d5_19975983($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/system.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>
<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->shop->settings('name'), ENT_QUOTES, 'UTF-8', true);?>
"><meta itemprop="telephone" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>
"><meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('country');?>
"><meta itemprop="currenciesAccepted" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_logo'];?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"><div class="home-pg"><div class="b-row"><div class="b-row__inner"><?php $_smarty_tpl->tpl_vars['_theme_config_sidebar'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_home_sections']), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'] = array();?><?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['section']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['section']->value=="viewed"){?><?php $_smarty_tpl->tpl_vars['_viewed_pids'] = new Smarty_variable(waRequest::cookie('balance_viewed'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_viewed_pids']->value)){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_viewed_limit']>0){?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_viewed_limit'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(4, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_viewed_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products("id/".((string)$_smarty_tpl->tpl_vars['_viewed_pids']->value),$_smarty_tpl->tpl_vars['limit']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_viewed_products']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="tags"){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_tags_limit_max']>0){?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_tags_limit_max'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(20, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_shop_tags'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->tags($_smarty_tpl->tpl_vars['limit']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_shop_tags']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="menu"){?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'])){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="productbrands"){?><?php if (method_exists("shopProductbrandsPlugin","getBrands")){?><?php $_smarty_tpl->tpl_vars['_shop_brands'] = new Smarty_variable(shopProductbrandsPlugin::getBrands(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_shop_brands']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="last-posts"){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_lastposts_limit']>0){?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_lastposts_limit'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(3, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['sidebar_posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_lastposts_blog'])===null||$tmp==='' ? null : $tmp),$_smarty_tpl->tpl_vars['limit']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['sidebar_posts']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="products"){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_products_limit']>0){?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_products_limit'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(4, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['sidebar_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_products_set'],$_smarty_tpl->tpl_vars['limit']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['sidebar_products']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="faq"){?><?php $_smarty_tpl->tpl_vars['_faq'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_1_question'])){?><?php $_smarty_tpl->createLocalArrayVariable('_faq', null, 0);
$_smarty_tpl->tpl_vars['_faq']->value[] = array('question'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_1_question'],'answer'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_1_answer']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_2_question'])){?><?php $_smarty_tpl->createLocalArrayVariable('_faq', null, 0);
$_smarty_tpl->tpl_vars['_faq']->value[] = array('question'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_2_question'],'answer'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_2_answer']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_3_question'])){?><?php $_smarty_tpl->createLocalArrayVariable('_faq', null, 0);
$_smarty_tpl->tpl_vars['_faq']->value[] = array('question'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_3_question'],'answer'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_3_answer']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_4_question'])){?><?php $_smarty_tpl->createLocalArrayVariable('_faq', null, 0);
$_smarty_tpl->tpl_vars['_faq']->value[] = array('question'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_4_question'],'answer'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_4_answer']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_5_question'])){?><?php $_smarty_tpl->createLocalArrayVariable('_faq', null, 0);
$_smarty_tpl->tpl_vars['_faq']->value[] = array('question'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_5_question'],'answer'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sidebars_sections_faq_5_answer']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_faq']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="about"){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'section','value'=>$_smarty_tpl->tpl_vars['section']->value);?><?php }elseif(substr($_smarty_tpl->tpl_vars['section']->value,0,6)=="block="){?><?php $_smarty_tpl->tpl_vars['sidebar_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->block(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value,"block=",'')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['sidebar_block']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'][] = array('type'=>'block','value'=>$_smarty_tpl->tpl_vars['sidebar_block']->value);?><?php }?><?php }?><?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['sidebar'])){?><div class="col-1-of-5 mt-hide"><?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['section']->value['type']=="section"){?><?php echo $_smarty_tpl->getSubTemplate ("sidebar.".((string)$_smarty_tpl->tpl_vars['section']->value['value']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><div class="sidebar-section"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['section']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?><?php } ?></div><?php }?><div class="col-4-of-5"><!-- plugin hook: 'frontend_homepage' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php $_smarty_tpl->tpl_vars['_theme_config_homepage'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_sections']), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['homepage'] = array();?><?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['section']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['section']->value=="news"){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['homepage'][] = array('type'=>'section','value'=>"home.".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_design']).".html");?><?php }elseif($_smarty_tpl->tpl_vars['section']->value=="subscribe"){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['homepage'][] = array('type'=>'section','value'=>((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/subscribe.html");?><?php }elseif(substr($_smarty_tpl->tpl_vars['section']->value,0,6)=="block="){?><?php $_smarty_tpl->tpl_vars['homepage_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->block(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value,"block=",'')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['homepage_block']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['homepage'][] = array('type'=>'block','value'=>$_smarty_tpl->tpl_vars['homepage_block']->value);?><?php }?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['homepage'][] = array('type'=>'section','value'=>"home.".((string)$_smarty_tpl->tpl_vars['section']->value).".html");?><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['homepage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['section']->value['type']=="section"){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['section']->value['value'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><div class="home-pg__section"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['section']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?><?php } ?></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin()){?><a class="show-toggle-btn" href="#"><svg class="icon cent-icon" width="18" height="18"><use xlink:href="#icon-info"></use></svg></a><?php }?><?php }} ?>
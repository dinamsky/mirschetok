<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.products.html" */ ?>
<?php /*%%SmartyHeaderCode:1356695295fdfafd79666d3-10705160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12fbee6c7dde544daf3b7d7e45a842e7af4626f3' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.products.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1356695295fdfafd79666d3-10705160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'products' => 0,
    'title' => 0,
    'wa' => 0,
    '_home_productsets' => 0,
    'list' => 0,
    '_home_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd7a35377_30200429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd7a35377_30200429')) {function content_5fdfafd7a35377_30200429($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_view']!="none"){?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&!empty($_smarty_tpl->tpl_vars['products']->value)){?><?php if (!isset($_smarty_tpl->tpl_vars['title']->value)){?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(_w('See also'), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_home_productsets'] = new Smarty_variable(array(array("name"=>$_smarty_tpl->tpl_vars['title']->value,"products"=>$_smarty_tpl->tpl_vars['products']->value)), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_home_productsets'] = new Smarty_variable(array(array("name"=>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_1_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_1_id'] : $tmp),"products"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_1_id'])),array("name"=>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_2_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_2_id'] : $tmp),"products"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_2_id'])),array("name"=>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_3_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_3_id'] : $tmp),"products"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_3_id'])),array("name"=>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_4_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_4_id'] : $tmp),"products"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_4_id'])),array("name"=>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_5_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_5_id'] : $tmp),"products"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_list_5_id']))), null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_productsets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
?><?php if (!empty($_smarty_tpl->tpl_vars['list']->value['products'])){?><?php $_smarty_tpl->createLocalArrayVariable('_home_products', null, 0);
$_smarty_tpl->tpl_vars['_home_products']->value[] = $_smarty_tpl->tpl_vars['list']->value;?><?php }?><?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['_home_products']->value)){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_use_tabs']){?><div class="home-pg__section home-pg__section_tabbed-sliders<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_view'];?>
<?php }?>"><div class="home-tab-sliders pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">PRODUCTS</span></div><div class="home-tab-sliders__menu"><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
?><div class="section-title<?php if ($_smarty_tpl->tpl_vars['list']->first){?> active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php } ?></div><div class="home-tab-sliders__content"><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
?><div class="home-tab-sliders__content-item<?php if ($_smarty_tpl->tpl_vars['list']->first){?> active<?php }?>"><div class="items-slider"><div class="slider-arrows"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div><div class="items-slider__body swiper-container<?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['products_border']){?> nobd<?php }?>"><div class="items-slider__wrapper swiper-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_quickbuy'=>true,'list_only'=>true,'show_features'=>false,'hide_description'=>true,'wrapper'=>"items-slider__item swiper-slide item-c-mob-".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['products_list_mobile_view']),'products'=>$_smarty_tpl->tpl_vars['list']->value['products']), 0);?>
</div></div></div></div><?php } ?></div></div></div><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
?><div class="home-pg__section home-pg__section_tabbed-sliders<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_products_view'];?>
<?php }?>"><div class="home-tab-sliders pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">PRODUCTS</span></div><div class="home-tab-sliders__menu"><div class="section-title active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div></div><div class="home-tab-sliders__content"><div class="home-tab-sliders__content-item active"><div class="items-slider"><div class="slider-arrows"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div><div class="items-slider__body swiper-container<?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['products_border']){?> nobd<?php }?>"><div class="items-slider__wrapper swiper-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_quickbuy'=>true,'list_only'=>true,'show_features'=>false,'hide_description'=>true,'wrapper'=>"items-slider__item swiper-slide item-c-mob-".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['products_list_mobile_view']),'products'=>$_smarty_tpl->tpl_vars['list']->value['products']), 0);?>
</div></div></div></div></div></div></div><?php } ?><?php }?><?php }?><?php }?><?php }} ?>
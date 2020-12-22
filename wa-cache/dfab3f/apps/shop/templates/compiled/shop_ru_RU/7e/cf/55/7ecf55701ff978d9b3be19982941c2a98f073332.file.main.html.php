<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:05
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/main.html" */ ?>
<?php /*%%SmartyHeaderCode:12697990835fdfafd94cd883-24897263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ecf55701ff978d9b3be19982941c2a98f073332' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/main.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12697990835fdfafd94cd883-24897263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'action' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    '_use_store_schema' => 0,
    'breadcrumbs' => 0,
    'wa_url' => 0,
    'bc' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    '_absolute_thumb_uri' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd95750a7_32445273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd95750a7_32445273')) {function content_5fdfafd95750a7_32445273($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><!-- plugin hook: 'frontend_header' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php $_smarty_tpl->tpl_vars['_use_store_schema'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['action']->value)&&($_smarty_tpl->tpl_vars['action']->value==="default")){?><?php $_smarty_tpl->tpl_vars['_use_store_schema'] = new Smarty_variable(true, null, 0);?><?php }?><div class="wrapper<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_design']=='view-10'){?> in-header-content<?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('isOrderPage')){?> order-page<?php }?>" id="page-content"><div class="main" itemscope itemtype="<?php if ($_smarty_tpl->tpl_vars['_use_store_schema']->value){?>http://schema.org/Store<?php }else{ ?>http://schema.org/WebPage<?php }?>"><?php if ($_smarty_tpl->tpl_vars['wa']->value->globals("showParentBreadcrumbs")){?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><div class="layout-center"><div class="info-pg__top"><div class="info-pg__bc"><div class="breadcrumbs breadcrumbs_<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['breadcrumbs_design'];?>
"><ul class="breadcrumbs__list"><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
">Главная</a></li><?php  $_smarty_tpl->tpl_vars['bc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bc']->key => $_smarty_tpl->tpl_vars['bc']->value){
$_smarty_tpl->tpl_vars['bc']->_loop = true;
?><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['bc']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul></div></div><div class="info-pg__tab-menu"><div class="info-pg__tab-menu-btn" href="#"><svg class="icon" width="16" height="10"><use xlink:href="#icon-blog-menu"></use></svg><span>Навигация</span></div></div><div class="info-pg__dropdown"></div></div></div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['_use_store_schema']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_address'])){?><meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['address'];?>
"><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_price_range'])){?><meta itemprop="priceRange" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_price_range'];?>
"><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo'])){?><?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['wa_theme_url']->value,1);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_absolute_thumb_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa']->value->url(true)).$_tmp1.((string)$_smarty_tpl->tpl_vars['theme_settings']->value['logo'])."?v".((string)$_smarty_tpl->tpl_vars['wa_theme_version']->value), null, 0);?><meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_absolute_thumb_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<div class="b-popup b-popup_fast mfp-hide mfp-with-anim" id="quickview-popup"><div class="b-popup__inner"><div class="b-fastview"><div class="item-pg"></div></div></div></div><div class="b-popup b-popup_item-option mfp-with-anim mfp-hide" id="extend-purchase"><div class="b-popup__inner"><div class="b-popup-it-opt"><div class="b-popup-it-opt__header"><div class="b-popup-it-opt__title"></div></div><div class="b-popup-it-opt__content"></div></div></div></div><div class="b-popup b-popup_cart-2 b-popup_compare" id="compare-popup" data-ttl="5"><div class="b-popup__inner"><div class="popup-compare"><div class="popup-compare__inner"><div class="popup-compare__icon"><svg class="icon" width="24" height="17"><use xlink:href="#icon-tick-big"></use></svg></div><a class="popup-compare__image js-compare-popup-productlink" href="#"><img src="#" class="js-compare-popup-productimg" alt=""></a><div class="popup-compare__info"><a class="popup-compare__item-title js-compare-popup-productlink js-compare-popup-productname" href="#"></a></div><a href="#" class="popup-compare__btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-3 js-compare-link"><span>сравнить товары <strong class="compare-popup-count">(0)</strong></span></a><button class="popup-compare__close-btn close-x default-btn"><svg class="icon cent-icon" width="8" height="8"><use xlink:href="#arrow-x"></use></svg></button></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_added_popup_design']=="center"){?><div class="b-popup b-popup_cart-1 mfp-with-anim auto-popup mfp-hide" id="added-to-cart"><div class="b-popup__inner"><div class="b-popup-cart b-popup-cart_1"><div class="b-popup-cart__inner"><div class="b-popup-cart__head"><svg class="icon" width="24" height="17"><use xlink:href="#icon-tick-big"></use></svg><div class="b-popup-cart__head-text">Товар добавлен в корзину</div></div><div class="b-popup-cart__content"><div class="b-popup-cart__main-content"><div class="b-popup-cart__image"><img src="#" alt=""></div><div class="b-popup-cart__info"><span class="b-popup-cart__item-title js-item__title"></span><div class="b-popup-cart__qty grey js-item__quantity">Количество: <span>1</span></div></div><div class="b-popup-cart__price"><div class="b-popup-cart__price-old grey"></div><div class="b-popup-cart__price-new"></div></div></div><div class="b-popup-cart__buttons"><a class="b-popup-cart__btn-continue btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-4" href="#"><span>Продолжить покупки</span></a><a class="b-popup-cart__btn-go-cart btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-2" href="<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
<?php }?>"><span>Перейти в корзину</span></a></div></div></div></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['products_added_popup_design']=="top"){?><div class="b-popup b-popup_cart-2" id="added-to-cart"><div class="b-popup__inner"><div class="b-popup-cart b-popup-cart_2"><div class="b-popup-cart__inner"><div class="b-popup-cart__close-btn">Закрыть окно</div><div class="b-popup-cart__head"><svg class="icon" width="24" height="17"><use xlink:href="#icon-tick-big"></use></svg><div class="b-popup-cart__notif grey">(<?php echo smarty_modifier_replace("Окно закроется через %s сек.",'%s','<span class="countdown grey" data-ttl="5"></span>');?>
)</div></div><div class="b-popup-cart__content"><div class="b-popup-cart__main-content mb-hide"><div class="b-popup-cart__image"><img src="#" alt=""></div><div class="b-popup-cart__info"><div class="b-popup-cart__item-title js-item__title"></div><div class="b-popup-cart__qty grey js-item__quantity">Количество: <span>1</span></div></div><div class="b-popup-cart__price"><div class="b-popup-cart__price-old grey"></div><div class="b-popup-cart__price-new"></div></div></div><div class="b-popup-cart__buttons"><a class="b-popup-cart__btn-go-cart btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-2" href="<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
<?php }?>"><span>Перейти в корзину</span></a></div></div></div></div></div></div><?php }?></div></div><?php }} ?>
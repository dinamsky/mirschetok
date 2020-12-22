<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/index.html" */ ?>
<?php /*%%SmartyHeaderCode:19828378725fdfafd86afa71-55959773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab389b15d008652feee8ae1af2461ea18d0d0a1b' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/index.html',
      1 => 1596613227,
      2 => 'file',
    ),
    '76398fd735606fc39b5dd8d93e2e0f119ddc676f' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/system.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19828378725fdfafd86afa71-55959773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'canonical' => 0,
    'rss' => 0,
    'wa_real_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'wa_static_url' => 0,
    'wa_active_theme_path' => 0,
    'theme_settings' => 0,
    'compare' => 0,
    'theme_favorite' => 0,
    '_topcart_items' => 0,
    '_cart_url' => 0,
    'cart_total' => 0,
    'theme_viewed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd8becfa6_52401417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd8becfa6_52401417')) {function content_5fdfafd8becfa6_52401417($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php /*  Call merged included template "system.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("system.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1, '19828378725fdfafd86afa71-55959773');
content_5fdfafd86b9954_06269515($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "system.html" */?><!DOCTYPE html><html class="roboto" lang="<?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()){?><?php echo mb_substr(mb_strtolower($_smarty_tpl->tpl_vars['wa']->value->locale(), 'UTF-8'),0,2);?>
<?php }else{ ?>en<?php }?>"><head><meta charset="utf-8"><title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title><meta content="designmyshop.ru" name="author"><meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" /><meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" /><meta content="width=device-width, initial-scale=1" name="viewport"><meta content="ie=edge" http-equiv="x-ua-compatible"><?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?><link rel="shortcut icon" href="/favicon.ico"/><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['rss']->value){?><link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
"><?php }?><?php }?><link rel="stylesheet" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['wa_real_theme_url']->value;?>
css/fonts.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"><link rel="stylesheet" media="all" href="<?php echo $_smarty_tpl->tpl_vars['wa_real_theme_url']->value;?>
css/vendor.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"><link rel="stylesheet" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/font/ruble/arial/fontface.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" /><link rel="stylesheet" media="all" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/main.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
<!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]--><!--[if lt IE 10 ]><p class="chromeframe" style="background-color:yellow;">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/?locale=ru" style="color: red; font-weight: bold;">Скачайте новый браузер абсолютно бесплатно</a> или <a href="http://www.google.com/chromeframe/?redirect=true">активируй Google Chrome Frame</a>чтобы пользоваться всеми возможностями сайта.</p><![endif]--><!-- Custom Browsers Color Start --><!-- Chrome, Firefox OS and Opera --><meta name="theme-color" content="#fff"><!-- Windows Phone --><meta name="msapplication-navbutton-color" content="#fff"><!-- iOS Safari --><meta name="apple-mobile-web-app-status-bar-style" content="#fff"><!-- Custom Browsers Color End --><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<link rel="stylesheet" media="all" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/themecolors/<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_color_scheme'],'img/themecolors/',''),'.png','');?>
.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->head();?>
<link rel="stylesheet" media="all" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/user.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></head><body<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_on']){?> class="boxed"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image'])){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image_type']=='repeat'){?> style="background:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_color'];?>
 url(<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image'];?>
) repeat"<?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image_type']=='center'){?> style="background:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_color'];?>
 url(<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image'];?>
) no-repeat center top"<?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image_type']=='cover'){?> style="background:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_color'];?>
 url(<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_image'];?>
) no-repeat;background-size:contain;"<?php }?><?php }else{ ?> style="background:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_color'];?>
 url(<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_bg_pattern'],'img/boxed/preview/','img/boxed/');?>
)"<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->globals("viewed_product_id")){?> data-viewed="<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('viewed_product_id');?>
"<?php }?> data-theme-id="balance"><main id="my-page"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['alerting_on']&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['alerting_text'])&&!waRequest::cookie('balance_hide_alerting',0)){?><div class="top-message" style="background-color:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['alerting_background'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['alerting_color'];?>
"><div class="top-message__inner"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['alerting_text'];?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['alerting_show_close']){?><div class="top-message__close-btn">Закрыть</div><?php }?></div></div><?php }?><div class="page-preloader"><div class="inner-loader"></div></div><div class="outer-wrapper<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('is_product_page')){?> item-page<?php }elseif($_smarty_tpl->tpl_vars['wa']->value->globals('isOrderPage')){?> order-page<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sticky_panel']=='bottom'&&!$_smarty_tpl->tpl_vars['wa']->value->globals('hideUserPanel')){?> has-bottom-panel<?php }?>"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['boxed_on']){?><div class="boxed-ui-style"></div><?php }?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->globals('useCompactHeader')){?><?php echo $_smarty_tpl->getSubTemplate ("header_mobile/".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_mobile_design']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header/".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['header_design']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("footer/".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_design']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['shop_sticky_panel']!="none"&&!$_smarty_tpl->tpl_vars['wa']->value->globals('hideUserPanel')){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sticky_panel']=="top"){?><div class="quick-panel quick-panel_top mt-hide"><div class="quick-panel__inner"><div class="quick-panel__inner-wrapper"><div class="quick-panel__buttons"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><a class="action-btn action-btn_11 has-tooltip has-tooltip_bottom js-compare-link js-compare-status<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?> not-empty<?php }?>" data-title="Сравнение" href="<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
<?php }else{ ?>javascript:void(0);<?php }?>"><span class="action-btn__inner"><svg class="icon" width="16" height="16"><use xlink:href="#icon-chart"></use></svg><span class="action-btn__text">Сравнение</span><span class="action-btn__qty md"><span class="js-compare-count"><?php echo (($tmp = @count($_smarty_tpl->tpl_vars['compare']->value))===null||$tmp==='' ? 0 : $tmp);?>
</span></span></span><span class="b-tooltip">Сравнение</span></a><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><a class="action-btn action-btn_11 has-tooltip has-tooltip_bottom js-wishlist-status<?php if (count($_smarty_tpl->tpl_vars['theme_favorite']->value)>0){?> not-empty<?php }?>" data-title="Избранное" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=favorites"><span class="action-btn__inner"><svg class="icon" width="16" height="14"><use xlink:href="#icon-heart"></use></svg><span class="action-btn__text">Избранное</span><span class="action-btn__qty md"><span class="js-wishlist-count"><?php echo (($tmp = @count($_smarty_tpl->tpl_vars['theme_favorite']->value))===null||$tmp==='' ? 0 : $tmp);?>
</span></span></span><span class="b-tooltip">Избранное</span></a><?php }?></div><div class="quick-panel__cart"><a class="cart-btn cart-btn_13 js-flycart-status<?php if (empty($_smarty_tpl->tpl_vars['_topcart_items']->value)){?> empty<?php }?>" href="<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
<?php }?>"><span class="cart-btn__inner"><span class="action-btn action-btn_13 action-btn_cart"><span class="action-btn__inner"><svg class="icon" width="19" height="18"><use xlink:href="#icon-cart"></use></svg><span class="action-btn__qty md js-minicart-count"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->cart->count();?>
</span></span></span><span class="cart-btn__text"><strong>Корзина</strong><span class="cart-btn__price-wr"><strong class="js-minicart-total"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</strong></span></span></span></a></div></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['shop_sticky_panel']=="bottom"){?><div class="bottom-panel mb-hide"><div class="bottom-panel__inner"><div class="bottom-panel__btns"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><div class="bottom-panel__btn"><a class="action-btn action-btn_4 js-compare-link js-compare-status<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?> not-empty<?php }?>" href="<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
<?php }else{ ?>javascript:void(0);<?php }?>"><span class="action-btn__inner"><svg class="icon" width="16" height="16"><use xlink:href="#icon-chart"></use></svg><span class="action-btn__text tb-hide">Сравнение</span><span class="action-btn__qty md js-compare-count"><?php echo count($_smarty_tpl->tpl_vars['compare']->value);?>
</span></span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><div class="bottom-panel__btn"><a class="action-btn action-btn_4 js-wishlist-status<?php if (count($_smarty_tpl->tpl_vars['theme_favorite']->value)>0){?> not-empty<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=favorites"><span class="action-btn__inner"><svg class="icon" width="16" height="14"><use xlink:href="#icon-heart"></use></svg><span class="action-btn__text tb-hide">Избранное</span><span class="action-btn__qty md js-wishlist-count"><?php echo count($_smarty_tpl->tpl_vars['theme_favorite']->value);?>
</span></span></a></div><?php }?><div class="bottom-panel__btn"><a class="action-btn action-btn_4 js-viewed-status<?php if (count($_smarty_tpl->tpl_vars['theme_viewed']->value)>0){?> not-empty<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=viewed"><span class="action-btn__inner"><svg class="icon" width="16" height="12"><use xlink:href="#icon-eye"></use></svg><span class="action-btn__text tb-hide">Просмотренные товары</span><span class="action-btn__qty md js-viewed-count"><?php echo (($tmp = @count($_smarty_tpl->tpl_vars['theme_viewed']->value))===null||$tmp==='' ? 0 : $tmp);?>
</span></span></a></div></div><div class="bottom-panel__cart"><a class="cart-btn cart-btn_13 js-flycart-status<?php if (empty($_smarty_tpl->tpl_vars['_topcart_items']->value)){?> empty<?php }?>" href="<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
<?php }?>"><span class="cart-btn__inner"><span class="action-btn action-btn_13 action-btn_cart"><span class="action-btn__inner"><svg class="icon" width="19" height="18"><use xlink:href="#icon-cart"></use></svg><span class="action-btn__qty md js-minicart-count"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->cart->count();?>
</span></span></span><span class="cart-btn__text"><strong>Корзина</strong><span class="cart-btn__price-wr"><strong class="js-minicart-total"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</strong></span></span></span></a></div></div></div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_scrolltop_button']){?><div class="scroll-to-top"><svg class="icon" width="20" height="16"><use xlink:href="#icon-scroll-arrow"></use></svg></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['address_map'])){?><div class="b-popup b-popup_item-option mfp-with-anim mfp-hide" id="address-map"><div class="b-popup__inner"><div class="b-popup-it-opt"><div class="b-popup-it-opt__content"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['address_map'];?>
</div></div></div></div><?php }?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/vendor.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" defer></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/libs.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" defer></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" defer></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/main.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" defer></script><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<!--IE10 Flexbox detection polyfill--><script>(function(doc){var scripts = doc.getElementsByTagName('script');var script = scripts[scripts.length - 1];var xhr = new XMLHttpRequest();xhr.onload = function(){var div = doc.createElement('div');div.innerHTML = this.responseText;div.style.display = 'none';script.parentNode.insertBefore(div, script);};xhr.open('get', '<?php echo $_smarty_tpl->tpl_vars['wa_real_theme_url']->value;?>
img/sprite-sym.svg', true);xhr.send();})(document);</script><!--[if lt IE 10 ]><p class="chromeframe" style="background-color:yellow;">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/?locale=ru" style="color: red; font-weight: bold;">Скачайте новый браузер абсолютно бесплатно</a> или <a href="http://www.google.com/chromeframe/?redirect=true">активируй Google Chrome Frame</a>чтобы пользоваться всеми возможностями сайта.</p><![endif]--></div></main></body></html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/system.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfafd86b9954_06269515')) {function content_5fdfafd86b9954_06269515($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_social_svg_styles'] = new Smarty_variable(array('vkontakte'=>array('id'=>'vk','icon'=>'<svg class="icon cent-icon" width="16" height="9"><use xlink:href="#icon-vk"></use></svg>'),'facebook'=>array('id'=>'fb','icon'=>'<svg class="icon cent-icon" width="7" height="16"><use xlink:href="#icon-fb"></use></svg>'),'google'=>array('id'=>'ggp','icon'=>'<svg class="icon cent-icon" width="18" height="10"><use xlink:href="#icon-gp"></use></svg>'),'twitter'=>array('id'=>'tw','icon'=>'<svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-tw"></use></svg>'),'yandex'=>array('id'=>'ya','icon'=>'<svg class="icon cent-icon" width="8" height="15"><use xlink:href="#icon-ya"></use></svg>'),'mailru'=>array('id'=>'magent','icon'=>'<svg class="icon cent-icon" width="16" height="15"><use xlink:href="#icon-magent"></use></svg>')), null, 0);?><?php $_smarty_tpl->tpl_vars['_theme_config'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']=='site-pages'){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->site){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
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
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header_mobile/view-4.html" */ ?>
<?php /*%%SmartyHeaderCode:15304431955fdfafd8c21a33-94279847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9300cbf51b1ab93919511f9db28b5cda1dd94dec' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header_mobile/view-4.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15304431955fdfafd8c21a33-94279847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_theme_config' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa' => 0,
    'compare' => 0,
    'theme_favorite' => 0,
    '_cart_url' => 0,
    '_topcart_items' => 0,
    'cat' => 0,
    'subcat' => 0,
    'subsubcat' => 0,
    'theme_viewed' => 0,
    'currencies' => 0,
    'c_code' => 0,
    'page' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd8e45788_71990405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd8e45788_71990405')) {function content_5fdfafd8e45788_71990405($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?><header class="site-header site-header_mob site-header_4<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_mobile_style']=='dark'){?> site-header_dark<?php }?><?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['header_mobile_catalog']){?> no-menu-btn<?php }?>"><div class="site-header__menu-row"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_mobile_catalog']&&!empty($_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'])){?><a class="cat-menu-btn-mob" href="#"><span class="cat-menu-btn-mob__inner"><span class="icon"><svg class="icon" width="10" height="10"><use xlink:href="#icon-catalog-mob"></use></svg></span><span class="cat-menu-btn-mob__text"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=="shop-categories"){?>Каталог товаров<?php }else{ ?>Навигация<?php }?></span></span></a><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'])){?><div class="tab-search"><div class="site-search default"><form action="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
" data-images="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_show_photos'];?>
" data-limit="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_max_results'])===null||$tmp==='' ? 3 : $tmp);?>
"><div class="site-search__inner"><input class="site-search__input" type="search" name="query" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['placeholder'];?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'])){?><?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'];?>
<?php }?>" /><button class="site-search__btn default-btn"><svg class="icon cent-icon" width="16" height="16"><use xlink:href="#icon-search"></use></svg><span class="site-search__btn-text">Поиск</span></button></div></form></div></div><?php }?></div><div class="site-header__main"><div class="site-header__main-inner"><div class="site-header__hamb-logo"><a class="hamburger" href="#mmenu"><span class="hamburger__inner"></span></a><a class="site-header__logo" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['header_logo_mobile'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['header_logo'] : $tmp);?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"></a></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'])){?><div class="site-header__tel"><div class="callback-wr"><div class="callback-info"><div class="callback-info__inner"><div class="callback-info__main-num callback-info__main-num_top"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><div class="callback-info__main-num-text has-down-arrow"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'];?>
</div><div class="callback-info__main-content"><div class="callback-info__main-content-top"><div class="callback-info__call-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1_text'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'])){?><div class="callback-info__main-num"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><div class="callback-info__main-num-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'];?>
</div></div><div class="callback-info__call-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2_text'];?>
</div><?php }?><div class="callback-info__call-btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-2 balance_callback"><span>Обратный звонок</span><div class="hover-anim"></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'])){?><div class="callback-info__main-content-bottom"><div class="callback-info__daytime-title">Режим работы:</div><div class="callback-info__daytime-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'];?>
</div></div><?php }?></div></div></div></div></div></div><?php }?><div class="site-header__actions"><div class="site-actions site-actions_mob"><?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?><div class="site-actions__btn site-actions__btn_user"><a class="action-btn" href=""><span class="action-btn__inner"><svg class="icon" width="19" height="22"><use xlink:href="#icon-user"></use></svg><span class="action-btn__text">Личный кабинет</span></span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><div class="site-actions__btn site-actions__btn_comp"><a class="action-btn js-compare-link js-compare-status<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?> not-empty<?php }?>" href="<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
<?php }else{ ?>javascript:void(0);<?php }?>"><span class="action-btn__inner"><svg class="icon" width="20" height="20"><use xlink:href="#icon-chart"></use></svg><span class="action-btn__text">Сравнение</span><span class="action-btn__qty js-compare-count"><?php echo count($_smarty_tpl->tpl_vars['compare']->value);?>
</span></span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><div class="site-actions__btn site-actions__btn_fav"><a class="action-btn js-wishlist-status<?php if (count($_smarty_tpl->tpl_vars['theme_favorite']->value)>0){?> not-empty<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=favorites"><span class="action-btn__inner"><svg class="icon" width="20" height="19"><use xlink:href="#icon-heart"></use></svg><span class="action-btn__text">Избранное</span><span class="action-btn__qty js-wishlist-count"><?php echo count($_smarty_tpl->tpl_vars['theme_favorite']->value);?>
</span></span></a></div><?php }?><div class="site-actions__btn site-actions__btn_cart"><a href="<?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
" class="action-btn js-minicart<?php if (!empty($_smarty_tpl->tpl_vars['_topcart_items']->value)){?> not-empty<?php }else{ ?> is-empty<?php }?>"><div class="action-btn__inner"><svg class="icon" width="24" height="20"><use xlink:href="#icon-cart"></use></svg><div class="action-btn__qty js-minicart-count"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->cart->count();?>
</div></div></a></div><?php }?></div></div></div></div><div class="mob-search"><form action="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
" data-images="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_show_photos'];?>
" data-limit="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_max_results'])===null||$tmp==='' ? 3 : $tmp);?>
"><input type="search" name="query" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['placeholder'];?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'])){?><?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'];?>
<?php }?>"><input type="submit"></form></div><nav class="mobile-nav" id="mmenu"><ul class="mobile-nav__list"><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'])){?><li class="mobile-nav__item mobile-nav__item_catalog mobile-nav__item_main"><span class="mobile-nav__btn"><svg class="icon" width="16" height="16"><use xlink:href="#icon-catalog-mob"></use></svg><span class="mobile-nav__text"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_links']=="shop-categories"){?>Каталог товаров<?php }else{ ?>Навигация<?php }?></span></span><ul class="mobile-nav__list"><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['params']['mainmenu_hide'])){?><?php continue 1?><?php }?><li class="mobile-nav__item"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><span class="mobile-nav__btn"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><span class="mobile-nav__icon mobile-nav__icon_big"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?>
" alt></span><?php }?><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span></span><ul class="mobile-nav__list mobile-nav__list_next"><li class="mobile-nav__item"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
">Посмотреть все товары</a></li><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?><li class="mobile-nav__item"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><span class="mobile-nav__btn"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><span class="mobile-nav__icon mobile-nav__icon_big"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?>
" alt></span><?php }?><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span></span><ul class="mobile-nav__list mobile-nav__list_next"><li class="mobile-nav__item"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
">Посмотреть все товары</a></li><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
?><li class="mobile-nav__item"><a href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
" class="mobile-nav__btn"><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'])){?><span class="mobile-nav__icon mobile-nav__icon_big"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'];?>
" alt></span><?php }?><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</span></a></li><?php } ?></ul><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
" class="mobile-nav__btn"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><span class="mobile-nav__icon mobile-nav__icon_big"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?>
" alt></span><?php }?><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span></a><?php }?></li><?php } ?></ul><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
" class="mobile-nav__btn"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><span class="mobile-nav__icon mobile-nav__icon_big"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?>
" alt></span><?php }?><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span></a><?php }?></li><?php } ?></ul></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'])){?><li class="mobile-nav__item mobile-nav__item_main mobile-nav__item_search"><div class="mobile-nav-search"><form action="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
" data-images="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_show_photos'];?>
" data-limit="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_max_results'])===null||$tmp==='' ? 3 : $tmp);?>
"><input type="search" name="query" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['placeholder'];?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'])){?><?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'];?>
<?php }?>"><button type="submit"><svg class="icon" width="15" height="15"><use xlink:href="#icon-search"></use></svg></button></form></div></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'])){?><li class="mobile-nav__item mobile-nav__item_main mobile-nav__item_callback"><span class="mobile-nav__btn"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><span class="mobile-nav__text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'];?>
</span></span><ul class="mobile-nav__list"><li class="mobile-nav__item"><span class="b-contact"><span class="b-contact__top"><span class="b-contact__top-item"><span class="b-contact__tel"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><a class="b-contact__tel-text" href="tel:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'],"/[^+0-9]/",'');?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'];?>
</a></span><span class="b-contact__callinfo"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1_text'];?>
</span></span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'])){?><span class="b-contact__top-item"><span class="b-contact__tel"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><a class="b-contact__tel-text" href="tel:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'],"/[^+0-9]/",'');?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'];?>
</a></span><span class="b-contact__callinfo"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2_text'];?>
</span></span><?php }?><a class="b-contact__btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn btn_main-2 balance_callback" href="#"><span>Обратный звонок</span><div class="hover-anim"></div></a></span><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'])){?><span class="b-contact__bottom"><span class="b-contact__worktime">Режим работы</span><span class="b-contact__workinfo"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'];?>
</span></span><?php }?></span></li></ul></li><?php }?><?php if (0){?><li class="mobile-nav__item mobile-nav__item_main"><a class="mobile-nav__btn" href="#"><svg class="icon" width="16" height="16"><use xlink:href="#icon-gps"></use></svg><span class="mobile-nav__text">Ваш город: Александровская-на-Амуре</span></a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?><li class="mobile-nav__item mobile-nav__item_main profile"><?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
" class="mobile-nav__btn"><svg class="icon" width="17" height="16"><use xlink:href="#icon-user"></use></svg><span class="mobile-nav__text">Личный кабинет</span></a><?php }else{ ?><span class="mobile-nav__btn"><svg class="icon" width="17" height="16"><use xlink:href="#icon-user"></use></svg><span class="mobile-nav__text">Личный кабинет</span></span><ul class="mobile-nav__list"><li class="mobile-nav__item"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a></li><li class="mobile-nav__item"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a></li></ul><?php }?></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><li class="mobile-nav__item mobile-nav__item_main"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=favorites"><svg class="icon" width="17" height="15"><use xlink:href="#icon-heart"></use></svg><span class="mobile-nav__text">Избранное</span><span class="mobile-nav__qty-count js-wishlist-count js-wishlist-status<?php if (count($_smarty_tpl->tpl_vars['theme_favorite']->value)>0){?> not-empty<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['theme_favorite']->value);?>
</span></a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><li class="mobile-nav__item mobile-nav__item_main"><a class="mobile-nav__btn js-compare-link" href="<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
<?php }else{ ?>javascript:void(0);<?php }?>"><svg class="icon" width="16" height="16"><use xlink:href="#icon-chart"></use></svg><span class="mobile-nav__text">Сравнение</span><span class="mobile-nav__qty-count js-compare-count js-compare-status<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?> not-empty<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['compare']->value);?>
</span></a></li><?php }?><li class="mobile-nav__item mobile-nav__item_main"><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=viewed"><svg class="icon" width="16" height="16"><use xlink:href="#icon-eye"></use></svg><span class="mobile-nav__text">Просмотренные товары</span><span class="mobile-nav__qty-count js-viewed-count js-viewed-status<?php if (count($_smarty_tpl->tpl_vars['theme_viewed']->value)>1){?> not-empty<?php }?>"><?php echo (($tmp = @count($_smarty_tpl->tpl_vars['theme_viewed']->value))===null||$tmp==='' ? 0 : $tmp);?>
</span></a></li><?php if (!isset($_smarty_tpl->tpl_vars['currencies']->value)){?><?php $_smarty_tpl->tpl_vars['currencies'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currencies(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_allow_change_currency']&&count($_smarty_tpl->tpl_vars['currencies']->value)>1){?><li class="mobile-nav__item mobile-nav__item_main profile"><span class="mobile-nav__btn"><svg class="icon" width="16" height="16"><use xlink:href="#icon-currency"></use></svg><span class="mobile-nav__text">Валюта</span></span><ul class="mobile-nav__list"><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?><li class="mobile-nav__item"><a class="mobile-nav__btn" href="?currency=<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
</a></li><?php } ?></ul></li><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['header_links'])){?><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['header_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><li class="mobile-nav__item mobile-nav__item_info"><?php if (!empty($_smarty_tpl->tpl_vars['page']->value['childs'])){?><span class="mobile-nav__btn mobile-nav__btn_expand"><span class="menu-toggle-text"><a class="menu-toggle-text__text" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><div class="menu-toggle-text__icon"><svg class="icon icon-plus" width="10" height="10"><use xlink:href="#icon-plus-thin"></use></svg><svg class="icon icon-minus" width="10" height="10"><use xlink:href="#icon-minus-thin"></use></svg></div></span><span class="mob-side-dropmenu" style="display:none;"><div class="mob-side-dropmenu__list"><?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?><div class="mob-side-dropmenu__item"><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div><?php } ?></div></span></span><?php }else{ ?><a class="mobile-nav__btn" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?></li><?php } ?><?php }?></ul></nav></header><?php }} ?>
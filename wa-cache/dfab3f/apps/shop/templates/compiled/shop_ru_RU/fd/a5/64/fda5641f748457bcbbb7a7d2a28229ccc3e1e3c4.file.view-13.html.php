<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/view-13.html" */ ?>
<?php /*%%SmartyHeaderCode:14153012315fdfafd8e51707-43153111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda5641f748457bcbbb7a7d2a28229ccc3e1e3c4' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/view-13.html',
      1 => 1596613227,
      2 => 'file',
    ),
    '010fb027a784fb8645dc325bfb8a4883f17bb8ee' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/cityselect.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14153012315fdfafd8e51707-43153111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_theme_config' => 0,
    'page' => 0,
    'child' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'currencies' => 0,
    'c_code' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'compare' => 0,
    'theme_favorite' => 0,
    '_topcart_items' => 0,
    '_cart_url' => 0,
    'cart_total' => 0,
    'cat' => 0,
    'subcat' => 0,
    'subsubcat' => 0,
    'subsubsubcat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd938d1e6_17124214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd938d1e6_17124214')) {function content_5fdfafd938d1e6_17124214($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><header class="site-header site-header_desk site-header_13"><div class="site-header__top"><div class="site-header__top-inner"><?php /*  Call merged included template "header/cityselect.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header/cityselect.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14153012315fdfafd8e51707-43153111');
content_5fdfafd8e598f4_26595961($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "header/cityselect.html" */?><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['header_links'])){?><div class="site-header__top-menu"><div class="top-menu top-menu_js"><ul class="top-menu__list"><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['header_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><li class="top-menu__item<?php if (!empty($_smarty_tpl->tpl_vars['page']->value['childs'])){?> univ-drop-lnk<?php }?>"><a class="top-menu__link<?php if (!empty($_smarty_tpl->tpl_vars['page']->value['childs'])){?> has-down-arrow<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!empty($_smarty_tpl->tpl_vars['page']->value['childs'])){?><ul class="top-menu__subm univ-dropd univ-dropd_list"><?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?><li class="top-menu__subm-item"><a class="top-menu__subm-link" href="<?php echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul><?php }?></li><?php } ?></ul><div class="top-menu__btn-toggler more-btn"><svg class="icon" width="13" height="3"><use xlink:href="#dots-more"></use></svg><div class="top-menu__sec-menu univ-dropd univ-dropd_list"><ul class="top-menu__sec-menu-list"></ul></div></div></div></div><?php }?><div class="site-header__contacts"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'])){?><div class="site-header__callback"><div class="callback-wr callback-wr_sideby"><div class="callback-info"><div class="callback-info__inner"><div class="callback-info__main-num callback-info__main-num_top"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><div class="callback-info__main-num-text has-down-arrow"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1'];?>
</div><div class="callback-info__main-content"><div class="callback-info__main-content-top"><div class="callback-info__call-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_1_text'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'])){?><div class="callback-info__main-num"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><div class="callback-info__main-num-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2'];?>
</div></div><div class="callback-info__call-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_phone_2_text'];?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_btn_callback']){?><div class="callback-info__call-btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-2 balance_callback"><span>Обратный звонок</span><div class="hover-anim"></div></div><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'])){?><div class="callback-info__main-content-bottom"><div class="callback-info__daytime-title">Режим работы:</div><div class="callback-info__daytime-text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_workhours'];?>
</div></div><?php }?></div></div></div></div><div class="callback-popup"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_contacts_btn_callback']){?><a class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-6 balance_callback" href="#"><div class="hover-anim"></div><span>Обратный звонок</span></a><?php }?></div></div></div><?php }?><div class="site-header__social"><?php echo $_smarty_tpl->getSubTemplate ("header/socials.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if (!isset($_smarty_tpl->tpl_vars['currencies']->value)){?><?php $_smarty_tpl->tpl_vars['currencies'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currencies(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_allow_change_currency']&&count($_smarty_tpl->tpl_vars['currencies']->value)>1){?><div class="site-header__currency"><div class="currency"><div class="currency__head"><div class="currency__text"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
</div><svg class="icon icon-solid" width="7" height="4"><use xlink:href="#icon-down-solid"></use></svg></div><div class="currency__dropdown"><ul class="drop-list drop-list_multi"><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?><li class="drop-list__item"><a class="drop-list__link" href="?currency=<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
</a></li><?php } ?></ul></div></div></div><?php }?><?php }?></div></div></div><div class="site-header__mid"><div class="site-header__mid-inner"><div class="site-header__mid-main"><div class="site-header__mid-logo"><a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_logo'];?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"></a></div><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'])){?><div class="site-header__search"><div class="site-search default"><form<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_on']){?> class="search__form-autocomplete <?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['class'];?>
"<?php }?> action="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
" data-images="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_show_photos'];?>
" data-limit="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_max_results'])===null||$tmp==='' ? 3 : $tmp);?>
"><div class="site-search__inner"><div class="site-search__input-wrapper"><input class="site-search__input site-search__input_merged" type="search" name="query" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['placeholder'];?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'])){?><?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['query'];?>
<?php }?>" /><div class="site-search__loader"></div></div><button class="site-search__btn default-btn" type="submit"><svg class="icon cent-icon" width="16" height="16"><use xlink:href="#icon-search"></use></svg><span class="site-search__btn-text">Поиск</span></button></div></form><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['searchautocomplete_on']){?><div class="autocomplete-suggestions"><div class="autocomplete-suggestion autocomplete-suggestion-showall"><a class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-9 view-all" href="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
" data-href="<?php echo $_smarty_tpl->tpl_vars['_theme_config']->value['search']['url'];?>
?*"><div class="hover-anim"></div><span>Посмотреть все результаты</span></a></div></div><?php }?></div></div><?php }?></div><div class="site-header__action"><div class="site-actions site-actions_13"><?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?><div class="site-actions__btn profile"><a class="profile-link profile-link_buttoned" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
"><span class="profile-link__body"><svg class="icon" width="17" height="16"><use xlink:href="#icon-user"></use></svg><span class="profile-link__text">Личный кабинет</span></span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><div class="site-actions__btn"><a class="action-btn action-btn_13 has-tooltip js-compare-status<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?> not-empty<?php }?> js-compare-link" data-title="Сравнение" href="<?php if (count($_smarty_tpl->tpl_vars['compare']->value)>1){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
<?php }else{ ?>javascript:void(0);<?php }?>"><span class="action-btn__inner"><svg class="icon" width="25" height="25"><use xlink:href="#icon-chart"></use></svg><span class="action-btn__text">Сравнение</span><span class="action-btn__qty lg js-compare-count"><?php echo count($_smarty_tpl->tpl_vars['compare']->value);?>
</span></span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><div class="site-actions__btn"><a class="action-btn action-btn_13 has-tooltip js-wishlist-status<?php if (count($_smarty_tpl->tpl_vars['theme_favorite']->value)>0){?> not-empty<?php }?>" data-title="Избранное" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search/');?>
?_balance_type=favorites"><span class="action-btn__inner"><svg class="icon" width="29" height="25"><use xlink:href="#icon-heart"></use></svg><span class="action-btn__text">Избранное</span><span class="action-btn__qty lg js-wishlist-count"><?php echo count($_smarty_tpl->tpl_vars['theme_favorite']->value);?>
</span></span></a></div><?php }?><?php }?><div class="site-actions__btn site-actions__btn_cart js-minicart-wrapper js-minicart-status js-minicart-flystatus<?php if (!empty($_smarty_tpl->tpl_vars['_topcart_items']->value)){?> not-empty<?php }else{ ?> is-empty<?php }?>" data-carturl="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
" data-dummyimg="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy96.png"><a class="cart-btn cart-btn_13" href="<?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
"><span class="cart-btn__inner"><span class="action-btn action-btn_13 action-btn_cart"><span class="action-btn__inner"><svg class="icon" width="30" height="30"><use xlink:href="#icon-cart"></use></svg><span class="action-btn__qty lg js-minicart-count"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->cart->count();?>
</span></span></span><span class="cart-btn__text">Корзина&nbsp;<span class="cart-btn__price-wr js-minicart-total"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</span><span class="cart-empty__price-wr">пуста</span></span></span></a><?php echo $_smarty_tpl->getSubTemplate ("header/minicart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links'])){?><div class="site-header__menu-row"><div class="site-header__menu-row-inner"><div class="menu-row menu-row_buttoned"><div class="hor-menu hor-menu_buttoned"><ul class="hor-menu__list hor-menu__list_devider"><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['mainmenu_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['params']['mainmenu_hide'])){?><?php continue 1?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['cat']->value['_childs_grid'])&&in_array($_smarty_tpl->tpl_vars['cat']->value['_childs_grid'],array('mega','book','mono'))){?><?php $_smarty_tpl->createLocalArrayVariable('cat', null, 0);
$_smarty_tpl->tpl_vars['cat']->value['_childs_grid'] = $_smarty_tpl->tpl_vars['cat']->value['_childs_grid'];?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('cat', null, 0);
$_smarty_tpl->tpl_vars['cat']->value['_childs_grid'] = $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_childs_grid'];?><?php }?><?php if ($_smarty_tpl->tpl_vars['cat']->value['_childs_grid']=="mega"){?><li class="hor-menu__item<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?> has-subm<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><div class="hor-menu__submenu mega"><div class="mega-m"><ul class="mega-m__inner"><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?><li class="mega-m__item"><div class="menu-categ"><div class="menu-categ__header"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><a class="menu-categ__image" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><img class="menu-categ__img lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a><?php }?><a class="menu-categ__title" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><div class="menu-categ__title-text"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'])){?><span class="menu-categ__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></a></div><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><ul class="menu-categ__list<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse']>0){?> menu-categ__list_show-more<?php }?>"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse']>0){?> data-show="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse'];?>
" data-more-text="показать еще" data-less-text="свернуть"<?php }?>><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
?><li class="menu-categ__item"><a class="menu-categ__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><span class="menu-categ__link-txt"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'])){?><span class="label label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'];?>
</span><?php }?></a></li><?php } ?></ul><?php }?></div></li><?php } ?></ul></div></div><?php }?><a class="hor-menu__lnk" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><span class="hor-menu__i-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="hor-menu__text"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'])){?><span class="label label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'];?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><svg class="icon" width="7" height="4"><use xlink:href="#icon-down-btn"></use></svg><?php }?></a></li><?php }elseif($_smarty_tpl->tpl_vars['cat']->value['_childs_grid']=="book"){?><li class="hor-menu__item<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?> has-subm<?php }?>"><div class="hor-menu__submenu mega"><div class="book-m book-m_flex"><div class="vert-m vert-m_g book-m__side-menu"><ul class="vert-m__list"><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?><li class="vert-m__item<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?> vert-m__item_has-submenu<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><div class="vert-m__submenu-book"><div class="vert-m__submenu-title"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</div><div class="mega-m"><ul class="mega-m__inner nulled-font"><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
?><li class="mega-m__item mega-m__item_book"><div class="menu-categ"><div class="menu-categ__header"><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'])){?><a class="menu-categ__image" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><img class="menu-categ__img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsubcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a><?php }?><a class="menu-categ__title" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><div class="menu-categ__title-text"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'])){?><span class="menu-categ__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></a></div><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?><ul class="menu-categ__list<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse']>0){?> menu-categ__list_show-more<?php }?>"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse']>0){?> data-show="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['mainmenu_submenu_collapse'];?>
" data-more-text="показать еще" data-less-text="свернуть"<?php }?>><?php  $_smarty_tpl->tpl_vars['subsubsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subsubcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubsubcat']->key => $_smarty_tpl->tpl_vars['subsubsubcat']->value){
$_smarty_tpl->tpl_vars['subsubsubcat']->_loop = true;
?><li class="menu-categ__item"><a class="menu-categ__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['url'];?>
"><span class="menu-categ__link-txt"><?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_text'])){?><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_text'];?>
</span><?php }?></a></li><?php } ?></ul><?php }?></div></li><?php } ?></ul></div></div><?php }?><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><span class="vert-m__item-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><span class="vert-m__arrow"><svg class="icon" width="6" height="12"><use xlink:href="#arrow-vert-menu"></use></svg><svg class="icon icon-hover" width="6" height="12"><use xlink:href="#arrow-vert-menu-hover"></use></svg></span><?php }?></a></li><?php } ?></ul></div><div class="book-m__content-side"><div class="book-m__call-to-action"><svg class="icon" width="16" height="12"><use xlink:href="#icon-hamburger"></use></svg>Выберите категорию</div></div></div></div><a class="hor-menu__lnk" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><span class="hor-menu__i-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="hor-menu__text"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'])){?><span class="label label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'];?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><svg class="icon" width="7" height="4"><use xlink:href="#icon-down-btn"></use></svg><?php }?></a></li><?php }else{ ?><li class="hor-menu__item<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?> has-subm has-vert-subm<?php }?>"><div class="hor-menu__submenu vertikal"><div class="vert-m vert-m_g vert-m_js"><ul class="vert-m__list side-menu"><?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['subcat']->value['submenu_mono_viewtype']=='opened'){?><li class="vert-m__item<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?> vert-m__item_minisubm<?php }?> not-easy-menu"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><div class="vert-m__mini-subm"><ul class="vert-m__mini-subm-list"><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
?><li class="vert-m__mini-subm-i"><a class="vert-m__mini-subm-l" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</a></li><?php } ?></ul></div><?php }?><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span></a></li><?php }elseif($_smarty_tpl->tpl_vars['subcat']->value['submenu_mono_viewtype']=='dropdown'){?><li class="vert-m__item<?php if (empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?> not-easy-menu<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><ul class="vert-m__submenu"><?php  $_smarty_tpl->tpl_vars['subsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubcat']->key => $_smarty_tpl->tpl_vars['subsubcat']->value){
$_smarty_tpl->tpl_vars['subsubcat']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['subsubcat']->value['submenu_mono_viewtype']=='opened'){?><li class="vert-m__item<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?> vert-m__item_minisubm<?php }?> not-easy-menu"><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?><div class="vert-m__mini-subm"><ul class="vert-m__mini-subm-list"><?php  $_smarty_tpl->tpl_vars['subsubsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subsubcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubsubcat']->key => $_smarty_tpl->tpl_vars['subsubsubcat']->value){
$_smarty_tpl->tpl_vars['subsubsubcat']->_loop = true;
?><li class="vert-m__mini-subm-i"><a class="vert-m__mini-subm-l" href="<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['name'];?>
</a></li><?php } ?></ul></div><?php }?><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span></a></li><?php }elseif($_smarty_tpl->tpl_vars['subsubcat']->value['submenu_mono_viewtype']=='dropdown'){?><li class="vert-m__item<?php if (empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?> not-easy-menu<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?><ul class="vert-m__submenu"><?php  $_smarty_tpl->tpl_vars['subsubsubcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubsubcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subsubcat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubsubcat']->key => $_smarty_tpl->tpl_vars['subsubsubcat']->value){
$_smarty_tpl->tpl_vars['subsubsubcat']->_loop = true;
?><li class="vert-m__item"><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['menu_icon'])){?><span class="vert-m__item-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsubsubcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['name'];?>
</span><?php if (!empty((($tmp = @$_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_text'])===null||$tmp==='' ? '' : $tmp))){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubsubcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span></a></li><?php } ?></ul><?php }?><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'])){?><span class="vert-m__item-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsubcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['childs'])){?><span class="vert-m__arrow"><svg class="icon" width="6" height="12"><use xlink:href="#arrow-vert-menu"></use></svg><svg class="icon icon-hover" width="6" height="12"><use xlink:href="#arrow-vert-menu-hover"></use></svg></span><?php }?></a></li><?php }else{ ?><li class="vert-m__item not-easy-menu"><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['url'];?>
"><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['name'];?>
</span><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subsubcat']->value['params']['menu_label_text'];?>
</span></span></span></a></li><?php }?><?php } ?></ul><?php }?><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['menu_icon'])){?><span class="vert-m__item-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['childs'])){?><span class="vert-m__arrow"><svg class="icon" width="6" height="12"><use xlink:href="#arrow-vert-menu"></use></svg><svg class="icon icon-hover" width="6" height="12"><use xlink:href="#arrow-vert-menu-hover"></use></svg></span><?php }?></a></li><?php }else{ ?><li class="vert-m__item not-easy-menu"><a class="vert-m__link" href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
"><span class="vert-m__text"><span class="vert-m__text-node"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'])){?><span class="vert-m__label"><span class="label label_light label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['params']['menu_label_text'];?>
</span></span><?php }?></span></a></li><?php }?><?php } ?></ul></div></div><a class="hor-menu__lnk" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['menu_icon'])){?><span class="hor-menu__i-icon"><img class="lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['menu_icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></span><?php }?><span class="hor-menu__text"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'])){?><span class="label label_micro" style="<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'])){?>background-color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_background'];?>
;<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'])){?>color:<?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_color'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['params']['menu_label_text'];?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['childs'])){?><svg class="icon" width="7" height="4"><use xlink:href="#icon-down-btn"></use></svg><?php }?></a></li><?php }?><?php } ?></ul><div class="hor-menu__btn-toggler univ-drop-lnk has-subm"><svg class="icon" width="18" height="4"><use xlink:href="#dots-more"></use></svg><div class="hor-menu__sec-menu univ-dropd menu-univ-popup"><ul class="hor-menu__sec-menu-list"></ul></div></div></div></div></div></div><?php }?></header><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/cityselect.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfafd8e598f4_26595961')) {function content_5fdfafd8e598f4_26595961($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if (0){?><div class="site-header__city-chooser"><div class="city-chooser is-active"><div class="city-chooser__inner"><svg class="icon" width="16" height="16"><use xlink:href="#icon-compass"></use></svg><div class="city-chooser__text has-down-arrow">Санкт-Петербург</div></div><div class="city-chooser__dropdown"><div class="univ-dropd univ-dropd_single univ-dropd_ar-top"><div class="city-choose-drop"><h5 class="city-choose-drop__title">Ваш город Санкт-Петербург</h5><div class="city-choose-drop__btns"><button class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-2"><span>Да</span><span class="hover-anim"></span></button><button class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-4"><span>Нет, выбрать другой город</span><span class="hover-anim"></span></button></div></div></div></div></div></div><?php }?><?php }} ?>
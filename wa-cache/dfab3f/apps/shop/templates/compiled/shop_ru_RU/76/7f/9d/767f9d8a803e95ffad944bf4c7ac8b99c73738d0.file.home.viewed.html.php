<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.viewed.html" */ ?>
<?php /*%%SmartyHeaderCode:7021245545fdfafd7c68e29-58223125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767f9d8a803e95ffad944bf4c7ac8b99c73738d0' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.viewed.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7021245545fdfafd7c68e29-58223125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_viewed_pids' => 0,
    'wa' => 0,
    '_products' => 0,
    'p' => 0,
    '_product_image_src' => 0,
    'wa_parent_theme_url' => 0,
    'i' => 0,
    '_rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd7d3b827_52277292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd7d3b827_52277292')) {function content_5fdfafd7d3b827_52277292($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_viewed_view']!="none"){?><?php $_smarty_tpl->tpl_vars['_viewed_pids'] = new Smarty_variable(waRequest::cookie('balance_viewed'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_viewed_pids']->value)){?><?php $_smarty_tpl->tpl_vars['_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products("id/".((string)$_smarty_tpl->tpl_vars['_viewed_pids']->value),10), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_products']->value)){?><div class="home-pg__section home-pg__section_slider home-pg__section_ls viewed-history-wrapper<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_viewed_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_viewed_view'];?>
<?php }?>"><div class="items-slider pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">VIEWED</span></div><div class="items-slider__header"><div class="items-slider__heading"><h2 class="section-title">Просмотренные товары</h2></div><div class="items-slider__arrows-wr"><div class="items-slider-clear-btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5 mb-hide clear-viewed-history"><span>очистить историю</span><div class="hover-anim"></div></div><div class="items-slider__arrow"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div></div></div><div class="items-slider__body swiper-container"><div class="items-slider__wrapper swiper-wrapper"><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><div class="items-slider__item item-c-mob-`$theme_settings.products_list_mobile_view` swiper-slide"><div class="pd-equal-item"><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,"96x96"), null, 0);?><form class="addtocart" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo htmlspecialchars(shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']), ENT_QUOTES, 'UTF-8', true);?>
" data-oldprice="<?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><?php echo htmlspecialchars(shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-image="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_product_image_src']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
"><a class="pd-equal-item__image" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><img src='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_product_image_src']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
' alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a><a class="pd-equal-item__title link link link_ter" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="always"||($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="nonempty"&&$_smarty_tpl->tpl_vars['p']->value['rating']>0)){?><?php $_smarty_tpl->tpl_vars['_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['p']->value['rating']), null, 0);?><div class="pd-equal-item__rating"><div class="item-rating item-c__rating"><div class="item-rating__stars"><div class="item-rating item-c__rating"><div class="item-rating__stars"><div class="stars stars_m"><div class="stars__list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><div class="stars__i<?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['_rating']->value){?> stars__i_checked<?php }?>"><svg class="icon" width="16" height="15"><use xlink:href="#icon-star"></use></svg></div><?php }} ?></div></div></div><div class="item-rating__revs"><svg class="icon" width="15" height="14"><use xlink:href="#icon-bubble"></use></svg><a class="grey" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
reviews/"><?php echo $_smarty_tpl->tpl_vars['p']->value['rating_count'];?>
</a></div></div></div></div></div><?php }?><?php }?><div class="pd-equal-item__price"><div class="simple-price"><div class="simple-price__price simple-price__price_reg"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</div><?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><div class="simple-price__price simple-price__price_old grey"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
</div><?php }?></div></div><a class="pd-equal-item__to-cart addtocart-submit js-addtocart-submit" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">В корзину</a><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"></form></div></div><?php } ?></div></div></div></div><?php }?><?php }?><?php }?><?php }} ?>
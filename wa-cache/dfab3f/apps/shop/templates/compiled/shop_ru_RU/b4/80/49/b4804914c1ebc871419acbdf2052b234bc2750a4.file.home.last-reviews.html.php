<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.last-reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:17498257335fdfafd7aad517-44506211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4804914c1ebc871419acbdf2052b234bc2750a4' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.last-reviews.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17498257335fdfafd7aad517-44506211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    '_last_reviews' => 0,
    'r' => 0,
    '_product_image_src' => 0,
    'wa_parent_theme_url' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd7b4eb31_26770412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd7b4eb31_26770412')) {function content_5fdfafd7b4eb31_26770412($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_view']!="none"&&$_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_limit']>0){?><?php $_smarty_tpl->tpl_vars['_last_reviews'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->reviews($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_limit']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_last_reviews']->value)){?><div class="home-pg__section home-pg__section_feedbacks<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_view'];?>
<?php }?> pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">LAST-REVIEWS</span></div><div class="home-pg__section-header<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='slider'){?> home-pg__section-header_link<?php }?>"><h3 class="section-title">Последние отзывы</h3><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='slider'){?><div class="slider-arrows"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div><?php }?></div><div class="home-g<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='slider'){?> home-g_slider swiper-container<?php }?>"><div class="home-g__inner<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='equation'){?> home-g__inner_equal<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='slider'){?> swiper-wrapper<?php }?>"><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_last_reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('r', null, 0);
$_smarty_tpl->tpl_vars['r']->value['_product'] = $_smarty_tpl->tpl_vars['wa']->value->shop->product($_smarty_tpl->tpl_vars['r']->value['product_id']);?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['r']->value['_product'],"96x96"), null, 0);?><div class="home-g__col-1-3<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_reviews_design']=='slider'){?> swiper-slide<?php }?>"><div class="index-f"><div class="index-f__header"><a class="index-f__image" href="<?php echo $_smarty_tpl->tpl_vars['r']->value['product_url'];?>
"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_product_image_src']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
" class="lazy-img"<?php if (!$_smarty_tpl->tpl_vars['_product_image_src']->value){?> alt="No image available"<?php }else{ ?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> /></a><div class="index-f__head-content"><a class="index-f__item-name" href="<?php echo $_smarty_tpl->tpl_vars['r']->value['product_url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</a><div class="index-f__price-wrapper"><div class="price-wrapper"><?php if ($_smarty_tpl->tpl_vars['r']->value['_product']['compare_price']>0){?><div class="price-wrapper__top"><div class="price price_old"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['r']->value['_product']['compare_price']);?>
</div></div><?php }?><div class="price-wrapper__main"><div class="price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['r']->value['_product']['price']);?>
</div></div></div></div></div></div><div class="index-f__main"><div class="index-f__user-name"><?php echo $_smarty_tpl->tpl_vars['r']->value['author']['name'];?>
</div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><div class="index-f__rating"><div class="stars stars_m"><div class="stars__list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><div class="stars__i<?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['r']->value['rate']){?> stars__i_checked<?php }?>"><svg class="icon" width="16" height="15"><use xlink:href="#icon-star"></use></svg></div><?php }} ?></div></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['r']->value['title'])){?><div class="index-f__title"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</div><?php }?><div class="index-f__text-wrapper"><div class="index-f__text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['r']->value['text'],300);?>
</div></div></div></div></div><?php } ?></div></div></div><?php }?><?php }?><?php }} ?>
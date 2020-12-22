<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:05
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/minicart.html" */ ?>
<?php /*%%SmartyHeaderCode:4795407815fdfafd943b1e8-47227833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592b458395f5a1154260ba62305ccad43c1df833' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/minicart.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4795407815fdfafd943b1e8-47227833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_theme_url' => 0,
    '_topcart_items' => 0,
    'item' => 0,
    's' => 0,
    'cart_total' => 0,
    '_cart_url' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd94c5946_04576463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd94c5946_04576463')) {function content_5fdfafd94c5946_04576463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="site-actions__mini-cart"><div class="minicart js-minicart" data-carturl="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
" data-dummyimg="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy96.png"><div class="u-cen-txt"><h4 class="minicart__title">Товары в корзине</h4></div><ul class="minicart__list cst-reset"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_topcart_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="minicart__item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><div class="mini-item"><a class="mini-item__image" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['item']->value['product'],'96x96',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy96.png",'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true)));?>
</a><div class="mini-item__content"><a class="mini-item__name" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><div class="mini-item__price-list"><?php if ($_smarty_tpl->tpl_vars['item']->value['compare_price']>$_smarty_tpl->tpl_vars['item']->value['price']&&0){?><div class="mini-item__price mini-item__price_old"><span><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['compare_price'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</span></div><?php }?><div class="mini-item__price mini-item__price_regl"><span><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</span><span> x</span><span> <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</span></div></div><?php if ($_smarty_tpl->tpl_vars['item']->value['compare_price']>$_smarty_tpl->tpl_vars['item']->value['price']&&0){?><div class="mini-item__label"><span class="label label_econom" style="background-color: #ffe500;">экономия <strong></strong></span></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['services'])&&!empty($_smarty_tpl->tpl_vars['item']->value['services'])){?><div class="mini-item__extra"><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><div class="mini-item__extra-item"><span>+ <?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</span><strong> <?php echo wa_currency($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</strong><span> x</span><span><?php echo $_smarty_tpl->tpl_vars['s']->value['quantity'];?>
</span></div><?php } ?></div><?php }?></div></div><div class="minicart__delete"><button class="close-x"><svg class="icon cent-icon" width="8" height="8"><use xlink:href="#arrow-x"></use></svg><span class="visually-hidden">удалить</span></button></div></li><?php } ?></ul><div class="minicart__total"><div class="minicart__total-text">Итого:</div><div class="minicart__total-price js-minicart-total"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</div></div><div class="minicart__btn-wrapper"><?php if ($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart')==$_smarty_tpl->tpl_vars['_cart_url']->value){?><div class="minicart__btn"><a href="<?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
" class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-3"><span class="hover-anim"></span><span>Корзина</span></a></div><?php }?><div class="minicart__btn"><a href="<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?><?php echo $_smarty_tpl->tpl_vars['_cart_url']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/checkout');?>
<?php }?>" class="btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_main-1"><div class="hover-anim"></div><span>Оформить заказ</span></a></div></div></div></div><?php }} ?>
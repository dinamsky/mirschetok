<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.productbrands.html" */ ?>
<?php /*%%SmartyHeaderCode:12811434625fdfafd7a53440-05339061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75be7886269524de3a8aecf6f7f7be3e92307a2' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.productbrands.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12811434625fdfafd7a53440-05339061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_brands' => 0,
    'wa' => 0,
    'b' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd7aa8e15_69644916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd7aa8e15_69644916')) {function content_5fdfafd7aa8e15_69644916($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_productbrands_view']!="none"){?><?php if (method_exists("shopProductbrandsPlugin","getBrands")){?><?php $_smarty_tpl->tpl_vars['_brands'] = new Smarty_variable(shopProductbrandsPlugin::getBrands(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_brands']->value)){?><div class="home-pg__section home-pg__section_brands<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_productbrands_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_productbrands_view'];?>
<?php }?> pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">PRODUCTBRANDS</span></div><div class="home-pg__section-header home-pg__section-header_link"><h3 class="section-title">Популярные бренды</h3><a class="home-pg__section-header-link link link_sec mb-hide" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/brands');?>
">Посмотреть все бренды</a><div class="slider-arrows td-hide"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div></div><div class="home-brands"><div class="home-brands__inner"><?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['b']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->iteration++;
?><?php if ($_smarty_tpl->tpl_vars['b']->iteration>12){?><?php break 1?><?php }?><div class="home-brands__item u-cen-txt"><div class="brand"><a class="brand__inner" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['url'];?>
"><span class="brand__logo"><?php if ($_smarty_tpl->tpl_vars['b']->value['image']){?><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
" class="lazy-img" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><span class="grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></span></a><a class="brand__link name" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div></div><?php } ?></div></div><a class="home-btn-more btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5 td-hide" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/brands');?>
">Посмотреть все бренды</a></div><?php }?><?php }?><?php }?><?php }} ?>
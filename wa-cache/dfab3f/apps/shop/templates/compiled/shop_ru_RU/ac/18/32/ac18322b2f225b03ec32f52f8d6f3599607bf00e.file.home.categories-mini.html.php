<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.categories-mini.html" */ ?>
<?php /*%%SmartyHeaderCode:1528725475fdfafd74eb196-08763855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac18322b2f225b03ec32f52f8d6f3599607bf00e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.categories-mini.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528725475fdfafd74eb196-08763855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_categories' => 0,
    'c' => 0,
    'wa' => 0,
    '_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd758a396_47638990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd758a396_47638990')) {function content_5fdfafd758a396_47638990($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_view']!="none"){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_list'])){?><?php $_smarty_tpl->tpl_vars['_categories'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_list']), null, 0);?><div class="home-pg__section<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?> home-pg__section_subcat-6<?php }else{ ?> home-pg__section_subcat-5<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_view'];?>
<?php }?> pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">CATEGORIES-MINI</span></div><div class="home-pg__section-header<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?> home-pg__section-header_link<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_title'])){?><h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_title'];?>
</h3><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?><div class="slider-arrows"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?><div class="home-subcat-slider swiper-container"><?php }?><div class="subcat-wrapper subcat-wrapper_pic<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?> swiper-wrapper<?php }?>"><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->category($_smarty_tpl->tpl_vars['c']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_category']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_category', null, 0);
$_smarty_tpl->tpl_vars['_category']->value['count'] = 0;?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_count']){?><?php $_smarty_tpl->createLocalArrayVariable('_category', null, 0);
$_smarty_tpl->tpl_vars['_category']->value['count'] = $_smarty_tpl->tpl_vars['wa']->value->shop->productsCount("category/".((string)$_smarty_tpl->tpl_vars['_category']->value['id']));?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_category', null, 0);
$_smarty_tpl->tpl_vars['_category']->value['_preview_image'] = '';?><?php if (isset($_smarty_tpl->tpl_vars['_category']->value['params']['categories_mini_image'])&&!empty($_smarty_tpl->tpl_vars['_category']->value['params']['categories_mini_image'])){?><?php $_smarty_tpl->createLocalArrayVariable('_category', null, 0);
$_smarty_tpl->tpl_vars['_category']->value['_preview_image'] = $_smarty_tpl->tpl_vars['_category']->value['params']['categories_mini_image'];?><?php }elseif(method_exists("shopWmimageincatPlugin","getCategoryImage")&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['_category']->value['id'],'image')){?><?php $_smarty_tpl->createLocalArrayVariable('_category', null, 0);
$_smarty_tpl->tpl_vars['_category']->value['_preview_image'] = shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['_category']->value['id'],'image');?><?php }?><div class="subcat-wrapper__item subcat-wrapper__item_sec<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_border']){?> sub-cat-bd<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?> swiper-slide<?php }?>"><div class="sub-cat<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_border']){?> sub-cat_bd<?php }?> sub-cat_sec"><?php if (!empty($_smarty_tpl->tpl_vars['_category']->value['_preview_image'])){?><a class="sub-cat__image" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->categoryUrl($_smarty_tpl->tpl_vars['_category']->value);?>
"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['_category']->value['_preview_image'];?>
" class="lazy-img" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['_category']->value['count']>0){?><div class="sub-cat__qty"><div class="sub-cat-qty"><?php echo $_smarty_tpl->tpl_vars['_category']->value['count'];?>
</div></div><?php }?><a class="sub-cat__title" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->categoryUrl($_smarty_tpl->tpl_vars['_category']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div></div><?php }?><?php } ?></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_categories_mini_slider']){?></div><?php }?></div><?php }?><?php }?><?php }} ?>
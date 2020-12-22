<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 07:58:17
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.features.html" */ ?>
<?php /*%%SmartyHeaderCode:14313084425fe02b69c3d791-38200989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf49e7e16bcb9c47db27ec3c2c3d459a6fae1594' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.features.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14313084425fe02b69c3d791-38200989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_infoblocks' => 0,
    'is_sidebar' => 0,
    'f' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe02b69cf12f9_59985516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe02b69cf12f9_59985516')) {function content_5fe02b69cf12f9_59985516($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_on']){?><?php if (!empty($_smarty_tpl->tpl_vars['_infoblocks']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['is_sidebar']->value)){?><div class="store-info"><div class="store-info__list"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_infoblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="store-info__i"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['f']->value['link'];?>
" class="pd-info"><?php }else{ ?><div class="pd-info"><?php }?><div class="pd-info__inner"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['icon'])){?><div class="pd-info__icon"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" class="lazy-img" alt></div><?php }?><div class="pd-info__body"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['title'])){?><h3 class="pd-info__title"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['title'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</h3><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['body'])){?><div class="pd-info__text"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['body'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?></a><?php }else{ ?></div><?php }?></div><?php } ?></div></div><?php }else{ ?><div class="item-pg__features layout-center mb-hide"><div class="pd-features"><div class="pd-features__list"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_infoblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['f']->value['link'];?>
" class="pd-features__item"><?php }else{ ?><div class="pd-features__item"><?php }?><div class="feature"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['icon'])){?><div class="feature__icon"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" class="lazy-img" alt></div><?php }?><div class="feature__content"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['title'])){?><div class="feature__title"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['title'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['body'])){?><div class="feature__descr grey"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['body'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?></a><?php }else{ ?></div><?php }?><?php } ?></div></div></div><?php }?><?php }?><?php }?><?php }} ?>
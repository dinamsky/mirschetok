<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.features.html" */ ?>
<?php /*%%SmartyHeaderCode:15287160765fdfafd73d0d49-85934119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83357ae1858b139d687e72df5fed169f00f4d5ed' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.features.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15287160765fdfafd73d0d49-85934119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_home_features' => 0,
    'f' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd74d2ae5_36334634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd74d2ae5_36334634')) {function content_5fdfafd74d2ae5_36334634($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view']!="none"){?><?php $_smarty_tpl->tpl_vars['_home_features'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_home_features', null, 0);
$_smarty_tpl->tpl_vars['_home_features']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_1_body']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_home_features', null, 0);
$_smarty_tpl->tpl_vars['_home_features']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_2_body']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_home_features', null, 0);
$_smarty_tpl->tpl_vars['_home_features']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_features_col_3_body']);?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features']&&!empty($_smarty_tpl->tpl_vars['_home_features']->value)){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_design']==1){?><div class="home-pg__section home-pg__section_feat<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view'];?>
<?php }?>"><div class="home-g pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">FEATURES</span></div><div class="home-g__inner"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="home-g__col-1-3"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['f']->value['link'];?>
" class="home-feat home-feat_septd"><?php }else{ ?><div class="home-feat home-feat_septd"><?php }?><div class="home-feat__inner"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['icon'])){?><div class="home-feat__icon"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" class="lazy-img" alt></div><?php }?><div class="home-feat__content"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['title'])){?><h3 class="home-feat__title bold"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['f']->value['title']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</h3><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['body'])){?><div class="home-feat__descr grey"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['body'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?></a><?php }else{ ?></div><?php }?></div><?php } ?></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_design']==2){?><div class="home-pg__section home-pg__section_feat<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view'];?>
<?php }?>"><div class="grouped-feat pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">FEATURES</span></div><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="grouped-feat__item"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['f']->value['link'];?>
" class="home-feat"><?php }else{ ?><div class="home-feat"><?php }?><div class="home-feat__inner"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['icon'])){?><div class="home-feat__icon"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" class="lazy-img" alt></div><?php }?><div class="home-feat__content"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['title'])){?><h3 class="home-feat__title bold"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['f']->value['title']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</h3><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['body'])){?><div class="home-feat__descr grey"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['body'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?></a><?php }else{ ?></div><?php }?></div><?php } ?></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_design']==3){?><div class="home-pg__section home-pg__section_feat"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_homepage_features_view'];?>
<?php }?>><div class="home-g pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">FEATURES</span></div><div class="home-g__inner"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_home_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="home-g__col-1-3"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['f']->value['link'];?>
" class="home-feat"><?php }else{ ?><div class="home-feat"><?php }?><div class="home-feat__inner"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['icon'])){?><div class="home-feat__icon-wr"><div class="home-feat__icon-bg"></div><div class="home-feat__icon cent-icon"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" class="lazy-img" alt></div></div><?php }?><div class="home-feat__content"><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['title'])){?><h3 class="home-feat__title bold"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['f']->value['title']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</h3><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['body'])){?><div class="home-feat__descr grey"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)nl2br($_smarty_tpl->tpl_vars['f']->value['body'])), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['link'])){?></a><?php }else{ ?></div><?php }?></div><?php } ?></div></div></div><?php }?><?php }?><?php }?><?php }} ?>
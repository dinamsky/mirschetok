<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:03
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.news-2.html" */ ?>
<?php /*%%SmartyHeaderCode:10204412795fdfafd7b71020-70583289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9d90a29aec41c6a151f21d58a0a1f54c725c37' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/home.news-2.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10204412795fdfafd7b71020-70583289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'news' => 0,
    '_blog_details' => 0,
    '_blogs' => 0,
    'blog' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd7c2b316_62652506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd7c2b316_62652506')) {function content_5fdfafd7c2b316_62652506($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_view']!="none"&&$_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['news'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_blog_id'])===null||$tmp==='' ? null : $tmp),2), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['news']->value)){?><?php $_smarty_tpl->tpl_vars['_blog_details'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_blog_id']>0){?><?php $_smarty_tpl->tpl_vars['_blog_details'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->blog($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_blog_id']), null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_blog_details']->value)){?><?php $_smarty_tpl->tpl_vars['_blogs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->blogs(), null, 0);?><?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_blog_details'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value, null, 0);?><?php break 1?><?php } ?><?php }?><div class="home-pg__section home-pg__section_blog<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_view']!='always'){?> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_news_view'];?>
<?php }?> pos-rel"><div class="descr-mode pos-abs"><span class="pos-rel">NEWS</span></div><div class="home-pg__section-header home-pg__section-header_link"><h3 class="section-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_blog_details']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3><a class="home-pg__section-header-link link link_sec mb-hide" href="<?php echo $_smarty_tpl->tpl_vars['_blog_details']->value['link'];?>
">все записи</a><div class="slider-arrows td-hide"><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-left"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-left-small"></use></svg></button><button class="slider-ar slider-ar_square pos-rel default-btn items-slider__nav-right"><svg class="icon cent-icon" width="7" height="11"><use xlink:href="#arrow-right-small"></use></svg></button></div></div><div class="home-blog home-blog_wide"><div class="home-blog__inner"><?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['post']->value['preview'])&&!empty($_smarty_tpl->tpl_vars['post']->value['preview'])){?><?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['preview'] = $_smarty_tpl->tpl_vars['post']->value['preview'];?><?php }elseif(method_exists("blogMainpicPluginViewHelper","getPostMainpicUrlById")){?><?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['preview'] = blogMainpicPluginViewHelper::getPostMainpicUrlById($_smarty_tpl->tpl_vars['post']->value['id'],'image');?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['preview'] = false;?><?php }?><div class="home-blog__item home-blog__item_2x"><div class="b-post-card"><?php if ($_smarty_tpl->tpl_vars['post']->value['preview']){?><a class="b-post-card__img" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['post']->value['preview'];?>
" class="lazy-img" alt=""></a><?php }?><a class="b-post-card__title" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a><div class="b-post-card__text"><?php if (!empty($_smarty_tpl->tpl_vars['post']->value['text_before_cut'])){?><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text_before_cut']),256);?>
<?php }else{ ?><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text']),256);?>
<?php }?></div><a class="b-post-card__btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><div class="hover-anim"></div><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value['cut_link_label'])===null||$tmp==='' ? 'Читать далее' : $tmp);?>
</span></a></div></div><?php } ?></div></div><a class="home-btn-more btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5 td-hide" href="<?php echo $_smarty_tpl->tpl_vars['_blog_details']->value['link'];?>
">все записи</a></div><?php }?><?php }?><?php }} ?>
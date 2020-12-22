<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:50
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:928121145fdfabfff12108-76275470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b6b63bc299c0738d3ef4891b236f6e54b889fe' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/sidebar.html',
      1 => 1608498918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928121145fdfabfff12108-76275470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfabfff257b1_46998355',
  'variables' => 
  array (
    'theme_settings' => 0,
    '_is_personal_area' => 0,
    'wa' => 0,
    '_pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfabfff257b1_46998355')) {function content_5fdfabfff257b1_46998355($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_is_personal_area']->value)){?><?php $_smarty_tpl->tpl_vars['_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_pages']->value)){?><section class="s-sidebar-section"><div class="s-section-body"><nav class="s-nav-wrapper"><?php smarty_template_function__renderPagesList($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['_pages']->value));?>
</nav></div></section><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?>
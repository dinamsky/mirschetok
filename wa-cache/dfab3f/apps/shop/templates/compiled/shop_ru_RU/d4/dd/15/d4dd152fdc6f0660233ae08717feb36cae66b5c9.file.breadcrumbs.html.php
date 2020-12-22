<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:50
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/breadcrumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:156149405fdfabffee15f5-33223814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4dd152fdc6f0660233ae08717feb36cae66b5c9' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/breadcrumbs.html',
      1 => 1608498521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156149405fdfabffee15f5-33223814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfabfff0c5f8_49153458',
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'breadcrumbs' => 0,
    '_breadcrumbs' => 0,
    '_global_breadcrumbs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfabfff0c5f8_49153458')) {function content_5fdfabfff0c5f8_49153458($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount"), null, 0);?><?php $_smarty_tpl->tpl_vars['_global_breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("breadcrumbs"), null, 0);?><?php $_smarty_tpl->tpl_vars['_breadcrumbs'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['breadcrumbs']->value), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_global_breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['_global_breadcrumbs']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['_breadcrumbs']->value, null, 0);?><?php }?><?php smarty_template_function__renderBreadcrumbs($_smarty_tpl,array('breadcrumbs'=>$_smarty_tpl->tpl_vars['breadcrumbs']->value));?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?>
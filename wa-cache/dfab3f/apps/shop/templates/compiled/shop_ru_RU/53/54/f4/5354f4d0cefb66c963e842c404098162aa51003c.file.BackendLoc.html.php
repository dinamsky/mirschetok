<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 22:51:32
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:5241662045fdfab44955e95-42827139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5354f4d0cefb66c963e842c404098162aa51003c' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5241662045fdfab44955e95-42827139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfab44962459_32084752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfab44962459_32084752')) {function content_5fdfab44962459_32084752($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>
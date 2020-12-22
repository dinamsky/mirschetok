<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/head.html" */ ?>
<?php /*%%SmartyHeaderCode:9553008585fdfafd8c09357-41021306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac274844b7b227735f6215e6b7ce791a2c5422f9' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/head.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9553008585fdfafd8c09357-41021306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd8c1b889_08292545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd8c1b889_08292545')) {function content_5fdfafd8c1b889_08292545($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
css/shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet"><?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?><!-- "nofollow" for pages not to be indexed, e.g. customer account --><meta name="robots" content="noindex,nofollow" /><?php }?><!-- plugin hook: 'frontend_head' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>
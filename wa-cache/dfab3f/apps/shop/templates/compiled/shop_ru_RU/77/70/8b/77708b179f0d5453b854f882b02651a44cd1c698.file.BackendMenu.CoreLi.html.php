<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 22:51:31
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/catalogreviews/templates/event_handlers/BackendMenu.CoreLi.html" */ ?>
<?php /*%%SmartyHeaderCode:17630616705fdfab43c1fed3-45211049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77708b179f0d5453b854f882b02651a44cd1c698' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/catalogreviews/templates/event_handlers/BackendMenu.CoreLi.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17630616705fdfab43c1fed3-45211049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_plugin_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfab43c2cf99_60528334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfab43c2cf99_60528334')) {function content_5fdfab43c2cf99_60528334($_smarty_tpl) {?><li class="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['is_plugin_page']->value)===null||$tmp==='' ? false : $tmp)){?>selected<?php }else{ ?>no-tab<?php }?> shop-catalogreviews-plugin__li">
	<a href="?plugin=catalogreviews">Каталог отзывов</a>
</li>
<?php }} ?>
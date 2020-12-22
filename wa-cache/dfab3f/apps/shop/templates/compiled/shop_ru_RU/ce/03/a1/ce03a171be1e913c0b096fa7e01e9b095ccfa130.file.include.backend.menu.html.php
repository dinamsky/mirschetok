<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 22:51:31
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/flexdiscount/templates/actions/backend/include.backend.menu.html" */ ?>
<?php /*%%SmartyHeaderCode:5141614615fdfab43c5e9d5-07338951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce03a171be1e913c0b096fa7e01e9b095ccfa130' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/flexdiscount/templates/actions/backend/include.backend.menu.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5141614615fdfab43c5e9d5-07338951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfab43c6e717_26906407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfab43c6e717_26906407')) {function content_5fdfab43c6e717_26906407($_smarty_tpl) {?><li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('plugin')=='flexdiscount'){?>selected<?php }else{ ?>no-tab<?php }?>">
    <a href="?plugin=flexdiscount&action=discounts" title="<?php echo _w("Flexdiscount");?>
"><?php echo _w("Discounts");?>
</a>
</li><?php }} ?>
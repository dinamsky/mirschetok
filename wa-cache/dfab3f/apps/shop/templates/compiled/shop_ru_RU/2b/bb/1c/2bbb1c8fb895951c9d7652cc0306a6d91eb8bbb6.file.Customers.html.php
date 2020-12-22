<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 19:15:37
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/templates/actions/customers/Customers.html" */ ?>
<?php /*%%SmartyHeaderCode:581576005fe21ba9f2b318-16107469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bbb1c8fb895951c9d7652cc0306a6d91eb8bbb6' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/templates/actions/customers/Customers.html',
      1 => 1555327241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581576005fe21ba9f2b318-16107469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe21baa0a3289_29838846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe21baa0a3289_29838846')) {function content_5fe21baa0a3289_29838846($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/function.wa_action.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers/customers.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers/orders.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/form/customer/backend.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<div class="sidebar left200px s-inner-sidebar" id="s-sidebar">
    <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"sidebar"),$_smarty_tpl);?>

</div>

<div class="content left200px blank" id="s-content">
    <div class="block triple-padded"><i class="icon16 loading"></i>Загрузка...</div>
</div>

<script>$(function() { "use strict";
    $.customers.init();
});</script>

<?php }} ?>
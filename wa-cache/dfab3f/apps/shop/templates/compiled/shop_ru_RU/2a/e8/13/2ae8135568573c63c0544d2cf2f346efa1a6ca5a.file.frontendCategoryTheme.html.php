<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 08:38:04
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/frontendCategoryTheme.html" */ ?>
<?php /*%%SmartyHeaderCode:12998134415fe034bc9c1c36-20687724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae8135568573c63c0544d2cf2f346efa1a6ca5a' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/frontendCategoryTheme.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12998134415fe034bc9c1c36-20687724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'smartfilters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe034bc9e3e15_80033419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe034bc9e3e15_80033419')) {function content_5fe034bc9e3e15_80033419($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['filters']->value){?><script type="text/x-jquery-smartfilters" data-smartfilters-data><?php echo json_encode($_smarty_tpl->tpl_vars['filters']->value);?>
</script><script>$(function(){var f = $('[data-smartfilters-data]').text();f = $.parseJSON(f);$.smartfiltersTheme(f, {hideDisabled : <?php if (!empty($_smarty_tpl->tpl_vars['smartfilters']->value['hideDisabled'])){?>true<?php }else{ ?>false<?php }?>,parentLabelSelector: '<?php echo ifempty($_smarty_tpl->tpl_vars['smartfilters']->value['parentLabelSelector'],'label');?>
',parentParamSelector: '<?php echo ifempty($_smarty_tpl->tpl_vars['smartfilters']->value['parentParamSelector'],'.filter-param,p');?>
'});})</script><?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:37:18
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/backend/BackendBrandForm.html" */ ?>
<?php /*%%SmartyHeaderCode:9228105515fe1158ebb2690-56037887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd437946ac39639de323b4c4302245052840eb776' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/backend/BackendBrandForm.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9228105515fe1158ebb2690-56037887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state' => 0,
    'asset_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1158ebd31e6_53036836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1158ebd31e6_53036836')) {function content_5fe1158ebd31e6_53036836($_smarty_tpl) {?><div id="mount"></div>
<script>
	window.brand = <?php echo json_encode($_smarty_tpl->tpl_vars['state']->value);?>
;

	window.brand.resource_base_url = '<?php echo shopBrandHelper::getStaticUrl('assets');?>
';
</script>
<link rel="stylesheet" href="<?php echo shopBrandHelper::getStaticUrl('assets/brand_edit_page.css');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
" />
<script src="<?php echo shopBrandHelper::getStaticUrl('assets/brand_edit_page.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
"></script><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:33:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/backend/BackendBrandList.html" */ ?>
<?php /*%%SmartyHeaderCode:1007719235fe11498ee9069-50892081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0451fc1d1f9d0d64dd397790dadb0472e90f911' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/backend/BackendBrandList.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1007719235fe11498ee9069-50892081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand_list' => 0,
    'list_filter' => 0,
    'use_additional_description' => 0,
    'asset_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe11498f06a93_88416610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe11498f06a93_88416610')) {function content_5fe11498f06a93_88416610($_smarty_tpl) {?><div id="mount"></div>
<script>
	window.brand = {
		resource_base_url: '<?php echo shopBrandHelper::getStaticUrl('assets');?>
',

		brand_list: <?php echo json_encode($_smarty_tpl->tpl_vars['brand_list']->value);?>
,
		list_filter: <?php echo json_encode($_smarty_tpl->tpl_vars['list_filter']->value);?>
,
		use_additional_description: <?php echo json_encode($_smarty_tpl->tpl_vars['use_additional_description']->value);?>

	};
</script>
<link rel="stylesheet" href="<?php echo shopBrandHelper::getStaticUrl('assets/brand_list_page.css');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
" />
<script src="<?php echo shopBrandHelper::getStaticUrl('assets/brand_list_page.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
"></script>
<?php }} ?>
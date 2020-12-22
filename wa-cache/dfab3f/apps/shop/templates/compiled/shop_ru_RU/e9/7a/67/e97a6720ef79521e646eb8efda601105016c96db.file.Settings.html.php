<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:22:15
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:2866446215fe112070ef590-49403288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97a6720ef79521e646eb8efda601105016c96db' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/brand/templates/actions/settings/Settings.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2866446215fe112070ef590-49403288',
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
  'unifunc' => 'content_5fe1120710b656_04137355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1120710b656_04137355')) {function content_5fe1120710b656_04137355($_smarty_tpl) {?><script src="<?php echo shopBrandHelper::getStaticUrl('js/vendor/codemirror/mode/smarty.js');?>
"></script>
<script src="<?php echo shopBrandHelper::getStaticUrl('js/vendor/codemirror/mode/smartymixed.js');?>
"></script>

<script>
	window.brand = <?php echo json_encode($_smarty_tpl->tpl_vars['state']->value);?>
;

	window.brand.resource_base_url = '<?php echo shopBrandHelper::getStaticUrl('assets');?>
';
</script>
<link rel="stylesheet" href="<?php echo shopBrandHelper::getStaticUrl('assets/settings_page.css');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
" />
<script src="<?php echo shopBrandHelper::getStaticUrl('assets/settings_page.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['asset_version']->value;?>
"></script>

<div id="brand_plugin_mount"></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:57
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seo/templates/ProductSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:6465766765fe115793a5ad2-45738547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b4530e146758f31c6782627e8d13ab4c36f265b' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seo/templates/ProductSettings.html',
      1 => 1602492235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6465766765fe115793a5ad2-45738547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state' => 0,
    'wa_url' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe115793b5f57_91915792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe115793b5f57_91915792')) {function content_5fe115793b5f57_91915792($_smarty_tpl) {?><div id="seo-product-settings-page"></div>
<script>
	window.seo_product_settings = <?php echo json_encode($_smarty_tpl->tpl_vars['state']->value);?>
;
</script>
<script>
	(function ($) {
		var $link = $('<link rel="stylesheet" />');
		$link.attr('href', <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/shop/plugins/seo/assets/product_settings.bundle.css?v=".((string)$_smarty_tpl->tpl_vars['version']->value));?>
);
		$link.appendTo(document.head);
	})(jQuery);
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/seo/assets/product_settings.bundle.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script><?php }} ?>
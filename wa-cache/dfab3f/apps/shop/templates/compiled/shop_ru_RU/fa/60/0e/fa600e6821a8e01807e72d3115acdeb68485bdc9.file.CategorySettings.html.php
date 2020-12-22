<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seo/templates/CategorySettings.html" */ ?>
<?php /*%%SmartyHeaderCode:9212971995fe1154cb13c22-34441824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa600e6821a8e01807e72d3115acdeb68485bdc9' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seo/templates/CategorySettings.html',
      1 => 1602492235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9212971995fe1154cb13c22-34441824',
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
  'unifunc' => 'content_5fe1154cb24166_01038113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1154cb24166_01038113')) {function content_5fe1154cb24166_01038113($_smarty_tpl) {?><div id="seo-category-settings-page"></div>
<script>
	window.seo_category_settings = <?php echo json_encode($_smarty_tpl->tpl_vars['state']->value);?>
;
</script>
<script>
	(function ($) {
		var $link = $('<link rel="stylesheet" />');
		$link.attr('href', <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/shop/plugins/seo/assets/category_settings.bundle.css?v=".((string)$_smarty_tpl->tpl_vars['version']->value));?>
);
		$link.appendTo(document.head);
	})(jQuery);
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/seo/assets/category_settings.bundle.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script><?php }} ?>
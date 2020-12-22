<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 08:38:01
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seofilter/templates/handlers/FrontendHead.html" */ ?>
<?php /*%%SmartyHeaderCode:5871315775fe034b91dc066-03736390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e45d47b006e617ff6d1e00b6509fb189b6ab587' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/seofilter/templates/handlers/FrontendHead.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5871315775fe034b91dc066-03736390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_url' => 0,
    'seofilter_category_url' => 0,
    'seofilter_filter_url' => 0,
    'seofilter_current_filter_params' => 0,
    'seofilter_keep_page_number_param' => 0,
    'seofilter_block_empty_feature_values' => 0,
    'filters' => 0,
    'excluded_get_params' => 0,
    'yandex_counter_code' => 0,
    'seofilter_feature_value_ids' => 0,
    'stop_propagation_in_frontend_script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe034b92518d2_84587579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe034b92518d2_84587579')) {function content_5fe034b92518d2_84587579($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
css/filter-link.css?v=<?php echo shopSeofilterViewHelper::getAssetVersion();?>
">
<script defer src="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
js/filter_frontend.js?v=<?php echo shopSeofilterViewHelper::getAssetVersion();?>
"></script>

<script>
	(function () {
		var onReady = function (callback) {
			if (document.readyState!='loading') {
				callback();
			}
			else if (document.addEventListener) {
				document.addEventListener('DOMContentLoaded', callback);
			}
			else {
				document.attachEvent('onreadystatechange', function () {
					if (document.readyState=='complete') {
						callback();
					}
				});
			}
		};

		window.seofilter_init_data = {
			category_url: <?php echo json_encode($_smarty_tpl->tpl_vars['seofilter_category_url']->value);?>
,
			filter_url: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['seofilter_filter_url']->value)===null||$tmp==='' ? '' : $tmp));?>
,
			current_filter_params: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['seofilter_current_filter_params']->value)===null||$tmp==='' ? array() : $tmp));?>
,
			keep_page_number_param: <?php echo json_encode($_smarty_tpl->tpl_vars['seofilter_keep_page_number_param']->value);?>
,
			block_empty_feature_values: <?php echo json_encode($_smarty_tpl->tpl_vars['seofilter_block_empty_feature_values']->value);?>
,

			price_min: <?php echo json_encode(floor((($tmp = @$_smarty_tpl->tpl_vars['filters']->value['price']['min'])===null||$tmp==='' ? 0 : $tmp)));?>
,
			price_max: <?php echo json_encode(ceil((($tmp = @$_smarty_tpl->tpl_vars['filters']->value['price']['max'])===null||$tmp==='' ? 0 : $tmp)));?>
,

			excluded_get_params: <?php echo json_encode($_smarty_tpl->tpl_vars['excluded_get_params']->value);?>
,

			yandex_counter_code: <?php echo json_encode($_smarty_tpl->tpl_vars['yandex_counter_code']->value);?>
,

			feature_value_ids: <?php echo json_encode($_smarty_tpl->tpl_vars['seofilter_feature_value_ids']->value);?>
,
			stop_propagation_in_frontend_script: <?php echo json_encode($_smarty_tpl->tpl_vars['stop_propagation_in_frontend_script']->value);?>

		};

		onReady(function() {
			window.seofilterInit($, window.seofilter_init_data);
		});
	})();
</script>
<?php }} ?>
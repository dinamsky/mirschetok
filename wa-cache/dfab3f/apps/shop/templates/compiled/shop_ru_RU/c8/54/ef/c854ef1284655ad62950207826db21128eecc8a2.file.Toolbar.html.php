<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:28:44
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/productfeatures/templates/Toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:5361355115fe1138c68a669-06936375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c854ef1284655ad62950207826db21128eecc8a2' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/productfeatures/templates/Toolbar.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5361355115fe1138c68a669-06936375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_url' => 0,
    'plugin_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1138c694057_23961491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1138c694057_23961491')) {function content_5fe1138c694057_23961491($_smarty_tpl) {?><div class="block" style="padding: 0 10px">
    <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu">
        <li><a id="productfeatures-plugin" href="#"><i class="icon16 edit"></i>Редактировать характеристики</a></li>
    </ul>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
js/productfeatures.js?v<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
"></script>
<script>
    if (!$('#productfeatures-plugin-dialog').length) {
        $('body').append('<div id="productfeatures-plugin-dialog"></div>');
    }
    $.wa.locale['Features'] = "<?php echo _w('Features');?>
";
</script><?php }} ?>
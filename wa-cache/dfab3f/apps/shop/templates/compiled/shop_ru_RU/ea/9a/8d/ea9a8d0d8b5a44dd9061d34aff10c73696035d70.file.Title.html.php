<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:09
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/categoryimage/templates/Title.html" */ ?>
<?php /*%%SmartyHeaderCode:15238780885fe11549d18628-85128152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9a8d0d8b5a44dd9061d34aff10c73696035d70' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/categoryimage/templates/Title.html',
      1 => 1525456495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15238780885fe11549d18628-85128152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe11549d29648_63669906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe11549d29648_63669906')) {function content_5fe11549d29648_63669906($_smarty_tpl) {?><span id="category-image" style="position: absolute; width: 48px; height: 48px; text-align: center; left: 0; top: -10px;">
    <img style="max-width: 48px; max-height: 48px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto" src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
">
</span>
<script type="text/javascript">
    $("#category-image").parent().css({
        "position": "relative",
        "margin-bottom": "10px",
        "padding-left": "50px"
    });
</script><?php }} ?>
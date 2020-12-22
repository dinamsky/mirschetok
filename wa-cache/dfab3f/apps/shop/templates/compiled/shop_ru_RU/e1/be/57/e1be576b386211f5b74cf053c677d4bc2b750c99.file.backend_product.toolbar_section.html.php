<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:57
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/backend_product.toolbar_section.html" */ ?>
<?php /*%%SmartyHeaderCode:12674894995fe115793412e8-00325568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1be576b386211f5b74cf053c677d4bc2b750c99' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/backend_product.toolbar_section.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12674894995fe115793412e8-00325568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1157934bce6_32762733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1157934bce6_32762733')) {function content_5fe1157934bce6_32762733($_smarty_tpl) {?><div class="block">
    <a href="javascript:void(0)" id="s-plugin-vkshop-share-button"><i class="icon16" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/vkshop/img/vkshop16.png')"></i> <?php echo _wp('Share on Vkontakte');?>

    </a>
</div>
<script type="text/javascript">
    $(function () {
        $('#s-plugin-vkshop-share-button').off().on('click', function () {
            $.shop.trace('Share on Vkshop clicked');
            $('#s-plugin-vkshop-content').load('?plugin=vkshop&action=form&product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
');
            return false;
        })
    })
</script><?php }} ?>
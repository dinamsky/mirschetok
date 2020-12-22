<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:57
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/disable_button.html" */ ?>
<?php /*%%SmartyHeaderCode:17910584925fe115793184f1-61630397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ee16c63a93e6e96424f8101da96f3c2c06b29ac' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/disable_button.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17910584925fe115793184f1-61630397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disabled' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'product_id' => 0,
    'vkshop_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1157933b0a9_77689336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1157933b0a9_77689336')) {function content_5fe1157933b0a9_77689336($_smarty_tpl) {?><a id="vkshop_disable" href="javascript:void(0)" title="Отключить/Включить">
    <i class="vkshop_disable<?php if (!$_smarty_tpl->tpl_vars['disabled']->value){?>-undisabled<?php }?>"></i>
</a>

<script type="text/javascript">
    $(function () {
        if (!$("link#s-plugin-vkshop-stylesheet").length)
            $('<link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/vkshop/css/vkshop.css?_=' + Date.now() + '" rel="stylesheet" id="s-plugin-vkshop-stylesheet">')
                    .appendTo("head");
        $.when(
                $.Deferred(function (deferred) {
                    if ($.Vkshop) deferred.resolve();
                    else {
                        $.shop.trace('Loading vkshop.js', []);
                        $.getScript('<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/vkshop/js/vkshop.<?php if (!$_smarty_tpl->tpl_vars['wa']->value->debug()){?>min.<?php }?>js', deferred.resolve)
                    }
                })
        ).done(function () {
                    window.setTimeout(function () {
                        "use strict";
                        var a = $('#vkshop_disable').click(function () {
                            var i = a.children('i').toggleClass('vkshop_disable').toggleClass('vkshop_disable-undisabled');
                            var disable = i.hasClass('vkshop_disable') ? 1 : 0;
                            $.post('?plugin=vkshop&action=disable', {
                                disable: disable,
                                id: '<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
'
                            }, function (r) {
                                //$('#hidden- .count').text(r.data);
                            }, 'json');
                        });
                    }, 0);
                    $.Vkshop.product = <?php echo $_smarty_tpl->tpl_vars['vkshop_product']->value;?>
;
                    $.shop.trace('$.Vkshop initialized', []);
                });
    });
</script>
<?php }} ?>
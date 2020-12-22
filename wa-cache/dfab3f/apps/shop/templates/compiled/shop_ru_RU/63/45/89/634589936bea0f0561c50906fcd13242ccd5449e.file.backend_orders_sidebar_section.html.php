<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:22:01
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/sdekint/templates/hooks/backend_orders_sidebar_section.html" */ ?>
<?php /*%%SmartyHeaderCode:2504974085fe111f93490b2-49394442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '634589936bea0f0561c50906fcd13242ccd5449e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/sdekint/templates/hooks/backend_orders_sidebar_section.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504974085fe111f93490b2-49394442',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe111f93e1152_36464537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe111f93e1152_36464537')) {function content_5fe111f93e1152_36464537($_smarty_tpl) {?><script type="text/javascript">
    (function ($) {
        if(shopSdekintOrders && shopSdekintOrders.order_list_handler && (typeof shopSdekintOrders.order_list_handler == 'function')) {
            var handler_ready = false, $maincontainer = $('#maincontent');
            var events = $maincontainer.data('events');
            var handlers = events ? events.append_order_list : [];
            $.each(handlers, function (i, o) {
                if (o.handler.toString() == shopSdekintOrders.order_list_handler.toString()) handler_ready = true;
            });
            if (!handler_ready) {
                $maincontainer.on('append_order_list', '#order-list', shopSdekintOrders.order_list_handler);
            }
        }
    })(jQuery);
</script>
<style type="text/css">
    div.s-plugin-sdekint-productlist-info {
        margin: 3px 0;
        color: forestgreen;
        font-size: 12px;
    }
    div.s-plugin-sdekint-productlist-info i.icon16 {
        margin: 0;
        background: url("/wa-apps/shop/plugins/sdekint/img/sdek12.png");
        width: 12px;
        height: 12px;
    }
    #order-list tr.order i.icon16.s-plugin-sdekint-sdekicon {
        margin: 0;
        background: url("/wa-apps/shop/plugins/sdekint/img/sdek16.png");
        vertical-align: bottom;
    }
</style><?php }} ?>
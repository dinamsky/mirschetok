<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:28:44
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/queue.html" */ ?>
<?php /*%%SmartyHeaderCode:3629053495fe1138c6dfcb1-44664605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd94eaae29e7c9e8c278b7ac5e24299623723fd0' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/hooks/queue.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3629053495fe1138c6dfcb1-44664605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disabled' => 0,
    'queued' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1138c6f4622_95002058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1138c6f4622_95002058')) {function content_5fe1138c6f4622_95002058($_smarty_tpl) {?><div style="border: 1px solid #ccc; padding-left: 3px;">
    <li>
        <a href="?action=importexport#/vkshop/">
            <i class="vkshop16_disable-undisabled"></i>
            Магазин Вконтакте
        </a>
    </li>
    <li>
        <a href="javascript:void(0);" onclick="$.Vkshop.disable();">
            <i class="icon16 lock"></i>
            Отключить товары
        </a>
    </li>
    <li>
        <a href="javascript:void(0);" onclick="$.Vkshop.undisable();">
            <i class="icon16 lock-unlocked"></i>
            Отменить отключение
        </a>
    </li>
    
    <li>
        <a href="javascript:void(0);" onclick="$.Vkshop.queue();">
            <i class="icon16 plus"></i>
            Добавить в очередь
        </a>
    </li>
    <li>
        <a href="javascript:void(0);" onclick="$.Vkshop.clearqueue();">
            <i class="icon16 broom-bw"></i>
            Очистить очередь
        </a>
    </li>
    <li>
        <i class="icon16 no"></i>
        Отключено - <span id="vkshop-disabled"><?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
</span>
    </li>
    <li>
        <i class="icon16 sync"></i>
        В очереди - <span id="vkshop-queued"><?php echo $_smarty_tpl->tpl_vars['queued']->value;?>
</span>
    </li>
</div>
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
            $.wa.locale = $.extend(true, $.wa.locale, {
                "Please select at least one product": 'Отметьте хотя бы один продукт',
                "No groups defined in the plugin settings": 'Не определено групп в настройках плагина'
            });
            $.shop.trace('$.Vkshop initialized', []);
        });
    });
</script><?php }} ?>
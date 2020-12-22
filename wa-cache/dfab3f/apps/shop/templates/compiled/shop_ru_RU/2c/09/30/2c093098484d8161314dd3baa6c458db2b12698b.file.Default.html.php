<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 13:00:22
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/kpi/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:16865993395fe07236a91bd3-03366504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c093098484d8161314dd3baa6c458db2b12698b' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/kpi/templates/Default.html',
      1 => 1452519802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16865993395fe07236a91bd3-03366504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'total_formatted' => 0,
    'dynamic' => 0,
    'dynamic_color' => 0,
    'dynamic_html' => 0,
    'widget_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe07236ab0c21_29921809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe07236ab0c21_29921809')) {function content_5fe07236ab0c21_29921809($_smarty_tpl) {?><style>
    .heading { cursor: default; }
    .widget-1x1 h1 { margin-bottom: 0.1em; }
</style>

<div class="block top-padded align-center">
    <h3 class="heading">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

    </h3>
    <h1 class="nowrap"><?php echo $_smarty_tpl->tpl_vars['total_formatted']->value;?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['dynamic']->value!==null){?>
        <h2 style="color:<?php echo $_smarty_tpl->tpl_vars['dynamic_color']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['dynamic_html']->value;?>
</h2>
    <?php }?>
</div>

<script>(function($) {

    var widget_id = "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
",
        uniqid = '' + (new Date).getTime() + Math.random();

    setTimeout(function() {
        try {
            DashboardWidgets[widget_id].uniqid = uniqid;
            setTimeout(function() {
                try {
                    if (uniqid == DashboardWidgets[widget_id].uniqid) {
                        DashboardWidgets[widget_id].renderWidget();
                    }
                } catch (e) {
                    console && console.log('Error updating KPI widget', e);
                }
            }, 30*60*1000);
        } catch (e) {
            console && console.log('Error setting up KPI widget updater', e);
        }
    }, 0);

})(jQuery);</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 13:00:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/customers/templates/OneLine.html" */ ?>
<?php /*%%SmartyHeaderCode:17476493495fe072379685a3-93536244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd99d75f73381003ca86c342e0b293bc132b8fe3a' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/customers/templates/OneLine.html',
      1 => 1443175670,
      2 => 'file',
    ),
    '071b82633ba927ab7edd3c65243f82f4e2d44fae' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/customers/css/oneline.css',
      1 => 1443175668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17476493495fe072379685a3-93536244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_id' => 0,
    'total_customers' => 0,
    'new_customers' => 0,
    'widget_url' => 0,
    'wa' => 0,
    'graph_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe0723799ec03_46142994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0723799ec03_46142994')) {function content_5fe0723799ec03_46142994($_smarty_tpl) {?><div class="customers-oneline-widget-wrapper">
    <div class="graph-wrapper" id="graph-wrapper-<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"></div>
    <div class="text-wrapper">
        <h6 class="heading">
            Покупатели
        </h6>
        <h1 class="s-customer-count">
            <?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>

        </h1>
        <h3 class="s-customer-count-new"><?php echo _wp('+%d new','+%d new',$_smarty_tpl->tpl_vars['new_customers']->value);?>
</h3>
    </div>
</div>
<script>(function() {
    var widget_id = "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
";
    var script_url = "<?php echo $_smarty_tpl->tpl_vars['widget_url']->value;?>
js/customersGraph.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
";
    var graph_data = <?php echo json_encode($_smarty_tpl->tpl_vars['graph_data']->value);?>
;

    if (typeof CustomersGraph !== "undefined") {
        initGraph();
    } else {
        $.getScript(script_url, function() {
            initGraph();
        });
    }

    function initGraph() {
        DashboardWidgets[widget_id].sales = new CustomersGraph({
            widget_id: widget_id,
            graph_data: graph_data,
            graph_id: "graph-wrapper-"+widget_id
        });
    }
})();</script>
<style><?php /*  Call merged included template "../css/oneline.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/oneline.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17476493495fe072379685a3-93536244');
content_5fe0723798f465_83416133($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/oneline.css" */?></style>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 13:00:23
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/widgets/customers/css/oneline.css" */ ?>
<?php if ($_valid && !is_callable('content_5fe0723798f465_83416133')) {function content_5fe0723798f465_83416133($_smarty_tpl) {?>.s-customer-count { color: #4d7ab3; margin-bottom: 0 !important; }
.s-customer-count-new { color: #8ab; }
.tv .s-customer-count { color: #7be; }

.customers-oneline-widget-wrapper .graph-wrapper {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    overflow: hidden;
}
.customers-oneline-widget-wrapper .graph-wrapper svg {
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    fill: rgba(0,0,0,0.1);
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
}
.customers-oneline-widget-wrapper .graph-wrapper svg path,
.customers-oneline-widget-wrapper .graph-wrapper svg line {
    fill: none;
    stroke: #aaa;
    shape-rendering: auto;
}
.customers-oneline-widget-wrapper .graph-wrapper svg .line {
    stroke-width: 3px;
    opacity: 1;
}
.customers-oneline-widget-wrapper .graph-wrapper svg .area {
    stroke: none;
    opacity: 0.3;
}
.customers-oneline-widget-wrapper .graph-wrapper svg.profit .area {
    opacity: 0.5;
}
.customers-oneline-widget-wrapper .text-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-sizing: border-box;
}
.widget-1x1 .customers-oneline-widget-wrapper .text-wrapper {
    padding: 0.5rem;
}
.widget-1x1 .customers-oneline-widget-wrapper .text-wrapper {
    padding: 0.5rem;
}
.widget-2x1 .customers-oneline-widget-wrapper .text-wrapper {
    padding: 0.75rem;
}
.widget-2x2 .customers-oneline-widget-wrapper .text-wrapper {
    padding: 0.75rem;
}
<?php }} ?>
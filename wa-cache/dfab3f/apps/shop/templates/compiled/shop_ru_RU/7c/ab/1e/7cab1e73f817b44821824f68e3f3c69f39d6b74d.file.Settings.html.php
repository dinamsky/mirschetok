<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:27:09
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/bnpcomments/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:6534656635fe1132de21c44-55211572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cab1e73f817b44821824f68e3f3c69f39d6b74d' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/bnpcomments/templates/actions/settings/Settings.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6534656635fe1132de21c44-55211572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state_checkbox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1132dea5884_00014422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1132dea5884_00014422')) {function content_5fe1132dea5884_00014422($_smarty_tpl) {?><style>
    .field .name { width: 145px }
    .field .value.float { float: left; margin-left: 20px; width: 35%}
    .field .value2 { float: left; margin-left: 20px; width: 35%}
    .clear { clear: both }
    .field .value input[type="text"] { width: 100%; color: #333; min-width: 100px}
    .field .value textarea { width: 100%; color: #333; min-width: 100px; height: 30px}
    .code { color: #808080; background-color: #F7F7F9; border: 1px solid #E1E1E8; padding: 5px 10px; line-height: 1.3em }
    .code B { color: #333}
    .greencode { color: #339900 }
    h4 { color: #8f1811 }
</style>
<h1>Bnp Comments</h1>
<div class="gray">Комментарии к заказам</div>
<form id="plugins-settings-form" method="post" action="?module=plugins&id=bnpcomments&action=save">
    <div class="field">
        <div class="name">
            Включить/Выключить
        </div>
        <div class="value">
            <?php echo $_smarty_tpl->tpl_vars['state_checkbox']->value;?>

        </div>
    </div>
    <div class="field">
        <input class="button green" value="Сохранить" type="submit">
        <span id="plugins-settings-form-status" style="display:none">
            <i style="vertical-align:middle" class="icon16 yes"></i> Saved
        </span>
    </div>
</form><?php }} ?>
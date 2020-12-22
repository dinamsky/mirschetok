<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:28:44
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/editprice/templates/Toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:21360525875fe1138c5a6da6-61930556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea2b6939eb6c587e017299360a7979604c347187' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/editprice/templates/Toolbar.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21360525875fe1138c5a6da6-61930556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'percent' => 0,
    'int_round' => 0,
    'round' => 0,
    'currencies' => 0,
    '_c' => 0,
    'primary_currency' => 0,
    'editprice_strings' => 0,
    'plugin_url' => 0,
    'plugin_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1138c616150_93039328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1138c616150_93039328')) {function content_5fe1138c616150_93039328($_smarty_tpl) {?><div class="block">
    <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu">
        <li>
            <a id="editprice-bulk" href="#"><i class="icon16 sync"></i>Массовое редактирование цен</a>
        </li>
        <li id="editprice-action">
            <a id="editprice-plugin" <?php if ($_smarty_tpl->tpl_vars['currency']->value){?>data-currency="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['percent']->value){?>data-percent="<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
"<?php }?> data-int-round="<?php echo $_smarty_tpl->tpl_vars['int_round']->value;?>
" data-round="<?php echo $_smarty_tpl->tpl_vars['round']->value;?>
" href="#"><i class="icon16 edit"></i>Режим редактирования цен</a>
            <div style="display: none">
                <?php if ($_smarty_tpl->tpl_vars['percent']->value){?>
                Изменить цены на<br>
                <input id="editprice-p" type="text" size="5" style="width: 36px;" value="0" >%
                <?php }else{ ?>
                Умножить все цена на<br>
                <input id="editprice-m" type="text" size="5" style="width: 36px;" value="1.000" >
                <?php }?>
                <a id="editprice-multiply" style="display: inline; padding-left: 0; margin-left: 10px" class="inline-link" href="#"><b>Применить</b></a><br><br>
                <?php if ($_smarty_tpl->tpl_vars['currency']->value){?>
                Валюта: <select id="editprice-currency">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_c']->key => $_smarty_tpl->tpl_vars['_c']->value){
$_smarty_tpl->tpl_vars['_c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['_c']->value['code'];?>
</option>
                <?php } ?>
                </select><br><br>
                <?php }?>
                <input class="button green" type="button" id="editprice-save" value="<?php echo _w('Save');?>
"> <em class="hint">Ctrl + S</em><br><br>
                <div><?php echo _w('or');?>
 <a id="editprice-cancel" class="inline-link cancel" style="display:inline" href="#"><b><i><?php echo _w('cancel');?>
</i></b></a></div>
            </div>
        </li>
    </ul>
    <div id="editprice-bulk-dialog" style="display: none">
        <br>
        <p>
            <label><input type="radio" name="type" value="1" checked> Увеличить (+)</label>
            &nbsp;&nbsp;
            <label><input type="radio" name="type" value="0"> Уменьшить (-)</label>
        </p>
        <p>
            Изменить цены на: <input type="text" class="short" name="change">
            <select class="currency" name="currency">
                <option value="%">%</option>
                <?php if (!empty($_smarty_tpl->tpl_vars['primary_currency']->value)){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
</option>
                <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars['_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_c']->key => $_smarty_tpl->tpl_vars['_c']->value){
$_smarty_tpl->tpl_vars['_c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['_c']->value['code'];?>
</option>
                    <?php } ?>
                <?php }?>
            </select>

            <span id="editprice-source-price">
                <?php echo _w('from');?>

                <select name="source_price">
                    <option value="">Текущая цена</option>
                    <option value="purchase_price"><?php echo _w('Purchase price');?>
</option>
                </select>
            </span>
        </p>
        <p id="editprice-round">
            Количество знаков после запятой для округления:
            <input class="short" placeholder="не округлять" type="text" name="round" value=""><br>
            <i class="hint">
                Укажите 1, чтобы округлять до десятков копеек, например, 105,34 превратится в 105,3.<br>
                Укажите 0, чтобы округлить до целого<br>
                 Укажите -1, чтобы округлять до десятков, например 198 превратится в 200, а 114 в 110.
            </i>
        </p>
        <p>
            <label id="editprice-clear-compare">
                <input type="checkbox" value="1" name="clear_compare"> удалить зачёркнутые цены
            </label>
            <label id="editprice-restore-from-compare" style="display: none; margin-left: 20px">
                <input type="checkbox" value="1" name="restore_from_compare"> восстановить цены из зачёркнутых цен
            </label>
            <label id="editprice-set-compare" style="display: none">
                <input type="checkbox" value="1" name="set_compare"> установить старые цены как зачёркнутые
            </label>
        </p>
        <p id="editprice-bulk-saving" style="display:none;">
            <i class="icon16 loading"></i>Цены изменяются, пожалуйста, подождите...
        </p>
    </div>
</div>
<style type="text/css">
    table.zebra.single-lined tr.edit td div { height: auto}
    #editprice-bulk-dialog .dialog-window { z-index: 1999}
</style>
<script type="text/javascript">
    $.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['editprice_strings']->value);?>
);
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
js/editprice.js?v<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
"></script>
<?php }} ?>
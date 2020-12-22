<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 20:02:46
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/productfeatures/templates/actions/dialog/Dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:2678003885fe226b6300a32-78350978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5246670a261cf38cbf6c00ded3adbe80533bd2' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/productfeatures/templates/actions/dialog/Dialog.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2678003885fe226b6300a32-78350978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'features' => 0,
    'code' => 0,
    'feature' => 0,
    'value_id' => 0,
    'values' => 0,
    'value' => 0,
    'selected_' => 0,
    'type' => 0,
    'feature_unit' => 0,
    'd' => 0,
    'i' => 0,
    'code_' => 0,
    'units' => 0,
    'unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe226b6630900_25328102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe226b6630900_25328102')) {function content_5fe226b6630900_25328102($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><p>
    Выбранные характеристики будут сохранены для <span class="productfeatures-count"></span> <span class="productfeatures-w">товаров</span>.<br>
    Характеристики, для которых вы не укажете значение, изменены не будут!
</p>

<style type="text/css">
    .features-form .field-delete {
        float: right;
    }
    .features-form .field .value {
        margin-right: 100px;
    }
</style>

<div class="fields form features-form">
    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if (strpos($_smarty_tpl->tpl_vars['code']->value,'.')==false){?>
    <div class="field<?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'){?> divider<?php }?>" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['feature']->value['multiple'];?>
"
         data-selectable="<?php echo $_smarty_tpl->tpl_vars['feature']->value['selectable'];?>
" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <div class="name"><label for="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label><br><span class="hint"><?php echo $_smarty_tpl->tpl_vars['feature']->value['code'];?>
</span></div>
        <div class="field-delete">
            <input type="checkbox" class="productfeatures-plugin-delete" value="1" name="features_delete[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"> <i class="icon16 delete"></i> очистить
            <br>
            <span class="hint">удалить значения</span>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['feature']->value['selectable']){?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['multiple']){?>
                
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <div class="value">
                    <label>
                        <input type="checkbox" name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['value_id']->value])){?> checked="checked"<?php }?>>
                        <?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                    </label>
                </div>
                <?php } ?>
            <?php }else{ ?>
                <div class="value">
                    <select name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                        <option value=""<?php if (empty($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])){?> selected="selected"<?php }?>>&nbsp;</option>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&((string)$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]==$_smarty_tpl->tpl_vars['value']->value)), null, 0);?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)){?> style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                        <?php if (empty(Smarty::$_smarty_vars['capture'])&&empty(Smarty::$_smarty_vars['capture']['feature-value-template-js'])){?>
                        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                        <option value="{%=o.value%}">{%=o.value%}</option>
                        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                        <?php }?>
                    </select>
                </div>
            <?php }?>
            
        <?php }else{ ?>
        <div class="value">
            

            <?php if ((strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'2d')===0)||(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'3d')===0)){?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['feature']->value['type'],3), null, 0);?>
            <?php if (strpos($_smarty_tpl->tpl_vars['type']->value,'dimension')===0){?>
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable(null, null, 0);?>
            <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1])){?>
            <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1]->unit, null, 0);?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value; $_smarty_tpl->tpl_vars['i']->value++){
?>
            <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
            <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?>
            <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->unit, null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->convert($_smarty_tpl->tpl_vars['feature_unit']->value,false), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="features[<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
][value]" class="numerical short">
            <?php }} ?>
            <select name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
.0][unit]">
                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!$_smarty_tpl->tpl_vars['feature_unit']->value&&$_smarty_tpl->tpl_vars['unit']->first)||(($_smarty_tpl->tpl_vars['feature_unit']->value==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <?php }else{ ?>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type']); $_smarty_tpl->tpl_vars['i']->value++){
?>
            <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="features[<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
]" class="numerical short">
            <?php }} ?>
            <?php }?>
            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension')===0){?>
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]">
            <select name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&$_smarty_tpl->tpl_vars['unit']->first)||(isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'range')===0){?>
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][begin]" class="numerical short">
            —
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->end->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->end->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][end]" class="numerical short">
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['units']->value){?>
            <select name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&$_smarty_tpl->tpl_vars['unit']->first)||(isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <?php }?>
            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'text')===0){?>
            <textarea id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
                      name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"><?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>

            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'color')===0){?>
            <input name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="название цвет">
            <a href="#" class="inline-link js-action" style="display: inline;">
                <i class="icon16 color" style="background: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '#FFFFFF' : $tmp);?>
;"></i>
            </a>
            #<input name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][code]" type="text" value="<?php echo htmlspecialchars(smarty_modifier_replace((($tmp = @$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '' : $tmp),'#',''), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="000000" class="small">


            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'boolean')===0){?>
            <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
            <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value]->value, null, 0);?>
            <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
            <label>
                <input type="radio" name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                       value="1"<?php if ($_smarty_tpl->tpl_vars['value']->value===1){?> checked="checked"<?php }?>>
                Да
            </label>
        </div>
        <div class="value">
            <label>
                <input type="radio" name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                       value="0"<?php if ($_smarty_tpl->tpl_vars['value']->value===0){?> checked="checked"<?php }?>>
                Нет
            </label>
        </div>
        <div class="value">
            
            <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'divider')===0){?>
            <input type="hidden" value="-" name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
            <?php }else{ ?>
            <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text" name="features[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
            <?php }?>
        </div>
        <?php }?>
    </div>
    <?php }?>
    <?php }
if (!$_smarty_tpl->tpl_vars['feature']->_loop) {
?>
    Для выбранных товаров не настроены характеристики
    <?php } ?>
</div><?php }} ?>
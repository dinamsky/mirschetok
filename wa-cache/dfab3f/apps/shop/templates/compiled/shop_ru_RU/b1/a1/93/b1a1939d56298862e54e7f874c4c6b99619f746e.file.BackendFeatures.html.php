<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:28:45
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/f7root/templates/actions/backend/BackendFeatures.html" */ ?>
<?php /*%%SmartyHeaderCode:17098918575fe1138db921b6-09480185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a1939d56298862e54e7f874c4c6b99619f746e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/f7root/templates/actions/backend/BackendFeatures.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17098918575fe1138db921b6-09480185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'features' => 0,
    'f' => 0,
    'id' => 0,
    'feature_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1138dbb3995_49203051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1138dbb3995_49203051')) {function content_5fe1138dbb3995_49203051($_smarty_tpl) {?><option value="" >Выберите характеристику</option>
<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['f']->value){?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['feature_id']->value){?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
    <?php }else{ ?>
        <option disabled></option>
    <?php }?>
<?php } ?>
<?php }} ?>
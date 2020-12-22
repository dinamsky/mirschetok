<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:17915969725fe0ce288fd0e2-19470277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b143ec65fb4641e4e56eacede38ef5156e87b4a' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/remember_me.html',
      1 => 1541778477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17915969725fe0ce288fd0e2-19470277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe0ce28912125_24514706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0ce28912125_24514706')) {function content_5fe0ce28912125_24514706($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Remember me
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>
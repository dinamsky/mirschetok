<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:9017151455fe0ce286ec919-99338695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bebeb945bb40ce900955c8601f3a1534ba786ec' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/form.html',
      1 => 1605792068,
      2 => 'file',
    ),
    'cef83ca1e41b973c54245b058d9afb736f059dc6' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/onetime_password_form.inc.html',
      1 => 1542030228,
      2 => 'file',
    ),
    '634c54d458b6c24244a26c3f57382afa4a362261' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/default_form.inc.html',
      1 => 1605792068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9017151455fe0ce286ec919-99338695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_onetime_password_auth_type' => 0,
    'webasyst_id_auth_url' => 0,
    'bind_with_webasyst_contact' => 0,
    'webasyst_id_auth_result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe0ce287b6d45_28642958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0ce287b6d45_28642958')) {function content_5fe0ce287b6d45_28642958($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
    <?php /*  Call merged included template "./onetime_password_form.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./onetime_password_form.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '9017151455fe0ce286ec919-99338695');
content_5fe0ce286fead6_34243684($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./onetime_password_form.inc.html" */?>
<?php }else{ ?>
    <?php /*  Call merged included template "./default_form.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./default_form.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '9017151455fe0ce286ec919-99338695');
content_5fe0ce2874f504_64336905($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./default_form.inc.html" */?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['webasyst_id_auth_url']->value&&!$_smarty_tpl->tpl_vars['bind_with_webasyst_contact']->value){?>
    <div class="waid-login">
        <span class="separator">or</span>
        <a href="<?php echo $_smarty_tpl->tpl_vars['webasyst_id_auth_url']->value;?>
" class="waid-auth-link js-webasyst-auth-link">Sign in with&nbsp;<span class="wa-logo-web">web</span><span class="wa-logo-a">a</span><span class="wa-logo-s1">s</span><span class="wa-logo-y">y</span><span class="wa-logo-s2">s</span><span class="wa-logo-t">t</span></a>
        <a href="#" class="hint js-waid-hint">What is it?</a>
        <?php if (!empty($_smarty_tpl->tpl_vars['webasyst_id_auth_result']->value)&&empty($_smarty_tpl->tpl_vars['webasyst_id_auth_result']->value['status'])){?>
            <span class="error" data-code="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['webasyst_id_auth_result']->value['details']['error_code'])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['webasyst_id_auth_result']->value['details']['error_message'])===null||$tmp==='' ? _ws('Unknown authorization error. Sign in with a login and a password.') : $tmp);?>

        </span>
        <?php }?>
    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/onetime_password_form.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5fe0ce286fead6_34243684')) {function content_5fe0ce286fead6_34243684($_smarty_tpl) {?><div class="wa-login-onetime-password-form">
    <form action="" method="post">

        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderRememberMe();?>


        <div class="field wa-buttons">
            <div class="value wa-submit">

                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


                <input type="hidden" name="wa_auth_login" value="1">

                <div class="wa-request-onetime-password-button-wrapper">
                    <button class="button blue wa-request-onetime-password-button" data-href="<?php echo $_smarty_tpl->tpl_vars['onetime_password_url']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>Receive code<?php }else{ ?>Receive confirmation code<?php }?></button>
                    <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        or
                        <a href="javascript:void(0);" class="wa-login-cancel gray underline">cancel</a>
                    <?php }?>
                    <i class="icon16 loading wa-request-onetime-password-button-loading" style="margin-top: -2px; display: none"></i>
                </div>

                <div class="wa-submit-button-wrapper" style="display: none;">
                    <input type="submit" value="Sign in" class="button wa-login-submit">
                    <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        or
                        <a href="javascript:void(0);" class="wa-login-cancel gray underline">cancel</a>
                    <?php }?>
                    <i class="icon16 loading wa-loading" style="display: none;"></i>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['forgotpassword_url']->value&&empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
" class="wa-forgotpassword underline" data-type="forgotpassword">Forgot password?</a>
                <?php }?>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


    </form>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/default_form.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5fe0ce2874f504_64336905')) {function content_5fe0ce2874f504_64336905($_smarty_tpl) {?><div class="wa-login-default-form">
    <?php if ($_smarty_tpl->tpl_vars['bind_with_webasyst_contact']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("./webasyst_contact_info.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <form action="" method="post">

        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderRememberMe();?>


        <div class="field wa-buttons">
            <div class="value wa-submit">

                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


                <input type="hidden" name="wa_auth_login" value="1">

                <?php if ($_smarty_tpl->tpl_vars['bind_with_webasyst_contact']->value){?>
                    <div class="wa-login-and-bind-with-webasyst-id-button-wrapper">
                        <input type="submit" value="Sign in and connect Webasyst ID" class="button blue wa-login-submit">
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="js-back-to-simple-login underline">Sign in without Webasyst ID</a>
                    </div>
                <?php }else{ ?>
                    <input type="submit" value="Sign in" class="button wa-login-submit">
                    <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        or
                        <a href="javascript:void(0);" class="wa-login-cancel gray underline">cancel</a>
                    <?php }?>
                    <i class="icon16 loading wa-loading" style="display: none;"></i>

                    <?php if ($_smarty_tpl->tpl_vars['forgotpassword_url']->value&&empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['force_login_form']->value){?>&force_login_form=1<?php }?>" class="wa-forgotpassword underline" data-type="forgotpassword">Forgot password?</a>
                    <?php }?>
                <?php }?>

            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


    </form>
</div>
<?php }} ?>
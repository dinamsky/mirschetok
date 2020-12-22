<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/errors.html" */ ?>
<?php /*%%SmartyHeaderCode:568916015fe0ce28978529-30857499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7074182144d8a89d446911c5328ff416e72a33' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/login/backend/errors.html',
      1 => 1541667629,
      2 => 'file',
    ),
    '6ac5ab813436661f1f1e8c90cd7d8fcd5c8aeb27' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/helpers.inc.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568916015fe0ce28978529-30857499',
  'function' => 
  array (
    'show_messages' => 
    array (
      'parameter' => 
      array (
        'messages' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'show_field_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'show_uncaught_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'type' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe0ce289c16b3_42458674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0ce289c16b3_42458674')) {function content_5fe0ce289c16b3_42458674($_smarty_tpl) {?><?php /*  Call merged included template "./../../helpers.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./../../helpers.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '568916015fe0ce28978529-30857499');
content_5fe0ce2897d275_09145968($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../helpers.inc.html" */?>
<?php if ($_smarty_tpl->tpl_vars['type']->value==='uncaught'){?>
    <?php smarty_template_function_show_uncaught_errors($_smarty_tpl,array('errors'=>$_smarty_tpl->tpl_vars['errors']->value));?>

<?php }?>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 19:32:40
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-system/login/templates/helpers.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5fe0ce2897d275_09145968')) {function content_5fe0ce2897d275_09145968($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_show_messages')) {
    function smarty_template_function_show_messages($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_messages']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="wa-info-messages" <?php if (!$_smarty_tpl->tpl_vars['messages']->value){?>style="display: none;"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['group_messages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_messages']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_messages']->key => $_smarty_tpl->tpl_vars['group_messages']->value){
$_smarty_tpl->tpl_vars['group_messages']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_messages']->key;
?>
            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <div class="wa-info-msg" data-group-id="<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
            <?php } ?>
        <?php } ?>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_show_field_errors')) {
    function smarty_template_function_show_field_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_field_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <em class="wa-error-msg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</em>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_show_uncaught_errors')) {
    function smarty_template_function_show_uncaught_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_uncaught_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="wa-uncaught-errors" <?php if (!$_smarty_tpl->tpl_vars['errors']->value){?>style="display: none;"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['_errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_errors']->key => $_smarty_tpl->tpl_vars['_errors']->value){
$_smarty_tpl->tpl_vars['_errors']->_loop = true;
?>
            <?php smarty_template_function_show_field_errors($_smarty_tpl,array('errors'=>$_smarty_tpl->tpl_vars['_errors']->value));?>

        <?php } ?>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php }} ?>
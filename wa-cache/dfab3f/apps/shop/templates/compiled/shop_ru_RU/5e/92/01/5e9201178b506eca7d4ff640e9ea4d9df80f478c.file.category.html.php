<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/actions/backend/category.html" */ ?>
<?php /*%%SmartyHeaderCode:9880088185fe1154ccd1398-66947388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9201178b506eca7d4ff640e9ea4d9df80f478c' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkshop/templates/actions/backend/category.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9880088185fe1154ccd1398-66947388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'groups' => 0,
    'group' => 0,
    'group_id' => 0,
    'album' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1154cd09831_17682467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1154cd09831_17682467')) {function content_5fe1154cd09831_17682467($_smarty_tpl) {?><hr />
<?php if (empty($_smarty_tpl->tpl_vars['errors']->value)){?>
    <div class="field">
        <div class="name">
            Магазин Вконтакте
        </div>
        <div class="value">
        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
            <div class="field">
                <div class="name">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['group_name'], ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="value">
                    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['albums'])){?>
                        <select name="vkshop[<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
]">
                            <option value="0">Выберите подборку</option>
                            <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['album']->value['category_id'])){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                    <?php }?>
                </div>
            </div>
        <?php } ?>
        <div class="field">
            <div class="name">
                Подсказка
            </div>
            <div class="value">
                Определите соответствие категории и подборки Вконтакте для автоматической выгрузки товаров для каждой подключенной группы.
            </div>
        </div>
    <?php }?>

<?php }else{ ?>
    <div class="field">
        <div class="name">
            Магазин Вконтакте
        </div>
        <div class="value">
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span><br />
            <?php } ?>
        </div>
    </div>
<?php }?>
<hr /><?php }} ?>
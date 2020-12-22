<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:50
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:6975617375fdfac000002e7-07071318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec91831b00c5100235d403c3b3dcf886ea7f6e1c' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/footer.html',
      1 => 1608498675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6975617375fdfac000002e7-07071318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfac0001a5a8_90854089',
  'variables' => 
  array (
    'theme_settings' => 0,
    'frontend_footer' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfac0001a5a8_90854089')) {function content_5fdfac0001a5a8_90854089($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><div class="s-footer-bottom"><div class="s-layout"><div class="s-column left middle"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['site_copyright'])){?><span class="s-copyright"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['site_copyright'];?>
</span><?php }?></div><div class="s-column right middle"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['age_limit'])){?><span class="s-age-wrapper"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['age_limit'];?>
</span><?php }?></div></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?>
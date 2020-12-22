<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:05
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/scripts.html" */ ?>
<?php /*%%SmartyHeaderCode:2100701785fdfafd9686a80-43040381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aeb1679e5e545b9605a0e4dc3a450ea3539fce5' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/scripts.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2100701785fdfafd9686a80-43040381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd969d203_23352169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd969d203_23352169')) {function content_5fdfafd969d203_23352169($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->globals("_balance_countdown_enabled")){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/countdown.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" defer></script><?php }?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/shop.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" defer></script><?php if ($_smarty_tpl->tpl_vars['wa']->value->globals("load_tippy_js")){?><script src="https://unpkg.com/popper.js@1"></script><script src="https://unpkg.com/tippy.js@5"></script><?php }?><?php }} ?>
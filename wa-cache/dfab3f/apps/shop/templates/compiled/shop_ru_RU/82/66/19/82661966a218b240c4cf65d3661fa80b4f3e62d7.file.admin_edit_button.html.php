<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 07:58:17
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/admin_edit_button.html" */ ?>
<?php /*%%SmartyHeaderCode:2079344185fe02b69d410d9-32925871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82661966a218b240c4cf65d3661fa80b4f3e62d7' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/admin_edit_button.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079344185fe02b69d410d9-32925871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'link' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe02b69d5d798_90464033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe02b69d5d798_90464033')) {function content_5fe02b69d5d798_90464033($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin()){?><?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="edit-btn" target="_blank"<?php if (!empty($_smarty_tpl->tpl_vars['title']->value)){?> title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php }?>><svg class="icon cent-icon" width="18" height="18"><use xlink:href="#icon-edit"></use></svg></a><?php }?><?php }?><?php }} ?>
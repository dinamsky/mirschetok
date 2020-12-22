<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:57
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/lib/config/hints/template.html" */ ?>
<?php /*%%SmartyHeaderCode:206902445fe11579c6f895-22888578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e48823cd0b4ad1c3e84aae1e7b13298c3c28701' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/lib/config/hints/template.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206902445fe11579c6f895-22888578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe11579c7d824_19665477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe11579c7d824_19665477')) {function content_5fe11579c7d824_19665477($_smarty_tpl) {?><span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>
<br/><?php if ($_smarty_tpl->tpl_vars['hint']->value['link']){?><object type="lol/wut"><a href="<?php echo $_smarty_tpl->tpl_vars['hint']->value['link'];?>
" target="_blank" class="s-hint-link">Подробнее</a></object><?php }?></span></span>
<?php }} ?>
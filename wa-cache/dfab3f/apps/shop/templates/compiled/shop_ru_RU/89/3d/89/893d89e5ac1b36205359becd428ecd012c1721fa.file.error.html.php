<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 14:08:13
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/error.html" */ ?>
<?php /*%%SmartyHeaderCode:11783139385fe0821d9cb6f7-83203775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '893d89e5ac1b36205359becd428ecd012c1721fa' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/error.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11783139385fe0821d9cb6f7-83203775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe0821daa6629_30444872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0821daa6629_30444872')) {function content_5fe0821daa6629_30444872($_smarty_tpl) {?><div class="pg-not-found"><div class="layout-center"><div class="pg-not-found__numbers u-cen-txt"><div class="pg-not-found__number bold single-line"><?php if ($_smarty_tpl->tpl_vars['error_code']->value&&$_smarty_tpl->tpl_vars['error_code']->value=="404"){?><div class="pg-not-found__num">4</div><div class="pg-not-found__num pg-not-found__num_zero">0</div><div class="pg-not-found__num">4</div><?php }else{ ?><div class="pg-not-found__num"><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
</div><?php }?></div><div class="pg-not-found__not-found-text"><?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?></div></div><div class="pg-not-found__text-wrapper"><div class="pg-not-found__reason-title bold">Ошибка могла произойти по нескольким причинам:</div><ol class="pg-not-found__reasons"><li class="pg-not-found__reason-i">Вы ввели неправильный адрес.</li><li class="pg-not-found__reason-i">Страница, на которую вы хотели зайти, устарела и была удалена.</li><li class="pg-not-found__reason-i">Акция, ранее действовавшая на сайте, закончилась.</li><li class="pg-not-found__reason-i">На сервере произошла ошибка. Если так, то мы уже знаем о ней и обязательно исправим.</li></ol><div class="pg-not-found__advice bold"><div class="pg-not-found__advice-text">Для того чтобы найти интересующую вас информацию, воспользуйтесь строкой поиска</div><svg class="icon" width="16" height="16"><use xlink:href="#icon-icon"></use></svg></div></div></div></div><?php }} ?>
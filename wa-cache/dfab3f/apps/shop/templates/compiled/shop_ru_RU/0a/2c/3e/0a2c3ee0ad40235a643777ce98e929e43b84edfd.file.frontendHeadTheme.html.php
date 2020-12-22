<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 08:38:01
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/frontendHeadTheme.html" */ ?>
<?php /*%%SmartyHeaderCode:2746617305fe034b9268628-97295770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a2c3ee0ad40235a643777ce98e929e43b84edfd' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/frontendHeadTheme.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2746617305fe034b9268628-97295770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartfilters' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe034b927d8d3_54484089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe034b927d8d3_54484089')) {function content_5fe034b927d8d3_54484089($_smarty_tpl) {?><style><?php if (!empty($_smarty_tpl->tpl_vars['smartfilters']->value['hideDisabled'])){?>.sf-label-disabled, .sf-param-disabled {display: none!important;}<?php }else{ ?>.sf-label-disabled {color: #aaa!important;}<?php }?></style><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/smartfilters/js/theme.filters.min.js?v1.1.0"></script><?php }} ?>
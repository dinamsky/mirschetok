<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:05
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/footer/view-1.html" */ ?>
<?php /*%%SmartyHeaderCode:12635070815fdfafd957c8b3-75524445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6625dcd14e5fa812f9b3457d46e781ef02f4f20' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/footer/view-1.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12635070815fdfafd957c8b3-75524445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'frontend_footer' => 0,
    '_' => 0,
    '_balance_footer_links' => 0,
    'availabe_options' => 0,
    '_cnt' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd9661199_41486052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd9661199_41486052')) {function content_5fdfafd9661199_41486052($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?><footer class="site-footer site-footer_1<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['footer_design_dark']){?> site-footer_dark<?php }?>"><div class="site-footer__top-line mt-hide"></div><?php if (!$_smarty_tpl->tpl_vars['wa']->value->globals('useCompactFooter')){?><div class="site-footer__top"><div class="f-row"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_scrolltop_button']){?><div class="site-footer__item site-footer__item_scroll-top"><span>наверх<svg class="icon" width="8" height="9"><use xlink:href="#icon-arrow-up"></use></svg></span></div><?php }?><div class="site-footer__item site-footer__item_about col-sm"><a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_logo'])){?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_logo'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_logo'];?>
<?php }?>?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"></a><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_about'];?>
<?php if (isset($_smarty_tpl->tpl_vars['frontend_footer']->value)){?><!-- plugin hook: 'frontend_footer' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="s-footer-plugin"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?></div><?php $_smarty_tpl->tpl_vars['_balance_footer_links'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->block("balance_footer_links"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_balance_footer_links']->value)){?><?php echo $_smarty_tpl->tpl_vars['_balance_footer_links']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("footer/links.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><div class="site-footer__item col-sm"><div class="f-info"><h3 class="f-info__header"><span class="f-info__header-text">Мы в сети</span><svg class="icon" width="11" height="7"><use xlink:href="#icon-down-arrow"></use></svg></h3><div class="f-info__body"><ul class="f-info__list"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_vk"><svg class="icon cent-icon" width="16" height="9"><use xlink:href="#icon-vk"></use></svg></span><span class="f-soc__text">ВКонтакте</span></span></a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_fb"><svg class="icon cent-icon" width="7" height="16"><use xlink:href="#icon-fb"></use></svg></span><span class="f-soc__text">Фейсбук</span></span></a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['instagram'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['instagram'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_instagram"><img class="cent-icon" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/icon-instagram-color.svg" alt width="16" height="17"><svg class="icon cent-icon" width="16" height="17"><use xlink:href="#icon-instagram-monochrome"></use></svg></span><span class="f-soc__text">Инстаграм</span></span></a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['youtube'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['youtube'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_ytb"><svg class="icon cent-icon" width="30" height="21"><use xlink:href="#icon-yt-monochrome"></use></svg></span><span class="f-soc__text">Youtube</span></span></a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['telegram'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['telegram'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_telegram"><svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-telegram"></use></svg></span><span class="f-soc__text">Telegram</span></span></a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter'])){?><li class="f-info__i"><a class="f-info__l" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter'];?>
" target="_blank"><span class="f-soc"><span class="soc-btn soc-btn soc-btn_tw"><svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-tw"></use></svg></span><span class="f-soc__text">Твиттер</span></span></a></li><?php }?></ul></div></div></div><div class="site-footer__item site-footer__item_contacts col-sm"><div class="f-info"><h3 class="f-info__header"><span class="f-info__header-text">Контакты</span><svg class="icon" width="11" height="7"><use xlink:href="#icon-down-arrow"></use></svg></h3><div class="f-info__body"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone1'])){?><div class="f-block"><a class="f-phone iconed-text" href="tel:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone1'],"/[^+0-9]/",'');?>
"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><span class="f-phone__num"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone1'];?>
</span></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone2'])){?><div class="f-block"><a class="f-phone" href="tel:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone2'],"/[^+0-9]/",'');?>
"><svg class="icon" width="16" height="16"><use xlink:href="#icon-phone"></use></svg><span class="f-phone__num"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone2'];?>
</span></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone_text'])){?><div class="f-worktime"><div class="f-worktime__days"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_phone_text'];?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_address'])){?><div class="f-address iconed-text"><svg class="icon" width="16" height="16"><use xlink:href="#icon-compass"></use></svg><div class="f-address__text"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_address'];?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['address_map'])){?><div class="f-block"><a class="link_sec drive-map popup-show_map" href="#">Карта проезда</a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_email'])){?><div class="f-block"><a class="link_sec" href="mailto:<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_contacts_email'];?>
</a></div><?php }?></div></div></div></div></div><?php }?><?php if (($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['footer_payments'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['footer_copyright'])||$_smarty_tpl->tpl_vars['theme_settings']->value['footer_walogo']){?><div class="site-footer__bottom"><div class="f-row"><div class="col-lg"><div class="site-footer__copy-right"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['footer_copyright']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['footer_walogo']){?><div class="site-footer__vendor-sign"><a href="http://www.shop-script.ru/" target="_blank"><span role="complementary"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/dots/all-dots-default-order.png" alt="Мы используем Webasyst"/></span></a></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['footer_payments']){?><div class="col-lg"><div class="f-payments"><?php $_smarty_tpl->tpl_vars['availabe_options'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->payment(), null, 0);?><?php $_smarty_tpl->tpl_vars['_cnt'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availabe_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['_cnt']->value==8){?><?php break 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['option']->value['logo']){?><div class="f-payments__item"><img src="<?php echo $_smarty_tpl->tpl_vars['option']->value['logo'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></div><?php $_smarty_tpl->tpl_vars['_cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['_cnt']->value+1, null, 0);?><?php }?><?php } ?></div></div><?php }?></div></div><?php }?></footer><?php }} ?>
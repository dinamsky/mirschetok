<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 23:11:05
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/socials.html" */ ?>
<?php /*%%SmartyHeaderCode:6936265405fdfafd9398830-87894050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77f5edb54ddb7abbb8db3ab9168634354ae9a46' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/site/themes/balance/header/socials.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6936265405fdfafd9398830-87894050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfafd9432ed8_84919542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfafd9432ed8_84919542')) {function content_5fdfafd9432ed8_84919542($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_socials_design']=="icons"){?><div class="soc-list soc-list_icon-only"><div class="soc-list__inner"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_vk" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'];?>
" target="_blank"><svg class="icon cent-icon" width="20" height="11"><use xlink:href="#icon-vk"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_fb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'];?>
" target="_blank"><svg class="icon cent-icon" width="8" height="16"><use xlink:href="#icon-fb"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ins" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'];?>
" target="_blank"><svg class="icon cent-icon" width="16" height="18"><use xlink:href="#icon-instagram-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ytb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'];?>
" target="_blank"><svg class="icon cent-icon" width="30" height="21"><use xlink:href="#icon-yt-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tlg" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'];?>
" target="_blank"><svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-telegram"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tw" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'];?>
" target="_blank"><svg class="icon cent-icon" width="16" height="13"><use xlink:href="#icon-tw"></use></svg></a></div><?php }?></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_socials_design']=="color"){?><div class="soc-list"><div class="soc-list__inner"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_vk" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'];?>
" target="_blank"><svg class="icon cent-icon" width="13" height="7"><use xlink:href="#icon-vk"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_fb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'];?>
" target="_blank"><svg class="icon cent-icon" width="6" height="13"><use xlink:href="#icon-fb"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ins" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'];?>
" target="_blank"><img class="cent-icon" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/icon-instagram-color.svg" alt="" width="16" height="17"><svg class="icon cent-icon" width="13" height="13"><use xlink:href="#icon-instagram-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ytb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'];?>
" target="_blank"><svg class="icon cent-icon" width="34" height="24"><use xlink:href="#icon-yt-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tlg" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'];?>
" target="_blank"><svg class="icon cent-icon" width="13" height="12"><use xlink:href="#icon-telegram"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tw" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'];?>
" target="_blank"><svg class="icon cent-icon" width="14" height="10"><use xlink:href="#icon-tw"></use></svg></a></div><?php }?></div></div><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['header_socials_design']=="mono"){?><div class="soc-list soc-list_monotones"><div class="soc-list__inner"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_vk" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_vk'];?>
" target="_blank"><svg class="icon cent-icon" width="13" height="7"><use xlink:href="#icon-vk"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_fb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_facebook'];?>
" target="_blank"><svg class="icon cent-icon" width="6" height="13"><use xlink:href="#icon-fb"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ins" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_instagram'];?>
" target="_blank"><svg class="icon cent-icon" width="13" height="13"><use xlink:href="#icon-instagram-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_ytb" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_youtube'];?>
" target="_blank"><svg class="icon cent-icon" width="34" height="24"><use xlink:href="#icon-yt-monochrome"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tlg" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_telegram'];?>
" target="_blank"><svg class="icon cent-icon" width="13" height="12"><use xlink:href="#icon-telegram"></use></svg></a></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'])){?><div class="soc-list__i"><a class="soc-btn soc-btn_tw" href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['header_twitter'];?>
" target="_blank"><svg class="icon cent-icon" width="14" height="10"><use xlink:href="#icon-tw"></use></svg></a></div><?php }?></div></div><?php }?><?php }} ?>
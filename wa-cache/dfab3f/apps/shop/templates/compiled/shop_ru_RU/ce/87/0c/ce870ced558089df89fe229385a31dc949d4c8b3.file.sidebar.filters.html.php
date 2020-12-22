<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 08:37:59
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/sidebar.filters.html" */ ?>
<?php /*%%SmartyHeaderCode:2022826705fe034b7b6b748-96978267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce870ced558089df89fe229385a31dc949d4c8b3' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/sidebar.filters.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2022826705fe034b7b6b748-96978267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'filters' => 0,
    'fid' => 0,
    'c' => 0,
    'filter' => 0,
    'v' => 0,
    'v_id' => 0,
    '_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe034b7e6cc27_60901221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe034b7e6cc27_60901221')) {function content_5fe034b7e6cc27_60901221($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="catalog-pg__outer-wrapper pos-rel" data-sidebar="filters"><div class="descr-mode pos-abs"><span class="pos-rel">FILTERS</span></div><div class="catalog-pg__sidebar-header catalog-pg__sidebar-header_filter"><div class="catalog-pg__sidebar-header-title"><svg class="icon" width="16" height="16"><use xlink:href="#icon-filter"></use></svg><strong>Фильтры</strong></div><div class="catalog-pg__sidebar-header-close"><svg class="icon" width="10" height="10"><use xlink:href="#icon-close"></use></svg></div></div><div class="catalog-pg__sidebar-inner filters"><form class="catalog-pg__filter-v<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_design']=='free'){?> catalog-pg__filter-v_nobd<?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['filters_design']=='backgrounded'){?> catalog-pg__sidebar_grey<?php }?>" method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"><?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['filter']->key;
?><div class="catalog-pg__filter-item"><div class="filter-wr"><?php if ($_smarty_tpl->tpl_vars['fid']->value=='price'){?><?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?><div class="filter-wr__header active"><div class="filter-wr__title"><strong>Цена (<?php echo $_smarty_tpl->tpl_vars['c']->value['sign'];?>
)</strong></div><svg class="icon" width="11" height="6"><use xlink:href="#arrow-down-big"></use></svg></div><div class="filter-wr__body"><div class="range-slider"><div class="range-slider__inputs"><div class="range-slider__input"><input type="text" name="price_min" class="filter-range__min" value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_min',floor($_smarty_tpl->tpl_vars['filter']->value['min']));?>
" placeholder="<?php echo floor($_smarty_tpl->tpl_vars['filter']->value['min']);?>
"></div><div class="range-slider__input"><input type="text" name="price_max" class="filter-range__max" value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_max',ceil($_smarty_tpl->tpl_vars['filter']->value['max']));?>
" placeholder="<?php echo ceil($_smarty_tpl->tpl_vars['filter']->value['max']);?>
"></div></div></div></div><?php }else{ ?><div class="filter-wr__header active"><div class="filter-wr__title"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?>(<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['title'];?>
)<?php }?></strong></div><svg class="icon" width="11" height="6"><use xlink:href="#arrow-down-big"></use></svg></div><div class="filter-wr__body"><?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='boolean'){?><div class="filter-options<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> filter-options_more <?php }?>"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> data-qty="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'];?>
"<?php }?>><ul class="filter-options__list"><li class="filter-options__item"><label><span>Да</span><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])){?> checked<?php }?> value="1"></label></li><li class="filter-options__item"><label><span>Нет</span><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])==='0'){?> checked<?php }?> value="0"></label></li><li class="filter-options__item"><label><span>Неважно</span><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],'')===''){?> checked<?php }?> value=""></label></li></ul></div><?php }elseif($_smarty_tpl->tpl_vars['filter']->value['type']=='color'){?><div class="filter-options<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> filter-options_more <?php }?>"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> data-qty="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'];?>
"<?php }?>><ul class="filter-options__list"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><li class="filter-options__item"><label class="form-label"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]"<?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?> checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"></label></li><?php } ?></ul><?php if ((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'])===null||$tmp==='' ? 0 : $tmp)>0&&count($_smarty_tpl->tpl_vars['filter']->value['values'])>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'])===null||$tmp==='' ? 0 : $tmp)){?><div class="filter-options__qty-toggle single-line" data-hide="свернуть" data-show="показать еще"><span>показать еще</span><svg class="icon" width="8" height="4"><use xlink:href="#arrow-down-big"></use></svg></div><?php }?></div><?php }elseif(isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?><?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code']), null, 0);?><div class="range-slider"><div class="range-slider__inputs"><div class="range-slider__input"><input type="text" class="filter-range__min" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]"<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?> value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
"<?php }?> placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
"></div><div class="range-slider__input"><input type="text" class="filter-range__max" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]"<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?> value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
"<?php }?> placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
"></div></div><?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?><?php if ($_smarty_tpl->tpl_vars['filter']->value['unit']['value']!=$_smarty_tpl->tpl_vars['filter']->value['base_unit']['value']){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[unit]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['value'];?>
"><?php }?><?php }?></div><?php }else{ ?><div class="filter-options<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> filter-options_more <?php }?>"<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse']>0){?> data-qty="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'];?>
"<?php }?>><ul class="filter-options__list"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><li class="filter-options__item"><label class="form-label"><span><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]"<?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?> checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"></label></li><?php } ?></ul><?php if ((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'])===null||$tmp==='' ? 0 : $tmp)>0&&count($_smarty_tpl->tpl_vars['filter']->value['values'])>(($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['filters_collapse'])===null||$tmp==='' ? 0 : $tmp)){?><div class="filter-options__qty-toggle single-line" data-hide="свернуть" data-show="показать еще"><span>показать еще</span><svg class="icon" width="8" height="4"><use xlink:href="#arrow-down-big"></use></svg></div><?php }?></div><?php }?></div><?php }?></div></div><?php } ?><div class="catalog-pg__filter-btns"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
" class="catalog-pg__btn-reset btn btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn btn_sec-5"><div class="hover-anim"></div><span>очистить</span></a></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')){?><input type="hidden" name="sort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('sort'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('order')){?><input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('order'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></form></div></div><?php }} ?>
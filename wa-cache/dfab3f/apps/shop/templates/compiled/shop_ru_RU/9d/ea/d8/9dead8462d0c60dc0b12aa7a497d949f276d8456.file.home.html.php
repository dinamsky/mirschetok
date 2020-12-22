<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/home.html" */ ?>
<?php /*%%SmartyHeaderCode:3335834505fdfabfe24d859-53388966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dead8462d0c60dc0b12aa7a497d949f276d8456' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/home.html',
      1 => 1608498918,
      2 => 'file',
    ),
    '06f27ad97cfa8e5846e3d984c9ffa7efbd3f8849' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/home.slider.html',
      1 => 1608498918,
      2 => 'file',
    ),
    'e85d6a2068f0a2a6fcc95021eae84c8c532ba98e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.sorting.html',
      1 => 1608177211,
      2 => 'file',
    ),
    'b45d8c88fa51cd22fd9107980314256ad8b2cf57' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.short.html',
      1 => 1608177211,
      2 => 'file',
    ),
    '4fc0318f78302dfec75683cd9ab6fba6b2a3419e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.items.html',
      1 => 1608177211,
      2 => 'file',
    ),
    '5c0a6030b02e3a82cfe585500b44b79cf69fc320' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.html',
      1 => 1608177211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3335834505fdfabfe24d859-53388966',
  'function' => 
  array (
    '_renderSlider' => 
    array (
      'parameter' => 
      array (
        'promocards' => 
        array (
        ),
        'products' => 
        array (
        ),
        'type' => '',
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfabfe8aa497_75499812',
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'promocards' => 0,
    'products' => 0,
    'type' => 0,
    '_promocards' => 0,
    '_list_id' => 0,
    '_slider_products' => 0,
    'promo' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    '_products' => 0,
    '_show_product_actions' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfabfe8aa497_75499812')) {function content_5fdfabfe8aa497_75499812($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("showWidgets",true);?>
<?php if (!function_exists('smarty_template_function__renderSlider')) {
    function smarty_template_function__renderSlider($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderSlider']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php /*  Call merged included template "home.slider.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("home.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('promocards'=>$_smarty_tpl->tpl_vars['promocards']->value,'products'=>$_smarty_tpl->tpl_vars['products']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff438e4b9_96037921($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "home.slider.html" */?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isShopHome",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("showBottomBanner",true);?>
<?php $_smarty_tpl->tpl_vars['_promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos('link','900'), null, 0);?><?php $_smarty_tpl->tpl_vars['_show_product_actions'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['show_product_actions_on_main_page'])){?><?php $_smarty_tpl->tpl_vars['_show_product_actions'] = new Smarty_variable(true, null, 0);?><?php }?><div class="s-home-wrapper"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['slider_mode']==="promos"){?><?php if (!empty($_smarty_tpl->tpl_vars['_promocards']->value)){?><?php smarty_template_function__renderSlider($_smarty_tpl,array('promocards'=>$_smarty_tpl->tpl_vars['_promocards']->value,'type'=>"wide",'use_promo_style'=>true));?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['slider_mode']==="promos_without_mask"){?><?php if (!empty($_smarty_tpl->tpl_vars['_promocards']->value)){?><?php smarty_template_function__renderSlider($_smarty_tpl,array('promocards'=>$_smarty_tpl->tpl_vars['_promocards']->value,'type'=>"wide"));?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['slider_mode']==="products"){?><?php $_smarty_tpl->tpl_vars['_list_id'] = new Smarty_variable("bestsellers", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['slider_product_list_id'])){?><?php $_smarty_tpl->tpl_vars['_list_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['slider_product_list_id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_slider_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['_list_id']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_slider_products']->value)){?><?php smarty_template_function__renderSlider($_smarty_tpl,array('products'=>$_smarty_tpl->tpl_vars['_slider_products']->value));?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['slider_mode']==="products_wide"){?><?php $_smarty_tpl->tpl_vars['_list_id'] = new Smarty_variable("bestsellers", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['slider_product_list_id'])){?><?php $_smarty_tpl->tpl_vars['_list_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['slider_product_list_id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_slider_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['_list_id']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_slider_products']->value)){?><?php smarty_template_function__renderSlider($_smarty_tpl,array('products'=>$_smarty_tpl->tpl_vars['_slider_products']->value,'type'=>"wide"));?>
<?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_promocards']->value)&&$_smarty_tpl->tpl_vars['theme_settings']->value['show_promos_below_slider']!=="hide"){?><section class="s-promos-wrapper"><ul class="s-promos-list"><?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li class="s-item-wrapper <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_promos_below_slider']==="show_with_mask"){?>with-mask<?php }?>" id="s-promo-<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
"><div class="s-item-block"><div class="s-background" style="background-color: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['promo']->value['background_color'])===null||$tmp==='' ? "#fff" : $tmp);?>
;"></div><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['image'])){?><div class="s-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');"></div><?php }?><div class="s-text-wrapper" <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['color'])){?>style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
"<?php }?>><div class="s-text-block"><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h5><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['body'])){?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?></div></div><a class="s-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"></a></div></li><?php } ?></ul></section><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_novelties_list_id'])){?><?php $_smarty_tpl->tpl_vars['_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_novelties_list_id']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_products']->value)){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_novelties_title']){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_novelties_title'], null, 0);?><?php }?><?php /*  Call merged included template "./products.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['_products']->value,'short'=>true,'hide_buttons'=>!$_smarty_tpl->tpl_vars['_show_product_actions']->value,'section_title'=>$_smarty_tpl->tpl_vars['_title']->value), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff46056f1_37873083($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.html" */?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_list_id'])){?><?php $_smarty_tpl->tpl_vars['_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_list_id']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_products']->value)){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title'], null, 0);?><?php }?><?php /*  Call merged included template "./products.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['_products']->value,'short'=>true,'hide_buttons'=>!$_smarty_tpl->tpl_vars['_show_product_actions']->value,'section_title'=>$_smarty_tpl->tpl_vars['_title']->value), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff46056f1_37873083($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.html" */?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_list_id'])){?><?php $_smarty_tpl->tpl_vars['_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_list_id']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_products']->value)){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title'], null, 0);?><?php }?><?php /*  Call merged included template "./products.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['_products']->value,'short'=>true,'hide_buttons'=>!$_smarty_tpl->tpl_vars['_show_product_actions']->value,'section_title'=>$_smarty_tpl->tpl_vars['_title']->value), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff46056f1_37873083($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.html" */?><?php }?><?php }?></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/home.slider.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfbff438e4b9_96037921')) {function content_5fdfbff438e4b9_96037921($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><section class="s-slider-section <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)&&(empty($_smarty_tpl->tpl_vars['type']->value)||$_smarty_tpl->tpl_vars['type']->value!=="wide")){?>with-border<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['promocards']->value)){?><ul class="s-slide-list" id="js-home-slide-list" style="<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['slider_height']){?>height: <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['slider_height'];?>
px<?php }?>"><?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_text_style'] = new Smarty_variable('', null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['use_promo_style']->value)){?><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['color'])){?><?php $_smarty_tpl->tpl_vars['_text_style'] = new Smarty_variable("color: ".((string)$_smarty_tpl->tpl_vars['slide']->value['color']).";", null, 0);?><?php }?><?php }?><li class="s-slide-wrapper is-promocard-slide <?php if (!empty($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value==="wide"){?>is-wide<?php }else{ ?>is-short<?php }?>"><div class="s-slide-block"><?php if ($_smarty_tpl->tpl_vars['slide']->value['image']){?><div class="s-image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
);"></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['use_promo_style']->value)){?><?php $_smarty_tpl->tpl_vars['_bg_style'] = new Smarty_variable('', null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['background_color'])){?><?php $_smarty_tpl->tpl_vars['_bg_style'] = new Smarty_variable("background: ".((string)$_smarty_tpl->tpl_vars['slide']->value['background_color'])."; opacity: 0.7;", null, 0);?><?php }?><div class="s-slide-background" <?php if (!empty($_smarty_tpl->tpl_vars['_bg_style']->value)){?>style="<?php echo $_smarty_tpl->tpl_vars['_bg_style']->value;?>
"<?php }?>></div><?php }?><div class="s-text-wrapper" <?php if (!empty($_smarty_tpl->tpl_vars['_text_style']->value)){?>style="<?php echo $_smarty_tpl->tpl_vars['_text_style']->value;?>
"<?php }?>><div class="s-text-block"><h3 class="s-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3><p class="s-description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['countdown_datetime'])){?><div class="s-counter"><span class="s-countdown-wrapper js-promo-countdown" data-start="<?php echo date('Y-m-d H:i:s');?>
" data-end="<?php echo $_smarty_tpl->tpl_vars['slide']->value['countdown_datetime'];?>
"></span></div><?php }?></div></div><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"></a></div></li><?php } ?></ul><script>( function($, waTheme) {var $countdowns = $(".js-promo-countdown");if ($countdowns.length) {$countdowns.each( function() {var $wrapper = $(this),options = {$wrapper: $wrapper,locale: waTheme.locale,start: $wrapper.data('start').replace(/-/g, '/'),end: $wrapper.data('end').replace(/-/g, '/')};if (!$wrapper.data("countdown")) {new waTheme.init.shop.CountDown(options);}});}})(jQuery, window.waTheme);</script><?php }elseif(!empty($_smarty_tpl->tpl_vars['products']->value)){?><?php $_smarty_tpl->tpl_vars['_slider_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->images(array_keys($_smarty_tpl->tpl_vars['products']->value),"0x320@2x"), null, 0);?><?php  $_smarty_tpl->tpl_vars['_photos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_photos']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_slider_photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_photos']->key => $_smarty_tpl->tpl_vars['_photos']->value){
$_smarty_tpl->tpl_vars['_photos']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['_photos']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('_slider_photos', null, 0);
$_smarty_tpl->tpl_vars['_slider_photos']->value[$_smarty_tpl->tpl_vars['product_id']->value] = end($_smarty_tpl->tpl_vars['_photos']->value);?><?php } ?><ul class="s-slide-list" id="js-home-slide-list" style="<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['slider_height']){?>height: <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['slider_height'];?>
px<?php }?>"><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value==="wide"){?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['_slider_photos']->value[$_smarty_tpl->tpl_vars['product']->value['id']][('url_').("0x320@2x")], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"0x320@2x"), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['name'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?><?php ob_start();?><?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['name'])." — ".$_tmp1, null, 0);?><?php }?><li class="s-slide-wrapper is-product-slide <?php if (!empty($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value==="wide"){?>is-wide<?php }else{ ?>is-short<?php }?>" itemscope itemtype="http://schema.org/Product"><div class="s-slide-block"><a class="s-image" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['_product_image_src']->value;?>
');"></a><div class="s-text-wrapper"><div class="s-text-block"><h2 class="s-header" itemprop="name"><a class="name" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h2><p class="s-description" itemprop="description"><?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']),255);?>
<?php }?></p><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><div class="s-price-wrapper"><span class="s-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['compare_price'])){?><span class="s-compare-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
</span><?php }?></div><meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['summary'])){?><meta itemprop="description" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']);?>
"><?php }?></div></div></div><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"></a></div><?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['badge_html']->value)){?><div class="s-badge-wrapper is-rounded"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div><?php }?></li><?php } ?></ul><?php }?><script>( function($) {var href = "<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
plugins/bxslider/jquery.bxslider.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
";(!$.fn.bxSlider) ? $.getScript(href, initSlider) : initSlider();function initSlider() {var $slider = $("#js-home-slide-list"),slide_count = $slider.find("li").length;$slider.bxSlider({auto : slide_count > 1,touchEnabled: true,pause : 5000,autoHover : true,pager: slide_count > 1});}})(jQuery);</script></section><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['show_tpl']){?><!-- /TPL:  <?php echo dirname($_smarty_tpl->source->filepath);?>
/<?php echo basename($_smarty_tpl->source->filepath);?>
  --><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfbff46056f1_37873083')) {function content_5fdfbff46056f1_37873083($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?><?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_types'] = new Smarty_variable(array("thumbs"=>"thumbs-view","table"=>"table-view"), null, 0);?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_types']->value["thumbs"], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['products_default_view_type'])&&!empty($_smarty_tpl->tpl_vars['_types']->value[$_smarty_tpl->tpl_vars['theme_settings']->value['products_default_view_type']])){?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_types']->value[$_smarty_tpl->tpl_vars['theme_settings']->value['products_default_view_type']], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['type']->value)){?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_types']->value[$_smarty_tpl->tpl_vars['type']->value], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['short']->value)){?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable("is-short", null, 0);?><?php }?><section class="s-products-wrapper" id="js-products-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['section_title']->value)){?><div class="s-section-header"><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</div><?php }?><?php if (empty($_smarty_tpl->tpl_vars['short']->value)){?><div class="s-sorting-wrapper"><div class="s-layout"><?php if (!empty($_smarty_tpl->tpl_vars['show_sorting']->value)){?><div class="s-column"><?php /*  Call merged included template "./products.sorting.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.sorting.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff4666184_32158392($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.sorting.html" */?></div><?php }?><div class="s-column right"><div class="s-sorting-list view-filters js-view-filters"><span class="s-label">Вид каталога</span><a class="js-set-thumbs-view <?php if ($_smarty_tpl->tpl_vars['_type']->value=="thumbs-view"){?>is-active<?php }?>" href="javascript:void(0);" title="Плитка"><i class="icon thumbs"></i></a><a class="js-set-table-view <?php if ($_smarty_tpl->tpl_vars['_type']->value=="table-view"){?>is-active<?php }?>" href="javascript:void(0);" title="Таблица"><i class="icon table"></i></a></div></div></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['slider']->value)){?><div class="s-slider-wrapper js-slider-wrapper"><div class="s-slider-block"><?php }?><ul class="s-products-list <?php echo $_smarty_tpl->tpl_vars['_type']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['short']->value)){?><?php /*  Call merged included template "./products.short.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.short.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff477d319_71150322($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.short.html" */?><?php }else{ ?><?php /*  Call merged included template "./products.items.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./products.items.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3335834505fdfabfe24d859-53388966');
content_5fdfbff489aa82_28358901($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./products.items.html" */?><?php }?></ul><?php if (!empty($_smarty_tpl->tpl_vars['slider']->value)){?></div><span class="s-arrow js-arrow left"></span><span class="s-arrow js-arrow right"></span></div><?php }?><?php if (empty($_smarty_tpl->tpl_vars['slider']->value)&&isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?><div class="s-paging-wrapper <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=="lazyloading"){?>is-lazy-loading<?php }?>" data-loading-text="Загрузка..."><?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array("class"=>"s-paging-list")),$_smarty_tpl);?>
</div><?php }?><script>( function($) {var use_lazy = <?php if (empty($_smarty_tpl->tpl_vars['slider']->value)&&isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1&&$_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=="lazyloading"){?>true<?php }else{ ?>false<?php }?>;new window.waTheme.init.shop.Products({$wrapper: $("#js-products-wrapper").removeAttr("id"),use_slider: <?php if (!empty($_smarty_tpl->tpl_vars['slider']->value)){?>true<?php }else{ ?>false<?php }?>,use_lazy: use_lazy,locales: {to_compare: "К сравнению",in_compare: "В сравнении",added: "Добавлен",buy: "Купить"}});})(jQuery);</script></section><?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.sorting.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfbff4666184_32158392')) {function content_5fdfbff4666184_32158392($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_current_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1), null, 0);?><?php $_smarty_tpl->tpl_vars['_active_sort_name'] = new Smarty_variable(waRequest::get('sort',null), null, 0);?><?php $_smarty_tpl->tpl_vars['_sort_fields'] = new Smarty_variable(array("name"=>array("id"=>"name","name"=>_w("Name"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=name"),"price"=>array("id"=>"price","name"=>_w("Price"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=price"),"total_sales"=>array("id"=>"total_sales","name"=>_w("Bestsellers"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=total_sales"),"rating"=>array("id"=>"rating","name"=>_w("Customer rating"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=rating"),"create_datetime"=>array("id"=>"create_datetime","name"=>_w("Date added"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=create_datetime"),"stock"=>array("id"=>"stock","name"=>_w("In stock"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value)."?sort=stock")), null, 0);?><?php $_smarty_tpl->tpl_vars['_active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sort_fields']->value["create_datetime"], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['category']->value)&&empty($_smarty_tpl->tpl_vars['category']->value['sort_products'])){?><?php $_smarty_tpl->tpl_vars['_part'] = new Smarty_variable(array("new"=>array("id"=>"new","name"=>_w("New & Popular"),"uri"=>((string)$_smarty_tpl->tpl_vars['_current_uri']->value))), null, 0);?><?php $_smarty_tpl->tpl_vars['_sort_fields'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_part']->value,$_smarty_tpl->tpl_vars['_sort_fields']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sort_fields']->value["new"], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['active_sort']->value)&&!empty($_smarty_tpl->tpl_vars['_sort_fields']->value[$_smarty_tpl->tpl_vars['active_sort']->value])){?><?php $_smarty_tpl->tpl_vars['_active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sort_fields']->value[$_smarty_tpl->tpl_vars['active_sort']->value], null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_active_sort_name']->value)&&!empty($_smarty_tpl->tpl_vars['_sort_fields']->value[$_smarty_tpl->tpl_vars['_active_sort_name']->value])){?><?php $_smarty_tpl->tpl_vars['_active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sort_fields']->value[$_smarty_tpl->tpl_vars['_active_sort_name']->value], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_active_sort']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['_active_sort']->value['name']));?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['category']->value)){?><div class="s-sorting-list sort-filters"><span class="s-label">Сортировка:</span><div class="s-dropdown-wrapper"><span class="s-sort-active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_sort']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><ul><?php  $_smarty_tpl->tpl_vars['_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sort']->key => $_smarty_tpl->tpl_vars['_sort']->value){
$_smarty_tpl->tpl_vars['_sort']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_active_sort']->value['id']==$_smarty_tpl->tpl_vars['_sort']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?><li class="<?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>is-active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['_sort']->value['id'],$_smarty_tpl->tpl_vars['_sort']->value['name'],$_smarty_tpl->tpl_vars['_active_sort']->value['id']);?>
</li><?php } ?></ul></div></div><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.short.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfbff477d319_71150322')) {function content_5fdfbff477d319_71150322($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_show_compare'] = new Smarty_variable(true, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['enable_compare'])){?><?php if (!isset($_smarty_tpl->tpl_vars['hide_buttons']->value)||!empty($_smarty_tpl->tpl_vars['hide_buttons']->value)){?><?php $_smarty_tpl->tpl_vars['_show_compare'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['product']->value['count']===null||$_smarty_tpl->tpl_vars['product']->value['count']>0, null, 0);?><?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']), null, 0);?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"200"))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/svg/empty_photo.svg" : $tmp), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['skus'])&&!empty($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']])){?><?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])===1)){?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><li class="s-product-wrapper" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" itemscope itemtype="http://schema.org/Product"><?php if (!empty($_smarty_tpl->tpl_vars['badge_html']->value)){?><div class="s-badge-wrapper is-corner"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div><?php }?><div class="s-product-block"><div class="s-image-wrapper"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_product_image_src']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" itemprop="image"></a></div><div class="s-info-wrapper"><h5 class="s-product-header" itemprop="name"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h5></div><div class="s-offers-wrapper" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><div class="s-price-wrapper"><span class="s-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span><?php if (empty($_smarty_tpl->tpl_vars['hide_buttons']->value)){?><span class="s-compare"><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
<?php }?></span><?php }?><?php if ($_smarty_tpl->tpl_vars['available']->value){?><meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><link itemprop="availability" href="http://schema.org/InStock"/><?php }else{ ?><meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><link itemprop="availability" href="http://schema.org/OutOfStock"/><?php }?></div></div><?php if (empty($_smarty_tpl->tpl_vars['hide_buttons']->value)){?><div class="s-actions-wrapper"><div class="s-buttons-wrapper"><div class="s-layout"><div class="s-column"><?php if ($_smarty_tpl->tpl_vars['available']->value){?><form class="add-to-cart" <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['product']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><input class="s-button js-add-button" type="submit" value="<?php echo _wd('shop','Buy');?>
"><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></form><?php }else{ ?><input type="button" value="<?php echo _wd('shop','Buy');?>
" disabled><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['_show_compare']->value)){?><div class="s-column right"><a class="s-compare-button <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?>is-active<?php }?>" href="javascript:void(0);" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php echo _wd('shop','In comparison list');?>
<?php }else{ ?><?php echo _wd('shop','To comparison');?>
<?php }?>"><i class="svg-icon compare size-11 <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php }else{ ?>active<?php }?>"></i><span class="s-name"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?>В сравнении<?php }else{ ?>К сравнению<?php }?></span></a></div><?php }?></div></div></div><?php }?></div></li><?php } ?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 00:19:48
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/wiper_desc/products.items.html" */ ?>
<?php if ($_valid && !is_callable('content_5fdfbff489aa82_28358901')) {function content_5fdfbff489aa82_28358901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['_show_compare'] = new Smarty_variable(true, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['enable_compare'])){?><?php if (!isset($_smarty_tpl->tpl_vars['hide_buttons']->value)||!empty($_smarty_tpl->tpl_vars['hide_buttons']->value)){?><?php $_smarty_tpl->tpl_vars['_show_compare'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['product']->value['count']===null||$_smarty_tpl->tpl_vars['product']->value['count']>0, null, 0);?><?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']), null, 0);?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"200"))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/svg/empty_photo.svg" : $tmp), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['skus'])&&!empty($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']])){?><?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])===1)){?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><li class="s-product-wrapper" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" itemscope itemtype="http://schema.org/Product"><?php if (!empty($_smarty_tpl->tpl_vars['badge_html']->value)){?><div class="s-badge-wrapper is-corner"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div><?php }?><div class="s-product-block"><div class="s-image-wrapper"><a class="s-image" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_product_image_src']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" itemprop="image"></a></div><div class="s-info-wrapper"><h5 class="s-product-header" itemprop="name"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h5><div class="s-product-description" itemprop="description"><?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']),100);?>
<?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['sku_id'])&&!empty($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])){?><div class="s-sku-wrapper"><span class="s-label">Артикул</span><span class="s-sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span></div><?php }?><div class="s-rating-wrapper"><?php $_smarty_tpl->tpl_vars['_rate'] = new Smarty_variable(0, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating'])){?><?php $_smarty_tpl->tpl_vars['_rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['product']->value['rating'],1), null, 0);?><?php }?><span class="s-rating-block nowrap"><?php $_smarty_tpl->tpl_vars['_i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['_i']->step = 1;$_smarty_tpl->tpl_vars['_i']->total = (int)ceil(($_smarty_tpl->tpl_vars['_i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['_i']->step));
if ($_smarty_tpl->tpl_vars['_i']->total > 0){
for ($_smarty_tpl->tpl_vars['_i']->value = 0, $_smarty_tpl->tpl_vars['_i']->iteration = 1;$_smarty_tpl->tpl_vars['_i']->iteration <= $_smarty_tpl->tpl_vars['_i']->total;$_smarty_tpl->tpl_vars['_i']->value += $_smarty_tpl->tpl_vars['_i']->step, $_smarty_tpl->tpl_vars['_i']->iteration++){
$_smarty_tpl->tpl_vars['_i']->first = $_smarty_tpl->tpl_vars['_i']->iteration == 1;$_smarty_tpl->tpl_vars['_i']->last = $_smarty_tpl->tpl_vars['_i']->iteration == $_smarty_tpl->tpl_vars['_i']->total;?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star-empty", null, 0);?><?php if ($_smarty_tpl->tpl_vars['_i']->value<$_smarty_tpl->tpl_vars['_rate']->value){?><?php $_smarty_tpl->tpl_vars['_delta'] = new Smarty_variable($_smarty_tpl->tpl_vars['_rate']->value-$_smarty_tpl->tpl_vars['_i']->value, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_delta']->value>=1){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star", null, 0);?><?php }elseif(round($_smarty_tpl->tpl_vars['_delta']->value)==1){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star-half", null, 0);?><?php }?><?php }?><i class="svg-icon <?php echo $_smarty_tpl->tpl_vars['_icon_class']->value;?>
 size-11"></i><?php }} ?></span><?php $_smarty_tpl->tpl_vars['_product_url'] = new Smarty_variable(reset(ref(explode('?',$_smarty_tpl->tpl_vars['product']->value['frontend_url']))), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['_product_url']->value;?>
reviews/" class="s-rating-hint"> <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating_count'])){?><?php echo $_smarty_tpl->tpl_vars['product']->value['rating_count'];?>
<?php }else{ ?>0<?php }?></a></div></div><div class="s-offers-wrapper" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><div class="s-price-wrapper"><?php if ($_smarty_tpl->tpl_vars['available']->value){?><span class="s-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span><span class="s-compare"><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
<?php }?></span><link itemprop="availability" href="http://schema.org/InStock"/><meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><?php }else{ ?><span class="s-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span><?php if (!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?><span class="s-compare"><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
<?php }?></span><?php }else{ ?><span class="s-out-of-stock"><strong>Под заказ</strong></span><?php }?><meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><link itemprop="availability" href="http://schema.org/OutOfStock"/><?php }?></div></div><?php if (empty($_smarty_tpl->tpl_vars['hide_buttons']->value)){?><div class="s-actions-wrapper"><?php if ($_smarty_tpl->tpl_vars['available']->value){?><form class="add-to-cart" <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['product']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><?php }?><div class="s-buttons-wrapper"><div class="s-layout"><div class="s-column"><input class="s-button js-add-button" type="submit" value="<?php echo _wd('shop','Buy');?>
" <?php if (!$_smarty_tpl->tpl_vars['available']->value){?>disabled<?php }?>></div><?php if (!empty($_smarty_tpl->tpl_vars['_show_compare']->value)){?><div class="s-column right"><a class="s-compare-button <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?>is-active<?php }?>" href="javascript:void(0);" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php echo _wd('shop','In comparison list');?>
<?php }else{ ?><?php echo _wd('shop','To comparison');?>
<?php }?>"><i class="svg-icon compare size-11 <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php }else{ ?>active<?php }?>"></i><span class="s-name"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['product']->value['id'])){?>В сравнении<?php }else{ ?>К сравнению<?php }?></span></a></div><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['available']->value){?><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></form><?php }?></div><?php }?></div></li><?php } ?>
<?php }} ?>
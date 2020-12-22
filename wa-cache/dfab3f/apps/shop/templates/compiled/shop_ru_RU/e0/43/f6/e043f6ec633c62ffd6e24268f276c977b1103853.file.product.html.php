<?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 07:58:16
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.html" */ ?>
<?php /*%%SmartyHeaderCode:14008315825fe02b68d3dc54-40073970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e043f6ec633c62ffd6e24268f276c977b1103853' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.html',
      1 => 1596613227,
      2 => 'file',
    ),
    '9e22cde21a062ba7c5b2def235379e456d383f00' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/system.product.html',
      1 => 1596613227,
      2 => 'file',
    ),
    'b6e337d93cee1afd9a8a11abd3fd56c12db95c52' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.cart.html',
      1 => 1596613227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14008315825fe02b68d3dc54-40073970',
  'function' => 
  array (
    'in_stock' => 
    array (
      'parameter' => 
      array (
        'n' => 0,
        'low' => 5,
        'critical' => 2,
      ),
      'compiled' => '',
    ),
    'breadcrumbs_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    '_is_dialog' => 0,
    'breadcrumbs' => 0,
    'wa_url' => 0,
    'product' => 0,
    'wa' => 0,
    '_product_category' => 0,
    '_categories_tree' => 0,
    'tree' => 0,
    'c' => 0,
    'sc' => 0,
    'bc' => 0,
    'reviews_total_count' => 0,
    'sku' => 0,
    'p' => 0,
    'frontend_product' => 0,
    '_' => 0,
    'video' => 0,
    'image' => 0,
    'theme_favorite' => 0,
    'compare' => 0,
    'wa_parent_theme_url' => 0,
    '_thumb' => 0,
    '_absolute_thumb_uri' => 0,
    '_b' => 0,
    '_infoblocks' => 0,
    'i' => 0,
    '_rating' => 0,
    'stocks' => 0,
    'stock_id' => 0,
    'stock' => 0,
    'stock_count' => 0,
    '_theme_config' => 0,
    'f_code' => 0,
    'features' => 0,
    'f_value' => 0,
    'color' => 0,
    't' => 0,
    'crossselling' => 0,
    'page' => 0,
    '_true_params' => 0,
    '_is_good_param' => 0,
    '_itemprop' => 0,
    'wa_parent_theme_path' => 0,
    'wa_backend_url' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'upselling' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe02b69bed1d5_68803763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe02b69bed1d5_68803763')) {function content_5fe02b69bed1d5_68803763($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php /*  Call merged included template "system.product.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("system.product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1, '14008315825fe02b68d3dc54-40073970');
content_5fe02b68d53b12_96575395($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "system.product.html" */?><div class="item-pg<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']!=1){?> item-pg_<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view'];?>
<?php }?>" itemscope itemtype="http://schema.org/Product"><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="item-pg__breadcrumbs layout-center"><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><div class="breadcrumbs breadcrumbs_<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['breadcrumbs_design'];?>
"><ul class="breadcrumbs__list"><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
">Главная</a></li><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['breadcrumbs_design']=="dropdown"){?><?php $_smarty_tpl->tpl_vars['_product_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->category($_smarty_tpl->tpl_vars['product']->value['category_id']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_product_category']->value){?><?php $_smarty_tpl->tpl_vars['_categories_tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,$_smarty_tpl->tpl_vars['_product_category']->value['depth'],true), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_categories_tree']->value)){?><?php if (!function_exists('smarty_template_function_breadcrumbs_tree')) {
    function smarty_template_function_breadcrumbs_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['breadcrumbs_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['left_key']<=$_smarty_tpl->tpl_vars['_product_category']->value['left_key']&&$_smarty_tpl->tpl_vars['c']->value['right_key']>=$_smarty_tpl->tpl_vars['_product_category']->value['right_key']){?><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['c']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a><?php if (count($_smarty_tpl->tpl_vars['tree']->value)>1){?><div class="breadcrumbs__btn"><svg class="icon" width="6" height="4"><use xlink:href="#arrow-up-breadcrumb"></use></svg></div><ul class="breadcrumbs__dropdown"><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sc']->value['id']==$_smarty_tpl->tpl_vars['c']->value['id']){?><?php continue 1?><?php }?><li class="breadcrumbs__dropdown-i"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sc']->value['name'];?>
</a></li><?php } ?></ul><?php }?></li><?php smarty_template_function_breadcrumbs_tree($_smarty_tpl,array('tree'=>$_smarty_tpl->tpl_vars['c']->value['childs']));?>
<?php }?><?php } ?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php smarty_template_function_breadcrumbs_tree($_smarty_tpl,array('tree'=>$_smarty_tpl->tpl_vars['_categories_tree']->value));?>
<?php }?><?php }?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['bc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bc']->key => $_smarty_tpl->tpl_vars['bc']->value){
$_smarty_tpl->tpl_vars['bc']->_loop = true;
?><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['bc']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['bc']->value['name'];?>
</a></li><?php } ?><?php }?></ul></div><?php }?><div class="item-pg__pluso"><div class="b-popup mfp-with-anim" id="social-popup"><div class="b-popup__inner"><script>(function(){if (window.pluso)if (typeof window.pluso.start == "function") return;if (window.ifpluso == undefined){window.ifpluso = 1;var d = document,s = d.createElement('script'),g = 'getElementsByTagName';s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';var h = d[g]('body')[0];h.appendChild(s);}})();</script><h3 class="social-popup-title ds-hide">Поделится со ссылкой</h3><div class="pluso desktop-mobile tb-hide" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_share_buttons'];?>
"></div><div class="pluso tablet mb-hide ds-hide" data-background="transparent" data-options="medium,square,line,horizontal,counter,theme=04" data-services="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_share_buttons'];?>
"></div></div></div></div><a class="social-popup inline-popup" href="#social-popup"><svg class="icon" width="14" height="14"><use xlink:href="#icon-share"></use></svg></a></div><?php }?><div class="item-pg__heading layout-center"><h1 class="item-pg__title"><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating'])&&$_smarty_tpl->tpl_vars['product']->value['rating']>0){?><span class="rating nowrap" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" title="<?php echo sprintf('Средняя оценка покупателей: %s / 5',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>
<span itemprop="ratingValue" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['product']->value['rating'];?>
</span><span itemprop="reviewCount" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span></span><?php }?></h1><div class="item-pg__heading-artikul grey s-product-sku<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']||(!$_smarty_tpl->tpl_vars['product']->value['sku_type']&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||empty((($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? null : $tmp))))){?> is-hidden<?php }?>">Артикул:<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['sku'])&&!empty($_smarty_tpl->tpl_vars['sku']->value['sku'])){?><span class="s-product-sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
" style="display:none"> <?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
</span><?php }?><?php } ?><?php }else{ ?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><span> -</span><?php }else{ ?><span> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? " -" : $tmp);?>
</span><meta itemprop="sku" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'];?>
"><?php }?><?php }?></div></div><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="links-bar layout-center<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?> ds-hide<?php }?>"><div class="links-bar__list"><div class="links-bar__item active"><div class="links-bar__link">Обзор</div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><div class="links-bar__item"><a class="links-bar__link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['rating_count'])===null||$tmp==='' ? 0 : $tmp);?>
)</a></div><?php }?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><div class="links-bar__item"><a class="links-bar__link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['p']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div><?php } ?><!-- plugin hook: 'frontend_product.menu' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="links-bar__item"><span class="links-bar__link"><?php echo $_smarty_tpl->tpl_vars['_']->value['menu'];?>
</span></div><?php } ?></div></div><?php }?><div class="item-pg__product layout-center"><div class="b-row-ip b-row-ip_<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view'];?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==3&&(!$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_on']||$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_position']!='pos3')){?> no-col-descr<?php }?>"><div class="b-row-ip__inner"><div class="b-row-ip__col-image"><div class="pd-image"><?php $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->video, null, 0);?><?php if ((($_smarty_tpl->tpl_vars['product']->value['images']&&count($_smarty_tpl->tpl_vars['product']->value['images'])>1)||($_smarty_tpl->tpl_vars['product']->value['images']&&$_smarty_tpl->tpl_vars['video']->value))&&!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="pd-image__thumbs"><div class="pd-image__thumbs-slider-nav"><div class="thumb-nav thumb-nav_left"><svg class="icon" width="10" height="18"><use xlink:href="#arrow-left-big"></use></svg></div><div class="thumb-nav thumb-nav_right"><svg class="icon" width="10" height="18"><use xlink:href="#arrow-left-big"></use></svg></div></div><div class="pd-image__thumbs-slider swiper-container<?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['products_border']){?> nobd<?php }?>"><div class="pd-image__thumbs-slider-body swiper-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?><div class="swiper-slide pd-thumb is-image" id="product-image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'96x96',array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['description'], ENT_QUOTES, 'UTF-8', true),'class'=>'pd-thumb__img'));?>
</div><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['video']->value){?><div class="swiper-slide pd-thumb pd-thumb_video"><img class="pd-thumb__img lazy-img" src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['video']->value['images'][0];?>
" alt=""></div><?php }?></div></div></div><?php }?><div class="pd-image__big-photo"><div id="switching-image"></div><div class="pd-image__badges"><?php if ($_smarty_tpl->tpl_vars['product']->value['badge']=="lowprice"){?><div class="pd-image__badges-i"><div class="label label_econom" style="background-color:#FFE500">Скидка</div></div><?php }elseif($_smarty_tpl->tpl_vars['product']->value['badge']=="new"){?><div class="pd-image__badges-i"><div class="label label_light" style="background-color:#1FE499">Новый</div></div><?php }elseif($_smarty_tpl->tpl_vars['product']->value['badge']=="bestseller"){?><div class="pd-image__badges-i"><div class="label label_light" style="background-color:#FF2AA9">Хит продаж</div></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['product']->value['badge'])){?><div class="pd-image__badges-i"><div class="label label_light" style="background-color:#FF2AA9"><?php echo $_smarty_tpl->tpl_vars['product']->value['badge'];?>
</div></div><?php }?></div><?php if (0&&(($_smarty_tpl->tpl_vars['product']->value['images']&&count($_smarty_tpl->tpl_vars['product']->value['images'])>1)||($_smarty_tpl->tpl_vars['product']->value['images']&&$_smarty_tpl->tpl_vars['video']->value))){?><div class="pd-image__nav"><button class="slider-ar slider-ar_round pos-rel default-btn"><svg class="icon cent-icon" width="8" height="15"><use xlink:href="#arrow-left-big"></use></svg></button><button class="slider-ar slider-ar_round pos-rel default-btn"><svg class="icon cent-icon" width="8" height="15"><use xlink:href="#arrow-right-big"></use></svg></button></div><?php }?><div class="pd-image__action-btns td-hide"><div class="action-btns-wrapper"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><div class="action-btns-wrapper__item"><div class="item-act-btn item-act-btn_fav btn-fav btn-fav-<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['theme_favorite']->value)){?> active<?php }?>" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-title="Добавить в избранное" data-active="Удалить из избранного"><svg class="icon" width="15" height="13"><use xlink:href="#icon-heart-2"></use></svg><div class="item-act-btn__text visually-hidden"><?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['theme_favorite']->value)){?>Удалить из избранного<?php }else{ ?>Добавить в избранное<?php }?></div></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><div class="action-btns-wrapper__item"><div class="item-act-btn item-act-btn_comp btn-compare btn-compare-<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['compare']->value)){?> active<?php }?>" data-title="Добавить к сравнению" data-active="Удалить из сравнения" data-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-product_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-product_url="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" data-product_image='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"96x96"))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
'><svg class="icon" width="11" height="11"><use xlink:href="#icon-chart"></use></svg><div class="item-act-btn__text visually-hidden"><?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['compare']->value)){?>Удалить из сравнения<?php }else{ ?>Добавить к сравнению<?php }?></div></div></div><?php }?><div class="action-btns-wrapper__item"><a class="item-act-btn item-act-btn_comp inline-popup" href="#social-popup"><svg class="icon" width="14" height="14"><use xlink:href="#icon-share"></use></svg></a></div></div></div><?php if ($_smarty_tpl->tpl_vars['product']->value['images']||$_smarty_tpl->tpl_vars['video']->value){?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?><div class="pd-image__big-photo-inner" data-startindex="0" id="product-core-image"><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,'970');?>
" id="product-image" itemprop="image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></div><?php }?><?php if ($_smarty_tpl->tpl_vars['video']->value){?><div class="pd-image__big-photo-inner" id="video-container"<?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?> style="display:none;"<?php }?> itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><div class="item-pg_videocontainer" itemprop="embedHTML"><iframe src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
" allowfullscreen></iframe></div><meta itemprop="width" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
"><meta itemprop="height" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
"><meta itemprop="name" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><meta itemprop="description" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><meta itemprop="uploadDate" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['create_datetime'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php if (!empty($_smarty_tpl->tpl_vars['video']->value['images'][0])){?><?php $_smarty_tpl->tpl_vars['_thumb'] = new Smarty_variable($_smarty_tpl->tpl_vars['video']->value['images'][0], null, 0);?><?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['_thumb']->value,1);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_absolute_thumb_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa']->value->url(true)).$_tmp1, null, 0);?><meta itemprop="thumbnailUrl" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_absolute_thumb_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></div><?php }?><?php }else{ ?><div class="pd-image__big-photo-inner" id="product-core-image"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/dummy200.png" class="is-default lazy-img" alt=""></div><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brand']!="none"&&method_exists("shopProductbrandsPlugin","productBrand")&&isset($_smarty_tpl->tpl_vars['product']->value)){?><?php $_smarty_tpl->tpl_vars['_b'] = new Smarty_variable(shopProductbrandsPlugin::productBrand($_smarty_tpl->tpl_vars['product']->value['id']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_b']->value){?><div class="pd-brand-info"><div class="pd-brand-info__inner"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brand']=="full"&&isset($_smarty_tpl->tpl_vars['_b']->value)&&isset($_smarty_tpl->tpl_vars['_b']->value['image'])&&!empty($_smarty_tpl->tpl_vars['_b']->value['image'])){?><div class="pd-brand-info__logo"><img src="data:image/gif;base64,R0lGODlh6gDqAIAAAP///wAAACH5BAEAAAEALAAAAADqAOoAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8Y9jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOo1UAAA7" data-src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['_b']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['_b']->value['image'];?>
" class="lazy-img" alt></div><?php }?><div class="pd-brand-info__text"><div class="pd-brand-info__manfr">Производитель:</div><a class="pd-brand-info__brand-name" href="<?php echo $_smarty_tpl->tpl_vars['_b']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_b']->value['name'];?>
</a><?php if (!empty($_smarty_tpl->tpl_vars['_b']->value['name'])){?><meta itemprop="brand" content="<?php echo $_smarty_tpl->tpl_vars['_b']->value['name'];?>
"><?php }?></div></div></div><?php }?><?php }?></div><div class="b-row-ip__col-info"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']!=3||($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==3&&$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_on']&&$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_position']=="pos3")){?><div class="b-row-ip__col-descr"><div class="pd-descr"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==3&&$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_on']&&!empty($_smarty_tpl->tpl_vars['_infoblocks']->value)){?><?php echo $_smarty_tpl->getSubTemplate ("product.features.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('is_sidebar'=>true), 0);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?><h1 class="pd-descr__title mt-hide"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="links-bar mt-hide"><div class="links-bar__list"><div class="links-bar__item active"><div class="links-bar__link">Обзор</div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><div class="links-bar__item"><a class="links-bar__link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['rating_count'])===null||$tmp==='' ? 0 : $tmp);?>
)</a></div><?php }?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><div class="links-bar__item"><a class="links-bar__link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['p']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div><?php } ?></div></div><?php }?><?php }?><div class="pd-descr__artikul grey ds-hide s-product-sku<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']||(!$_smarty_tpl->tpl_vars['product']->value['sku_type']&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||empty((($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? null : $tmp))))){?> is-hidden<?php }?>">Артикул:<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['sku'])&&!empty($_smarty_tpl->tpl_vars['sku']->value['sku'])){?><span class="s-product-sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
" style="display:none"> <?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
</span><?php }?><?php } ?><?php }else{ ?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><span> -</span><?php }else{ ?><span> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? " -" : $tmp);?>
</span><?php }?><?php }?></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_show_summary']&&$_smarty_tpl->tpl_vars['product']->value['summary']){?><div class="pd-descr__description mb-hide"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?><div class="pd-descr__sku-wrapper"><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']&&($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="always"||($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="nonempty"&&$_smarty_tpl->tpl_vars['product']->value['rating']>0))){?><?php $_smarty_tpl->tpl_vars['_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['product']->value['rating']), null, 0);?><div class="pd-descr__rating"><div class="item-rating item-rating_ip"><div class="item-rating__stars"><div class="stars stars_m"><div class="stars__list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><div class="stars__i<?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['_rating']->value){?> stars__i_checked<?php }?>"><svg class="icon" width="16" height="15"><use xlink:href="#icon-star"></use></svg></div><?php }} ?></div></div></div><div class="item-rating__revs"><svg class="icon" width="15" height="14"><use xlink:href="#icon-bubble"></use></svg><a class="grey" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
"><?php echo _w('%d review','%d review',(($tmp = @$_smarty_tpl->tpl_vars['product']->value['rating_count'])===null||$tmp==='' ? 0 : $tmp));?>
</a></div></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?><div class="pd-descr__artikul grey mt-hide s-product-sku<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']||(!$_smarty_tpl->tpl_vars['product']->value['sku_type']&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||empty((($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? null : $tmp))))){?> is-hidden<?php }?>">Артикул:<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['sku'])&&!empty($_smarty_tpl->tpl_vars['sku']->value['sku'])){?><span class="s-product-sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
" style="display:none"> <?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
</span><?php }?><?php } ?><?php }else{ ?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><span> -</span><?php }else{ ?><span> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? " -" : $tmp);?>
</span><?php }?><?php }?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']!=2){?><div class="mb-hide s-product-stocks"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?><?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?><div class="pd-descr__stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?><?php }?><div class="pd-descr__stock-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
</div><?php } ?><?php }else{ ?><div class="pd-descr__stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>
</div><?php }?><?php } ?></div><?php if (!empty($_smarty_tpl->tpl_vars['_theme_config']->value['brief_features'])){?><div class="pd-descr__chars"><div class="pd-chars"><h3 class="pd-chars__title">Характеристики</h3><ul class="pd-chars__list"><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_theme_config']->value['brief_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><li class="pd-chars__i"><dl><dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</dt><dd><?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?><?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?><div class="tab-chars__color-item"><div class="color-text"><div class="c-color<?php if ($_smarty_tpl->tpl_vars['color']->value->code==16777215){?> c-color_white<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['color']->value->style;?>
"></div><div class="color-text__text"><?php echo $_smarty_tpl->tpl_vars['color']->value->value;?>
</div></div></div><?php } ?><?php }else{ ?><?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
<?php }?></dd></dl></li><?php } ?></ul><a class="pd-chars__show-all" href="#item-tabs">Все характеристики</a></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_categories']!="none"&&$_smarty_tpl->tpl_vars['product']->value['categories']){?><div class="pd-descr__tags"><div class="pd-tag-links"><h5 class="pd-tag-links__title">Категории</h5><ul class="pd-tag-links__list list-reset"><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['status']){?><li class="pd-tag-links__item"><a class="<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_categories']=='buttons'){?>btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5<?php }else{ ?>pd-tag-links__link<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/category',array('category_url'=>$_smarty_tpl->tpl_vars['c']->value['full_url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<div class="hover-anim"></div></a></li><?php }?><?php } ?></ul></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_tags']!="none"&&$_smarty_tpl->tpl_vars['product']->value['tags']){?><div class="pd-descr__tags"><div class="pd-tag-links"><h5 class="pd-tag-links__title">Теги</h5><ul class="pd-tag-links__list list-reset"><?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><li class="pd-tag-links__item"><a class="<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_tags']=='buttons'){?>btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 btn_sec-5<?php }else{ ?>pd-tag-links__link<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/tag',array('tag'=>urlencode($_smarty_tpl->tpl_vars['t']->value)));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
<div class="hover-anim"></div></a></li><?php } ?></ul></div></div><?php }?><?php }?><?php }?></div></div><?php }?><div class="b-row-ip__col-cart"><?php /*  Call merged included template "product.cart.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14008315825fe02b68d3dc54-40073970');
content_5fe02b6938cf25_60573812($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.cart.html" */?></div></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?><div class="pd-image-gallery mfp-hide mfp-with-anim" id="ip-gallery"><div class="pd-image-gallery__main"><div class="pd-image-gallery__photo-wrapper"><div class="pd-image-gallery__nav"><button class="slider-ar slider-ar_round pos-rel default-btn pd-image-gallery__left"><svg class="icon cent-icon" width="8" height="15"><use xlink:href="#arrow-left-big"></use></svg></button><button class="slider-ar slider-ar_round pos-rel default-btn pd-image-gallery__right"><svg class="icon cent-icon" width="8" height="15"><use xlink:href="#arrow-right-big"></use></svg></button></div><div class="swiper-container gallery-top"><div class="swiper-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?><div class="swiper-slide" data-startindex="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'970',array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['description'], ENT_QUOTES, 'UTF-8', true)));?>
</div><?php } ?><?php }?></div></div></div></div><?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1){?><div class="pd-image-gallery__thumbs"><div class="swiper-container gallery-thumbs"><div class="swiper-wrapper"><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?><div class="swiper-slide" data-startindex="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'96x96',array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['description'], ENT_QUOTES, 'UTF-8', true)));?>
</div><?php } ?></div></div></div><?php }?></div><?php }?><!-- plugin hook: 'frontend_product.block' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block'];?>
<?php } ?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_position']=="pos1"){?><?php echo $_smarty_tpl->getSubTemplate ("product.features.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php $_smarty_tpl->tpl_vars['crossselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->crossSelling(12), null, 0);?><?php if ($_smarty_tpl->tpl_vars['crossselling']->value){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_related_crossselling']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['crossselling']->value,'title'=>sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true))), 0);?>
<?php }?><div class="item-pg__tabs" id="item-tabs"><div class="layout-center"><div class="item-tabs"><div class="item-tabs__menu"><ul class="item-tabs__list item-tabs__list_js flex menu"><?php if ($_smarty_tpl->tpl_vars['product']->value['description']||($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_merge_description_tabs']&&($_smarty_tpl->tpl_vars['product']->value['description']))){?><li class="item-tabs__menu-i"><a class="item-tabs__link" href="#">Описание</a></li><?php }?><?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_merge_description_tabs']&&$_smarty_tpl->tpl_vars['product']->value['features']){?><li class="item-tabs__menu-i item-tabs__menu-i_chars"><a class="item-tabs__link" href="#">Характеристики</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><li class="item-tabs__menu-i"><a class="item-tabs__link item-tabs__loadform" href="#">Отзывы<?php if ($_smarty_tpl->tpl_vars['reviews_total_count']->value>0){?> (<?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
)<?php }?></a></li><?php }?><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><li class="item-tabs__menu-i"><a class="item-tabs__link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['page']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul></div><div class="item-tabs__content"><ul class="item-tabs__content-list"><?php if ($_smarty_tpl->tpl_vars['product']->value['description']||($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_merge_description_tabs']&&($_smarty_tpl->tpl_vars['product']->value['description']))){?><li class="item-tabs__content-i"><div class="b-row"><div itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_merge_description_tabs']){?><div class="tab-chars"><div class="tab-chars__content"><table><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?></table></div><div class="tab-chars__type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="tab-chars__content"><table><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_true_params'] = new Smarty_variable(array("weight","brand","model","width","height","depth","color","manufacturer"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_good_param'] = new Smarty_variable((in_array($_smarty_tpl->tpl_vars['f_code']->value,$_smarty_tpl->tpl_vars['_true_params']->value)), null, 0);?><?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['_is_good_param']->value){?><?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable($_smarty_tpl->tpl_vars['f_code']->value, null, 0);?><?php }?><tr><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td<?php if (!empty($_smarty_tpl->tpl_vars['_itemprop']->value)){?> itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_itemprop']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?><?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?><div class="tab-chars__color-item"><div class="color-text"><div class="c-color<?php if ($_smarty_tpl->tpl_vars['color']->value->code==16777215){?> c-color_white<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['color']->value->style;?>
"></div><div class="color-text__text"><?php echo $_smarty_tpl->tpl_vars['color']->value->value;?>
</div></div></div><?php } ?><?php }else{ ?><?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
<?php }?></td></tr><?php }?><?php } ?></table></div></div><?php }?></div></li><?php }?><?php if (!$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_merge_description_tabs']&&$_smarty_tpl->tpl_vars['product']->value['features']){?><li class="item-tabs__content-i"><div class="b-row"><div class="tab-chars"><div class="tab-chars__content"><table><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?></table></div><div class="tab-chars__type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="tab-chars__content"><table><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_true_params'] = new Smarty_variable(array("weight","brand","model","width","height","depth","color","manufacturer"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_good_param'] = new Smarty_variable((in_array($_smarty_tpl->tpl_vars['f_code']->value,$_smarty_tpl->tpl_vars['_true_params']->value)), null, 0);?><?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['_is_good_param']->value){?><?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable($_smarty_tpl->tpl_vars['f_code']->value, null, 0);?><?php }?><tr><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td<?php if (!empty($_smarty_tpl->tpl_vars['_itemprop']->value)){?> itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_itemprop']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?><?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?><div class="tab-chars__color-item"><div class="color-text"><div class="c-color<?php if ($_smarty_tpl->tpl_vars['color']->value->code==16777215){?> c-color_white<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['color']->value->style;?>
"></div><div class="color-text__text"><?php echo $_smarty_tpl->tpl_vars['color']->value->value;?>
</div></div></div><?php } ?><?php }else{ ?><?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
<?php }?></td></tr><?php }?><?php } ?></table></div></div></div></li><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><li class="item-tabs__content-i"><div class="b-row"><div class="b-row__inner"><div class="reviews" id="s-product-reviews-wrapper"><div class="reviews-loading__msg"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/ajax-loader.gif" alt="" /> Загрузка данных...</div></div></div></div></li><?php }?><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><li class="item-tabs__content-i"><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['page']->value['content']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li><?php } ?></ul><script>$(".item-tabs__content-list li:first-child, .item-tabs__list li:first-child").addClass("active");</script></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/admin_edit_button.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('link'=>((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."shop/?action=products#/product/".((string)$_smarty_tpl->tpl_vars['product']->value['id'])."/edit/",'title'=>"Редактировать товар"), 0);?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/reviews.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script>$('.item-tabs__loadform').one('click', function() {$.ajax({url: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
reviews/",success: function(html) {$('#s-product-reviews-wrapper').html($(html).find('.reviews').html());$.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/reviews.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
");},error: function (jqXHR, exception) {if (jqXHR.status === 0) {msg = '12Not connect.\nOnly your domain.';} else if (jqXHR.status == 404) {msg = '3213Page not found. [404]';} else if (jqXHR.status == 500) {msg = '43243Internal Server Error. [500]';} else if (exception === 'parsererror') {msg = '4321r432Requested JSON parse failed.';} else if (exception === 'timeout') {msg = '3e1323eTime out error.';} else if (exception === 'abort') {msg = '5y245Ajax request aborted.';} else {msg = 'Uncaught Error.\n' + jqXHR.responseText;}alert(msg);},});});<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']&&!$_smarty_tpl->tpl_vars['product']->value['features']&&$_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']){?>$(".item-pg__tabs-loadform").trigger('click');<?php }?></script><?php }?><?php $_smarty_tpl->tpl_vars['upselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->upSelling(12), null, 0);?><?php if ($_smarty_tpl->tpl_vars['upselling']->value){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_related_upselling']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['upselling']->value,'title'=>"Рекомендуем посмотреть"), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_position']=="pos2"){?><?php echo $_smarty_tpl->getSubTemplate ("product.features.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }?></div><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("is_product_page",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("load_tippy_js",true);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 07:58:16
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/system.product.html" */ ?>
<?php if ($_valid && !is_callable('content_5fe02b68d53b12_96575395')) {function content_5fe02b68d53b12_96575395($_smarty_tpl) {?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['brief_features'] = array();?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brief_features_limit']<0){?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brief_features_limit'] = 0;?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brief_features_on']){?><?php $_smarty_tpl->tpl_vars['_brief_features_count'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><?php if ($_smarty_tpl->tpl_vars['_brief_features_count']->value>=$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_brief_features_limit']){?><?php break 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']!='divider'){?><?php $_smarty_tpl->createLocalArrayVariable('_theme_config', null, 0);
$_smarty_tpl->tpl_vars['_theme_config']->value['brief_features'][$_smarty_tpl->tpl_vars['f_code']->value] = $_smarty_tpl->tpl_vars['f_value']->value;?><?php $_smarty_tpl->tpl_vars['_brief_features_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_brief_features_count']->value+1, null, 0);?><?php }?><?php } ?><?php }?><?php $_smarty_tpl->tpl_vars['_is_dialog'] = new Smarty_variable(($_smarty_tpl->tpl_vars['wa']->value->get('cart')||waRequest::isXMLHttpRequest()), null, 0);?><?php if (!function_exists('smarty_template_function_in_stock')) {
    function smarty_template_function_in_stock($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['in_stock']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['low']->value||$_smarty_tpl->tpl_vars['n']->value===null){?><div class="stock-info stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text">В наличии</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['critical']->value){?><div class="stock-info less-stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text"><?php echo _w("Only a few items left");?>
</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value>0&&$_smarty_tpl->tpl_vars['n']->value!=1){?><div class="stock-info less-stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text"><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value==1){?><div class="stock-info single-stock"><div class="stock-info__text"><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</div></div><?php }else{ ?><div class="stock-info no-stock"><div class="stock-info__text"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></div></div><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><?php $_smarty_tpl->tpl_vars['theme_favorite'] = new Smarty_variable(explode(",",waRequest::cookie('shop_favorite')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><?php $_smarty_tpl->tpl_vars['compare'] = new Smarty_variable(explode(",",waRequest::cookie('shop_compare')), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_infoblocks'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_infoblocks', null, 0);
$_smarty_tpl->tpl_vars['_infoblocks']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_1_body']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_infoblocks', null, 0);
$_smarty_tpl->tpl_vars['_infoblocks']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_2_body']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_infoblocks', null, 0);
$_smarty_tpl->tpl_vars['_infoblocks']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_3_body']);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_body'])){?><?php $_smarty_tpl->createLocalArrayVariable('_infoblocks', null, 0);
$_smarty_tpl->tpl_vars['_infoblocks']->value[] = array('icon'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_icon'],'link'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_link'],'title'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_title'],'body'=>$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_info_features_4_body']);?><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2020-12-21 07:58:17
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-data/public/shop/themes/balance/product.cart.html" */ ?>
<?php if ($_valid && !is_callable('content_5fe02b6938cf25_60573812')) {function content_5fe02b6938cf25_60573812($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/u1240732/data/www/mirschetok.ru/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?><?php $_smarty_tpl->tpl_vars['_is_dialog'] = new Smarty_variable(($_smarty_tpl->tpl_vars['wa']->value->get('cart')||waRequest::isXMLHttpRequest()), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_is_dialog']->value){?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view'] = 1;?><?php }?><?php if (!function_exists('smarty_template_function_in_stock')) {
    function smarty_template_function_in_stock($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['in_stock']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['low']->value||$_smarty_tpl->tpl_vars['n']->value===null){?><div class="stock-info stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text">В наличии</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['critical']->value){?><div class="stock-info less-stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text"><?php echo _w("Only a few items left");?>
</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value>0&&$_smarty_tpl->tpl_vars['n']->value!=1){?><div class="stock-info less-stock"><svg class="icon" width="10" height="7"><use xlink:href="#icon-tick"></use></svg><div class="stock-info__text"><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</div></div><?php }elseif($_smarty_tpl->tpl_vars['n']->value==1){?><div class="stock-info single-stock"><div class="stock-info__text"><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</div></div><?php }else{ ?><div class="stock-info no-stock"><div class="stock-info__text"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></div></div><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<div class="pd-cart"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==3){?><div class="pd-cart__rating-sku"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']&&($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="always"||($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="nonempty"&&$_smarty_tpl->tpl_vars['product']->value['rating']>0))){?><?php $_smarty_tpl->tpl_vars['_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['product']->value['rating']), null, 0);?><div class="item-rating item-rating_ip mt-hide"><div class="item-rating__stars"><div class="stars stars_m"><div class="stars__list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><div class="stars__i<?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['_rating']->value){?> stars__i_checked<?php }?>"><svg class="icon" width="16" height="15"><use xlink:href="#icon-star"></use></svg></div><?php }} ?></div></div></div><div class="item-rating__revs"><svg class="icon" width="15" height="14"><use xlink:href="#icon-bubble"></use></svg><a class="grey" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
"><?php echo _w('%d review','%d review',(($tmp = @$_smarty_tpl->tpl_vars['product']->value['rating_count'])===null||$tmp==='' ? 0 : $tmp));?>
</a></div></div><?php }?><div class="pd-cart__artikul grey s-product-sku<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']||(!$_smarty_tpl->tpl_vars['product']->value['sku_type']&&(count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||empty((($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? null : $tmp))))){?> is-hidden<?php }?>">Артикул:<?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['sku'])&&!empty($_smarty_tpl->tpl_vars['sku']->value['sku'])){?><span class="s-product-sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
" style="display:none"> <?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
</span><?php }?><?php } ?><?php }else{ ?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><span> -</span><?php }else{ ?><span> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['sku'])===null||$tmp==='' ? " -" : $tmp);?>
</span><?php }?><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_show_summary']&&$_smarty_tpl->tpl_vars['product']->value['summary']){?><div class="pd-cart__descr"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_reviews']&&($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="always"||($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_rating_stars']=="nonempty"&&$_smarty_tpl->tpl_vars['product']->value['rating']>0))){?><div class="item-rating item-rating_ip ds-hide"><div class="item-rating__stars"><div class="stars stars_m"><div class="stars__list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><div class="stars__i<?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['_rating']->value){?> stars__i_checked<?php }?>"><svg class="icon" width="16" height="15"><use xlink:href="#icon-star"></use></svg></div><?php }} ?></div></div></div><div class="item-rating__revs"><svg class="icon" width="15" height="14"><use xlink:href="#icon-bubble"></use></svg><a class="grey" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
"><?php echo _w('%d review','%d review',(($tmp = @$_smarty_tpl->tpl_vars['product']->value['rating_count'])===null||$tmp==='' ? 0 : $tmp));?>
</a></div></div><?php }?><?php }?><div class="pd-cart__main"><form id="cart-form<?php if ($_smarty_tpl->tpl_vars['_is_dialog']->value){?>-dialog<?php }?>" data-image="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"200"))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><div class="js-product_title is-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']!=2){?><div class="pd-cart__price-wrapper pd-cart__price-wrapper_default"><div class="pd-cart__price-mob-text">Цена</div><div class="pd-cart__price"><div class="pd-price"><div class="pd-price__reg-price s-product-price" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</div><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><div class="pd-price__old-price s-product-oldprice" data-compare-price="<?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price'],null,null,0);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
</div><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']!="none"){?><div class="pd-cart__save"><div class="pd-save s-product-saving<?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']<=$_smarty_tpl->tpl_vars['product']->value['price']){?> is-hidden<?php }?>"><svg class="icon" width="14" height="14"><use xlink:href="#icon-econom"></use></svg><strong>Экономия</strong><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"||$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="percent"){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(0, null, 0);?><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['compare_price']-$_smarty_tpl->tpl_vars['product']->value['price'])*100)/$_smarty_tpl->tpl_vars['product']->value['compare_price'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='floor'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='ceil'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='round'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }?><?php }?><div class="pr-discount-label s-saving-percent"><span><?php echo $_smarty_tpl->tpl_vars['_saving_percent']->value;?>
%</span></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"){?><span>или</span><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"||$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="currency"){?><div class="pr-discount-label s-saving-currency"><span><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']-$_smarty_tpl->tpl_vars['product']->value['price']);?>
<?php }?></span></div><?php }?></div></div><?php }?></div><?php }?><div class="pd-options-list"><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php $_smarty_tpl->tpl_vars['default_sku_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['sku_features'], null, 0);?><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status'], null, 0);?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?><?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
?sku=<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"><?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?></div><?php } ?><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="pd-options-list__item"><div class="pd-options-list__item-title bold single-line"><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</div><div class="pd-options-list__body"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_selectable_features_control']=='select'){?><select data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?><div class="pd-colors"><div class="pd-colors__list"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!isset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?><?php $_smarty_tpl->createLocalArrayVariable('default_sku_features', null, 0);
$_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']] = $_smarty_tpl->tpl_vars['v_id']->value;?><?php }?><div class="pd-colors__i"><div class="pd-color tippy pd-color<?php if ($_smarty_tpl->tpl_vars['v']->value->code==16777215){?> pd-color_white<?php }?><?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?> active<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['v']->value->style;?>
" data-tippy-content="<?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
" data-tippy-delay="[1000, 200]" data-sku-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
;" data-value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"><div class="visually-hidden"><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
</div></div></div><?php } ?></div></div><?php }else{ ?><div class="btn-options"><div class="btn-options__list"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!isset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?><?php $_smarty_tpl->createLocalArrayVariable('default_sku_features', null, 0);
$_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']] = $_smarty_tpl->tpl_vars['v_id']->value;?><?php }?><div class="btn-options__i"><div class="btn-option<?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?> active<?php }?>" data-sku-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
;" data-value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</div></div><?php } ?></div></div><?php }?><input type="hidden" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]" value="<?php echo ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']]);?>
"><?php }?></div></div><?php } ?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable(false, null, 0);?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><div class="pd-options-list__item"><div class="pd-options-list__body"><div class="form-option"><div class="form-option__list skus"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?><div class="form-option__i" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><label<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> class="disabled"<?php }?>><input name="sku_id" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
" data-compare-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['compare_price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
"<?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> disabled="true"<?php }?><?php if (!$_smarty_tpl->tpl_vars['sku_available']->value){?> data-disabled="1"<?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['image_id']){?> data-image-id="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
"<?php }?>><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
?sku=<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"><?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?></label></div><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_available']->value||$_smarty_tpl->tpl_vars['sku_available']->value, null, 0);?><?php } ?></div></div></div></div><?php }else{ ?><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?><?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"><?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?><link itemprop="availability" href="http://schema.org/Discontinued" /><p><em class="bold error">Этот товар временно недоступен для заказа</em></p><?php }elseif(!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&!($_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?><input name="sku_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku_id'];?>
"><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?></div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['services']->value){?><div class="pd-options-list__item"><div class="pd-options-list__body"><div class="form-option"><div class="form-option__list s-product-services"><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><div class="form-option__i service-<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?> <strong>(+<?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</strong><?php }?></span><input data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> type="checkbox" name="services[]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"></label></div><?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?><div class="form-option__i"><select data-variant-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
" class="service-variants" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" disabled><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>selected<?php }?> data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option><?php } ?></select></div><?php }else{ ?><input type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
"><?php }?><?php } ?></div></div></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="pd-cart__stock-wrapper s-product-stocks"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?><?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?><div class="pd-stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?><?php }?><div class="pd-stock-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
</div><?php } ?><?php }else{ ?><div class="pd-stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>
</div><?php }?><?php } ?></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?><div class="pd-cart__main pd-cart__main_custom"><div class="pd-cart__price-wrapper pd-cart__price-wrapper_custom"><div class="pd-cart__price-mob-text">Цена</div><div class="pd-cart__price"><div class="pd-price"><div class="pd-price__reg-price s-product-price" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</div><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><div class="pd-price__old-price s-product-oldprice" data-compare-price="<?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price'],null,null,0);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
</div><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']!="none"){?><div class="pd-cart__save"><div class="pd-save s-product-saving<?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']<=$_smarty_tpl->tpl_vars['product']->value['price']){?> is-hidden<?php }?>"><svg class="icon" width="14" height="14"><use xlink:href="#icon-econom"></use></svg><strong>Экономия</strong><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"||$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="percent"){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(0, null, 0);?><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['compare_price']-$_smarty_tpl->tpl_vars['product']->value['price'])*100)/$_smarty_tpl->tpl_vars['product']->value['compare_price'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='floor'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='ceil'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type']=='round'){?><?php $_smarty_tpl->tpl_vars['_saving_percent'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['_saving_percent']->value), null, 0);?><?php }?><?php }?><div class="pr-discount-label s-saving-percent"><span><?php echo $_smarty_tpl->tpl_vars['_saving_percent']->value;?>
%</span></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"){?><span>или</span><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="full"||$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving']=="currency"){?><div class="pr-discount-label s-saving-currency"><span><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']-$_smarty_tpl->tpl_vars['product']->value['price']);?>
<?php }?></span></div><?php }?></div></div><?php }?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><div class="sku-no-stock" style="padding-bottom:15px;display:none;"><strong class="stock-info no-stock">Товар с выбранным набором характеристик недоступен для покупки</strong></div><?php }?><div class="pd-cart__processing-wrapper"><div class="pd-cart__process"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_quantity']){?><div class="pd-cart__qty"><div class="qty<?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?> qty_disabled<?php }?>"><div class="qty__inner"><button class="qty__btn qty__btn_decr default-btn" type="button"><svg class="icon" width="9" height="9"><use xlink:href="#icon-minus"></use></svg></button><input class="qty__field" type="text" name="quantity" value='1' /><button class="qty__btn qty__btn_incr default-btn" type="button"><svg class="icon" width="9" height="9"><use xlink:href="#icon-plus"></use></svg></button></div></div></div><?php }?><button class="pd-cart__add-cart btn btn_main-1 btn <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 item-list-c__cartbtn" type="submit"<?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?> disabled="disabled"<?php }?>><span>В корзину</span><div class="hover-anim"></div></button><?php if (method_exists("shopQuickorderPlugin","quickorderForm")){?><?php $_smarty_tpl->tpl_vars['_quickbuy_button'] = new Smarty_variable(shopQuickorderPlugin::quickorderForm($_smarty_tpl->tpl_vars['product']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_quickbuy_button']->value)){?><div class="pd-cart__one-click btn btn_sec-8 <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['main_buttons_style'],'img/themebuttons/',''),'.gif','');?>
 item-list-c__oneclick"><?php echo $_smarty_tpl->tpl_vars['_quickbuy_button']->value;?>
<div class="hover-anim"></div></div><?php }?><?php }?></div><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><div class="pd-cart__stock-wrapper s-product-stocks"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?><?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?><div class="pd-stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?><?php }?><div class="pd-stock__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
</div><?php } ?><?php }else{ ?><div class="pd-stock s-product-stock sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock"<?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> style="display:none"<?php }?> data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>
</div><?php }?><?php } ?></div><?php }?></div><!-- plugin hook: 'frontend_product.cart' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['cart'];?>
<?php } ?><!-- plugin hook: 'frontend_product.block_aux' --><?php if (!empty($_smarty_tpl->tpl_vars['frontend_product']->value)){?><div class="aux"><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block_aux'];?>
<?php } ?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_view']==2){?></div><?php }?><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("viewed_product_id",$_smarty_tpl->tpl_vars['product']->value['id']);?>
</form></div><div class="pd-cart__mob-qty-stock td-hide"></div><?php if (!$_smarty_tpl->tpl_vars['_is_dialog']->value){?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']||$_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><div class="pd-cart__actions"><div class="pd-cart__actions-wrapper"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_compare']){?><?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"200"), null, 0);?><a class="pd-action-btn pd-action-btn_comp btn-compare btn-compare-<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['compare']->value)){?> active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#" data-product_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-product_url="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" data-product_image='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_product_image_src']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_parent_theme_url']->value)."img/dummy200.png" : $tmp);?>
'><svg class="icon" width="16" height="16"><use xlink:href="#icon-chart"></use></svg><span>Сравнение</span></a><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['products_show_wishlist']){?><a class="pd-action-btn pd-action-btn_fav btn-fav btn-fav-<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['theme_favorite']->value)){?> active<?php }?>" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#"><svg class="icon" width="16" height="14"><use xlink:href="#icon-heart-2"></use></svg><span>Избранное</span></a><?php }?></div></div><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_shop_productpage_phone", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_phone']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (!empty($_smarty_tpl->tpl_vars['_shop_productpage_phone']->value)){?><div class="pd-call-order"><svg class="icon" width="12" height="12"><use xlink:href="#icon-phone"></use></svg><span>Заказ по телефону</span><a href='tel:<?php echo smarty_modifier_regex_replace(htmlspecialchars($_smarty_tpl->tpl_vars['_shop_productpage_phone']->value, ENT_QUOTES, 'UTF-8', true),"/[^+0-9]/",'');?>
'><?php echo $_smarty_tpl->tpl_vars['_shop_productpage_phone']->value;?>
</a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_affiliate']&&shopAffiliate::isEnabled()&&$_smarty_tpl->tpl_vars['wa']->value->shop->settings('affiliate_credit_rate')>0){?><div class="pd-cart__bonus"><div class="pd-bonus"><div class="pd-bonus__content"><div class="circle-icon-box circle-icon-box_star"><svg class="icon cent-icon" width="12" height="13"><use xlink:href="#icon-star-big"></use></svg></div><strong class="s-product-bonuspoints">+<?php echo number_format(($_smarty_tpl->tpl_vars['product']->value['price']/$_smarty_tpl->tpl_vars['wa']->value->shop->settings('affiliate_credit_rate')),0);?>
</strong><span>баллов</span></div><div class="pd-bonus__info"><div class="info-tooltip tippy" data-tippy-content="<?php echo $_smarty_tpl->getSubTemplate ("string:".((string)smarty_modifier_replace($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_affiliate_text'],"\"","'")), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
">?</div></div></div></div><?php }?><?php }?></div><script>( function($) {var is_product_exist = (typeof Product === "function");(!is_product_exist) ? $.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/product.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
", initProduct) : initProduct();function initProduct() {new Product({$form: $("#cart-form<?php if ($_smarty_tpl->tpl_vars['_is_dialog']->value){?>-dialog<?php }?>"),is_dialog: <?php if ($_smarty_tpl->tpl_vars['_is_dialog']->value){?>true<?php }else{ ?>false<?php }?>,affiliate_rate: "<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_affiliate']&&shopAffiliate::isEnabled()&&$_smarty_tpl->tpl_vars['wa']->value->shop->settings('affiliate_credit_rate')>0){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('affiliate_credit_rate');?>
<?php }else{ ?>0<?php }?>",saving: "<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['shop_productpage_saving'];?>
",saving_percent_min: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_percent_min'])===null||$tmp==='' ? 0 : $tmp);?>
,saving_currency_min: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_currency_min'])===null||$tmp==='' ? 0 : $tmp);?>
,saving_rounding: "<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['products_show_saving_rounding_type'];?>
",currency: <?php echo json_encode($_smarty_tpl->tpl_vars['currency_info']->value);?>
,services: <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||$_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php echo json_encode($_smarty_tpl->tpl_vars['sku_services']->value);?>
<?php }else{ ?>false<?php }?>,features: <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php echo json_encode($_smarty_tpl->tpl_vars['sku_features_selectable']->value);?>
<?php }else{ ?>false<?php }?>});}})(jQuery);</script><?php }} ?>
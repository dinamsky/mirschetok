<?php /* Smarty version Smarty-3.1.14, created on 2020-12-20 22:51:31
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/yaimgsearch/templates/BackendProductImages.html" */ ?>
<?php /*%%SmartyHeaderCode:10026035175fdfab43c9b223-18751168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136acdedbf7dfc7e2e834b0a75924c19dca2d884' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/yaimgsearch/templates/BackendProductImages.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10026035175fdfab43c9b223-18751168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fdfab43ca5332_76052447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdfab43ca5332_76052447')) {function content_5fdfab43ca5332_76052447($_smarty_tpl) {?><!-- yaimgsearch plugin -->
<link href="<?php echo $_smarty_tpl->tpl_vars['data']->value['plugin_url'];?>
css/yaimgs.combined.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['plugin_url'];?>
js/yaimgs.combined.js"></script>

<script id="yaimgs-wrapper" type="text/html">
<div class="yaimgs-container">
    <!-- yaimgs toolbar -->
    <div class="yaimgs-toolbar">
        <img class="yaimgs-logo" src="{%#o.data.plugin_url%}img/yaimgsearch36.png"/>
        <form class="yaimgs-form">
            <div class="yaimgs-form-wr">
                <input type="text" value="{%#o.data.product_name%}" placeholder="Введите поисковый запрос">
                <button type="submit"><span class="search">Поиск</span><i class="icon16 loading"></i></button>
            </div>
        </form>
    </div>
    <div class="yaimgs-content">
        <div class="yaimgs-gallery"></div>
        <div class="yaimgs-more"><a href="#"><span class="text">Еще картинки</span><i class="icon16 loading"></i></a></div>
    </div>
    <!-- yaimgs modal -->
    <div class="yaimgs-modal">
        <div class="yaimgs-modal-wrapper">
        <div class="yaimgs-modal-content">
            <a href="#" class="yaimgs-modal-close">&times;</a>
            <div class="yaimgs-modal-content__left">
                <div class="yaimgs-core-image">
                    <span id="yaimgs-zoom-container">
                        <img class="yaimgs-zoom-img" src="">
                    </span>
                    <i class="icon16 loading"></i>
                    <span class="error-text">Не удалось загрузить изображение! Попробуйте другие размеры.</span>
                </div>
                <div class="yaimgs-carousel"></div>
                <div class="yaimgs-core-arrows">
                    <a class="yaimgs-core-prev" href="#"><span>&#x2039;</span></a>
                    <a class="yaimgs-core-next" href="#"><span>&#x203A;</span></a>
                </div>
            </div>
            <div class="yaimgs-modal-content__right">
                <div class="yaimgs-info"></div>
            </div>
        </div>
        </div>
    </div>
    <!-- yaimgs batches  -->
    <div class="yaimgs-batches">
        <div class="yaimgs-batches-wrapper"></div>
    </div>
</div>
</script>
<script id="yaimgs-images" type="text/html">
    {% for (var i = 0, n = o.images.length, image = o.images[0]; i < n; image = o.images[++i]) { %}
    <div class="yaimgs-gallery-item">
        <a href="#">
            <img src="{%#image.thumb.url%}">
        </a>
        <span class="yaimgs-gallery-description">
            <span>{%#image.description%}</span>
        </span>
    </div>
    {% } %}
</script>
<script id="yaimgs-info" type="text/html">
    <div>
        <h3>Описание изображения:</h3>
        <p>{%#o.data.description%}</p>
    </div>
    <a href="{%#o.data.preview[0].url%}" data-height="{%#o.data.preview[0].height%}" data-width="{%#o.data.preview[0].width%}" data-filesize="{%#o.data.preview[0].fileSizeInBytes%}" data-thumb="{%#o.data.thumb.url%}" class="yaimgs-core-link selected">Основное изображение {%#o.data.preview[0].width%}x{%#o.data.preview[0].height%}</a>
    {% for (var i = 0, n = o.data.sizes.length, image = o.data.sizes[0]; i < n; image = o.data.sizes[++i]) { %}
    <a href="{%#image.url%}" data-height="{%#image.height%}" data-width="{%#image.width%}" data-filesize="{%#image.fileSizeInBytes%}" data-thumb="{%#o.data.thumb.url%}" class="yaimgs-core-link half">{%#image.width%}x{%#image.height%}</a>
    {% } %}
    <a href="#" class="yaimgs-core-upload">Добавить <b>выбранное</b> к товару</a>
</script>
<script id="yaimgs-batch" type="text/html">
    <div class="yaimgs-batches-item just-added">
        <span class="yaimgs-batches-item-wrapper">
            <div style="background-image: url({%#o.data.thumb%});"><span>{%#o.data.width%}x{%#o.data.height%}</span></div>
            <span class="__loading"><i class="icon16 loading"></i>загрузка...</span>
            <span class="__success"><i class="icon16 yes"></i>загружено!</span>
            <span class="__iferror"><i class="icon16 delete"></i>ошибка!</span>
        </span>
    </div>
</script>
<?php }} ?>
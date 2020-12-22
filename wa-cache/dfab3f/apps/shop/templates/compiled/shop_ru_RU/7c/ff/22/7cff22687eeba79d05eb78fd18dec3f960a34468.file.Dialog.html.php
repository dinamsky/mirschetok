<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/categoryimage/templates/Dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:3331930265fe1154ca61424-70231619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cff22687eeba79d05eb78fd18dec3f960a34468' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/categoryimage/templates/Dialog.html',
      1 => 1525456495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3331930265fe1154ca61424-70231619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1154ca73694_55618392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1154ca73694_55618392')) {function content_5fe1154ca73694_55618392($_smarty_tpl) {?><div class="field-group">
    <div class="field">
        <div class="name">
            <label>
                Изображение
            </label>
        </div>
        <div class="value">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['image']){?>
            <input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['image'];?>
">
            <div style="width: 48px; text-align: center; display: inline-block">
                <img style="max-width: 48px; max-height: 48px" src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
"><br>
                <a id="category-image-delete" class="small inline-link" href="#"><i class="icon10 delete"></i>удалить</a>
            </div>
            <script type="text/javascript">
                $("#category-image-delete").click(function () {
                    var p = $(this).parent();
                    p.prev().val('');
                    p.remove();
                    $("#s-product-list-settings-dialog .dialog-buttons input:submit").removeClass('green').addClass('yellow');
                    return false;
                });
            </script>
            <?php }?>
            <div style="display: inline-block">
                <input type="file" name="image_file"><br>
                <span class="hint">*.jpg, *.jpeg, *.gif, *.png</span>
            </div>
        </div>
    </div>
</div><?php }} ?>
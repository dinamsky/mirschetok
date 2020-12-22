<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkgoods/templates/actions/backend/vkgoods_category_dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:1849483705fe1154cc63225-51435396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8507e2dc65c053992d840b7b289b9d0ebe0bf9e' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/vkgoods/templates/actions/backend/vkgoods_category_dialog.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1849483705fe1154cc63225-51435396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'public' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1154ccb6df9_57399605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1154ccb6df9_57399605')) {function content_5fe1154ccb6df9_57399605($_smarty_tpl) {?><ul id="vkgoods-category-info">
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['publics'])||!$_smarty_tpl->tpl_vars['params']->value['publics']){?>
    <i class="icon16 vk-unpublished"></i>
    <span>Автоматическая публикация товаров из этой категории не настроена. <a class="vkgoods_category_dialog" data-cid="<?php echo $_smarty_tpl->tpl_vars['params']->value['category']['id'];?>
" href="#">Добавить</a> </span>
<?php }else{ ?>
    <i class="icon16 vkontakte"></i>
    <span>Настроенные автоматические публикации:</span>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['public'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['public']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value['publics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['public']->key => $_smarty_tpl->tpl_vars['public']->value){
$_smarty_tpl->tpl_vars['public']->_loop = true;
?>
            <li style="margin-top: 3px;">
            <span>Сообщество: <?php echo $_smarty_tpl->tpl_vars['public']->value['group_name'];?>
 <a class="vkgoods-cats-info" data-public-id="<?php echo $_smarty_tpl->tpl_vars['public']->value['id'];?>
" href="#"><i class="icon16 info"></i></a></span>
            <div id="vkgoods-real-hint" class="real-hint" style="display: none;">
                <div class="prm-cross block">
                    <i class="icon10 close"></i>
                </div>
                <br><br>
                <div id="vkgoods-category-hint">
                </div>
            </div>

            <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['public']->value['id'];?>
]">
                <option value="0" <?php if ($_smarty_tpl->tpl_vars['public']->value['subcategories']==0){?>selected<?php }?>>Товары только из этой категории</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['public']->value['subcategories']==1){?>selected<?php }?>>Включать товары из подкатегорий</option>
            </select>&nbsp;&nbsp;
            <span class="small"><a class="vkgoods_category_dialog" data-cid="<?php echo $_smarty_tpl->tpl_vars['params']->value['category']['id'];?>
" data-public-id="<?php echo $_smarty_tpl->tpl_vars['public']->value['id'];?>
" href="#">Задать новые настройки</a> или <a class="del_category_publish" data-public-id="<?php echo $_smarty_tpl->tpl_vars['public']->value['id'];?>
" data-category-id="<?php echo $_smarty_tpl->tpl_vars['params']->value['category']['id'];?>
 href="#">Удалить настройки публикации</a></span>
            </li>
        <?php } ?>
        <li><i class="icon10 add"></i> <a class="vkgoods_category_dialog" data-cid="<?php echo $_smarty_tpl->tpl_vars['params']->value['category']['id'];?>
" href="#" class="small">Добавить</a></li>
    </ul>
<?php }?>
</ul>

<style>
    .real-hint {
        background-color: beige;
        border: 1px solid #aaa;
        border-radius: 10px;
        font-size: 0.8em;
        display: none;
        padding: 10px 10px;
        position: absolute;
        max-width: 50%;
        z-index: 99;
    }

    .real-hint .hint-caption {
        font-weight: bold;
        text-transform: uppercase;
    }

    .real-hint .prm-cross {
        cursor: pointer;
        float: right;
        height: 16px;
        margin-top: 3px;
        padding-left: 15px;
        right: 10px;
        width: 16px;
    }

    .real-show-hint {
        cursor: pointer;
        border-bottom: dashed 1px;
        color: #8c0000;
    }
</style>
<?php if ($_smarty_tpl->tpl_vars['params']->value['need_script']){?>
<script type="text/javascript">
    $(document).ready(function () {
        var div_field = $('#vkgoods-category-info').closest('div.value');
        $(div_field).on('click', '.vkgoods-cats-info', function(){
            var e = $(this);
            debugger;
            $.post('?plugin=vkgoods&action=getCategoryExportTemplate', { 'public_id':$(e).data('public-id') }, function(r) {
                if(r.status != 'ok'){
                    alert(r.error);
                    return false;
                }else{
                    var RealHint =  $('#vkgoods-real-hint');
                    $('#vkgoods-category-hint').html(r.data);
                    $(RealHint).css('top',e.position().top+5);
                    $(RealHint).css('left',e.position().left-275);
                    $(RealHint).show();
                }
            }, 'json');

            return false;
        });
        $(div_field).on('click', '.prm-cross', function() {
            $(this).parent().hide();
        });
        $(div_field).on('click', '.del_category_publish', function(){
            var public_id = $(this).data('public-id');
            var category_id = $(this).data('category-id');
            $.post('?plugin=vkgoods&action=delWaitCategory', { 'public_id':public_id }, function(r) {
                if(r.status != 'ok') {
                    alert('Ошибка удаления настроек');
                    return false;
                }else{
                    $.post('?plugin=vkgoods&action=getCategoryField', { 'category_id':category_id }, function(f) {
                        $(div_field).empty();
                        $(div_field).html(f.data.html);
                        return false;
                    }, 'json');
                }
            }, 'json');
            return false;
        });
        $(div_field).on('click', '.vkgoods_category_dialog', function () {
            debugger;
            var category_id = $(this).data('cid');
            var public_id = $(this).data('public-id');
            $.post('?plugin=vkgoods&action=tmpltdlg', { 'event':'category','pid':category_id,'public_id': public_id }, function(mydialog) {
                $(mydialog).waDialog({
                    'height' : '500px',
                    'width' : '660px',
                    'onLoad' : function() {
                    },
                    'onClose' : function(f) {
                        $(this).remove;
                    },
                    'esc' : false,
                    'onSubmit' : function(wadlg){
                        if ($('#storefront').val() == 'no_storefront') {
                            alert("Необходимо выбрать витрину магазина");
                            return false;
                        }
                        if ($('#vkalbums').val() == 'new') {
                            alert("Автоматические публикации можно делать только в уже существующие подборки\nВыберите подборку из существующих");
                            return false;
                        }
                        if ($('#vkcat').val() == 0) {
                            alert("Не выбрана категория ВК к которой относится товар");
                            return false;
                        }
                        var form = $('#vkgoods-prod-post');
                        var category_id = $(form).find('input[name=pid]').val();
                        $.post($(form).attr('action'), form.serialize(), function callback(r) {
                            if(r.status != 'ok'){
                                alert("Ошибка при сохранении информации");
                                return false;
                            }else{
                                $.post('?plugin=vkgoods&action=getCategoryField', { 'category_id':category_id }, function(f) {
                                    $(div_field).empty();
                                    $(div_field).html(f.data.html);
                                    wadlg.remove();
                                    return false;
                                }, 'json');
                            }
                        }, 'json');
                        return false;
                    }
                });
            });

            return false;
        });
    });
</script>
<?php }?><?php }} ?>
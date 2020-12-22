<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:12
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/backendCategoryDialog.html" */ ?>
<?php /*%%SmartyHeaderCode:2233263915fe1154cc09717-86745336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3abac4ddcd9099ea6249b3af655f37657396b889' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/smartfilters/templates/hooks/backendCategoryDialog.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233263915fe1154cc09717-86745336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_smartfilters' => 0,
    'smartfilters_show' => 0,
    'smartfilters' => 0,
    'feature' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe1154cc4c216_54527067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe1154cc4c216_54527067')) {function content_5fe1154cc4c216_54527067($_smarty_tpl) {?><style>
#smartfilters-category-filter .inline-link{
    display: inline
}
#smartfilters-category-filter {
    padding-top: 0;
}
</style>
<input type="hidden" name="smartfilters" value="1">
<div class="field">
    <div class="name">
        Smart Filters
    </div>
    <div class="value no-shift">
        <label>
            <input type="checkbox" name="allow_smartfilters" value="1" id="smartfilters-category-allow-filter" <?php if ($_smarty_tpl->tpl_vars['allow_smartfilters']->value){?>checked<?php }?>> Разрешить фильтрацию товаров
            <div class="block hint">
                Фильтрация товаров позволит покупателям подбирать товары внутри этой категории по значениям характеристик, например, по цвету, производителю, цене.<br>
                <strong>Smart Filters</strong> поможет исключить варианты фильтров, которые не приведут к результатам. Желательно не использовать одновременно со стандартной опцией ниже.
            </div>
        </label>
        <div class="block" id="smartfilters-category-filter" <?php if (!$_smarty_tpl->tpl_vars['allow_smartfilters']->value){?>style="display:none;"<?php }?>>
            <ul class="menu-v compact small">
                <li>
                    <a href="#" class="inline-link" data-check="1"><b><i>Отметить все</i></b></a> /
                    <a href="#" class="inline-link" data-check="0"><b><i>Снять отметки</i></b></a> /
                    <a href="#" class="inline-link" data-show="1"<?php if ($_smarty_tpl->tpl_vars['smartfilters_show']->value){?> style="display: none"<?php }?>><b><i>Показать фильтры</i></b></a>
                    <a href="#" class="inline-link" data-show="0"<?php if (!$_smarty_tpl->tpl_vars['smartfilters_show']->value){?> style="display: none"<?php }?>><b><i>Скрыть фильтры</i></b></a> /
                    <label class="hint">
                        <input type="checkbox" name="smartfilters_descendants" value="1"> Применить фильтры ко вложенным категориям
                    </label>
                </li>
                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['smartfilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                    <li class="smartfilters-item"<?php if (!$_smarty_tpl->tpl_vars['smartfilters_show']->value){?> style="display: none"<?php }?>>
                        <i class="icon16 sort"></i>
                        <label>
                            <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['feature']->value['checked'])||($_smarty_tpl->tpl_vars['feature']->value['id']=='price'&&!$_smarty_tpl->tpl_vars['allow_smartfilters']->value), null, 0);?>
                            <input type="checkbox" name="smartfilters[]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['checked']->value){?> checked<?php }?>>
                            <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['new_name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['checked']->value){?> name="smartfilters_name[]" <?php }else{ ?> disabled<?php }?>>
                            <span class="hint"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                        </label>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

</div>
<script>
(function ($) {
$(function () {

    var $scf = $('#smartfilters-category-filter');

    $('#smartfilters-category-allow-filter').click(function() {
        if (this.checked) {
            $scf.show();
            $('[data-show="1"]', $scf).click()

            var af = $('[name="allow_filter"]');
            if(af.is(':checked')) af.trigger('click');
        } else {
            $scf.hide();

        }
    });
    $scf.sortable({
        distance: 5,
        opacity: 0.75,
        items: 'li',
        handle: '.sort',
        cursor: 'move',
        tolerance: 'pointer'
    })
    .find(':checkbox').click(function(){
        var name = $(this).next();
        if($(this).is(':checked')) {
            name.prop('name', 'smartfilters_name[]')
                .prop('disabled', false)
        } else {
            name.prop('name', '')
                .prop('disabled', true);
        }
    });

    $('[data-check]', $scf).click(function(e){
        e.preventDefault();
        $(this).closest('ul').find('.smartfilters-item :checkbox')
            .prop('checked',!!$(this).data('check'));
    });

    $('[data-show]', $scf).click(function(e){
        e.preventDefault();
        var a = !!$(this).data('show') ? 'show' : 'hide';
        $('.smartfilters-item', $scf)[a]();
        $(this).hide().siblings('[data-show]').show();
    })
})
})(jQuery);
</script><?php }} ?>
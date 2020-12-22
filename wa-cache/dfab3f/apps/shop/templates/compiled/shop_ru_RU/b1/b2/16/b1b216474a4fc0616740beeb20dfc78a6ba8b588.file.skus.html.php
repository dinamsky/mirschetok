<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 19:57:14
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/fields/skus.html" */ ?>
<?php /*%%SmartyHeaderCode:3074124645fe2256a0525c7-08235688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b216474a4fc0616740beeb20dfc78a6ba8b588' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/fields/skus.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3074124645fe2256a0525c7-08235688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'stock' => 0,
    'weight_units' => 0,
    'unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe2256a19d270_22589299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe2256a19d270_22589299')) {function content_5fe2256a19d270_22589299($_smarty_tpl) {?><div class="massupdating-switcher massupdating-skus">
	<?php if (count($_smarty_tpl->tpl_vars['input']->value['stocks'])>0){?>
	<label style="display: block;">
		<input type="checkbox" name="skus_by_stocks"/>
		По складам
	</label>
	
	<div style="margin-top: 10px; color: red;"><b>Внимание!</b> Если товары располагаются на нескольких складах, они будут просуммированы (за исключением складов, на которых количество товара установлено в бесконечность) и перенесены на основной склад. Если Вы хотите изменить количество строго по каждому складу, установите галочку "По складам".</div>
	<?php }?>
	<div id="massupdating-skus-common"<?php if (count($_smarty_tpl->tpl_vars['input']->value['stocks'])>0){?> style="margin-top: 10px;"<?php }?>>
		<a href="#" data-action="minus" data-input="massupdating-skus-action" class="selected">Уменьшить (-)</a>
		<a href="#" data-action="plus" data-input="massupdating-skus-action">Увеличить (+)</a>
		<input id="massupdating-skus-action" value="minus" type="hidden" name="skus[-1][action]">
		количество товара на складах
		<select id="massupdating-change-skus-type" name="skus[-1][type]">
			<option value="1" selected>на</option>
			<option value="2">дo</option>
		</select>
		<input id="massupdating-skus-to" type="text" name="skus[-1][to]" class="short"/>
		единиц
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['input']->value['stocks'])>0){?>
	<div id="massupdating-skus-by-stocks" style="margin-top: 10px; display: none;">
		<table class="zebra">
			<tr>
				<th class="min-width"></th>
				<th>Склад</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['stocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
?>
			<tr>
				<td class="min-width"><input id="skus-stock-<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
" name="skus[<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
][on]" type="checkbox"/></td>
				<td><label for="skus-stock-<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label></td>
				<td class="min-width" align="right">
					<select name="skus[<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
][action]">
						<option value="minus" selected>Уменьшить (-)</option>
						<option value="plus">Увеличить (+)</option>
					</select>
				</td>
				<td class="min-width">
					<select name="skus[<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
][type]">
						<option value="1" selected>на</option>
						<option value="2">дo</option>
					</select>
				</td>
				<td class="min-width">
					<input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
][to]" class="short"/>
				</td>
				<td class="min-width" align="right">
					единиц
				</td>
			</tr>
			<?php } ?>
		</table>
		<?php if (count($_smarty_tpl->tpl_vars['input']->value['stocks'])>1){?>
		<div style="margin-top: 10px; color: red;">Товары, находящиеся сейчас на основном складе, будут перемещены в первый склад из списка. В остальных складах отталкивающим значением, от которого можно изменять количество, будет 0. Если не указать количество на остальных (не первом) складах, оно установится в значение бесконечность.</div>
		<?php }?>
	</div>
	<?php }?>
	<div style="margin-top: 10px; color: blue;">Чтобы установить количество товара в бесконечность, укажите "до -1".</div>
	<div style="margin-top: 10px;">
		<?php if (count($_smarty_tpl->tpl_vars['input']->value['value']['count'])<=1){?>
		Текущее количество товара на складах у выбранных товаров совпадает:
		<b><?php echo ifempty($_smarty_tpl->tpl_vars['input']->value['value']['count'][0],'&infin;');?>
</b> ед.
		<?php }else{ ?>
		Текущее количество товара на складах у выбранных товаров варьируется от
		<b><?php echo min($_smarty_tpl->tpl_vars['input']->value['value']['count']);?>
</b>
		до
		<b><?php echo max($_smarty_tpl->tpl_vars['input']->value['value']['count']);?>
</b>
		<?php }?>
	</div>
	<label style="display: block; margin-top: 10px;">
		<input type="checkbox" name="remove_empty_skus"/>
		Удалить пустые артикулы
	</label>
	<span class="hint">Пустыми артикулами считаются те, у которых отсутствует Наименование, Код артикула и Количество на складах, а цена равна 0 или не указана</span>
</div>

</div>
<div class="name">Вес артикулов</div>
<div class="value massupdating-switcher massupdating-skus-weight">
<div id="massupdating-skus-weight">
	<a href="#" data-action="minus" data-input="massupdating-skus-weight-action" class="selected">Уменьшить (-)</a>
	<a href="#" data-action="plus" data-input="massupdating-skus-weight-action">Увеличить (+)</a>
	<input id="massupdating-skus-weight-action" value="minus" type="hidden" name="skus_weight[action]">
	вес артикулов выбранных товаров
	<select name="skus_weight[type]">
		<option value="1" selected>на</option>
		<option value="2">дo</option>
	</select>
	<input id="massupdating-skus-to" type="text" name="skus_weight[to]" class="short"/>
	<?php $_smarty_tpl->tpl_vars['weight_units'] = new Smarty_variable(shopDimension::getUnits('weight'), null, 0);?>
	<select name="skus_weight[unit]">
		<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weight_units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['unit']->value['title'];?>
</option>
		<?php } ?>
	</select>
</div>
<div style="margin-top: 10px;">
	<label>
		<input name="skus_weight[convert_to_unit]" type="checkbox"/>
		Конвертировать в единую единицу измерения:
		<select name="skus_weight[unit_for_convert]">
			<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weight_units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['unit']->value['title'];?>
</option>
			<?php } ?>
		</select>
	</label>
</div>
<script type="text/javascript">
(function() {
	$('.massupdating-skus a, .massupdating-skus-weight a').click(function(e){
		$(this).closest('div').find('a').removeClass('selected');
		$(this).addClass('selected');
		var action = $(this).data('action');
		$('#' + $(this).data('input')).val(action);
		e.preventDefault();
	});
	
	$('[name="skus_by_stocks"]').change(function() {
		$('#massupdating-skus-common, #massupdating-skus-by-stocks').toggle();
	});
})();
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 01:13:21
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/dialog/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:8073830345fe11e01d30ef9-19464534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ca9d5270084affcc051210d0f924c81449dec58' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/dialog/edit.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8073830345fe11e01d30ef9-19464534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'products' => 0,
    'wa' => 0,
    'action' => 0,
    'inputs' => 0,
    'key' => 0,
    'input' => 0,
    'k' => 0,
    'v' => 0,
    'default_features' => 0,
    'feature_input' => 0,
    'features_for_all_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe11e01e6e002_96376648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe11e01e6e002_96376648')) {function content_5fe11e01e6e002_96376648($_smarty_tpl) {?><h1 class="massupdating">
	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <span class="gray">(<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
)</span>
</h1>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

<input name="product_ids" type="hidden" id="massupdating-product-ids" value="<?php echo implode(',',array_keys($_smarty_tpl->tpl_vars['products']->value));?>
"/>
<div class="field-group massupdating-dialog">
	<?php if (($_smarty_tpl->tpl_vars['action']->value=='massupdating'||$_smarty_tpl->tpl_vars['action']->value=='description'||$_smarty_tpl->tpl_vars['action']->value=='summary'||$_smarty_tpl->tpl_vars['action']->value=='meta_keywords'||$_smarty_tpl->tpl_vars['action']->value=='meta_title'||$_smarty_tpl->tpl_vars['action']->value=='meta_description'||$_smarty_tpl->tpl_vars['action']->value=='params')){?><div class="field">
		<p style="margin-bottom: 5px;">
			В описании, кратком описании, заголовке страницы, META-полях и дополнительных параметрах можно использовать переменные:
		</p>
		<p>
			<span class="variable"><b>{$name}</b></span> — наименование товара,
			<span class="variable"><b>{$shop}</b></span> — название магазина,
			<span class="variable"><b>{$price}</b></span> — стоимость товара,
			<span class="variable"><b>{$summary}</b></span> — краткое описание, только для заголовка title и META-полей
		</p>
	</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['action']->value!='badge'&&$_smarty_tpl->tpl_vars['action']->value!='photo'&&$_smarty_tpl->tpl_vars['action']->value!='subpages'){?><div class="field">
		<div class="value">
			<label>
				<input type="checkbox" name="dont-update-empty" checked />
				Не обновлять оставленные пустыми поля
		</div>
	</div><?php }?>
	<div class="field">
		<div class="value">
			<label>
				<input type="checkbox" name="reload" id="massupdating-reload"/>
				Обновить страницу после сохранения
			</label>
		</div> <br/>
	</div>
<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inputs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value){
$_smarty_tpl->tpl_vars['input']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['input']->key;
?>
	<div class="field">
		<div class="name<?php if ($_smarty_tpl->tpl_vars['key']->value=='features'){?> bold" style="color: #000;<?php }?>"><?php if ($_smarty_tpl->tpl_vars['key']->value=='features'){?>Редактировать характеристику...<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['name_description'])){?><br/><span class="hint"><?php echo $_smarty_tpl->tpl_vars['input']->value['name_description'];?>
</span><?php }?></div>
		<div class="value">
			<?php if ($_smarty_tpl->tpl_vars['input']->value['params']['type']=='textarea'){?>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['params']['wysiwyg'])&&$_smarty_tpl->tpl_vars['input']->value['params']['wysiwyg']){?>
			<ul id="massupdating-wysiwyg-switcher-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
				<li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
				<li><a class="html" href="#">HTML</a></li>
			</ul>
			<?php }?>
			<textarea placeholder="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['different'])){?>Значения этого параметра у выбранных товаров отличаются.<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="<?php echo ifset($_smarty_tpl->tpl_vars['input']->value['params']['style']);?>
" id="massupdating-textarea-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="massupdating-textarea-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo ifset($_smarty_tpl->tpl_vars['input']->value['params']['class']);?>
"><?php if ($_smarty_tpl->tpl_vars['key']->value=='params'){?><?php if (!empty($_smarty_tpl->tpl_vars['input']->value['value'])){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='order'){?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php }?><?php } ?><?php }?><?php }else{ ?><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['input']->value['value']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['params']['wysiwyg'])&&$_smarty_tpl->tpl_vars['input']->value['params']['wysiwyg']){?>
			<script type="text/javascript">
				(function(){
					$.massupdating.initWysiwyg('#massupdating-textarea-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');
					$('#massupdating-wysiwyg-switcher-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 a').click(function(e) {
						$.massupdating.toggleWysiwyg(e, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');
						e.preventDefault();
					});
				})();
			</script>
			<style type="text/css">
				#massupdating-textarea-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 {
					width: 100%;
					height: 220px;
					-webkit-box-sizing: border-box;
					-moz-box-sizing: border-box;
					box-sizing: border-box;
					margin-top: 22px;
				}
			</style>
			<?php }?>
			<?php }elseif($_smarty_tpl->tpl_vars['input']->value['params']['type']=='input'){?>
			<input placeholder="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['different'])){?>Значения этого параметра у выбранных продуктов отличаются.<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="<?php echo ifset($_smarty_tpl->tpl_vars['input']->value['params']['style']);?>
" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['input']->value['value']), ENT_QUOTES, 'UTF-8', true);?>
" id="massupdating-input-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="massupdating-input-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo ifset($_smarty_tpl->tpl_vars['input']->value['params']['class']);?>
" />
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='name'){?>
			<p style="margin-top: 10px; margin-bottom: 5px;">
				Для подстановки в название Вы можете использовать Smarty вместе с этими переменными (условные конструкции так же доступны):
			</p><p>
				<span class="variable"><b>{$price}</b></span> — стоимость товара,<br/>
				<span class="variable"><b>{$min_price}</b></span> — минимальная стоимость товара,<br/>
				<span class="variable"><b>{$max_price}</b></span> — максимальная стоимость товара,<br/>
				<span class="variable"><b>{$feature['<span style="color: red;">brand</span>']['<span style="color: green;">value</span>']}</b></span> — значение характеристики, где <span style="color: red;">brand</span> — код характеристики, а <span style="color: green;">value</span> — выводимое значение характеристики (доступно: value, value_base_unit, unit, code, begin, end)
			</p>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='url'){?>
			<p style="margin-top: 10px; margin-bottom: 5px;">
				Кириллические символы будут транслитерованы. Разрешено использовать Smarty вместе с этими переменными:
			</p><p>
				<span class="variable"><b>{$name}</b></span> — наименование товара,<br/>
				<span class="variable"><b>{$id}</b></span> — ID товара,<br/>
				<span class="variable"><b>{$category[0]}</b></span> ... <span class="variable"><b>{$category[N]}</b></span> — наименования категорий, в которые входит товар (по вложенности, от последней до первой)<br/>
				<span class="variable"><b>{$category_url[0]}</b></span> ... <span class="variable"><b>{$category_url[N]}</b></span> — URL категорий<br/>
				<span class="variable"><b>{$r_category[N]}</b></span> и <span class="variable"><b>{$r_category_url[N]}</b></span> — обратный массив с информациями по категориям (от первой до последней)<br/>
			</p>
			<div class="hint">
				<b>Пример 1.</b> <font color="blue">{$category[0]}-{$name}-{$id}</font> <span class="red">naushniki-apple-earpods-394</span><br/>
				<b>Пример 2.</b> <font color="blue">{$category_url[0]}-{$id}</font> <span class="red">headphones-394</span><br/>
				<b>Пример 3.</b> <font color="blue">{implode('-', $r_category_url)}-{$name}</font> <span class="red">phones-accessories-headphones-apple-earpods</span>
			</div>
			<?php }?>
			<?php }else{ ?>
			<?php echo ifset($_smarty_tpl->tpl_vars['input']->value['params']['field']);?>

			<?php echo $_smarty_tpl->getSubTemplate ("../fields/".((string)$_smarty_tpl->tpl_vars['key']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['description'])){?><br/> <span class="hint"><?php echo $_smarty_tpl->tpl_vars['input']->value['description'];?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='params'){?><br/> <span class="hint"><?php echo _w("Optional set of custom <em>key=value</em> parameters which can be used within a frontend's theme template as <em>&#123;\$product.params.key&#125;</em>. Each key=value pair should be on a separate line.");?>
</span><?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['key']->value=='features'){?>
	<div class="massupdating-features-wrapper">
		<?php if (!empty($_smarty_tpl->tpl_vars['default_features']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['feature_input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_input']->_loop = false;
 $_smarty_tpl->tpl_vars['feature_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['default_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature_input']->key => $_smarty_tpl->tpl_vars['feature_input']->value){
$_smarty_tpl->tpl_vars['feature_input']->_loop = true;
 $_smarty_tpl->tpl_vars['feature_key']->value = $_smarty_tpl->tpl_vars['feature_input']->key;
?>
		<div class="massupdating-freeze"><a class="massupdating-freeze-button" id="massupdating-freeze-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" href="javascript: $.massupdating.toggleField('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
')">Заморозить</a></div>
		<div data-disabled="0" id="massupdating-field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" class="field massupdating-feature-field">
			<div class="name" style="overflow: hidden;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br/><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
			<div class="value"><?php echo $_smarty_tpl->tpl_vars['feature_input']->value['control'];?>
</div>
		</div>
		<?php } ?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['features_for_all_types']->value)&&empty($_smarty_tpl->tpl_vars['default_features']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['feature_input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_input']->_loop = false;
 $_smarty_tpl->tpl_vars['feature_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features_for_all_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature_input']->key => $_smarty_tpl->tpl_vars['feature_input']->value){
$_smarty_tpl->tpl_vars['feature_input']->_loop = true;
 $_smarty_tpl->tpl_vars['feature_key']->value = $_smarty_tpl->tpl_vars['feature_input']->key;
?>
		<div class="massupdating-freeze"><a class="massupdating-freeze-button" id="massupdating-freeze-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" href="javascript: $.massupdating.toggleField('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
')">Заморозить</a></div>
		<div data-disabled="0" id="massupdating-field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" class="field massupdating-feature-field">
			<div class="name" style="overflow: hidden;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br/><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_input']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
			<div class="value"><?php echo $_smarty_tpl->tpl_vars['feature_input']->value['control'];?>
</div>
		</div>
		<?php } ?>
		<?php }?>
	</div>
	<?php }?>
<?php } ?>
</div>
<?php }} ?>
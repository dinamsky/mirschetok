<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 01:26:41
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/fields/features.html" */ ?>
<?php /*%%SmartyHeaderCode:8515149315fe12121c72ec1-83040161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb6b97ac8ea9d37fc705b06f44042593d5817a0' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/massupdating/templates/fields/features.html',
      1 => 1606456194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8515149315fe12121c72ec1-83040161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe12121da24c7_50368101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe12121da24c7_50368101')) {function content_5fe12121da24c7_50368101($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['input']->value['features'])>0){?>
<div class="massupdating-features">
	<select id="massupdating-features" name="feature">
		<option selected>-</option>
		<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['value'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['feature']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['feature']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['feature']->value['code'];?>
)</option>
		<?php } ?>
	</select>
	<a href="#" id="massupdating-features-button" class="button blue">+</a>
	<div style="display: none;" class="massupdating-features-arrow"></div>
</div>
<div style="margin-top: 10px;">
<a class="inline-link" href="?action=plugins#/massupdating/"><b><i>В настройках</i></b></a> Вы можете задать характеристики, которые будут отображаться здесь по умолчанию.
</div>
<div style="margin-top: 10px;">
Поля, которые Вы "заморозите", не будут затрагиваться при сохранении ни при каких условиях.
</div>
<script type="text/javascript">
(function() {

	$('#massupdating-features').change(function() {
		if($(this).val() != 0)
			$('.massupdating-features-arrow').css({display: 'inline-block'});
		else
			$('.massupdating-features-arrow').hide();
	});

	$('#massupdating-features-button').click(function(e) {
		var selected = $('#massupdating-features option:selected');
		
		if(selected.val() != 0) {
			$('.massupdating-features-arrow').hide();
			feature_id = selected.val();
			feature_name = selected.text();
			feature_code = selected.data('code');
			selected.remove();
			$('#massupdating-features').val(0);
			
			$.post('?plugin=massupdating&module=feature&action=control', {
				feature_id: feature_id,
				product_ids: $('#massupdating-product-ids').val()
			}, function(data) {
				$('.massupdating-features-wrapper').prepend($('<div class="field massupdating-feature-field"/>').html($('<div class="name" style="overflow: hidden;"/>').html(feature_name + '<br/><span class="hint">' + feature_code + '</span>')).append($('<div class="value"/>').html(data)));
				
				if($('#massupdating-features option').length == 1)
					$('.massupdating-features').html('&nbsp;');
			});
		}
		
		e.preventDefault();
	});
})();
</script>
<?php }else{ ?>
&nbsp;
<?php }?>
<?php }} ?>
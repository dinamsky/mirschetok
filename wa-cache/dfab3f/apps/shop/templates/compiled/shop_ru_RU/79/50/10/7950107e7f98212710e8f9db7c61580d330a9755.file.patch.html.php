<?php /* Smarty version Smarty-3.1.14, created on 2020-12-22 00:36:57
         compiled from "/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/fastdeleteimages/templates/patch.html" */ ?>
<?php /*%%SmartyHeaderCode:910728005fe115793577e9-44938563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7950107e7f98212710e8f9db7c61580d330a9755' => 
    array (
      0 => '/var/www/u1240732/data/www/mirschetok.ru/wa-apps/shop/plugins/fastdeleteimages/templates/patch.html',
      1 => 1606456193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910728005fe115793577e9-44938563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5fe11579376fd8_40974419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe11579376fd8_40974419')) {function content_5fe11579376fd8_40974419($_smarty_tpl) {?><style>
.plugin-fastdeleteimages-loading-overlay {
position:absolute;
left:0;
top:0;
right:0;
bottom:0;
width:100%;
height:100%;
background:#fff;
opacity:0.6;
display:none;
}
.plugin-fastdeleteimages-loading {
position:absolute;
left:0;
top:0;
right:0;
bottom:0;
width:100%;
height:100%;
background:url(<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif) no-repeat 50% 50%;
display:none;
}
</style>

<div class="dialog width400px height200px" id="s-product-plugin-fast-image-delete-dialog">
    <div class="dialog-background"></div>
    <form method="post">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1><?php echo _wp('Delete image');?>
</h1>
                <?php echo _wp('Image will be deleted without the ability to restore. Are you sure?');?>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="<?php echo _wp('Delete - Enter');?>
"> <?php echo _wp('or');?>
 <a class="cancel" href="javascript:void(0);"><?php echo _wp('cancel');?>
</a>
            </div>
        </div>
    </div>
    </form>
</div>

<script type="text/javascript">

	$(function(){
		$("#s-product-image-list").on("DOMSubtreeModified",function() {
			$("#s-product-image-list li:not(.plugin-fastdeleteimages-updated)").each(function(){
				if(!$(this).hasClass("plugin-fastdeleteimages-updated")) {
					$(this).addClass("plugin-fastdeleteimages-updated");
					var onclick_attr = '$.product_images.fastDeleteImages($(this).closest("li").data("image-id"));';
					$(this).find('a').after("<div class='plugin-fastdeleteimages-loading-overlay'></div><div class='plugin-fastdeleteimages-loading'></div>");
					$(this).find('img').closest('div').after("<div><a href='javascript:void(0);' onClick='"+onclick_attr+"' class='inline-link small fastdeleteimages'><i><b><?php echo _wp('Remove');?>
</b></i></a></div>");
				}
			});
		});
	});

	$.product_images.fastDeleteImages = function (image_id) {
		var dialog = $('#s-product-plugin-fast-image-delete-dialog');
		var li = $('li[data-image-id='+image_id+']');
		dialog.waDialog({
			onSubmit: function () {
				li.css("opacity","0.4");
				li.find('.plugin-fastdeleteimages-loading-overlay').show();
				li.find('.plugin-fastdeleteimages-loading').show();
				li.children('div').each(function(){
					if(!$(this).hasClass('s-image')) {
						$(this).remove();
					}
				});
				dialog.trigger('close');
				var form = dialog.find('form');
				$.shop.jsonPost('?module=product&action=ImageDelete&id='+image_id, form.serialize(),
					function (r) {
						$('#s-product-image-list').find('li[data-image-id=' + r.data.id + ']').remove();
					}
				);
				return false;
			},
			onLoad: function(){
				$(document).bind("keypress.key13", function(event) {
					if($('#s-product-plugin-fast-image-delete-dialog').is(':visible')) {
						if (event.which == 13) {
							dialog.find('form').submit();
						}
					} else {
						if(event.which == 13) return;
					}
				});
			},
			onCancel: function(){
				li.css("opacity","1");
				li.find('.plugin-fastdeleteimages-loading-overlay').hide();
				li.find('.plugin-fastdeleteimages-loading').hide();
			},
			onClose: function(){
				$(document).unbind("keypress.key13");
			}
		});
	}
</script><?php }} ?>
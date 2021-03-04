<?php /* Smarty version Smarty-3.1.19, created on 2021-03-04 09:42:50
         compiled from "/var/www/html/hotelcommerce/admin84/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22676493860405e423971b0-25134942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58154830e789ccb198233584af6845077f35ca9' => 
    array (
      0 => '/var/www/html/hotelcommerce/admin84/themes/default/template/content.tpl',
      1 => 1614549298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22676493860405e423971b0-25134942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60405e423988f0_72034274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60405e423988f0_72034274')) {function content_60405e423988f0_72034274($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

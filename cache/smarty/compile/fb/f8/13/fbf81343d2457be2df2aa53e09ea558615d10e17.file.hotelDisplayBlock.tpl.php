<?php /* Smarty version Smarty-3.1.19, created on 2021-03-04 09:43:15
         compiled from "/var/www/html/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/hotelDisplayBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203343698060405e5beda4f2-81995306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf81343d2457be2df2aa53e09ea558615d10e17' => 
    array (
      0 => '/var/www/html/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/hotelDisplayBlock.tpl',
      1 => 1614796199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203343698060405e5beda4f2-81995306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageName' => 0,
    'val' => 0,
    'hotelDisplay' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60405e5beebfa5_46182481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60405e5beebfa5_46182481')) {function content_60405e5beebfa5_46182481($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/hotelcommerce/tools/smarty/plugins/modifier.replace.php';
?>

<div class="input-group col-lg-5">
<?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['hotelDisplay'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotelDisplay']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imageName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hotelDisplay']->key => $_smarty_tpl->tpl_vars['hotelDisplay']->value) {
$_smarty_tpl->tpl_vars['hotelDisplay']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value+1, null, 0);?>
 <span><?php echo $_smarty_tpl->tpl_vars['hotelDisplay']->value['hotel_name'];?>
</span>
  <span><?php echo $_smarty_tpl->tpl_vars['hotelDisplay']->value['description'];?>
</span>
  <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink("/hotelcommerce/modules/hotelreservationsystem/views/img/hotel_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotelDisplay']->value['hotel_image_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
" class="interiorImg" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotelDisplay']->value['hotel_image_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php } ?>
 <button type="submit" class="btn btn-default button button-medium exclusive" name="search_room_submit" 
   id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['hotelDisplay']->value['hotel_name'],' ','');?>
">
    <span><?php echo smartyTranslate(array('s'=>'Search Now11','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span>
    </button>
</div>
<?php }} ?>

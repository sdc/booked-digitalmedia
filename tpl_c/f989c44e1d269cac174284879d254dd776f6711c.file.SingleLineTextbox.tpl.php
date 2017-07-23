<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:55:19
         compiled from "/var/www/html/booked-digitalmedia/tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17460416815974e3072d7f25-20542859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f989c44e1d269cac174284879d254dd776f6711c' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1485281298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17460416815974e3072d7f25-20542859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchmode' => 0,
    'attribute' => 0,
    'class' => 0,
    'attributeId' => 0,
    'readonly' => 0,
    'attributeName' => 0,
    'inputClass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e3072e57e9_16458323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e3072e57e9_16458323')) {function content_5974e3072e57e9_16458323($_smarty_tpl) {?>
<div class="form-group <?php if (!$_smarty_tpl->tpl_vars['searchmode']->value&&$_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>has-feedback<?php }?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
	<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
		<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
</span>
	<?php } else { ?>
		<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
"
			   class="customAttribute form-control <?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required()&&!$_smarty_tpl->tpl_vars['searchmode']->value) {?>required<?php }?>/>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required()&&!$_smarty_tpl->tpl_vars['searchmode']->value) {?>
		<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"></i>
		<?php }?>
	<?php }?>
</div><?php }} ?>

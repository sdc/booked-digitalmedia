<?php /* Smarty version Smarty-3.1.16, created on 2017-07-24 08:39:34
         compiled from "/var/www/html/booked-digitalmedia/tpl/Controls/Attributes/SelectList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16146556025975a43612adc1-99888753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8e064e9105a81307b50d0bd57b778e589b351bb' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Controls/Attributes/SelectList.tpl',
      1 => 1500881495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16146556025975a43612adc1-99888753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'attributeId' => 0,
    'attribute' => 0,
    'readonly' => 0,
    'attributeName' => 0,
    'inputClass' => 0,
    'searchmode' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5975a43616f1a2_91665799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5975a43616f1a2_91665799')) {function content_5975a43616f1a2_91665799($_smarty_tpl) {?>
<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
	<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
		<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
</span>
	<?php } else { ?>
		<select id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" class="customAttribute form-control <?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
">
			<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->Required()||$_smarty_tpl->tpl_vars['searchmode']->value) {?>
				<option value="">--</option>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
						<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value()==$_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
			<?php } ?>
		</select>
		
			
				
				
			
		
	<?php }?>
</div>
<?php }} ?>

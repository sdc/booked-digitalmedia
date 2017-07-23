<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:55:19
         compiled from "/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_duration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13786199065974e3072e8f54-07477465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff9ac2abb2f6e8a6ebce01a3466162983bd90c0' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_duration.tpl',
      1 => 1485281298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13786199065974e3072e8f54-07477465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e30730a4e7_39752660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e30730a4e7_39752660')) {function content_5974e30730a4e7_39752660($_smarty_tpl) {?>
<div class="minDuration"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinLength()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>

	<?php }?>
</div>

<div class="maxDuration"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>

	<?php }?>
</div>

<div class="bufferTime"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasBufferTime()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl);?>

	<?php }?>
</div>

<div class="allowMultiDay"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceNotAllowMultiDay'),$_smarty_tpl);?>

	<?php }?>
</div><?php }} ?>

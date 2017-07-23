<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:55:19
         compiled from "/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_capacity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:594246035974e30732bb27-57593031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44acfa71c84fabd0745b98a8df84e753ea85daa5' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_capacity.tpl',
      1 => 1485281298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594246035974e30732bb27-57593031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e307330e05_90011186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e307330e05_90011186')) {function content_5974e307330e05_90011186($_smarty_tpl) {?>
<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }} ?>

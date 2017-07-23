<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:55:19
         compiled from "/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9190314005974e3073329f9-68335259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705914c4800973bbeb573e3ec1b7050252215675' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Admin/Resources/manage_resources_groups.tpl',
      1 => 1485281298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9190314005974e3073329f9-68335259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
    'resourceGroupId' => 0,
    'ResourceGroupList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e30733f702_12556791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e30733f702_12556791')) {function content_5974e30733f702_12556791($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds())==0) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

<?php }?>
<?php  $_smarty_tpl->tpl_vars['resourceGroupId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceGroupId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['resourceGroupId']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['resourceGroupId']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['resourceGroupId']->key => $_smarty_tpl->tpl_vars['resourceGroupId']->value) {
$_smarty_tpl->tpl_vars['resourceGroupId']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceGroupId']->iteration++;
 $_smarty_tpl->tpl_vars['resourceGroupId']->last = $_smarty_tpl->tpl_vars['resourceGroupId']->iteration === $_smarty_tpl->tpl_vars['resourceGroupId']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['eachGroup']['last'] = $_smarty_tpl->tpl_vars['resourceGroupId']->last;
?>
	<span class="resourceGroupId" data-value="<?php echo $_smarty_tpl->tpl_vars['resourceGroupId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ResourceGroupList']->value[$_smarty_tpl->tpl_vars['resourceGroupId']->value]->name;?>
</span><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['eachGroup']['last']) {?>, <?php }?>
<?php } ?><?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:55:19
         compiled from "/var/www/html/booked-digitalmedia/tpl/Admin/InlineAttributeEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16137375515974e307342d23-39429358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eb1f2c06b1974d702f98bb72fbd8e1fc3b202fe' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Admin/InlineAttributeEdit.tpl',
      1 => 1485281296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16137375515974e307342d23-39429358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'attribute' => 0,
    'value' => 0,
    'attributeId' => 0,
    'datatype' => 0,
    'v' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e307367554_50013433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e307367554_50013433')) {function content_5974e307367554_50013433($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['attribute']->value->AppliesToEntity($_smarty_tpl->tpl_vars['id']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['attributeId'] = new Smarty_variable("inline".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id()).((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
	<div class="updateCustomAttribute">
		<?php $_smarty_tpl->tpl_vars['datatype'] = new Smarty_variable('text', null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::CHECKBOX) {?>
			<?php $_smarty_tpl->tpl_vars['datatype'] = new Smarty_variable('checklist', null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::MULTI_LINE_TEXTBOX) {?>
			<?php $_smarty_tpl->tpl_vars['datatype'] = new Smarty_variable('textarea', null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::SELECT_LIST) {?>
			<?php $_smarty_tpl->tpl_vars['datatype'] = new Smarty_variable('select', null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::DATETIME) {?>
			<?php $_smarty_tpl->tpl_vars['datatype'] = new Smarty_variable('combodate', null, 0);?>
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['value']->value,'key'=>'fullcalendar'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_tmp8, null, 0);?>
		<?php }?>
		<label><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
		<span class="inlineAttribute"
			  id="inline<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"
			  data-type="<?php echo $_smarty_tpl->tpl_vars['datatype']->value;?>
"
			  data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			  data-value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
			  data-name="<?php echo FormKeys::ATTRIBUTE_PREFIX;?>
<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
"
				<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::SELECT_LIST) {?>
					data-source='[<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>{value:"",text:""},<?php }?>
				  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['vals']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
						{value:"<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
",text:"<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['vals']['last']) {?>,<?php }?>
					<?php } ?>]'
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::CHECKBOX) {?>
					data-source='[{value:"1",text:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
"}]'
				<?php }?>
				>
		</span>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Type()==CustomAttributeTypes::DATETIME) {?>
			<script type="text/javascript">
				$(function() {
					$('#inline<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
').editable({
						url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
",
						viewformat: "<?php echo Resources::GetInstance()->GetDateFormat('momentjs_datetime');?>
",
						format: "YYYY-M-D H:m",
						template: "<?php echo Resources::GetInstance()->GetDateFormat('momentjs_datetime');?>
",
						combodate: {
							minYear: "<?php echo Date::Now()->AddYears(-20)->Format('Y');?>
",
							maxYear: "<?php echo Date::Now()->AddYears(20)->Format('Y');?>
",
							firstItem: "none"
						},
						emptytext: '-',
						emptyclass: '',
						toggle : 'manual',
						params : function(params) {
							params.CSRF_TOKEN = $('#csrf_token').val();
							return params;
						}
					});
				});
			</script>
		<?php }?>
		<a class="update changeAttribute" href="#"><span class="fa fa-pencil-square-o"></span></a>
	</div>
<?php }?><?php }} ?>

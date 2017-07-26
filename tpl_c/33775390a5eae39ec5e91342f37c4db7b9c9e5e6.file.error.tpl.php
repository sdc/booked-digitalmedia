<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 12:47:52
         compiled from "/var/www/html/booked-digitalmedia/tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57592051459788168eef558-59449335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33775390a5eae39ec5e91342f37c4db7b9c9e5e6' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/error.tpl',
      1 => 1500881495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57592051459788168eef558-59449335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59788168f0b646_43239314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59788168f0b646_43239314')) {function content_59788168f0b646_43239314($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="//<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2017-07-23 18:58:28
         compiled from "/var/www/html/booked-digitalmedia/tpl/Dashboard/upcoming_reservations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12743356005974e3c4d675e8-10466907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d53e7b1fe25773e595efe55f2b945dad539d118' => 
    array (
      0 => '/var/www/html/booked-digitalmedia/tpl/Dashboard/upcoming_reservations.tpl',
      1 => 1485281298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12743356005974e3c4d675e8-10466907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Total' => 0,
    'TodaysReservations' => 0,
    'reservation' => 0,
    'TomorrowsReservations' => 0,
    'ThisWeeksReservations' => 0,
    'NextWeeksReservations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5974e3c4d7dc49_48048851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974e3c4d7dc49_48048851')) {function content_5974e3c4d7dc49_48048851($_smarty_tpl) {?>


<div class="dashboard upcomingReservationsDashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader">
		<div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['Total']->value;?>
</span></div>
		<div class="pull-right">
			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
">
				<i class="glyphicon"></i>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable("5", null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['Total']->value>0) {?>
			<div>
				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Today"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TodaysReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TodaysReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Tomorrow"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TomorrowsReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TomorrowsReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LaterThisWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['ThisWeeksReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ThisWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NextWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['NextWeeksReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NextWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoUpcomingReservations"),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>

	<form id="form-checkin" method="post" action="ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
">
		<input type="hidden" id="referenceNumber" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 />
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

	</form>
</div>
<?php }} ?>

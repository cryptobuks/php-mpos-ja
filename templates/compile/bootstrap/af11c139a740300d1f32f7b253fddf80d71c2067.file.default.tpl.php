<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 12:13:11
         compiled from "/var/www/mpos/templates/bootstrap/statistics/round/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8068351215bafa7abbf27f7-88434509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af11c139a740300d1f32f7b253fddf80d71c2067' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/round/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8068351215bafa7abbf27f7-88434509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa7abc19ee0_98329247',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa7abc19ee0_98329247')) {function content_5bafa7abc19ee0_98329247($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='prop') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php } else { ?>
   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php }?>
<?php }} ?>

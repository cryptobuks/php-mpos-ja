<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 18:28:21
         compiled from "/var/www/mpos/templates/bootstrap/admin/wallet/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2195814565bb03efd03c961-58848168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353ad4777851760c2a806c05f666266ecb92e702' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/wallet/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2195814565bb03efd03c961-58848168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb03efd0f46f2_00153074',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb03efd0f46f2_00153074')) {function content_5bb03efd0f46f2_00153074($_smarty_tpl) {?><div class="row">
  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/peers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/accounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>

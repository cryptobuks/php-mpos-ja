<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 18:28:21
         compiled from "/var/www/mpos/templates/bootstrap/admin/wallet/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12837598475bb03efd10e4c7-60803375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e459e3501ed9496382defb71bc9256a50ec00e' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/wallet/balance.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12837598475bb03efd10e4c7-60803375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb03efd161024_70773685',
  'variables' => 
  array (
    'BALANCE' => 0,
    'LOCKED' => 0,
    'UNCONFIRMED' => 0,
    'NEWMINT' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb03efd161024_70773685')) {function content_5bb03efd161024_70773685($_smarty_tpl) {?>  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> Balance Summary
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <td>Wallet Balance</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['BALANCE']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Locked for users</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['LOCKED']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Unconfirmed</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['UNCONFIRMED']->value,"8");?>
</td>
          </tr>
<?php if ($_smarty_tpl->tpl_vars['NEWMINT']->value>=0) {?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php }?>
          </tr>
          <tr>
            <td>PoS New Mint</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['NEWMINT']->value,"8");?>
</td>
          </tr>
<?php } else { ?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value),"8");?>
</td>
            <?php }?>
          </tr>
<?php }?>
        </table>
      </div>
    </div>
  </div>
<?php }} ?>

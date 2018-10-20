<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 18:28:21
         compiled from "/var/www/mpos/templates/bootstrap/admin/wallet/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17456969955bb03efd168870-99690318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87f36390a3dc2d178956634f969c592db58a567' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/wallet/status.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17456969955bb03efd168870-99690318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb03efd17ec17_32844250',
  'variables' => 
  array (
    'COININFO' => 0,
    'ADDRESSCOUNT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb03efd17ec17_32844250')) {function content_5bb03efd17ec17_32844250($_smarty_tpl) {?>	<div class="col-lg-8">
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="fa fa-info fa-fw"></i> Wallet Status
			</div>
			<div class="panel-body no-padding">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Version</th>
								<th>Protocol Version</th>
								<th>Wallet Version</th>
								<th>Peers</th>
								<th>Status</th>
								<th>Blocks</th>
								<th>Accounts</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['version'])===null||$tmp==='' ? '' : $tmp);?>
</td>
							  <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['protocolversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
							  <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['walletversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
							  <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['connections'])===null||$tmp==='' ? '' : $tmp);?>
</td>
							  <td><font color="<?php if ($_smarty_tpl->tpl_vars['COININFO']->value['errors']) {?>red<?php } else { ?>green<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['errors'])===null||$tmp==='' ? "OK" : $tmp);?>
</font></td>
							  <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['blocks'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['ADDRESSCOUNT']->value;?>
</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-10-14 21:11:54
         compiled from "/var/www/mpos/templates/bootstrap/statistics/round/pplns_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4938990285bc3328aa221b1-54867618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a40b4f35c6969a59f8a3fcf342d20d2655a623c' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/round/pplns_transactions.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4938990285bc3328aa221b1-54867618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROUNDTRANSACTIONS' => 0,
    'GLOBAL' => 0,
    'ROUNDSHARES' => 0,
    'BLOCKDETAILS' => 0,
    'PPLNSROUNDSHARES' => 0,
    'PPLNSSHARES' => 0,
    'percentage1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bc3328aa47a03_71956183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3328aa47a03_71956183')) {function content_5bc3328aa47a03_71956183($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/mpos/public/../include/smarty/libs/plugins/function.math.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-credit-card fa-fw"></i> Round Transactions
      </div>
      <div class="panel-body ">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value) {?>datatable<?php }?>">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Round Shares</th>
                <th>Round %</th>
                <th>PPLNS Shares</th>
                <th>PPLNS Round %</th>
                <th>Variance</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
<?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['name'] = 'txs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total']);
?>
              <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username']) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php } else { ?><?php }?>>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? 0 : $tmp);?>
</td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format(((100/$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'])*$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? 0 : $tmp);?>
</td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['PPLNSSHARES']->value)*$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid']),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0<?php }?></td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid'])===null||$tmp==='' ? "0" : $tmp)>0&&(($tmp = @$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo smarty_function_math(array('assign'=>"percentage1",'equation'=>(100/(((100/$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'])*$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid'])/((100/$_smarty_tpl->tpl_vars['PPLNSSHARES']->value)*$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid'])))),$_smarty_tpl);?>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_valid'])===null||$tmp==='' ? "0" : $tmp)==0) {?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(100, null, 0);?><?php }?>
                  <font color="<?php if (($_smarty_tpl->tpl_vars['percentage1']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage1']->value,"2");?>
</font></b></td>
                <td><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['amount'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
                <?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
              </tr>
<?php endfor; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>

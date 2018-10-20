<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 19:41:25
         compiled from "/var/www/mpos/templates/bootstrap/account/transactions/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20606658355baf7224163ae4-59566046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45167787daa8238c0a0be937df13109ff982c48f' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/account/transactions/default.tpl',
      1 => 1538296882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20606658355baf7224163ae4-59566046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf7224204759_51991954',
  'variables' => 
  array (
    'CTOKEN' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
    'TRANSACTIONTYPES' => 0,
    'TXSTATUS' => 0,
    'TRANSACTIONS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf7224204759_51991954')) {function content_5baf7224204759_51991954($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/mpos/public/../include/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/mpos/public/../include/smarty/libs/plugins/modifier.truncate.php';
?><div class="row">
  <form class="col-lg-3" role="form">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-search fa-fw"></i> Transaction Filter/トランザクション検索
      </div>
      <div class="panel-body">
            <ul class="pager">
              <li class="previous <?php if ((($tmp = @$_GET['start'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>disabled<?php }?>">
                <a href="<?php if ((($tmp = @$_GET['start'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>#<?php } else { ?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?><?php }?>">&larr; Prev</a>
              </li>
              <li class="next">
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>">Next &rarr;</a>
              </li>
            </ul>
            <div class="form-group">
              <label>Type/タイプ</label>
              <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"filter[type]",'options'=>$_smarty_tpl->tpl_vars['TRANSACTIONTYPES']->value,'selected'=>(($tmp = @$_REQUEST['filter']['type'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

            </div>
            <div class="form-group">
              <label>Status/状態</label>
              <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"filter[status]",'options'=>$_smarty_tpl->tpl_vars['TXSTATUS']->value,'selected'=>(($tmp = @$_REQUEST['filter']['status'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

            </div>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Filter" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>

  <div class="col-lg-9">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> Transaction History/トランザクション履歴
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="h6">ID</th>
                <th class="h6">Date/日時</th>
                <th class="h6">TX Type/取引タイプ</th>
                <th class="h6">Status/状態</th>
                <th class="h6">Payment Address/払出アドレス</th>
                <th class="h6">TX #/取引 #</th>
                <th class="h6">Block #/ブロック #</th>
                <th class="h6">Amount</th>
              </tr>
            </thead>
            <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['name'] = 'transaction';
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TRANSACTIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total']);
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['timestamp'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Fee_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Donation_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_MP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_AP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='TXFee'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?>
                  <span class="label label-success">Confirmed</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']==-1) {?>
                  <span class="label label-danger">Orphaned</span>
                  <?php } else { ?>
                  <span class="label label-warning">Unconfirmed</span>
                  <?php }?>
                </td>
                <td><a href="#" onClick="alert('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
')"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['coin_address'],20,"...",true,true);?>
</a></td>
                <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['disabled']) {?>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['url'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'],20,"...",true,true);?>
</a></td>
                <?php } else { ?>
                <td><a href="#" onClick="alert('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
')" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'],20,"...",true,true);?>
</a></td>
                <?php }?>
                <td><?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height']==0) {?>n/a<?php } else { ?><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
"><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
</a><?php }?></td>
                <td><font color="<?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Bonus') {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['amount'],"8");?>
</td>
              </tr>
<?php endfor; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel-footer">
        <h6><b>Debit_AP</b> = Auto Threshold Payment/自動払出, <b>Debit_MP</b> = Manual Payment/手動払出, <b>Donation</b> = Donation/寄付, <b>Fee</b> = Pool Fees (if applicable)/プール手数料(該当する場合)</h6>
      </div>
    </div>
  </div>
</div>
<?php }} ?>

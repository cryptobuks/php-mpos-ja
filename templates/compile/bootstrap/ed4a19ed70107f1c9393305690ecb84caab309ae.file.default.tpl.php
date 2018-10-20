<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:02:09
         compiled from "/var/www/mpos/templates/bootstrap/admin/userdetails/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2525367095bafa7d0d86903-24276403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4a19ed70107f1c9393305690ecb84caab309ae' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/userdetails/default.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2525367095bafa7d0d86903-24276403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa7d0e15239_49417079',
  'variables' => 
  array (
    'DISABLE_TRANSACTIONSUMMARY' => 0,
    'USERNAME' => 0,
    'SUMMARY' => 0,
    'type' => 0,
    'total' => 0,
    'GLOBAL' => 0,
    'BYTIME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa7d0e15239_49417079')) {function content_5bafa7d0e15239_49417079($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_TRANSACTIONSUMMARY']->value)===null||$tmp==='' ? "0" : $tmp)!=1) {?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 Account Information
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">
                <i class="fa fa-credit-card fa-fw"></i> All Time Transaction Totals
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
                      <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
                      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,"8");?>
</td>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">
                <i class="fa fa-clock-o fa-fw"></i> Transactions over time
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Credit</th>
                      <th>Bonus</th>
                      <th>Debit AP</th>
                      <th>Debit MP</th>
                      <th>Donation</th>
                      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']>0) {?>
                      <th>Fee</th>
                      <?php }?>
                      <th>TXFee</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Last Hour</th>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourCredit'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourBonus'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDebitAP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDebitMP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDonation'],"8");?>
</td>
                      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourFee'],"8");?>
</td>
                      <?php }?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourTXFee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td>Last Day</th>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourCredit'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourBonus'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDebitAP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDebitMP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDonation'],"8");?>
</td>
                      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourFee'],"8");?>
</td>
                      <?php }?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourTXFee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td>Last Week</th>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekCredit'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekBonus'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDebitAP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDebitMP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDonation'],"8");?>
</td>
                      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekFee'],"8");?>
</td>
                      <?php }?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekTXFee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td>Last Month</th>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthCredit'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthBonus'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDebitAP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDebitMP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDonation'],"8");?>
</td>
                      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthFee'],"8");?>
</td>
                      <?php }?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthTXFee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td>Last Year</th>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearCredit'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearBonus'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDebitAP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDebitMP'],"8");?>
</td>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDonation'],"8");?>
</td>
                      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearFee'],"8");?>
</td>
                      <?php }?>
                      <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearTXFee'],"8");?>
</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php }?>


<?php }} ?>

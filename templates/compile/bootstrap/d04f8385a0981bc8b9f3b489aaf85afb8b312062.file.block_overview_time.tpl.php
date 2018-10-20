<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 12:13:09
         compiled from "/var/www/mpos/templates/bootstrap/statistics/blocks/block_overview_time.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17603073905bafa7a925dc69-10231128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04f8385a0981bc8b9f3b489aaf85afb8b312062' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/blocks/block_overview_time.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17603073905bafa7a925dc69-10231128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa7a93a15a5_36820153',
  'variables' => 
  array (
    'FIRSTBLOCKFOUND' => 0,
    'COINGENTIME' => 0,
    'LASTBLOCKSBYTIME' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa7a93a15a5_36820153')) {function content_5bafa7a93a15a5_36820153($_smarty_tpl) {?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> Block Overview
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
                <th class="text-right">Gen. Est.</th>
                <th class="text-right">Found</th>
                <th class="text-right">Valid</th>
                <th class="text-right">Orphan</th>
                <th class="text-right">Orphan %</th>
                <th class="text-right">Avg. Diff</th>
                <th class="text-right">Shares Est.</th>
                <th class="text-right">Shares</th>
                <th class="text-right">Percentage</th>
                <th class="text-right">Amount</th>
                <th class="text-right">Rate Est.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>All Time</th>
                <td class="text-right"><?php echo number_format(($_smarty_tpl->tpl_vars['FIRSTBLOCKFOUND']->value/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['Total']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['Total']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['TotalAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['Total'])===null||$tmp==='' ? "0.00" : $tmp)/($_smarty_tpl->tpl_vars['FIRSTBLOCKFOUND']->value/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
              <tr>
                <th>Last Hour</th>
                <td class="text-right"><?php echo number_format((3600/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourTotal']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourTotal']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['1HourTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(3600/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
              <tr>
                <th style="padding-left:3px;padding-right:1px;">Last 24 Hours</th>
                <td class="text-right"><?php echo number_format((86400/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourTotal']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourTotal']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['24HourTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(86400/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
              <tr>
                <th>Last 7 Days</th>
                <td class="text-right"><?php echo number_format((604800/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysTotal']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysTotal']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['7DaysTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(604800/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
              <tr>
                <th>Last 4 Weeks</th>
                <td class="text-right"><?php echo number_format((2419200/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksTotal']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksTotal']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['4WeeksTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(2419200/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
              <tr>
                <th>The Past 12 Months</th>
                <td class="text-right"><?php echo number_format((29030400/$_smarty_tpl->tpl_vars['COINGENTIME']->value));?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthTotal']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthOrphan']);?>
</td>
                <td class="text-right"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthOrphan'])===null||$tmp==='' ? "0" : $tmp)>0) {?><?php echo number_format((100/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthTotal']*$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthOrphan']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid']>0) {?>
                  <?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthDifficulty']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthValid']),"4");?>

                <?php } else { ?>
                  0
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
                <td class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']>0) {?>
                  <font color="<?php if ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']*100)<=100)) {?>green<?php } elseif ((($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']*100)<=115)) {?>orange<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthShares']/$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthEstimatedShares']*100),"2");?>
%</font></b>
                <?php } else { ?>
                  0.00%
                <?php }?>
                </td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthAmount'],"2");?>
</td>
                <td class="text-right"><?php echo number_format(((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCKSBYTIME']->value['12MonthTotal'])===null||$tmp==='' ? "0.00" : $tmp)/(29030400/$_smarty_tpl->tpl_vars['COINGENTIME']->value)*100),"2");?>
%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel-footer">
        <h6><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>Round earnings are not credited until <font class="confirmations"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations'];?>
</font> confirms.<?php }?></h6>
      </div>
    </div>
  </div>
</div>
<?php }} ?>

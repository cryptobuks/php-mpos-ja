<?php /* Smarty version Smarty-3.1.16, created on 2018-10-14 21:11:54
         compiled from "/var/www/mpos/templates/bootstrap/statistics/round/pplns_block_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12893162285bc3328a9bf279-53586677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26edd23002a19398f52fc5b7b3a9169f73c6de78' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/round/pplns_block_stats.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12893162285bc3328a9bf279-53586677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKDETAILS' => 0,
    'PPLNSSHARES' => 0,
    'GLOBAL' => 0,
    'percentage' => 0,
    'BLOCKAVERAGE' => 0,
    'percentage2' => 0,
    'BLOCKAVGCOUNT' => 0,
    'percentage1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bc3328aa1eb07_34076757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3328aa1eb07_34076757')) {function content_5bc3328aa1eb07_34076757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/mpos/public/../include/smarty/libs/plugins/function.math.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-refresh fa-fw"></i> Round Statistics
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th colspan="2">Block Statistics</th>
                <th colspan="2">PPLNS Round Statistics</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <td>ID</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['id'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td>PPLNS Shares</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['PPLNSSHARES']->value,$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
              </tr>
              <tr class="even">
                <td>Height</td>
	<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['blockhash'];?>
" target="_new"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
	<?php } else { ?>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
	<?php }?>
                <td>Estimated Shares</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['estshares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
              </tr>
              <tr class="odd">
                <td>Amount</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['amount'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td>Target Variance</td>
<?php $_smarty_tpl->tpl_vars['percentage'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?>
                <td><?php if ($_smarty_tpl->tpl_vars['PPLNSSHARES']->value>0) {?><?php echo smarty_function_math(array('assign'=>"percentage",'equation'=>(($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['estshares']/$_smarty_tpl->tpl_vars['PPLNSSHARES']->value)*100)),$_smarty_tpl);?>
<?php }?><font color="<?php if (($_smarty_tpl->tpl_vars['percentage']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage']->value,"2");?>
 %</font></td>
              </tr>
              <tr class="even">
                <td>Confirmations</td>
                <td><?php if ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?>
                  <font color="green">Confirmed</font>
                <?php } elseif ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==-1) {?>
                  <font color="red">Orphan</font>
                <?php } elseif ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==0) {?>0
                <?php } else { ?><?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']))===null||$tmp==='' ? "0" : $tmp);?>
 left<?php }?></td>
                <td>Block Average</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKAVERAGE']->value,"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
              </tr>
              <tr class="odd">
                <td>Difficulty</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['difficulty'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td>Average Efficiency</td>
                <td><?php if ($_smarty_tpl->tpl_vars['BLOCKAVERAGE']->value>0&&$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['estshares']>0) {?><?php echo smarty_function_math(array('assign'=>"percentage2",'equation'=>(($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['estshares']/$_smarty_tpl->tpl_vars['BLOCKAVERAGE']->value)*100)),$_smarty_tpl);?>
<?php }?><font color="<?php if (($_smarty_tpl->tpl_vars['percentage2']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage2']->value,"2");?>
 %</font></td>
              </tr>
              <tr class="even">
                <td>Time</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['time'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td>Target Rounds</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKAVGCOUNT']->value,"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
              </tr>
              <tr class="odd">
                <td>Shares</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td>Seconds This Round</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['round_time'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
              </tr>
              <tr class="even">
                <td>Finder</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['finder'])===null||$tmp==='' ? "unknown" : $tmp);?>
</td>
                <td>Round Variance</td>
                <td><?php if ($_smarty_tpl->tpl_vars['PPLNSSHARES']->value>0) {?><?php echo smarty_function_math(array('assign'=>"percentage1",'equation'=>(($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares']/$_smarty_tpl->tpl_vars['PPLNSSHARES']->value)*100)),$_smarty_tpl);?>
<?php }?><font color="<?php if (($_smarty_tpl->tpl_vars['percentage1']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage1']->value,"2");?>
 %</font></td>
              </tr>
            </tbody>
          </table>
            <table class="table borderless">
            <tr>
            <td>
              <ul class="pager">
                <li class="previous">
                  <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&prev=1"> &larr; </a>
                </li>
              </ul>
            </td>
            <td>
              <ul class="pager">
                <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="POST" id='search' role="form">
                  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
                  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon">Search Block Height</span>
                    <input type="text" class="form-control" name="search" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['height'])===null||$tmp==='' ? "%" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" value="Search"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form>
              </ul>
            </td>
            <td>
              <ul class="pager">
                <li class="next">
                  <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&next=1"> &rarr; </a>
                </li>
              </ul>
            </td>
            </tr>
            </table>

        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>

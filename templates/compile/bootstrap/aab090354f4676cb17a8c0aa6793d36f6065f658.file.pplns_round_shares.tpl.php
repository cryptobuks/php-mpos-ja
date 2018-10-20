<?php /* Smarty version Smarty-3.1.16, created on 2018-10-14 21:11:54
         compiled from "/var/www/mpos/templates/bootstrap/statistics/round/pplns_round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20589230355bc3328aa509f5-14245170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab090354f4676cb17a8c0aa6793d36f6065f658' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/round/pplns_round_shares.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20589230355bc3328aa509f5-14245170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PPLNSROUNDSHARES' => 0,
    'GLOBAL' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bc3328aa655a2_07703544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3328aa655a2_07703544')) {function content_5bc3328aa655a2_07703544($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-refresh fa-fw"></i> PPLNS Round Shares
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value) {?>datatable<?php }?>">
            <thead>
              <tr>
                <th>Rank</th>
                <th >User Name</th>
                <th >Valid</th>
                <th >Invalid</th>
                <th>Invalid %</th>
              </tr>
            </thead>
            <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['name'] = 'contrib';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total']);
?>
              <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['username']) {?> style="background-color:#99EB99;"<?php } else { ?><?php }?>>
                <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? 0 : $tmp);?>
</td>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_invalid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']))===null||$tmp==='' ? 0 : $tmp);?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_invalid']>0&&$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_valid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_invalid']/$_smarty_tpl->tpl_vars['PPLNSROUNDSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['pplns_valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
              </tr>
<?php endfor; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>

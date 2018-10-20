<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 06:39:00
         compiled from "/var/www/mpos/templates/bootstrap/statistics/pool/contributors_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19961401735baf644dbae622-72936394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1ec4bca229cc668a2ceedbeb49bb88c17c8630' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/pool/contributors_shares.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19961401735baf644dbae622-72936394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf644dc10dd4_08876464',
  'variables' => 
  array (
    'CONTRIBSHARES' => 0,
    'GLOBAL' => 0,
    'rank' => 0,
    'listed' => 0,
    'CONTRIBHASHES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf644dc10dd4_08876464')) {function content_5baf644dc10dd4_08876464($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-tachometer fa-fw"></i> Contributor Shares
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Rank</th>
              <th>Donor</th>
              <th>User Name</th>
              <th class="text-right">Shares</th>
            </tr>
          </thead>
          <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['name'] = 'shares';
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total']);
?>
            <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><tr class="success"><?php } else { ?><tr><?php }?>
              <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="fa fa-trophy fa-fw"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="fa fa-star-o fa-fw"></i><?php } else { ?><i class="fa fa-ban fa-fw"></i><?php }?></td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['shares'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
            </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
            <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><tr class="success"><?php } else { ?><tr><?php }?>
              <td>n/a</td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="fa fa-trophy fa-fw"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="fa fa-star-o fa-fw"></i><?php } else { ?><i class="fa fa-ban fa-fw"></i><?php }?></td>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</td>
            </tr>
<?php }?>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
          <h6>
          <i class="fa fa-ban fa-fw"></i>no Donation
          <i class="fa fa-star-o fa-fw"></i> 0&#37;&#45;2&#37; Donation 
          <i class="fa fa-trophy fa-fw"></i> 2&#37; or more Donation
          </h6>
      </div>
    </div>
  </div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 08:27:18
         compiled from "/var/www/mpos/templates/bootstrap/admin/registrations/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13801433715bb15bd700b193-42497546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '996b1646c6db436e381d3161dc667a9875728c68' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/registrations/default.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13801433715bb15bd700b193-42497546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LASTREGISTEREDUSERS' => 0,
    'GLOBAL' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb15bd702c651_12562176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb15bd702c651_12562176')) {function content_5bb15bd702c651_12562176($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/mpos/public/../include/smarty/libs/plugins/modifier.date_format.php';
?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-user fa-fw"></i> Last Registered Users
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>eMail</th>
                <th>Reg. Date</th>
                <th>Invite</th>
                <th>Invited From</th>
              </tr>
            </thead>
            <tbody>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['mposuser'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['signup_timestamp'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
                <td class="text-center"><?php if (!$_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['inviter']) {?><i class="fa fa-times fa-fw"><?php } else { ?><i class="fa fa-check fa-fw"><?php }?></td>
                <td><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user&do=query&filter[account]=<?php echo $_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['inviter'];?>
"><?php echo $_smarty_tpl->tpl_vars['LASTREGISTEREDUSERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['inviter'];?>
</a></td>
              </tr>
              <?php endfor; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel-footer">
        <ul class="pager">
          <li class="previous <?php if ((($tmp = @$_GET['registeredstart'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>disabled<?php }?>">
            <a href="<?php if ((($tmp = @$_GET['registeredstart'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>#<?php } else { ?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&registeredstart=<?php echo (($tmp = @htmlspecialchars($_REQUEST['registeredstart'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?><?php }?>">&larr; Prev</a>
          </li>
          <li class="next">
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&registeredstart=<?php echo (($tmp = @htmlspecialchars($_REQUEST['registeredstart'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>#registrations">Next &rarr;</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> 

<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 22:00:05
         compiled from "/var/www/mpos/templates/bootstrap/admin/invitations/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19559180985baf5197c1f372-21699696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649e9408687c4726f9db6bfd9f636f89a93a926c' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/invitations/default.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19559180985baf5197c1f372-21699696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf5197c65668_60852414',
  'variables' => 
  array (
    'TOPINVITERS' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf5197c65668_60852414')) {function content_5baf5197c65668_60852414($_smarty_tpl) {?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-envelope fa-fw"></i> Top Inviters
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Username</th>
              <th>eMail</th>
              <th>Amount</th>
              <th>Outstanding</th>
              <th>Activated</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['name'] = 'inviter';
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TOPINVITERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['inviter']['total']);
?>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['invitationcount'];?>
</td>
                <td><?php echo number_format(($_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['invitationcount']-$_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['activated']),"0");?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['TOPINVITERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['inviter']['index']]['activated'];?>
</td>
              </tr>
            <?php endfor; endif; ?>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <ul class="pager">
          <li class="previous <?php if ((($tmp = @$_GET['invitersstart'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>disabled<?php }?>">
            <a href="<?php if ((($tmp = @$_GET['invitersstart'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>#<?php } else { ?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&invitersstart=<?php echo (($tmp = @htmlspecialchars($_REQUEST['invitersstart'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?><?php }?>">&larr; Prev</a>
          </li>
          <li class="next">
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&invitersstart=<?php echo (($tmp = @htmlspecialchars($_REQUEST['invitersstart'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>">Next &rarr;</a>
          </li>
        </ul> 
      </div>
    </div>
  </div>
</div>

<?php }} ?>

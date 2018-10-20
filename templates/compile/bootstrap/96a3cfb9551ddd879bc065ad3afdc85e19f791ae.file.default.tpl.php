<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:26:32
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/account_data/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10158147535baf5080296694-92013959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96a3cfb9551ddd879bc065ad3afdc85e19f791ae' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/account_data/default.tpl',
      1 => 1538299069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10158147535baf5080296694-92013959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf50802c51a4_60660298',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf50802c51a4_60660298')) {function content_5baf50802c51a4_60660298($_smarty_tpl) {?>  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-user-md fa-fw"></i> Account Information/アカウント情報</h4>
      </div>
      <div class="panel-body no-padding">
        <table class="table table-bordered table-hover table-striped">
          <tr>
            <td colspan="2">
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['no_fees']) {?>
            You are mining without any pool fees applied and
    <?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']>0) {?>
            You are mining at <font color="orange"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']<0.0001) {?><?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true),"8");?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>%</font> pool fee and
    <?php } else { ?>
            This pool does not apply fees and
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent']>0) {?>
            you donate <font color="green"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'], ENT_QUOTES, 'UTF-8', true);?>
%</font>./このプールは料金を払わず、寄付を<font color="green"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'], ENT_QUOTES, 'UTF-8', true);?>
%</font>しています。
    <?php } else { ?>
            you are not <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">donating</a>./このプールは料金を払わず、寄付もしていません。
    <?php }?>
            </td>
          </tr>
        </table>
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr><th colspan="2"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance/アカウント残高</th></tr>
          </thead>
          <tbody>
            <tr>
              <th>Confirmed/検証済み</th>
              <th>
                <span class="label label-success pull-right bigfont" id="b-confirmed"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'],"6");?>
</span>
              </th>
            </tr>
            <tr>
              <th>Unconfirmed/未検証</th>
              <th>
                <span class="label label-warning pull-right bigfont" id="b-unconfirmed"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'],"6");?>
</span>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:40:59
         compiled from "/var/www/mpos/templates/bootstrap/admin/dashboard/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20990180795baf518e112672-04124441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd446d570d92d1ba642bac8def9458eb35c9c3eb1' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/dashboard/user.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20990180795baf518e112672-04124441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf518e123174_92125968',
  'variables' => 
  array (
    'USER_INFO' => 0,
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf518e123174_92125968')) {function content_5baf518e123174_92125968($_smarty_tpl) {?><div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-user fa-fw"></i> Users
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Active</th>
              <th>Locked</th>
              <th>Admins</th>
              <th>No Fees</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
        
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in fa-fw"></i> Logins
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>24 hours</th>
              <th>7 days</th>
              <th>1 month</th>
              <th>6 months</th>
              <th>1 year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><?php }} ?>

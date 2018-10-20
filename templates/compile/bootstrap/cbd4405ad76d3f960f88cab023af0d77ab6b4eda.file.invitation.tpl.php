<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:40:59
         compiled from "/var/www/mpos/templates/bootstrap/admin/dashboard/invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11529116815baf518e135972-64501641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd4405ad76d3f960f88cab023af0d77ab6b4eda' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/dashboard/invitation.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11529116815baf518e135972-64501641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf518e13e269_49757971',
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf518e13e269_49757971')) {function content_5baf518e13e269_49757971($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-users fa-fw"></i> <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations">Invitations</a>
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Activated</th>
              <th>Outstanding</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>

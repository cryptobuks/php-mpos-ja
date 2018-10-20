<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:40:59
         compiled from "/var/www/mpos/templates/bootstrap/admin/dashboard/registrations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7852540195baf518e1268d3-05567249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c8af0721b1ff3c6d7b8f85a0f8124c6e4a8ac0' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/dashboard/registrations.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7852540195baf518e1268d3-05567249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf518e132b89_33686555',
  'variables' => 
  array (
    'USER_REGISTRATIONS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf518e132b89_33686555')) {function content_5baf518e132b89_33686555($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-pencil fa-fw"></i> <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=registrations">Registrations</a>
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
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['24hours'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['7days'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['6month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1year'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>

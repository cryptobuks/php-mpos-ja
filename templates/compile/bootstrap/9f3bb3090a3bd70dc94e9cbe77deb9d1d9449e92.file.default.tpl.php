<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:26:32
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/round_statistics/prop/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10944927255baf50801d5d05-50774302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3bb3090a3bd70dc94e9cbe77deb9d1d9449e92' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/round_statistics/prop/default.tpl',
      1 => 1538299141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10944927255baf50801d5d05-50774302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf50801e2a25_04645524',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf50801e2a25_04645524')) {function content_5baf50801e2a25_04645524($_smarty_tpl) {?>  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-spinner fa-fw"></i> Round Information/ラウンド情報
        </h4>
      </div>
      <?php $_smarty_tpl->tpl_vars['PAYOUT_SYSTEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
      <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_statistics/".((string)$_smarty_tpl->tpl_vars['PAYOUT_SYSTEM']->value)."/round.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-cloud fa-fw"></i> Share Information/シェア情報
        </h4>
      </div>
      <?php $_smarty_tpl->tpl_vars['PAYOUT_SYSTEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
      <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_statistics/".((string)$_smarty_tpl->tpl_vars['PAYOUT_SYSTEM']->value)."/shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-10-14 21:04:04
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/round_statistics/pplns/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7209285955bc32e65e2f181-92332996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406c888bed089a4bca9773ba09cc4de634f728ba' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/round_statistics/pplns/default.tpl',
      1 => 1539518617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7209285955bc32e65e2f181-92332996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bc32e65ea8f14_42032112',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc32e65ea8f14_42032112')) {function content_5bc32e65ea8f14_42032112($_smarty_tpl) {?>  <div class="col-lg-12">
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

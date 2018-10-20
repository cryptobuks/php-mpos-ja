<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 22:46:06
         compiled from "/var/www/mpos/templates/bootstrap/account/edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8098184895baf50869ff6a7-79848846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e550daf1083dae73c80efbc4fb48c4c8b8f930a' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/account/edit/default.tpl',
      1 => 1538295799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8098184895baf50869ff6a7-79848846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf5086a0bf56_39181454',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf5086a0bf56_39181454')) {function content_5baf5086a0bf56_39181454($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/cashout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/resetpin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>

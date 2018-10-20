<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:40:59
         compiled from "/var/www/mpos/templates/bootstrap/admin/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7101015975baf518e0ada04-48595490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a282a838522ee69521816f46ab9535a5af3363f' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/dashboard/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7101015975baf518e0ada04-48595490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf518e0c15a5_57594826',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf518e0c15a5_57594826')) {function content_5baf518e0c15a5_57594826($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/mpos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/registrations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/invitation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
<?php }} ?>

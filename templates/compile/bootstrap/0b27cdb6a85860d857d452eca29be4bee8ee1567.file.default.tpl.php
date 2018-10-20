<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 06:39:00
         compiled from "/var/www/mpos/templates/bootstrap/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10360676695baf644db9c1c7-88480501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b27cdb6a85860d857d452eca29be4bee8ee1567' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/pool/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10360676695baf644db9c1c7-88480501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf644dbaaa55_83828727',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf644dbaaa55_83828727')) {function content_5baf644dbaaa55_83828727($_smarty_tpl) {?><!-- Wrapper -->
<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 12:13:09
         compiled from "/var/www/mpos/templates/bootstrap/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6759329945bafa7a91ebc17-82690583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef2469c3ab7c15a338ae6322be075debeda5d70' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/blocks/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6759329945bafa7a91ebc17-82690583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa7a9201ef1_00350970',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa7a9201ef1_00350970')) {function content_5bafa7a9201ef1_00350970($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

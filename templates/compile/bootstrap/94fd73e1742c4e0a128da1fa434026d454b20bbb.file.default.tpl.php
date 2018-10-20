<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 12:13:12
         compiled from "/var/www/mpos/templates/bootstrap/statistics/blockfinder/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5869156395bafa7aea8da16-23747531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94fd73e1742c4e0a128da1fa434026d454b20bbb' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/blockfinder/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5869156395bafa7aea8da16-23747531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa7aeaa0682_87565450',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa7aeaa0682_87565450')) {function content_5bafa7aeaa0682_87565450($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('SHORT'=>true), 0);?>

<?php }?>
</div><?php }} ?>

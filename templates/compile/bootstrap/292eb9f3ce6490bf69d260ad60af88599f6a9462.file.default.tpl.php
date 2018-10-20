<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 06:38:30
         compiled from "/var/www/mpos/templates/bootstrap/home//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17347566655baf4f5fe39864-53135460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '292eb9f3ce6490bf69d260ad60af88599f6a9462' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/home//default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17347566655baf4f5fe39864-53135460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf4f5fe44df0_96486152',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf4f5fe44df0_96486152')) {function content_5baf4f5fe44df0_96486152($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['newsstyle'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>

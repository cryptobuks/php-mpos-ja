<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 19:26:49
         compiled from "/var/www/mpos/templates/mail/subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16259030875baf508fad4dd7-27822481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21c276e824cdbd9fc97816f3feaf0141d819d0e' => 
    array (
      0 => '/var/www/mpos/templates/mail/subject.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16259030875baf508fad4dd7-27822481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf508fae2745_61394596',
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'SUBJECT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf508fae2745_61394596')) {function content_5baf508fae2745_61394596($_smarty_tpl) {?>[ <?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 ] <?php echo $_smarty_tpl->tpl_vars['SUBJECT']->value;?>

<?php }} ?>

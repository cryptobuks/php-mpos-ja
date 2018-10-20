<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:47:02
         compiled from "/var/www/mpos/templates/mail/notifications/new_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14964645855bb136461e8819-97584970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76183c7ba5d1d313d9b59e4add047b5684ab546e' => 
    array (
      0 => '/var/www/mpos/templates/mail/notifications/new_block.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14964645855bb136461e8819-97584970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb136462406c5_03362245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb136462406c5_03362245')) {function content_5bb136462406c5_03362245($_smarty_tpl) {?><html>
<p><b>ブロック<?php echo $_smarty_tpl->tpl_vars['DATA']->value['height'];?>
</b>が、<b><?php echo $_smarty_tpl->tpl_vars['DATA']->value['finder'];?>
</b>によって発見され、<b><?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['DATA']->value['currency'];?>
</b>の報酬が得られました! 現在のマイニング難易度は <?php echo $_smarty_tpl->tpl_vars['DATA']->value['difficulty'];?>
です。
<br />
<p>Block Number <?php echo $_smarty_tpl->tpl_vars['DATA']->value['height'];?>
 has been discovered by <?php echo $_smarty_tpl->tpl_vars['DATA']->value['finder'];?>
 with a total value of <?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['DATA']->value['currency'];?>
! The current difficulty is <?php echo $_smarty_tpl->tpl_vars['DATA']->value['difficulty'];?>
.</p>
<body>
<br/>
<br/>
</body>
</html>
<?php }} ?>

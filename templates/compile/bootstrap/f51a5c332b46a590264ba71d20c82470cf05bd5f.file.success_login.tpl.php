<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:48:11
         compiled from "/var/www/mpos/templates/mail/notifications/success_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11965139735bb18aeb894fd7-17308606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f51a5c332b46a590264ba71d20c82470cf05bd5f' => 
    array (
      0 => '/var/www/mpos/templates/mail/notifications/success_login.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11965139735bb18aeb894fd7-17308606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb18aeb89eb90_51689426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb18aeb89eb90_51689426')) {function content_5bb18aeb89eb90_51689426($_smarty_tpl) {?><html>
<body>
<p>あなたのアカウントは正常にログインしました</p>
<p>ユーザー: <b><?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINUSER'];?>
</b></p>
<p>IPアドレス: <b><?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINIP'];?>
</b></p>
<p>時間: <b><?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINTIME'];?>
</b></p>
<p>このログインがあなたのしたものである場合、このメッセージは無視してください。あなたがしていない場合は、管理者に連絡してください。<p>
<br/>
<p>Your account has successfully logged in</p>
<p>User: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINUSER'];?>
</p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINIP'];?>
</p>
<p>Time: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINTIME'];?>
</p>
<p>If you initiated this login, you can ignore this message. If you did NOT, please notify an administrator.</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>

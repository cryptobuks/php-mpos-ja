<?php /* Smarty version Smarty-3.1.16, created on 2018-10-03 11:37:26
         compiled from "/var/www/mpos/templates/mail/contactform/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13879081295bb40f46e5ee52-59930290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1e37b4a5509eb5596188701f1d50af458c4c35' => 
    array (
      0 => '/var/www/mpos/templates/mail/contactform/body.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13879081295bb40f46e5ee52-59930290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb40f46ec32c1_92844552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb40f46ec32c1_92844552')) {function content_5bb40f46ec32c1_92844552($_smarty_tpl) {?><html>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 メッセージ</p>
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderName'];?>
さんはあなたにメッセージを送りました。</p>
<p>メールアドレス: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderEmail'];?>
</p>
<p>題: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderSubject'];?>
</p>
<p>メッセージ:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderMessage'];?>
</p>
<p></p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 Message,</p>
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderName'];?>
 Sent you a message</p>
<p>Senders Email: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderEmail'];?>
</p>
<p>Subject: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderSubject'];?>
</p>
<p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderMessage'];?>
</p>
<p></p>
</body>
</html>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 12:14:13
         compiled from "/var/www/mpos/templates/mail/register/confirm_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2925439315baf68554c6ad9-73415216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75090b769ab0ab754c55748b84cb550350c7d6b3' => 
    array (
      0 => '/var/www/mpos/templates/mail/register/confirm_email.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925439315baf68554c6ad9-73415216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf68554e4f63_68703657',
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf68554e4f63_68703657')) {function content_5baf68554e4f63_68703657($_smarty_tpl) {?><html>
<body>
<p>こんにちは、 <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
さん。</p><br />
<p>あなたは新しいアカウントを作成しました。登録を完了するには、このリンクに従ってください:</p>
<p>http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<br />
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have created a new account. In order to complete the registration process please follow this link:</p>
<p>http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p></p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>

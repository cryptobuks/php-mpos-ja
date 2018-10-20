<?php /* Smarty version Smarty-3.1.16, created on 2018-10-03 14:40:26
         compiled from "/var/www/mpos/templates/mail/notifications/locked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19300084025baf715289ae03-04992296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117e42a21d5d884cff92f31004acbff5295e6aa3' => 
    array (
      0 => '/var/www/mpos/templates/mail/notifications/locked.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19300084025baf715289ae03-04992296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf71528c9b68_24513220',
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf71528c9b68_24513220')) {function content_5baf71528c9b68_24513220($_smarty_tpl) {?><html>
<body>
<p>失敗したパスワードまたはPINの試行回数が多すぎるため、アカウントがロックされています。アカウントのロックを解除するには、下記のURLにアクセスしてください。</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<p>You account has been locked due to too many failed password or PIN attempts. Please follow the URL below to unlock your account.</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<br/>
</body>
</html>
<?php }} ?>

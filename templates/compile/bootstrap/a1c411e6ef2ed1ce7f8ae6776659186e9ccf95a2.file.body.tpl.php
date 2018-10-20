<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 19:26:49
         compiled from "/var/www/mpos/templates/mail/invitations/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6264760525bb088c9c766b2-83218935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c411e6ef2ed1ce7f8ae6776659186e9ccf95a2' => 
    array (
      0 => '/var/www/mpos/templates/mail/invitations/body.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6264760525bb088c9c766b2-83218935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb088c9c93b67_78266272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb088c9c93b67_78266272')) {function content_5bb088c9c93b67_78266272($_smarty_tpl) {?><html>
<body>
<p>こんにちは、マイナーさん。</p><br />
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
 さんによってこのプールに招待されました:
<p><a href="https<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<?php if ($_smarty_tpl->tpl_vars['DATA']->value['message']) {?><p>メッセージ:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['message'];?>
</p><?php }?>
<p></p>
<p>Hello valued miner,</p><br />
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
 invited you to participate on this pool:
<p><a href="https<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<?php if ($_smarty_tpl->tpl_vars['DATA']->value['message']) {?><p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['message'];?>
</p><?php }?>
<p></p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>

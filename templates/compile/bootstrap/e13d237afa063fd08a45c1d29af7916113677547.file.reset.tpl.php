<?php /* Smarty version Smarty-3.1.16, created on 2018-10-04 09:37:50
         compiled from "/var/www/mpos/templates/mail/password/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12281465805baf71e5a150c1-84290246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e13d237afa063fd08a45c1d29af7916113677547' => 
    array (
      0 => '/var/www/mpos/templates/mail/password/reset.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12281465805baf71e5a150c1-84290246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf71e5a7cd96_39432765',
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf71e5a7cd96_39432765')) {function content_5baf71e5a7cd96_39432765($_smarty_tpl) {?><html>
<body>
<p>こんにちは、<?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
さん。</p><br />
<p>あなたはオンラインフォームを通じてパスワードリセットをリクエストしました。リクエストを完了するには、このリンクに従ってください:</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<p>パスワードの変更を求められます。この新しいパスワードを使用してアカウントにログインすることができます。</p>
<br />
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a password reset through our online form. In order to complete the request please follow this link:</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<p>You will be asked to change your password. You can then use this new password to login to your account.</p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>

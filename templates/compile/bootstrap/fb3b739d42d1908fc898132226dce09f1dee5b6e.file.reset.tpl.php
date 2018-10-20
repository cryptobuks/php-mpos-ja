<?php /* Smarty version Smarty-3.1.16, created on 2018-10-12 01:24:33
         compiled from "/var/www/mpos/templates/mail/pin/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6063024945bafad252409f5-64602338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb3b739d42d1908fc898132226dce09f1dee5b6e' => 
    array (
      0 => '/var/www/mpos/templates/mail/pin/reset.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6063024945bafad252409f5-64602338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafad252571a7_43357660',
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafad252571a7_43357660')) {function content_5bafad252571a7_43357660($_smarty_tpl) {?><html>
<body>
<p>こんにちは、<?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
さん。</p><br />
<p>あなたはオンラインフォームを通じてPINリセットをリクエストしました。</p>
<p>ランダムに生成したPIN: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['pin'];?>
</p>
<br />
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a PIN reset through our online form.</p>
<p>Randomly Generated PIN: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['pin'];?>
</p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>

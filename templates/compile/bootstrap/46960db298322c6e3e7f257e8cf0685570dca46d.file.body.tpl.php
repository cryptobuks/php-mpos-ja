<?php /* Smarty version Smarty-3.1.16, created on 2018-10-09 10:10:26
         compiled from "/var/www/mpos/templates/mail/newsletter/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4845567525bbc00025cafb8-63190964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46960db298322c6e3e7f257e8cf0685570dca46d' => 
    array (
      0 => '/var/www/mpos/templates/mail/newsletter/body.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4845567525bbc00025cafb8-63190964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bbc00026ab540_38835243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc00026ab540_38835243')) {function content_5bbc00026ab540_38835243($_smarty_tpl) {?><html>
<body>
<p>Dear <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p>
<div>
<?php echo $_smarty_tpl->tpl_vars['DATA']->value['CONTENT'];?>

</div>
<p></p>
</body>
</html>
<?php }} ?>

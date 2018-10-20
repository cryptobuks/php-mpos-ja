<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 16:20:50
         compiled from "/var/www/mpos/templates/bootstrap/error/ratelimit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17131180605bb249622b0dd4-33789064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2431b59c97c1a69c2d5020185ceefd6c319fbc56' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/error/ratelimit/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17131180605bb249622b0dd4-33789064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb249622fc057_54429239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb249622fc057_54429239')) {function content_5bb249622fc057_54429239($_smarty_tpl) {?><article class="module width_full">
<header><h3>Request rate limit exceeded</h3></header>
<div class="module_content">
<p>You're sending too many requests too fast!</p>
</div>
</article><?php }} ?>

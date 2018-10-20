<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 11:30:53
         compiled from "/var/www/mpos/templates/bootstrap/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15905491775baf4f659d3ae6-69746460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa428cc348063d07d7350a0e0dc96b95bfe38a9' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/login//default.tpl',
      1 => 1538306990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15905491775baf4f659d3ae6-69746460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf4f659fa435_60372528',
  'variables' => 
  array (
    'CTOKEN' => 0,
    'recaptcha_enabled' => 0,
    'recaptcha_public_key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf4f659fa435_60372528')) {function content_5baf4f659fa435_60372528($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in fa-fw"></i> Login with existing account/既存のアカウントでログイン
      </div>
      <div class="panel-body">
        <div class="form-group">
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus required>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
          </div>
        </div>
      </div>
      <center>
        
          <?php if ($_smarty_tpl->tpl_vars['recaptcha_enabled']->value) {?>
            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_public_key']->value;?>
"></div>
            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
          <?php }?>
        
      </center>
      <div class="panel-footer">
        <input type="submit" class="btn btn-success btn-sm" value="Login" >
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?/パスワードを忘れましたか?</font></a>
      </div>
    </div>
  </form>
</div>
<?php }} ?>

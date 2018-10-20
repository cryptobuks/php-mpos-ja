<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 21:08:35
         compiled from "/var/www/mpos/templates/bootstrap/password/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16146073975baf71e5bfbc88-24142261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae3d32672f0828bc61b92d5cd10d02e0b2434d43' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/password/default.tpl',
      1 => 1538307147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16146073975baf71e5bfbc88-24142261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf71e5c01b67_69119827',
  'variables' => 
  array (
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf71e5c01b67_69119827')) {function content_5baf71e5c01b67_69119827($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" method="POST">
    <input type="hidden" name="page" value="password">
    <input type="hidden" name="action" value="reset">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Password reset/パスワードリセット</h3>
      </div>
      <div class="panel-body">
        <fieldset>
         <p>If you have an email set for your account, enter your username to get your password reset/あなたのアカウントに電子メールが設定されている場合は、パスワードをリセットするためにユーザー名を入力してください</p>
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="Username or E-mail" name="username" type="text" maxlength="100" autofocus required>
          </div>
        </fieldset>
      </div>
      <div class="panel-footer" style="margin-top: 10px;">
        <input type="submit" class="btn btn-success btn-sm" value="Reset" >
      </div>
    </div>
  </form>
</div>
<?php }} ?>

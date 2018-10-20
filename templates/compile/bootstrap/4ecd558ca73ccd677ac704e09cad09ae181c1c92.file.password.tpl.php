<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 19:21:11
         compiled from "/var/www/mpos/templates/bootstrap/account/edit/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8950088835baf5086acf017-65230712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ecd558ca73ccd677ac704e09cad09ae181c1c92' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/account/edit/password.tpl',
      1 => 1538295664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8950088835baf5086acf017-65230712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf5086b0d584_66125655',
  'variables' => 
  array (
    'CTOKEN' => 0,
    'GLOBAL' => 0,
    'CHANGEPASSUNLOCKED' => 0,
    'CHANGEPASSSENT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf5086b0d584_66125655')) {function content_5baf5086b0d584_66125655($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" role="form" method="post"><input type="hidden" name="act" value="updatePassword">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updatePassword">
  <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-key fa-fw"></i> Change Password/パスワード変更
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <p style="padding-left:30px; padding-redight:30px; font-size:10px;">
                Note: You will be redirected to login on successful completion of a password change/パスワード変更が正常に完了すると、ログインするようにリダイレクトされます。
              </p>
            </div>
            <div class="form-group">
              <label>Current Password/現在のパスワード</label>
              <input class="form-control" type="password" name="currentPassword" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>New Password/新しいパスワード</label>
              <p style="padding-right:10px;display:block;margin-top:0px;float:right;color:#999;" id="pw_strength"></p>
              <input class="form-control" type="password" name="newPassword" id="pw_field"<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>Repeat New Password/新しいパスワードをもう一度入力</label>
              <p style="padding-right:10px;display:block;margin-top:0px;float:right;" id="pw_match"></p>
              <input class="form-control" type="password" name="newPassword2" id="pw_field2"<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']&&!$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>4 Digit PIN/4桁のPINコード</label>
              <input class="form-control" type="password" name="authPin" size="4" maxlength="4" />
            </div>

          </div>
        </div>
      </div>
      <div class="panel-footer">
        
        <input type="hidden" name="cp_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['cp_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
        <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
        <input type="hidden" name="utype" value="change_pw">
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']) {?>
        <?php if ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1) {?>
        <input type="submit" value="Change Password" class="btn btn-success btn-sm">
        <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
        <input type="submit" value="Change Password" class="btn btn-danger btn-sm" disabled>
        <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
        <input type="submit" value="Unlock" class="btn btn-warning btn-sm" name="unlock">
        <?php }?>
        <?php } else { ?>
        <input type="submit" value="Change Password" class="btn btn-success btn-sm">
        <?php }?>
        
      </div>
    </div>
  </div>
</form>
<?php }} ?>

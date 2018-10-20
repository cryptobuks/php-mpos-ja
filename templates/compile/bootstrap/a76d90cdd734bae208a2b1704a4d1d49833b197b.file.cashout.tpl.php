<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 18:52:31
         compiled from "/var/www/mpos/templates/bootstrap/account/edit/cashout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6509456775baf5086b12875-11212198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a76d90cdd734bae208a2b1704a4d1d49833b197b' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/account/edit/cashout.tpl',
      1 => 1538293940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6509456775baf5086b12875-11212198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf5086b5d314_93398058',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
    'WITHDRAWSENT' => 0,
    'WITHDRAWUNLOCKED' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf5086b5d314_93398058')) {function content_5baf5086b5d314_93398058($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_payouts']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_manual_payouts']) {?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="cashOut">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> Cash Out/払出
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <p style="padding-left:3px; padding-redight:30px; font-size:10px;">
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual']>0) {?>Please note: a <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'],"8");?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 transaction will apply when processing "On-Demand" manual payments <span id="tt"><img width="15px" height="15px" title="This <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_manual'],"8");?>
<?php }?> manual payment transaction fee is a network fee and goes back into the network not the pool." src="site_assets/bootstrap/images/questionmark.png"></span><?php }?>
              </p>
              <p style="padding-left:3px; padding-redight:30px; font-size:10px;">
                Minimum Cashout/最小払出: <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['mp_threshold'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>

              </p>
            </div>
            <div class="form-group">
              <label>Account Balance/アカウント残高</label>
              <input class="form-control" id="disabledInput" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 disabled />
            </div>
            <div class="form-group">
              <label>Payout to/払出先</label>
              <input class="form-control" id="disabledInput" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
" disabled />
            </div>
            <div class="form-group">
              <label>4 Digit PIN/4桁のPINコード</label>
              <input class="form-control" type="password" name="authPin" size="4" maxlength="4" />
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
      
      <input type="hidden" name="wf_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['wf_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
      <input type="hidden" name="utype" value="withdraw_funds">
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['withdraw']) {?>
      <?php if (htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'], ENT_QUOTES, 'UTF-8', true)<$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['mp_threshold']) {?>
      <input type="submit" value="Unlock" class="btn btn-warning btn-sm" name="unlock"  disabled="disabled">
      <?php } elseif ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==1&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==1) {?>
      <input type="submit" value="Cash Out" class="btn btn-success btn-sm">
      <?php } elseif ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==0&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==1&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==0) {?>
      <input type="submit" value="Cash Out" class="btn btn-danger btn-sm" disabled="disabled">
      <?php } elseif ($_smarty_tpl->tpl_vars['WITHDRAWSENT']->value==0&&$_smarty_tpl->tpl_vars['WITHDRAWUNLOCKED']->value==0) {?>
      <input type="submit" value="Unlock" class="btn btn-warning btn-sm" name="unlock">
      <?php }?>
      <?php } else { ?>
      <input type="submit" value="Cash Out" class="btn btn-success btn-sm">
      <?php }?>
      
      </div>
    </div>
  </div>
</form>
<?php }?>
<?php }} ?>

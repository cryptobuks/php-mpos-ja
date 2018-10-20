<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 22:26:53
         compiled from "/var/www/mpos/templates/bootstrap/contactform//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18872435505baf882d33c206-37335045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5a92c25e3f008349679832680b156d12f23d07e' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/contactform//default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18872435505baf882d33c206-37335045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf882d35f6e5_68095457',
  'variables' => 
  array (
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf882d35f6e5_68095457')) {function content_5baf882d35f6e5_68095457($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="contactform">
  <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-envelope fa-fw"></i> Contact Us
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="senderName">Your Name</label>
                <input type="text" class="form-control" name="senderName" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderName'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your name" size="15" maxlength="100" required />
              </div>
              <div class="form-group">
                <label for="senderEmail">Your Email Address</label>
                <input type="text" class="form-control" name="senderEmail" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderEmail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your email" size="50"  maxlength="100" required />
              </div>
              <div class="form-group">
                <label for="senderEmail">Your Subject</label>
                <input type="text" class="form-control" name="senderSubject" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderSubject'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your subject" size="15" maxlength="100" required />
              </div>
              <div class="col-lg-6">
                <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="message">Your Message</label>
                <textarea type="text" class="form-control" name="senderMessage" cols="80" rows="20" maxlength="10000" required><?php echo (($tmp = @htmlspecialchars($_REQUEST['senderMessage'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-success btn-sm">Send Email</button>
          <button type="reset" class="btn btn-warning btn-sm">Reset Values</button></center>
        </div>
      </div>
    </div>
  </div>
</form>
<?php }} ?>

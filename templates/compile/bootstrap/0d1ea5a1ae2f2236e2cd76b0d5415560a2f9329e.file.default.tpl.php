<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:09:53
         compiled from "/var/www/mpos/templates/bootstrap/admin/newsletter/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13022072235baf52bab3c548-70564424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1ea5a1ae2f2236e2cd76b0d5415560a2f9329e' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/newsletter/default.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13022072235baf52bab3c548-70564424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf52bab57716_27394954',
  'variables' => 
  array (
    'PATH' => 0,
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf52bab57716_27394954')) {function content_5baf52bab57716_27394954($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.css">
<script type="text/javascript">
  $(document).ready(function () { $(".cleditor").cleditor(); });
</script>
<div class="row">
  <form class="col-lg-12" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" role="form">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-edit fa-fw"></i> Write Newsletter
        <br>
        <font size="1px">Newsletters support the Markdown syntax</font>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="do" value="send">
            <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
            <div class="form-group">
              <label>Subject</label>
              <input class="form-control" size="30" type="text" name="data[subject]" value="<?php echo (($tmp = @$_REQUEST['data']['subject'])===null||$tmp==='' ? '' : $tmp);?>
" required />
            </div>
            <div class="form-group">
              <label>Content</label>
              <textarea class="form-control cleditor" name="data[content]" rows="5" required><?php echo (($tmp = @$_REQUEST['data']['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Send" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>
</div>
<?php }} ?>

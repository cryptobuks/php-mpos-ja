<?php /* Smarty version Smarty-3.1.16, created on 2018-10-01 02:31:10
         compiled from "/var/www/mpos/templates/bootstrap/admin/news_edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17863644485bafb111c9ae33-31812028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ecde6131fd7b0f77358831a840605b08d4562a' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/admin/news_edit/default.tpl',
      1 => 1538286851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17863644485bafb111c9ae33-31812028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafb111d95ee0_12431839',
  'variables' => 
  array (
    'PATH' => 0,
    'NEWS' => 0,
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafb111d95ee0_12431839')) {function content_5bafb111d95ee0_12431839($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
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
        <i class="fa fa-edit fa-fw"></i> Edit news entry #<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>

      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
              <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
              <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
">
              <input type="hidden" name="do" value="save">
              <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
              
              <div class="form-group">
                <th>Active</th>
                <td>
                  <input type="hidden" name="active" value="0" />
                  <input type="checkbox" class="switch" data-size="mini" name="active" value="1" id="active" <?php if ($_smarty_tpl->tpl_vars['NEWS']->value['active']) {?>checked<?php }?>>
                </td>
              </div>
              <div class="form-group">
                  <th>Header</th>
                  <td><input class="form-control" name="header" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['header'];?>
" required /></td>
              </div>
              <div class="form-group">
                  <th>Content</th>
                  <td><textarea class="cleditor form-control" name="content" rows="15" cols="150" type="text" required><?php echo $_smarty_tpl->tpl_vars['NEWS']->value['content'];?>
</textarea></td>
              </div>
          </div>
        </div>  
      </div>
      <div class="panel-footer">
        <input type="submit" value="Save" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>
</div>
<?php }} ?>

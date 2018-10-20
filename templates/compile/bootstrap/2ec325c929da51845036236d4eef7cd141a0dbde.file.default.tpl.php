<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:12:34
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/overview/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13529024245baf508019d643-44514244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ec325c929da51845036236d4eef7cd141a0dbde' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/overview/default.tpl',
      1 => 1538298750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13529024245baf508019d643-44514244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf50801a9386_32668194',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf50801a9386_32668194')) {function content_5baf50801a9386_32668194($_smarty_tpl) {?>  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-dot-circle-o fa-fw"></i> Pool Information/プール情報
        </h4>
      </div>
      <div class="panel-footer">
       <div class="row">
          
          <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_with_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_without_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }?>
       </div>
      </div>
    </div>
  </div>
<?php }} ?>

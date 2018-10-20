<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:35:21
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/worker_information/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8714975375baf50802ccb14-72395162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871d1daf47cfc9d595beeca241dc98b43f3e57b2' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/worker_information/default.tpl',
      1 => 1538300117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8714975375baf50802ccb14-72395162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf50802d5f52_53497146',
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf50802d5f52_53497146')) {function content_5baf50802d5f52_53497146($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Worker Information/ワーカー情報</h4>
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
         <thead>
          <tr>
            <th>Worker/ワーカー</th>
            <th>Hashrate/ハッシュレート</th>
            <th>Difficulty/難易度</th>
          </tr>
          </thead>
          <tbody id="b-workers">
            <td colspan="3" class="text-center">No worker information available</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>

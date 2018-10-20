<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:29:05
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/round_statistics/prop/round.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10333993715baf50801e60e1-16643182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418b22b1c6cc9b8bac8541c018ea9da77fc5209e' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/round_statistics/prop/round.tpl',
      1 => 1538299741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10333993715baf50801e60e1-16643182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf508021d627_04232475',
  'variables' => 
  array (
    'NETWORK' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
    'PRECISION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf508021d627_04232475')) {function content_5baf508021d627_04232475($_smarty_tpl) {?>      <div class="panel-footer">
        <div class="row">
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-th-large fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-nblock"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Current Block/現在のブロック</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-bar-chart-o fa-flip-horizontal fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-roundprogress"><?php echo number_format($_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'],"2");?>
%</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Of Expected Shares/期待されるシェア</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-money fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-payout"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],$_smarty_tpl->tpl_vars['PRECISION']->value);?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Est. Earnings/予想収益</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-map-marker fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5" id="b-diff"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</p>
                </div>
                <div class="circle-tile-number text-faded">
                  <p class="h6">Difficulty/難易度</p>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php }} ?>

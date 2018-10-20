<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 20:16:36
         compiled from "/var/www/mpos/templates/bootstrap/dashboard/overview/_without_price_graph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19307162895baf50801ac666-94464952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44bd2c96852e62c37fb8f01fc77fa338a827f8a' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/dashboard/overview/_without_price_graph.tpl',
      1 => 1538298986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19307162895baf50801ac666-94464952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf50801c5e31_41606881',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf50801c5e31_41606881')) {function content_5baf50801c5e31_41606881($_smarty_tpl) {?>          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-male fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">My Hashrate/自分のハッシュレート</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-hashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'],"2");?>
</span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
</span>
                    <br>
                    <span class="personal-hashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-users fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Pool Hashrate/プールハッシュレート</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-poolhashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'],"2");?>
</span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</span>
                    <br>
                    <span class="pool-hashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-share-square fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">My Sharerate/自分のシェアレート</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-sharerate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</span>
                    <span class="overview-mhs"> S/s</span>
                    <br>
                    <span class="personal-sharerate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
               <i class="fa fa-truck fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Pool Workers/プールワーカー</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-poolworkers"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</span>
                    <br>
                    <span class="pool-workers-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
               <i class="fa fa-h-square fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Net Hashrate/ネットハッシュレート</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-nethashrate"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']>0) {?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate'],"2");?>
<?php } else { ?>n/a<?php }?></span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['network'];?>
</span>
                    <br>
                    <span class="pool-nethashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php }} ?>

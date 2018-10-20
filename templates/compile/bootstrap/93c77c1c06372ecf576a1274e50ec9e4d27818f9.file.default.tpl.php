<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 23:19:43
         compiled from "/var/www/mpos/templates/bootstrap/statistics/graphs/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4768691885bafa95f10d9a0-29714829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c77c1c06372ecf576a1274e50ec9e4d27818f9' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/statistics/graphs/default.tpl',
      1 => 1538286850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4768691885bafa95f10d9a0-29714829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bafa95f137be8_15155702',
  'variables' => 
  array (
    'YOURMININGSTATS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bafa95f137be8_15155702')) {function content_5bafa95f137be8_15155702($_smarty_tpl) {?><script>
$(function () {
  var miningstats = <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
;
  var hashChart = Morris.Line({
    element: 'hashrate-area-chart',
    data: miningstats,
    xkey: 'time',
    ykeys: ['hashrate'],
    labels: ['Hashrate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var workersChart = Morris.Line({
    element: 'workers-area-chart',
    data: miningstats,
    xkey: 'time',
    ykeys: ['workers'],
    labels: ['Workers'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var shareCharts= Morris.Line({
    element: 'sharerate-area-chart',
    data: miningstats,
    xkey: 'time',
    ykeys: ['sharerate'],
    labels: ['Sharerate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });
});
</script>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Hashrate past 24h
      </div>
      <div class="panel-body">
        <div id="hashrate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average hashrate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Workers past 24h
      </div>
      <div class="panel-body">
        <div id="workers-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average active workers per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Sharerate past 24h
      </div>
      <div class="panel-body">
        <div id="sharerate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your share rate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 22:26:41
         compiled from "/var/www/mpos/templates/bootstrap/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17999701685baf4f5fd20c92-97258162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f22208573951314e7ae5033b3d4da1941bb4c1' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/global/navigation.tpl',
      1 => 1538306797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17999701685baf4f5fd20c92-97258162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf4f5fe2fe22_66020134',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf4f5fe2fe22_66020134')) {function content_5baf4f5fe2fe22_66020134($_smarty_tpl) {?>       <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><i class="fa fa-home fa-fw"></i> Home/ホーム</a>
                    </li>
                    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
                    <li>
                        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard/ダッシュボード</a>
                    </li>

                    <li <?php if ((($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="account") {?>class="active"<?php }?>>
                        <a href="#"><i class="fa fa-user-md fa-fw"></i> My Account/マイアカウント<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit"><i class="fa fa-edit fa-fw"></i> Edit Account/アカウント編集</a></li>
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers"><i class="fa fa-desktop fa-fw"></i> My Workers/マイワーカー</a></li>
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=transactions"><i class="fa fa-credit-card fa-fw"></i> Transactions/トランザクション</a></li>
                          <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_transactionsummary']) {?><li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=earnings"><i class="fa fa-money fa-fw"></i> Earnings/収益</a></li><?php }?>
                          <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']) {?><li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications"><i class="fa fa-bullhorn fa-fw"></i> Notifications/通知</a></li><?php }?>
                          <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']) {?><li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=invitations"><i class="fa fa-users fa-fw"></i> Invitations/招待</a></li><?php }?>
                          <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['qrcode']) {?><li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=qrcode"><i class="fa fa-qrcode fa-fw"></i> QR Codes/QRコード</a></li><?php }?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php }?>
                    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1) {?>
                    <li <?php if ((($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="admin") {?>class="active"<?php }?>>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Admin Panel<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li <?php if ((($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="dashboard"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="monitoring"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="settings"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="setup") {?>class="active"<?php }?>>
                            <a href="#"><i class="fa fa-linux fa-fw"></i> System <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=setup"><i class="fa fa-book fa-fw"></i> Setup</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><i class="fa fa-bell-o fa-fw"></i> Monitoring</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=settings"><i class="fa fa-gears fa-fw"></i> Settings</a></li>
                            </ul>
                          </li>
                          <li <?php if ((($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="wallet"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="transactions") {?>class="active"<?php }?>>
                            <a href="#"><i class="fa fa-usd fa-fw"></i> Funds <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><i class="fa fa-money fa-fw"></i> Wallet Info</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=transactions"><i class="fa fa-tasks fa-fw"></i> Transactions</a></li>
                            </ul>
                          </li>
                          <li <?php if ((($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="news"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="newsletter") {?>class="active"<?php }?>>
                            <a href="#"><i class="fa fa-info fa-fw"></i> News <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=news"><i class="fa fa-list-alt fa-fw"></i> Site News</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=newsletter"><i class="fa fa-list-alt fa-fw"></i> Newsletter</a></li>
                            </ul>
                          </li>
                          <li <?php if ((($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="user"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="reports"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="registrations"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="invitations"||(($tmp = @$_GET['action'])===null||$tmp==='' ? "0" : $tmp)=="poolworkers") {?>class="active"<?php }?>>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user"><i class="fa fa-user fa-fw"></i> User Info</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=reports"><i class="fa fa-list-ol fa-fw"></i> Reports</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=registrations"><i class="fa fa-pencil-square-o fa-fw"></i> Registrations</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations"><i class="fa fa-users fa-fw"></i> Invitations</a></li>
                              <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=poolworkers"><i class="fa fa-desktop fa-fw"></i> Pool Workers</a></li>
                            </ul>
                          </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php }?>
                    <?php if (((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['statistics']['loggedin'])===null||$tmp==='' ? "0" : $tmp)==0&&((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==0||(($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1))||((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['statistics']['loggedin'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1)) {?>
                    <li <?php if ((($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="statistics") {?>class="active"<?php }?>>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Statistics/統計<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'pool','name'=>'<i class="fa fa-align-left fa-fw"></i> Pool/プール','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics'],'fallback'=>'page=statistics'),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'blocks','name'=>'<i class="fa fa-th-large fa-fw"></i> Blocks/ブロック','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'round','name'=>'<i class="fa fa-refresh fa-fw"></i> Round/ラウンド','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'blockfinder','name'=>'<i class="fa fa-search fa-fw"></i> Blockfinder/ブロック発見者','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'uptime','name'=>'<i class="fa fa-clock-o fa-fw"></i> Uptime/アップタイム','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'graphs','name'=>'<i class="fa fa-signal fa-fw"></i> Graphs/グラフ','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['graphs']['statistics']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'statistics','action'=>'donors','name'=>'<i class="fa fa-bitbucket fa-fw"></i> Donors/寄付者','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['donors']['page']),$_smarty_tpl);?>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php }?>
                    <?php if (((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['help']['loggedin'])===null||$tmp==='' ? "0" : $tmp)==0&&((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==0||(($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1))||((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['help']['loggedin'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1)) {?>
                    <li <?php if ((($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="gettingstarted"||(($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="about") {?>class="active"<?php }?>>
                        <a href="#"><i class="fa fa-question fa-fw"></i> Help/ヘルプ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=gettingstarted"><i class="fa fa-question fa-fw"></i> Getting Started/始め方</a></li>
                          <?php echo check_acl_access(array('page'=>'about','action'=>'pool','name'=>'<i class="fa fa-info fa-fw"></i> About/よくある質問','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['about']['page']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'about','action'=>'chat','name'=>'<i class="fa fa-comments-o fa-fw"></i> Web Chat','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['chat']['page']),$_smarty_tpl);?>

                          <?php echo check_acl_access(array('page'=>'about','action'=>'moot','name'=>'<i class="fa fa-ticket fa-fw"></i> Forum/フォーム','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['moot']['forum']),$_smarty_tpl);?>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php }?>
                    <li <?php if ((($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="register"||(($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="login"||(($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="logout"||(($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="tac"||(($tmp = @$_GET['page'])===null||$tmp==='' ? "0" : $tmp)=="contactform") {?>class="active"<?php }?>>
                        <a href="#"><i class="fa fa-tasks fa-fw"></i> Other/その他<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout"><i class="fa fa-sign-out fa-fw"></i> Logout/ログアウト</a></li>
                          <?php } else { ?>
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login"><i class="fa fa-sign-in fa-fw"></i> Login/ログイン</a></li>
                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register"><i class="fa fa-pencil fa-fw"></i> Sign Up/登録</a></li>
                          <?php }?>
                          <?php echo check_acl_access(array('page'=>'contactform','action'=>'','name'=>'<i class="fa fa-envelope fa-fw"></i> Contact/管理者に連絡','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['contactform']),$_smarty_tpl);?>

                          <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=tac"><i class="fa fa-book fa-fw"></i> Terms and Conditions/利用規約</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
<?php }} ?>

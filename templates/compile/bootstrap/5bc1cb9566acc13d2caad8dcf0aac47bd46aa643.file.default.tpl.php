<?php /* Smarty version Smarty-3.1.16, created on 2018-09-30 18:38:40
         compiled from "/var/www/mpos/templates/bootstrap/gettingstarted//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17144820085baf7f2d1f1a88-87381355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bc1cb9566acc13d2caad8dcf0aac47bd46aa643' => 
    array (
      0 => '/var/www/mpos/templates/bootstrap/gettingstarted//default.tpl',
      1 => 1538293117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17144820085baf7f2d1f1a88-87381355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5baf7f2d235fe4_62865914',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'SITESTRATUMURL' => 0,
    'SITESTRATUMPORT' => 0,
    'SITECOINNAME' => 0,
    'SITECOINURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baf7f2d235fe4_62865914')) {function content_5baf7f2d235fe4_62865914($_smarty_tpl) {?> <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-question fa-fw"></i> Getting Started Guide/スタートガイド
        </div>
        <div class="panel-body">
        
    <p>1. <strong>Create account./アカウントを作りましょう。</strong></p>
      <ul>
        <li>Register <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">here</a>, or login if you already have account/<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">ここから</a>登録するか、あなたのアカウントでログインしましょう。</li>
        <li>Create a <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login/マイナーソフトがアクセスするために使用する<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">ワーカー</a>を作成する</li>
      </ul>
    </li>
    <p>2. <strong>Download a miner./マイナーソフトをダウンロードしましょう。</strong></p>
      <ul>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='sha256d') {?>
        <li><em>Intel/ATI/AMD CGMiner Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2-windows.zip" target="_blank">Download here</a></li>
        <li><em>Intel/ATI/AMD CGMiner Linux:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2.tar.bz2" target="_blank">Download Here</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='tribus') {?>
	<li><em>Windows CPUMiner(tribus):</em> <a href="https://github.com/carsenk/cpuminer-multi/releases/download/v1.0-T/cpuminer.exe" target="_blank">Download here</a></li>
	<li><em>Windows CCMiner(tribus):</em><a href="https://github.com/tpruvot/ccminer/releases/download/2.3-tpruvot/ccminer-2.3-cuda9.7z" target="_blank"> Download here</a></li>
	<?php }?>
      </ul>
    </li>
    <p>3. <strong>Configure your miner./マイナーソフトを設定しましょう。</strong></p>
    <ul>
      <p> If you want to mine on a <strong> Windows Operating System</strong>, then you'll need to create a batch file to start your miner./Windowsオペレーティングシステムで作業したい場合は、マイナーを起動するためのバッチファイルを作成する必要があります。 </p><p> Simply open notepad and then copy and paste the following/単にメモ帳を開き、以下のようにコピーして貼り付けてください:</p>
      <li>CPUMiner</li>
      <pre>cpuminer -a <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='tribus') {?>tribus <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "6603" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <li>CCMiner</li>
      <pre>ccminer -a <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='tribus') {?>tribus <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "6603" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
	  <br />
	  <p> You then need to change "-u Weblogin.Worker -p Worker password" to reflect your own account. Eg, "-u Steve.StevesWorker -p StevesWorkerPassword" then go to "File > Save as" and save the file as "RunMe.bat" in the same folder containing your miners application files. You are now ready to mine, double click on "RunMe.bat" to start mining. If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">here</a></p>
          <p>自分のアカウントを反映させるために、 "-u Weblogin.Worker -p Worker password"を変更する必要があります。(例"-u Steve.StevesWorker -p StevesWorkerPassword")次に、"ファイル>保存する"から"RunMe.bat"としてマイナーソフトがある場所に保存してください。この時、ファイルの種類は"すべてのファイル"にしてください。これで、あなたは"RunMe.bat"を実行すればマイニングをスタートできます。必要に応じて、<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">ここから</a>選択したユーザー名とパスワードで追加のワーカーを作成することができます。
    </ul>
    <p>4. <strong>Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to receive payments./支払いを受け取る<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
アドレスを作成しましょう。</strong></p>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 client from <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">here</a>./クライアントブロックチェーンのダウンロード: <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">ここから</a><?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
のクライアントをダウンロードしましょう。
          <p>Generate a new address and input it on your account page to receive payments.</p>
          <p>新しいアドレスを生成し、アカウントページに入力して支払いを受け取ります。</p>
        </li>
      </ul>
    </li>
        </div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
<?php }} ?>

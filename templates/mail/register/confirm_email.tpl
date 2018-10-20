<html>
<body>
<p>こんにちは、 {nocache}{$DATA.username}{/nocache}さん。</p><br />
<p>あなたは新しいアカウントを作成しました。登録を完了するには、このリンクに従ってください:</p>
<p>http{if $smarty.server.HTTPS|default:"" eq "on"}s{/if}://{$smarty.server.SERVER_NAME}{$smarty.server.SCRIPT_NAME}?page=account&action=confirm&token={nocache}{$DATA.token}{/nocache}</p>
<br />
<p>Hello {nocache}{$DATA.username}{/nocache},</p><br />
<p>You have created a new account. In order to complete the registration process please follow this link:</p>
<p>http{if $smarty.server.HTTPS|default:"" eq "on"}s{/if}://{$smarty.server.SERVER_NAME}{$smarty.server.SCRIPT_NAME}?page=account&action=confirm&token={nocache}{$DATA.token}{/nocache}</p>
<p></p>
<p>Cheers,</p>
<p>{$WEBSITENAME}</p>
</body>
</html>

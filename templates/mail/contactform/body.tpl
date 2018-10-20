<html>
<body>
<p>{$WEBSITENAME} メッセージ</p>
<p>{nocache}{$DATA.senderName}{/nocache}さんはあなたにメッセージを送りました。</p>
<p>メールアドレス: {nocache}{$DATA.senderEmail}{/nocache}</p>
<p>題: {nocache}{$DATA.senderSubject}{/nocache}</p>
<p>メッセージ:</p><p>{nocache}{$DATA.senderMessage}{/nocache}</p>
<p></p>
<p>{$WEBSITENAME} Message,</p>
<p>{nocache}{$DATA.senderName}{/nocache} Sent you a message</p>
<p>Senders Email: {nocache}{$DATA.senderEmail}{/nocache}</p>
<p>Subject: {nocache}{$DATA.senderSubject}{/nocache}</p>
<p>Personal message:</p><p>{nocache}{$DATA.senderMessage}{/nocache}</p>
<p></p>
</body>
</html>

<?php
$post_body = "{\"text\": \"\u307b\u3052\u307b\u3052\" }";

$ch = curl_init("https://hooks.slack.com/services/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");

curl_setopt($ch, CURLOPT_FILE, $post_body);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);

echo $post_body + "をslackに送信します";

?>

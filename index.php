<?php
$post_body = "payload={\"text\": \"\u307b\u3052\u307b\u3052\" }";

function send_to_slack($message) {
  $webhook_url = 'https://hooks.slack.com/services/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';
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($message),
    )
  );
  $response = file_get_contents($webhook_url, false, stream_context_create($options));
  return $response === 'ok';
}

$message = array(
  'username' => 'phpBot',
  'text' => 'fooooo;;',
);

send_to_slack($message);

echo $post_body + "をslackに送信します";

?>

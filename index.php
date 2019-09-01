<?php

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
  'text' => 'https://shin-firstapp.herokuapp.com/にアクセスきたよ(・∀・)',
);

send_to_slack($message);

echo $post_body + "をslackに送信します";

?>

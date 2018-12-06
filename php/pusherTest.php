<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'us2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '643eb4a4a2a8cab96149',
    '8df11976f912065b21d7',
    '666673',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
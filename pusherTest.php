<?php
  if(isset($_POST["username"]) && isset($_POST["message"]))
  {
    $username = $_POST["username"];
    $message = $_POST["message"];
  }

  require 'vendor/autoload.php';

  $options = array(
    'cluster' => 'us2'
  );
  $pusher = new Pusher\Pusher(
    '643eb4a4a2a8cab96149',
    '8df11976f912065b21d7',
    '666673',
    $options
  );

  $data['message'] = $message;
  $data['username'] = $username;
  $pusher->trigger('my-channel', 'my-event', $data);
?>

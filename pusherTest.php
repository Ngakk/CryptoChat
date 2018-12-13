<?php
  if(isset($_POST["username"]) && isset($_POST["message"]) && isset($_POST["year"]) && isset($_POST["month"])
  && isset($_POST["day"]) && isset($_POST["hour"]) && isset($_POST["minute"]))
  {
    $username = $_POST["username"];
    $message = $_POST["message"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];
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

  $data['username'] = $username;
  $data['message'] = $message;
  $data['year'] = $year;
  $data['month'] = $month;
  $data['day'] = $day;
  $data['hour'] = $hour;
  $data['minute'] = $minute;
  $pusher->trigger('my-channel', 'my-event', $data);
?>

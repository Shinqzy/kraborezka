<?php

$game = $_POST['game'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$token = "5906858945:AAHNCwYMBl6XlkjbjZMNw3IwsG9Vj-fUwXk";
$chat_id = "-914928043";
$arr = array(
  'Game: ' => $game,
  'Phone: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: /');
} else {
  echo "Error";
}
?>
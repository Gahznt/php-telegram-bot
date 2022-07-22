<?php

$msg = $_REQUEST['text'];
$chat_id = '';
$bot_key = '';

file_get_contents('https://api.telegram.org/bot'.$bot_key.'/sendMessage?chat_id='.$chat_id.'&text='.$msg);
header('Location: index.html');

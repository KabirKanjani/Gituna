<?php
$token="1036811699:AAGpeu4KyzfzO1v8uNR3ycbZZ0N8xiWBggs";
$user_id=700474493;
$mesg="Hello!";

$request_params =[
    'text' => $mesg,
    'chat_id' => $user_id,    
];
$data=file_get_contents("https://api.telegram.org/bot1036811699:AAGpeu4KyzfzO1v8uNR3ycbZZ0N8xiWBggs/getUpdates");
    
$UpdateArray=json_decode($data,true);
$txt=$UpdateArray["result"][1]["message"]["text"];
echo $txt;
//print_r($UpdateArray);


$request_url="https://api.telegram.org/bot$token/sendMessage?".http_build_query($request_params);
file_get_contents($request_url);
?>
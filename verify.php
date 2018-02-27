<?php
$access_token = '4Pxy/Asa7MkjsFhy0q9XqpEaTWX3h1rnvI/O53kyHh2VbQ6Hd75C0Wm/2W/zyvIXyhuZPoVY6+KNj5NYlTfanA9P2TN68TybbvsOLG7LXVOK+s8x3M2BYPeLO2QYlEoPvpx71IWcz5zONlRjNjbDLgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>
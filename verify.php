<?php
$access_token = 'xSm/7ijLL7twSNxbC+e5eVYtcgORsh8i5nB4C70tcgdGgYMauBH8UEFJHnsL0/YYYgyJa8WU8GgFomVtuk4id511qcUuQJfAhmBYoeb0PbUtjxuGtmRN8GE6J0z6XJYTcmf/sKjesm92ri1qrEWByQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

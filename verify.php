<?php
$access_token = 'Uzp4grHqTKjAug5QCrh1Y5y5+VQbqJvq/tfaVkaBISEww3I55scjWCGvRmrq/CWxzF6IWo7oGKLVgpVEgflaWJemtJPLra3YQOJ3s0RbpyK5gXvof/UtOA/7X2kmeiM6ZVmIK/5DN392lJrGSIMecgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

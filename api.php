<?php


// 127.0.0.1:9100/api.php

require_once "autoload.php";

use app\MobileQuery;

$params = $_GET;
$phone = $params['phone'];

$response = MobileQuery::query($phone);
if (is_array($response) and isset($response['province'])) {
    $response['phone'] = $phone;
    $response['code'] = 200;
} else {
    $response['code'] = 400;
    $response['msg'] = '手机号码错误';
}
echo json_encode($response);
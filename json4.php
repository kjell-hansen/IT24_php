<?php
declare(strict_types=1);

$json=new stdClass();
if($_SERVER['REQUEST_METHOD']!=='GET') {
    $json->error="Du ska anropa sidan med GET-anrop!";
    header("HTTP/1.1 405 Method now allowed");
} else {
    $param=[];
    foreach ($_GET as $key => $value) {
        $param[$key]=$value;
    }
    $json->Parametrar=$param;
}

header("Content-type:application/json; charset=UTF-8");
echo json_encode($json, JSON_PRETTY_PRINT |JSON_UNESCAPED_UNICODE);

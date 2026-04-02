<?php
declare(strict_types=1);

$car=new stdClass();
$car->märke="Volvo";
$car->årsmodell=2010;
$car->drivmedel="bensin";

header("Content-type:application/json; charset=UTF-8");
echo json_encode($car, JSON_PRETTY_PRINT |JSON_UNESCAPED_UNICODE);

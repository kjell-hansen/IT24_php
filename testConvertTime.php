<?php
require_once "convertTime.php";

echo testHeltimme() . "<br>";
echo testHalvtimme() ."<br>";
function testHeltimme():string {
    $tid="3:00";
    $forvantan="prick 3";
    $svar=convertTime($tid);
    if($svar===$forvantan) {
        return __FUNCTION__ . " ok!";
    } else {
        return __FUNCTION__ . " misslyckades: förväntat svar:'$forvantan', returnerat svar:'$svar'";
    }
}
function testHalvtimme():string{
    $tid="3:30";
    $forvantan="halv 4";
    $svar=convertTime($tid);
    if($svar===$forvantan) {
        return __FUNCTION__ . " ok!";
    } else {
        return __FUNCTION__ . " misslyckades: förväntat svar:'$forvantan', returnerat svar:'$svar'";
    }
}
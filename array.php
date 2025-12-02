<?php
$frukost = ['gröt', 'smörgås', 'flingor'];
// Visa antalet element
echo "Arrayen innehåller " . count($frukost) . " element<br>";
echo "Element 1=$frukost[1]<br>";

// Lägg till element
array_push($frukost, "müsli");
array_unshift($frukost, "cornflakes", 'branflakes');
echo "Arrayen innehåller " . count($frukost) . " element<br>";
var_dump($frukost);

// Finns GRÖT i arrayen?
$test = 'GRÖT';
if (in_array($test, $frukost)) {
    echo "Hurra '$test' finns i arrayen<br>";
} else {
    echo "Nope, ingen '$test' här inte<br>";
}

$test="flingor";
if(array_search($test, $frukost)===false) {
    echo "Nope, ingen '$test' här inte";
} else {
    echo "'$test' har plats #" . array_search($test, $frukost) ."<br>";
}
echo "<hr>";

$mat=["#1"=>'köttbullar', "ok"=>"ugnskorv", 'fy'=>'kyckling'];
echo "Före sortering:";
var_dump($mat);
sort($mat);
echo "Efter sortering:";
var_dump($mat);

// Sortera och behåll nycklar
$mat=["#1"=>'köttbullar', "ok"=>"ugnskorv", 'fy'=>'kyckling'];
asort($mat);
echo "Efter sortering med nycklar:";
var_dump($mat);

// Sortera nycklar
ksort($mat);
echo "Efter sortering av nycklar:";
var_dump($mat);

// Slå ihop arrayerna
echo "<hr>Slå ihop arrayerna";
$klump=array_merge($frukost, $mat);
var_dump($klump);

// Läs alla nycklar till en ny array
echo "Läs alla nycklar till en ny array";
$nycklar=array_keys($klump);
var_dump($nycklar);

// Välj ett slumpmässigt element
echo "Välj ett slumpmässigt element";
$tur=array_rand($klump);
var_dump($tur);
echo "Skriv ut elementet:<br>";
echo "Element '$tur'=$klump[$tur]";
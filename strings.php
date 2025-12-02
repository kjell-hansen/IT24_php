<?php
// Dela upp en text
$text="abcdefghijklmnopqrstuvwxyz";
$arr=str_split($text);
foreach ($arr as $bokstav) {
    echo "$bokstav<br>";
}

echo "<hr>";
// Alternativt
for($i=0;$i<strlen($text);$i++) {
    echo substr($text,$i,1) ."<br>";
}

// Skriv ut med / mellan alla bokstäver
$snedstreck=implode("/", $arr);
echo "<hr>$snedstreck";

// Slumpa ordningen i arrayen
shuffle($arr);
// Skriv ut med / mellan alla bokstäver
$snedstreck=implode("/", $arr);
echo "<hr>$snedstreck";

// Byt / till \ mellan alla bokstäver
$bsl=str_replace("/", "\\", $snedstreck);
echo "<hr>$bsl<br>";

// Vilken position har 'k'?
echo "Nu finns 'k' i position " . strpos($bsl, 'k');

// MULTIBYTE!
echo "<hr> MULTIBYTE!";
$text .="åäö";
$arr=mb_str_split($text);
foreach ($arr as $bokstav) {
    echo "$bokstav<br>";
}

echo "<hr>";
// Alternativt
for($i=0;$i<strlen($text);$i++) {
    echo mb_substr($text,$i,1) ."<br>";
}

// Byt till stora bokstäver
echo "<hr>" . strtoupper($text); // Funkar inte

// Använd
echo "<hr>" . mb_convert_case($text, MB_CASE_UPPER);
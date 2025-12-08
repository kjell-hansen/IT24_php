<?php
$mapp = __DIR__;

// Kontrollera att mappen finns
if (!is_dir($mapp)) {
    die("Mappen '$mapp' finns inte");
}

// Läs innehållet i mappen
$innehall = scandir($mapp);

// Skriv ut allt (mappar blir röda)
foreach ($innehall as $rad) {
    $color = is_dir("$mapp/$rad") ? "red" : "black";
    echo "<span style='color:$color;'>$rad</span><br>";
}
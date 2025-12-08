<?php
$filnamn="c:/windows/win.ini";

// KOntrollera att filen finns
if(!is_file($filnamn)) {
    die("Filen '$filnamn' finns inte");
}

// Läs filen till en array
$winIni=file($filnamn);

// skriv ut alla rader
foreach ($winIni as $rad) {
    echo "$rad <br>";
}
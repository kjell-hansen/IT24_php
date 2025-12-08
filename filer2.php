<?php
$filnamn=__FILE__;

// KOntrollera att filen finns
if(!is_file($filnamn)) {
    die("Filen '$filnamn' finns inte :(");
}

// Läs filen till en sträng
$me=file_get_contents($filnamn);

echo nl2br(htmlspecialchars($me));
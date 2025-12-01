<?php
echo "For-loop<br>";
// Skriv ut 10 slumpade tärningskast
for($i=1;$i<=10;$i++) {
    // rand(1,6) ger ett slumpat tal mellan 1 och 6
    echo "Tärning $i visar: " . rand(1,6) . "<br>";
}
echo "<hr>foreach-loop:<br>";
// Initiera en array med 6 element
for($i=1;$i<=6;$i++) {
    $tarning[$i]=0;
}

// Slumpa 10 tärningskast
for ($i=1;$i<=10;$i++) {
    $slag=rand(1,6); // resultatet av detta kast
    $tarning[$slag]++; // Öka antalet för detta resultat
}

// Visa resultatet
foreach ($tarning as $varde=>$antal) {
    echo "Du fick $antal $varde:or<br>";
}

echo "<hr>while-loop:<br>";
// Startvärde på tärningen och antal slag
$tarning=$antalSlag=0;
while ($tarning!=6) { // Så länge värdet inte är 6
    $tarning=rand(1,6);
    $antalSlag++;
}
echo "Du behövde $antalSlag slag för att få en 6:a<br>";

echo "<hr>Do...while<br>";
$i=0;
do {
    $tarning=rand(1,6);
    $i++;
} while($tarning!=6); // Fortsätt om tärningen inte blev 6
echo "Du behövde $i slag för att få en 6:a";
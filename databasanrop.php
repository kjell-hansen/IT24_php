<?php

// Inloggningsdetaljer
$dbHost='localhost';$dbUser='root';$dbPassword='';

// Koppla databas
$db=mysqli_connect($dbHost, $dbUser, $dbPassword, 'world');

// Kontrollera koppling
if(mysqli_errno($db)) {
    echo "Anslutningen misslyckades: ", mysqli_error();
    exit();
}

// Skicka fråga
$result=mysqli_query($db,"SELECT Name FROM city ORDER BY id LIMIT 10");

// Kontrollera resultat
echo mysqli_num_rows($result), " rader returnerades<hr>";

// Skriv ut resultatet
while($row=mysqli_fetch_array($result)) {
    echo $row['Name'] , "<br>";
}

// Stäng kopplingen
mysqli_close($db);
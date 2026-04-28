<?php
// Kopplingsinfo
$dsn="mysql:dbname=world;host=localhost";$user='root';$password='';

// Koppla databas
$db=new PDO($dsn, $user, $password);

// Skicka fråga
$stmt=$db->prepare("SELECT Name FROM city WHERE district=:district");
$stmt->execute(['district'=>'Scotland']);

// Skriv ut resultat
while ($row=$stmt->fetch()) {
    echo "Namn: $row[Name]<br>";
}
<?php
declare(strict_types=1);

$stad="";
if(isset($_POST['stad'])) {
    $stad=$_POST['stad'];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sök städer</title>
    </head>
    <body>
        <form method="POST">
            Ange stad: <input type="text" name="stad" value="<?= $stad; ?>" ><br>
            <input type="submit" value="Skicka">
        </form>
<?php
if($stad!=='') {
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
    $result=mysqli_query($db,"SELECT * FROM city WHERE Name LIKE '$stad'");

    // Kontrollera resultat
    $antalRader=mysqli_num_rows($result);
    if($antalRader>0) {
        echo "<hr>", "$antalRader rader returnerades<hr>";

        // Skriv ut resultatet
        while ($row = mysqli_fetch_array($result)) {
            echo "$row[Name] $row[District] $row[CountryCode] $row[Population]", "<br>";
        }
    } else {
        echo "<hr>Inga rader hittades";
    }

    // Stäng kopplingen
    mysqli_close($db);
}
?>
    </body>
</html>

<?php
declare(strict_types=1);

// Initiera variabler
$antalSlag = 0;
$tarningar = [];
$stanna = false;

// Ta emot postat formulär
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $antalSlag = $_POST['antalSlag'];
    if (isset($_POST['stanna'])) {
        $stanna = true;
    }
} else {

}
$antalSlag++;
for ($i = 1;$i <= 5;$i++) {
    $tarningar[] = rand(1, 6);
}

?>
<!doctype html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yatzy</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1>Yatzy</h1>
        <div id="tarningar">
            <?php
            foreach ($tarningar as $index => $value) {
                echo "<p id='tarning$index'>$value</p>";
            }
            ?>
        </div>
        <?php
        if (!$stanna) {
            ?>
            <p>Behåll:</p>
            <form method="post">
                <div id="checkboxes">
                    <?php
                    foreach ($tarningar as $index => $value) {
                        echo "<p><input type='checkbox' name='check[$index]' value='$value'></p>";
                    }
                    ?>
                </div>
                <p>Du har slagit <?= $antalSlag; ?> gånger</p>
                <input type="shidden" name="antalSlag" value="<?= $antalSlag; ?>">
                <input type="submit" value="Slå igen">
                <input type="submit" name="stanna" value="Stanna">
            </form>
            <?php
        } else { ?>
            <hr>
            <p>Du fick:</p>
            <ul>
                <li>Ett par - värde 10</li>
                <li>Chans - värde 23</li>
            </ul>
            <form>
                <input type="submit" value="Börja om">
            </form>
        <?php
        }
        ?>
    </body>
</html>
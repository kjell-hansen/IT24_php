<?php
declare(strict_types=1);

require_once "../src/yatzyFunktioner.php";

// Initiera variabler
$antalSlag = 0;
$tarningar = [];
$stanna = false;
$check = [];
// Ta emot postat formulär
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $antalSlag = $_POST['antalSlag'];
    if (isset($_POST['stanna'])) {
        $stanna = true;
        $tarningar = $_POST['tarningar'];
    } else {
        $check = $_POST['check'] ?? [];
        $antalSlag++;
        for ($i = 0;$i <= 4;$i++) {
            if (isset($check[$i])) {
                $tarningar[$i] = $check[$i];
            } else {
                $tarningar[$i] = rand(1, 6);
            }
        }
        if ($antalSlag === 3) {
            $stanna = true;
        }
    }
} else {
    $antalSlag++;
    for ($i = 0;$i <= 4;$i++) {
        $tarningar[] = rand(1, 6);
    }
}

// Om vi ska stanna så ska tärningskombinationerna utvärderas
if ($stanna) {
    $resultat = utvarderaTarningar($tarningar);
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
                        echo "<p><input type='checkbox' name='check[$index]' value='$value' " . (isset($check[$index]) ? 'checked' : '') . " ></p>";
                        echo "<input type='hidden' name='tarningar[$index]' value='$value'>";
                    }
                    ?>
                </div>
                <p>Du har slagit <?= $antalSlag; ?> gånger</p>
                <input type="hidden" name="antalSlag" value="<?= $antalSlag; ?>">
                <input type="submit" value="Slå igen">
                <input type="submit" name="stanna" value="Stanna">
            </form>
            <?php
        } else { ?>
            <hr>
            <p>Du fick:</p>
            <ul>
                <?php
                foreach ($resultat as $kombination => $varde) {
                    echo "<li>$kombination - $varde</li>";
                }
                ?>
            </ul>
            <form>
                <input type="submit" value="Börja om">
            </form>
            <?php
        }
        ?>
    </body>
</html>
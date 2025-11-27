<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namn = $_POST["namn"];
    $telefon = $_POST["telefon"];
}
else {
    $namn = "";
    $telefon = "";
}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">
            Namn: <input name="namn" value="<?= $namn; ?>"><br>
            Telefon: <input type="tel" name="telefon" value="<?= $telefon; ?>"><br>
            <input type="submit">
        </form>
    </body>
</html>

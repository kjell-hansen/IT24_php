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
            <p id="tarning1">2</p>
            <p id="tarning2">3</p>
            <p id="tarning3">4</p>
            <p id="tarning4">1</p>
            <p id="tarning5">1</p>
        </div>
        <p>Behåll:</p>
        <div id="checkboxes">
            <p><input type="checkbox" name="check[1]" value="2"></p>
            <p><input type="checkbox" name="check[2]" value="3"></p>
            <p><input type="checkbox" name="check[3]" value="4"></p>
            <p><input type="checkbox" name="check[4]" value="1"></p>
            <p><input type="checkbox" name="check[5]" value="1"></p>
        </div>
        <p>Du har slagit 2 gånger</p>
        <input type="submit" value="Slå igen">
        <input type="submit" name="stanna" value="Stanna">
    </body>
</html>
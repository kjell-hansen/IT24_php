<?php
?>
<form method="GET">
    Favoritfärg: <input name="farg" type="text" value="Blå"><br>
    Lösenord: <input type="password" name="losen" value="Svårgissat!"><br>
    <input type="submit" value="Sänd!">
    <input type="reset" value="Ångra!">
</form>

<!-- Kommentar -->
<form method="GET">
    <input type="radio" name="farg" value="blå">Blå<br>
    <input type="radio" name="farg" value="blå">Röd<br>
    <input type="radio" name="farg" value="blå">Gul<br>
    <input type="radio" name="farg" value="blå">Vit<br>
    <input type="submit" value="Skicka!">
</form>

<form method="GET">
    <p>Välj favoritfärg</p>
    <input type="checkbox" name="farg" value="blå">Blå
    <input type="checkbox" name="farg" value="blå" checked>Röd
    <input type="submit" value="Skicka!">
</form>

<form method="GET">
    <select name="favorit" size="1">
        <option>Rabarberpaj</option>
        <option>Blåbärspaj</option>
        <option>Hallonpaj</option>
        <option value="alla">Alla</option>
    </select>
    <br>
    <select name="favorit" size="4" multiple>
        <option>Rabarberpaj</option>
        <option>Blåbärspaj</option>
        <option>Hallonpaj</option>
    </select>
    <input type="submit">
</form>

Textruta:
<form method="GET">
    <textarea rows="4" cols="30">Text som står i rutan</textarea>
</form>
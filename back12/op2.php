<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Band Toevoegen</title>
</head>
<body>
<?php
if (isset($_POST['voegbandtoe'])) {
    require 'config.php';

    $bandnaam = $_POST['bandnaam'];
    $landvh = $_POST['herkomst'];
    $leden = $_POST['leden'];
    $muziek = $_POST['muziek'];
    $info = $_POST['info'];

    $query = "INSERT INTO back12_bands
                  VALUES (NULL,'$bandnaam', '$landvh', '$leden', '$muziek', '$info')";
    if (mysqli_query($mysqli, $query)) {
        echo "<p>Band $bandnaam is toegevoegd.</p>";
    } else {
        echo "<p>FOUT bij toevoegen</p>";
        echo mysqli_error($mysqli);
    }

}
?>
<fieldset>
<form method="post">
    <legend>Band toevoegen</legend>
    Bandnaam: <input type="text" name="bandnaam"><br>
    Land van Herkomst: <input type="text" name="herkomst"><br>
    Aantal leden: <input type="text" name="leden"><br>
    Soort Muziek: <input type="text" name="muziek"><br>
    Algemene Info: <input type="text" name="info">
    <input type="submit" value="Voeg leden toe" name="voegbandtoe">
</form>
</fieldset>



</body>
</html>
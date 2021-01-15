<?php
require 'config.php';
    $ID_band = $_GET['ID_band'];
    $query = "SELECT * FROM `back12_bands` WHERE ID_band =" . $ID_band;
    $resultaat = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($resultaat) == 0 ) {
        echo mysqli_error($mysqli);
        echo "<p> Er is geen band gevonden met id $ID_band</p>";
    }
    else {
        $rij = mysqli_fetch_array($resultaat);
        echo "<form name='form1' method='post' action='band_wijzig_verwerk.php'>";
        echo "<table width='200' border='0'>";
        echo "<tr>";
        echo "<td>ID:</td>";
        echo "<td><input type='number' name='ID_band' value='" . $rij['ID_band'] . "' readonly></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Band Naam:</td>";
        echo "<td><input type='text' name='Naam' value='" . $rij['Naam'] . "'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Land:</td>";
        echo "<td><input type='text' name='Land' value='" . $rij['Land'] . "'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Aantal leden:</td>";
        echo "<td><input type='number' name='AantalLeden' value='" . $rij['AantalLeden'] . "'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Muziek soort:</td>";
        echo "<td><input type='text' name='Muzieksoort' value='" . $rij['Muzieksoort'] . "'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Info:</td>";
        echo "<td><input type='text' name='Info' value='" . $rij['Info'] . "'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>&nbsp</td>";
        echo "<td><input type='submit' name='submit' value='Opslaan'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
    }
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

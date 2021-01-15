<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
<?php
include 'config.php';
$ID_band = $_GET['ID_band'];
$query = "SELECT * FROM back12_bands WHERE ID_band =" . $ID_band;
$resultaat = mysqli_query($mysqli, $query);
if (mysqli_num_rows($resultaat) == 0){
    echo "Er is geen van gevonden met ID $ID_band";
}
else{
    $rij = mysqli_fetch_array($resultaat);
    echo "<h2>Gegevens van band met id " . $ID_band . ":</h2>";
    echo "<table border='1' width='650px'>";
    echo "<tr><td>Naam:</td>;";
        echo "<td>" . $rij['Naam'] . "<td/></tr>";
    echo "<tr><td>Land van herkomst:</td>";
            echo "<td>" . $rij['Land'] . "<td/></tr>";
    echo "<tr><td>Het aantal leden is::</td>";
            echo "<td>" . $rij['AantalLeden'] . "<td/></tr>";
    echo "<tr><td>Muzieksoort::</td>";
            echo "<td>" . $rij['Muzieksoort'] . "<td/></tr>";
    echo "<tr><td>Overige Informatie:</td>";
            echo "<td>" . $rij['Info'] . "<td/></tr>";
    echo "</table>";

}



?>
</body>
</html>
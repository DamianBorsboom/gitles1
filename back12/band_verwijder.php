<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verweider</title>
</head>
<body>
<?php
include 'config.php';
$ID_band = $_GET['ID_band'];
$query = "SELECT * FROM back12_bands WHERE ID_band =" . $ID_band;
$resultaat = mysqli_query($mysqli, $query);
if (mysqli_num_rows($resultaat) == 0){
    echo "Er is geen band gevonden met het ingevulde id $ID_band";
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
    echo "<h2>Wilt u de band met het ID  " . $ID_band . " Verwijderen?</h2>";

}



?>
<form action="band_verwijder_verwerk.php" method="post">
    <input type="hidden" name="ID_band" value="<?php echo $ID_band;?>">
    <input type="submit" name="submit" id="submit" value="verwijder">
</form>
</body>
</html>

<?php
if (isset($_POST['submit']))
{
    require 'config.php';

    $ID_band = $_POST['ID_band'];
    $bandnaam = $_POST['Naam'];
    $landvh = $_POST['Land'];
    $leden = $_POST['AantalLeden'];
    $muziek = $_POST['Muzieksoort'];
    $info = $_POST['Info'];

    $query = "UPDATE `back12_bands`
              SET Naam = '$bandnaam', Land = '$landvh', AantalLeden = '$leden', Muzieksoort = '$muziek', info = '$info' WHERE ID_band = " . $ID_band . ";";

    if (mysqli_query($mysqli, $query))
    {
        echo "<p>De band $bandnaam is aangepast!</p>";
    }
    else
    {
        echo "<p>FOUT bij het aanpassen band met id $ID_band.</p>";
        echo mysqli_error($mysqli);
    }
}
else
{
    echo "<p>Geen gegevens ontvangen</p>";
}

echo "<p>Terug naar het <a href='band_uitlees.php'>overzicht</p>";

?>

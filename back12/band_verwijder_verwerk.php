<?php
if (isset($_POST['submit']))
{
    require 'config.php';

    $ID_band = $_POST['ID_band'];


    $query = "DELETE FROM `back12_bands` WHERE `ID_band` = " . $ID_band . ";";

    if (mysqli_query($mysqli, $query))
    {
        echo "<p>De band met ID ".$ID_band." is verwijderd!</p>";
    }
    else
    {
        echo "<p>FOUT bij het verwijderen van ".$ID_band."</p>";
        echo mysqli_error($mysqli);
    }
}
else
{
    echo "<p>Geen gegevens ontvangen</p>";
}

echo "<p>Terug naar het <a href='band_uitlees.php'>overzicht</p>";

?>

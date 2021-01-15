<?php
session_start();
if($_SESSION['Level'] == 0){
    echo "U heeft geen recht om deze pagina te bekijken!";
    echo "<a href='band_uitlees.php'>Ga terug</a>";
}
if(isset($_SESSION['Gebruikersnaam']))
{
    echo "<p>Welkom, " . $_SESSION['Gebruikersnaam'] . "</p>";
}
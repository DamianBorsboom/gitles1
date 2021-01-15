<?php
include 'config.php';
$query = "SELECT `ID_band`, `Naam`, `Muzieksoort` FROM `back12_bands` WHERE 1";
$resultaat = mysqli_query($mysqli, $query );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uitlees</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>naam</th>
        <th>muzieksoort</th>
        <th>Details</th>
        <th>Wijzig</th>
        <th>Verwijder</th>
    </tr>
    </thead>
<tbody>
<?php
if (mysqli_num_rows($resultaat) > 0){
    while ($rij = mysqli_fetch_assoc($resultaat)){
        //echo $rij['Naam'].'<br>';
    ?>
        <tr>
            <td><?php echo $rij['Naam'];?></td>
            <td><?php echo $rij['Muzieksoort'];?></td>
            <td><a href="band_detail.php?ID_band=<?php echo $rij['ID_band'];?>">Detail</a></td>
            <td><a href="band_wijzig.php?ID_band=<?php echo $rij['ID_band'];?>">Wijzig</a></td>
            <td><a href="band_verwijder.php?ID_band=<?php echo $rij['ID_band'];?>">Verweider</a></td>
        </tr>
        <?php
    }
} else{
    echo "We hebbem geem resultaat.";
}
?>
</tbody>
</table>
</body>
</html>
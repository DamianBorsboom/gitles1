<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inlog</title>
</head>
<body>
<?php
// als het formulier is verstuurd
if (isset($_POST['inlog']))
    {
        require "config.php";
        $Gebruikersnaam = $_POST['Gebruikersnaam'];
        $Wachtwoord = $_POST['Wachtwoord'];
        $hashed_password = sha1($Wachtwoord);
        $opdracht = "SELECT * FROM `back12_users` WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$hashed_password'";
        $resultaat = mysqli_query($mysqli, $opdracht);
        if (mysqli_num_rows($resultaat) > 0)
        {
            echo "<p>Hallo $Gebruikersnaam, u bent ingelogd!</p>";
            echo "<p><a href='band_uitlees.php'> Ga verder </a> </p>";
            $user = mysqli_fetch_array($resultaat);
            $_SESSION['Gebruikersnaam'] = $user['Gebruikersnaam'];
            $_SESSION['Level'] = $user['Level'];
        }
    else
        {
            echo "<p>Naam en/of Wachtwoord zijn onjuist.</p>";
            echo "<p><a href='inlog.php'>Probeer opnieuw</a></p>";
            var_dump($hashed_password);
        }

    }
    else
        {
            ?>
<h2> LOG IN:</h2>
<?php
        }
    ?>

<form method="post" action="">
    <table border="0">
        <tr>
            <td>Gebruikersnaam</td>
            <td><input type="text" name="Gebruikersnaam"></td>
        </tr>
        <tr>
            <td>Wachtwoord</td>
            <td><input type="password" name="Wachtwoord"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="inlog" value="LOG IN"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
//Foutmeldingen tonen op het scherm
ini_set('display_errors',1)
error_reporting(E_ALL);

//gegevens database
$db_hostname = 'localhost';
$db_username = '842333';
$db_password = '#1Geheim';
$db_database = 'mijndatabase';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$mysqli) {
    echo "Fout: geen connnectie naar database. <br>";
    echo "Errno: " . mysqli_connect_errno() . "<br>";
    echo "Error: " . mysqli_connect_error() . "<br>";
    exit;
}
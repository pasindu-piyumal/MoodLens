<?php
$servername = "localhost";
$dbusername = "mood";
$dbpassword = "Gz6qJEYDx*lC(yFw";
$dbName = "mood_lens";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
}
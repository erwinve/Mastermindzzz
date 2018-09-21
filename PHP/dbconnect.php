<?php
$servername = "localhost";
$dbname = "mastermind";
$username = "root";
$password = "";



$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
    die("Could not connect: " . mysql_error());
}
?>
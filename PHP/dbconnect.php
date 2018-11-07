<?php
$servername = "localhost";
$username = "erwinvenneker";
$password = "Rotatio123";
$dbname = "erwinvenneker_mastermind";
$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link)
	{
	die("Could not connect: " . mysql_error());
	}
?>
<?php

$servername = "localhost";
$username   = "root";
$password   = "barreto.2";
$dbname     = "advert";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>

<?php

$servername = "localhost";
$name ="root";
$password = "";
$dbname ="labbitech";

$conn = mysqli_connect($servername,$name,$password,$dbname);

if (!$conn) {
	
	echo "connection fiels";
	exit();
}

?>
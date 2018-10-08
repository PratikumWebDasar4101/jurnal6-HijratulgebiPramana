<?php
$host = "localhost";
$username	= "root";
$password	= "";
$database	= "pendaftaranmhs";

$conn = mysqli_connect($host,$username,$password,$database);

if (!$conn) {
	die("failed :".mysqli_connect_error());
}else{
	echo "Berhasil";
}


?>

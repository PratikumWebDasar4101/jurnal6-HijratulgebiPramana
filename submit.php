<?php

require_once("koneksi.php");
if(isset($_POST["submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nama	  = $_POST["nama"];
	$nim	  = $_POST["nim"];
	$kelas	  = $_POST["kelas"];
	$kelamin  = $_POST["kelamin"];
	$hobi	  = $_POST["hobi"];
	$fakultas = $_POST["fakultas"];
	$alamat	  = $_POST["alamat"];

	if($nama >35){
		echo "Nama anda Terlalu singkat/ panjang";
	}
	if (is_numeric($nim) == false || strlen((string)$nim) >10 ){
		echo "Nim anda harus angka dan max 10 angka";
	}else{
		$sql = "INSERT username,password,nama,nim,kelas,kelamin,hobi,fakultas,alamat INTO mahasiswa VALUES ('$username','$password','$nama','$nim','$kelas','$kelamin','$hobi','$fakultas','$alamat')";

		if (mysqli_query($conn,$sql)) {
			echo "Data Berhasil di tambahkan";
		}else{
			echo "terjadi kesalahan: ".mysqli_connect_error();
		}
	}

}

?>
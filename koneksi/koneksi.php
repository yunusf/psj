<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_oleh";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error()){
	
	echo "Gagal Koneksi".mysqli_connect_error();
}
?>
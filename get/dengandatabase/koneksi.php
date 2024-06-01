<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "latihan";
$nyambung=mysqli_connect($host,$username,$password,$database);
if($nyambung){
	//echo "Koneksi Berhasil";
}
else{
	echo "Koneksi Gagal";
}
?>

<?php
include "koneksi.php";
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$sql="insert into data values(NULL,'$nama','$alamat')";
$query=mysqli_query($nyambung,$sql);
if($query){
	echo "Input Data Berhasil<br><br>";
}
else{
	echo "Input Data Gagal";
}
echo "Data yang Anda Inputkan :";
echo "<br>";
echo "Nama : $nama<br>";
echo "Alamat : $alamat";
//header("Location:output.php?nama=$nama&alamat=$alamat");
?>
<br><br>
<a href="input.html">Input Data Lagi</a>
<a href="output.php">Lihat Seluruh Data</a>
<?php
include "../koneksi.php";
$id=$_GET['id'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$sql="update data set nama='$nama', alamat='$alamat' where id='$id'";
$query=mysqli_query($nyambung,$sql);
header("Location:index.php");
?>
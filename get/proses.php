<?php
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
header("Location:output.php?nama=$nama&alamat=$alamat");
?>
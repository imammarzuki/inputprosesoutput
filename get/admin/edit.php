<h1>Edit Data</h1>
<table border="1" cellspacing="0" cellpadding="10">
<form action="update.php" method="GET")
<?php
include "../koneksi.php";
$id=$_GET['id'];
$sql="select * from data where id='$id'";
$query=mysqli_query($nyambung,$sql);
$baris=mysqli_fetch_row($query);
$id=$baris[0];
$nama=$baris[1];
$alamat=$baris[2];

echo "<tr><td>Nama</td><td><input type='hidden' name='id' value='$id'><input type='text' name='nama' value='$nama'></td></tr>";
echo "<tr><td>Alamat</td><td><input type='text' name='alamat' value='$alamat'></td></tr>";
?>
<tr><td></td><td><input type="submit" value="Update"></td></tr>
</table>
</form>
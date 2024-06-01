<h1>Data yang Sudah Diinput</h1>
<table border="1" cellspacing="0" cellpadding="10">
<tr><th>No</th><th>Nama</th><th>Alamat</th><th>Tindakan</th></tr>
<?php
include "../koneksi.php";
$sql2="select count(*) from data";
$query2=mysqli_query($nyambung,$sql2);
$jumlah=mysqli_fetch_row($query2);
echo "Jumlah Data = $jumlah[0]";
$sql="select * from data order by nama asc";
$query=mysqli_query($nyambung,$sql);
$no=1;
while($kolom=mysqli_fetch_row($query)){
	$id=$kolom[0];
	$nama=$kolom[1];
	$alamat=$kolom[2];
	echo "<tr><td>$no</td><td>$nama</td><td>$alamat</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='hapus.php?id=$id'>Hapus</a></td></tr>";
	$no=$no+1;
}
?>
</table>


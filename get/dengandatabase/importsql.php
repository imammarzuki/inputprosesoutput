<?php
include "koneksi.php";
$nyambung =new mysqli('localhost', 'root', '' , 'latihan');
 
$query = '';
$sqlScript = file('coba.sql');
foreach ($sqlScript as $line)   {
     
    $startWith = substr(trim($line), 0 ,2);
    $endWith = substr(trim($line), -1 ,1);
     
    if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
        continue;
    }
         
    $query = $query . $line;
    if ($endWith == ';') {
        mysqli_query($nyambung,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
        $query= '';     
    }
}
echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';
?>
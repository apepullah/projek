<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM mahasiswa WHERE id='$id'")or die(mysql_error());
 
header("location:data.php?pesan=hapus");
?>
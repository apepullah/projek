<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];
$query="INSERT INTO mahasiswa SET nama='$nama',kelas='$kelas',npm='$npm',jurusan='$jurusan'";
mysql_query($query);
header("location:index.php?pesan=input");
?>
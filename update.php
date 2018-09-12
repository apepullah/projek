<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];
mysql_query("UPDATE mahasiswa SET nama='$nama', kelas='$kelas', npm='$npm', jurusan='$jurusan' WHERE id='$id'");
header("location:data.php?pesan=update");
?>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<center><h1>Data Mahasiswa</h1></center>
	</div>
	<center><?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?><center>
	<center><table border="1" class="table"></br></br>
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>NPM</th>
			<th>Jurusan</th>		
			<th>Proses</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM mahasiswa")or die(mysql_error());
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['npm']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table></center>
	<br>
	<center><a type = "submit" class="tombol" href="index.php">+ Tambah Data Baru</a></center>
</body>
</html>
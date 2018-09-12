<!DOCTYPE html>
<html>
<head>
	<title>Edit Biodata</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<center><h1>Edit Biodata</h1></center>
	</div>

	<br/>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM mahasiswa WHERE id='$id'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<center><table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>"></td>					
			</tr>	
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm" value="<?php echo $data['npm'] ?>"></td>					
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"></td>					
			</tr>			
			<tr>
				<td><input type="submit" value="Simpan"></td>
				<td><a href="data.php">Lihat Semua Data</a></td>				
			</tr>				
		</table></center>
	</form>
	<?php } ?>
</body>
</html>
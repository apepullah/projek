<html>
<head>
	<title>Biodata Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<center><h1>Biodata</h1></center>
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
	<center><h3>Input data baru</h3></center>
	<form action="tambah.php" method="post">		
		<center><table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>					
			</tr>	
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>					
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>					
			</tr>			
			<tr>
				<td><input type="submit" value="Simpan"></td>
				<td><a href="data.php">Lihat Semua Data</a></td>	
			</tr>				
		</table></center>
	</form>
</body>
</html>
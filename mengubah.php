<!DOCTYPE html>
<html>
<head>
	<title>modul8</title>
</head>
<body>
	<h3>EDIT DATA MAHASISWA</h3>
	<?php
	include 'conect.php';
	$id = $_GET['id'];
	$data = mysqli_query($conect,"SELECT * FROM add_mhs WHERE id_mhs='$id'");
	while($d = mysqli_fetch_array($data))
	{
		?>
		<form method="POST" action="ubah.php">
			<table>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs']; ?>">
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MAHASISWA</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama_mhs']; ?>"></td>
				</tr>
                <tr>
					<td>NAMA DOSEN</td>
					<td><input type="text" name="nama1" value="<?php echo $d['nama_dosen']; ?>"></td>
				</tr>
                <tr>
					<td>STATUS</td>
					<td><input type="text" name="sta" value="<?php echo $d['sta']; ?>"></td>
				</tr>
				<tr>
					<td>KETERANGAN</td>
					<td><input type="text" name="ket" value="<?php echo $d['ket']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
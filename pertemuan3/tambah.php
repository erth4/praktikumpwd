<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<a href="index.php">Go to Home</a>
	<br><br>

	<form method="post" action="tambah.php" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Gender (L/P)</td>
				<td><input type="text" name="jkel"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="text" name="tgllhr"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<?php
	if (isset($_POST['Submit'])) {
		$nim 	= $_POST['nim'];
		$nama 	= $_POST['nama'];
		$jkel	= $_POST['jkel'];
		$alamat	= $_POST['alamat'];
		$tgllhr	= $_POST['tgllhr'];

		/* include koneksi.php */
		include_once 'koneksi.php';

		/* inser user data into table */

		$result = mysqli_query($con, "INSERT INTO mahasiswa(nim, nama, jkel, alamat, tgllhr)
										VALUES('$nim','$nama','$jkel','$alamat','$tgllhr');");

		echo "Data berhasil disimpan. <a href='index.php'>View Users</a>"; 
	}

	?>
</body>
</html>
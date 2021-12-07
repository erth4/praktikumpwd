<?php

include_once 'koneksi.php';

$result = mysqli_query($con, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Utama</title>
</head>
<body>
	<a href="tambah.php">Tambah Data Baru</a>
	<a href="cetak.php" target="_blank">Cetak PDF</a>
	<table width="80%" border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>Tgl Lahir</th>
			<th>Update</th>
		</tr>

		<?php while($user_data = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>". $user_data['nim']."</td>";
			echo "<td>". $user_data['nama']."</td>";
			echo "<td>". $user_data['jkel']."</td>";
			echo "<td>". $user_data['alamat']."</td>";
			echo "<td>". $user_data['tgllhr']."</td>";
			echo "<td>
						<a href='edit.php?nim=". $user_data['nim']."'>Edit</a>
						<a href='delete.php?nim=". $user_data['nim']."'>Delete</a>
					</td>";
		} ?>
	</table>
</body>
</html>
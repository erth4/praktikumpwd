<?php include __DIR__ . DIRECTORY_SEPARATOR . 'koneksi.php'; ?>

<h3>FORM PENCARIAN DENGAN PHP MAHASISWA</h3>

<form method="get" action="">
	<label>Cari : </label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php
if(isset($_GET['cari'])) {
	$cari = $_GET['cari'];
	echo "<b>Hasil Pencarian : " . $cari . "</b>";
}
?>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>

	<?php

	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%".$cari."%'";
		$tampil = mysqli_query($con, $sql);
	} else {
		$sql = "SELECT * FROM mahasiswa";
		$tampil = mysqli_query($con, $sql);
	}

	$no = 1;

	while ($r = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $r['nama']; ?></td>
	</tr>
	<?php  } ?>
</table>
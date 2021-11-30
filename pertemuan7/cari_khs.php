<?php include __DIR__ . DIRECTORY_SEPARATOR . 'koneksi.php'; ?>

<h3>FORM PENCARIAN DATA KHS DENGAN PHP</h3>

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
		<th>NIM</th>
		<th>Kode MK</th>
		<th>Nilai</th>
	</tr>

	<?php

	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		$sql = "SELECT * FROM khs WHERE nim = '".$cari."'";
		$tampil = mysqli_query($con, $sql);
	} else {
		$sql = "SELECT * FROM khs";
		$tampil = mysqli_query($con, $sql);
	}

	$no = 1;

	while ($r = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $r['nim']; ?></td>
		<td><?php echo $r['kode_mk']; ?></td>
		<td><?php echo $r['nilai']; ?></td>
	</tr>
	<?php  } ?>
</table>
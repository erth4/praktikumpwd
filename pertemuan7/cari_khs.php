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
		<th>Nama</th>
		<th>Kode MK</th>
		<th>Nama MK</th>
		<th>Nilai</th>
	</tr>

	<?php

	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		$sql = "SELECT k.*, m.nama nama_mahasiswa, mk.nama nama_mk FROM khs k JOIN mahasiswa m ON k.nim=m.nim JOIN matakuliah mk ON k.kode_mk=mk.kode WHERE k.nim = '".$cari."'";
		$tampil = mysqli_query($con, $sql);
	} else {
		$sql = "SELECT k.*, m.nama nama_mahasiswa, mk.nama nama_mk FROM khs k JOIN mahasiswa m ON k.nim=m.nim JOIN matakuliah mk ON k.kode_mk=mk.kode";
		$tampil = mysqli_query($con, $sql);
	}

	$no = 1;

	while ($r = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $r['nim']; ?></td>
		<td><?php echo $r['nama_mahasiswa']; ?></td>
		<td><?php echo $r['kode_mk']; ?></td>
		<td><?php echo $r['nama_mk']; ?></td>
		<td><?php echo $r['nilai']; ?></td>
	</tr>
	<?php  } ?>
</table>
<?php

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$deskripsi = $_POST['deskripsi'];

$direktori = __DIR__ . DIRECTORY_SEPARATOR . $nama_file;

if (move_uploaded_file($lokasi_file, $direktori)) {
	echo 'Nama file : <b>'.$nama_file.'</b> berhasil di upload <br>';
	echo 'Deskripsi file : <br>' . $deskripsi . '';
} else {
	echo 'File gagal diupload';
}
?>
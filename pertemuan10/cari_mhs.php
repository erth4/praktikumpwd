<?php

require_once 'koneksi.php';

$post = json_decode(file_get_contents("php://input"));

$nim = $post->nim;

$sql = "select * from mahasiswa where nim = '$nim'";
$query = mysqli_query($con, $sql);
$hasil = mysqli_num_rows($query);

$data = [];

// bisa > 0 atau == 1
if($hasil > 0) {

	$hasil = mysqli_fetch_assoc($query);

	$data = [
		"data" => $hasil
	];

} else {

	$data = [
		"message"	=> "Data mahasiswa tidak ditemukan."
	];

}

header("Content-Type: application/json");

echo json_encode($data);

mysqli_close($con);

?>
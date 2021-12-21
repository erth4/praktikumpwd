<?php

require_once 'koneksi.php';


$sql = "select * from mahasiswa";
$query = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}

header("Content-Type: application/json");

echo json_encode($data);

mysqli_close($con);

?>
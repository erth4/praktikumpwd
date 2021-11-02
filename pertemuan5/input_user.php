<?php

include __DIR__ . DIRECTORY_SEPARATOR . 'koneksi.php';

$id_user = $_POST['id_user'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "INSERT INTO users(id_user, password, nama_lengkap, email) VALUES('$id_user', '$password', '$nama', '$email');";

$query = mysqli_query($con, $sql);

mysqli_close($con);

header("location: tampil_user.php");

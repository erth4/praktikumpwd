<?php
$host = "localhost";
$user = "root";
$pass = "";
$data = "akademik";

$con = @mysqli_connect($host, $user, $pass, $data);

if(!$con) {
	die("Error : " . mysqli_error());
}
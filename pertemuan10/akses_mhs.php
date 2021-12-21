<?php

$url = "http://praktikum.test/pertemuan10/getdatamhs.php";

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);

foreach ($result as $value) {
    echo "<p>";
    echo "NIM : " . $value->nim . "<br/>";
    echo "Nama : " . $value->nama . "<br/>";
    echo "Jenis Kelamin : " . $value->jkel . "<br/>";
    echo "Alamat : " . $value->alamat . "<br/>";
    echo "Tgl Lahir : " . $value->tgllhr . "<br/>";
    echo "</p>";
}
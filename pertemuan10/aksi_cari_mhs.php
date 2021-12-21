<?php

$url = "http://praktikum.test/pertemuan10/cari_mhs.php";

$data = [
    'nim'   => 'MHS0'
];

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($client);
curl_close($client);

print_r($response);

exit;
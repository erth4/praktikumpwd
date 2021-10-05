<?php

$direktori = __DIR__ . DIRECTORY_SEPARATOR;
$dir = opendir($direktori);

echo 'Isi Folder (Klik link untuk download) : <br>';
while($tmp = readdir($dir)) {
	echo '<a href="'.$tmp.'">'.$tmp.'</a><br>';
}
closedir($dir);

?>
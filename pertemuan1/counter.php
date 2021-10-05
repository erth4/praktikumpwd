<?php

$filecounter = __DIR__ . DIRECTORY_SEPARATOR . 'counter.txt';

if(!file_exists($filecounter)) touch($filecounter);
$fl = fopen($filecounter, 'r+');
$hit = fread($fl, filesize($filecounter));

$table = '<table width="250" align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#0000FF">
			<tr>
				<td width="250" valign="middle" align="center">
					<font face="Verdana" size="2" color="#FF0000">
						<b>Anda pengunjung yang ke ' . $hit . '</b>
					</font>
				</td>
			</tr>
		</table>';
echo $table;

fclose($fl);

$fl = fopen($filecounter, 'w+');
$hit = $hit+1;
fwrite($fl, $hit, strlen($hit));
fclose($fl);

?>
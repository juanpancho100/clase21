<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http:/localhost/omarcitoclase/index.php?api/estudiantes");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);


echo "<table border='1'>
		<tr>
			<th>Estudiante</th>
		</tr>";
$resultado = json_decode($response,TRUE);
foreach ($resultado as $estudiante) {
	echo "<tr>
			<td>".$estudiante["nombres"]." ".$estudiante["apellidos"]."</td>
			</tr>";
}
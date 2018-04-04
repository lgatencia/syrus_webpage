<?php
$host = "syrusdb.c9ykkligt3pr.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "root123456";
$database = "syrusdb";

$conn = new mysqli($host,$username,$password,$database); // conecta al servidor con user, contraseña

// Realizar una consulta MySQL
$query = "SELECT * FROM syrusdb.data_pos ORDER BY id DESC LIMIT 1"; // ultimo valor de la tabla llamada datos
$resultado = mysqli_query($conn, $query) or die("Consulta fallida: " . mysqli_error()); // guardo en resultado lo que saqué de query

$fila = mysqli_fetch_row($resultado); // guardo en un array lo que está en resultado, como string

$var = $fila[1]."\n".$fila[2]."\n".$fila[3]."\n".$fila[4]."\n".$fila[5]."\n";

echo $var;
mysqli_close($conn);

?>

<?php

$host = "syrusdb.c9ykkligt3pr.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "root123456";
$database = "syrusdb";

// conecta al servidor con user, contraseña
$conn = new mysqli($host,$username,$password,$database);

if (isset($_POST['date_time_start']))
{
    $datetime_start = $_POST['date_time_start'];
  	//echo $datetime_start;
  	//echo "\n";
}
else
{
  	//$datetime_start = null;
    //$datetime_start = "2000/1/1";
    echo "no fecha inicio\n";
}

if (isset($_POST['date_time_end']))
{
    $datetime_end = $_POST['date_time_end'];
  	//echo $datetime_end;
  	//echo "\n";
}
else
{
  	//$datetime_end= null;
    //$datetime_end = "2000/1/1";
 	echo "no fecha fin\n";
}

// Realizar una consulta MySQL
// ultimo valor de la tabla llamada datos""
$query = "SELECT * FROM syrusdb.data_pos WHERE datetime BETWEEN '".$datetime_start."' AND '".$datetime_end."' ORDER BY id"; 
$resultado = mysqli_query($conn, $query) or die("Consulta fallida: " . mysqli_error());

//$rows = mysqli_fetch_all($resultado)

$rows[] = array();

while ($r = mysqli_fetch_array($resultado)){
    $rows[] = $r;
}

echo json_encode($rows);

mysqli_close($conn);

?>

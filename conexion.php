<?php
$conexion = mysqli_connect("sql205.epizy.com", "epiz_31542844","wq04Q5W292h0KE","epiz_31542844_laboratorio");
// Check connection
if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
//echo 'conectado';
}
$timezone_identifier = 'America/Caracas';
date_default_timezone_set($timezone_identifier);
?>

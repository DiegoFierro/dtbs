<?php
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db ("tutorial", $conexion);

$usuario = $_POST('usuario');
$contra = $_POST('contra');
$mail = $_POST('mail');

mysql_query("INSERT INTO usuarios(Usuario,Contra,Mail) VALUES('$usuario','$contra','$mail')", $conexion);
?>

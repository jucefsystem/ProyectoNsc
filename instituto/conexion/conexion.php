<?php
//header("content-type: text/html; charset = utf-8");
//Conexión a la Base de Datos
$conexion = mysqli_connect("localhost","root","") or die(mysqli_error());
//Seleccionar la Base de Datos
$base_datos = mysqli_select_db($conexion,"institutonsc") or die(mysqli_error());
//mysqli_query("SET NAMES 'UTF8'");
?>
<?php

	include('../conexion/conexion.php');

	$id_galeria=$_GET['id_galeria'];

	//borrar los datos
	if($id_galeria > 0){
	$sql_borrar = "DELETE FROM galeria_img WHERE id_galeriainst = $id_galeria";
	$resultado_borrar=$conexion->query($sql_borrar);

		if($conexion->erron)die($conexion->error);

	header("location:mostrar_galeria.php?status=2=");
}
		
?>



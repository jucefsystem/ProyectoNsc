<?php

	include('../conexion/conexion.php');

	$id_noticia=$_GET['id_noticia'];

	//borrar los datos
	if($id_noticia > 0){
	$sql_borrar = "DELETE FROM noticias WHERE id_noticia = $id_noticia";
	$resultado_borrar=$conexion->query($sql_borrar);

		if($conexion->erron)die($conexion->error);

	header("location:mostrar_noticias.php?status=2=");
}
		
?>



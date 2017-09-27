<?php

	include('../conexion/conexion.php');

	$id_news = $_GET['id_new'];

	//borrar los datos
	if($id_news > 0){
	$sql_borrar = "DELETE FROM newsletter WHERE id_new = $id_news";
	$resultado_borrar=$conexion->query($sql_borrar);

		if($conexion->erron)die($conexion->error);
}
		mysqli_close($conexion);
?>
<script>
	alert('se ha borrado con exito');
	self.location = "mostrar_news.php";
</script>



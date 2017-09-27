<?php

	include('../conexion/conexion.php');

	$id_alumno=$_GET['id_alumno'];

	//borrar los datos
	if($id_alumno > 0){
	$sql_borrar = "DELETE FROM alumnos WHERE id_alumno = $id_alumno";
	$resultado_borrar=$conexion->query($sql_borrar);

		if($conexion->erron)die($conexion->error);
}
		mysqli_close($conexion);
?>
<script>
	alert('se ha borrado con exito');
	self.location = "mostrar_alum.php";
</script>



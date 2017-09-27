<?php

	include('../conexion/conexion.php');

	$id_usuario=$_GET['id_usuario'];

	//borrar los datos
	if($id_usuario > 0){
	$sql_borrar = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
	$resultado_borrar=$conexion->query($sql_borrar);

		if($conexion->erron)die($conexion->error);
}
		mysqli_close($conexion);
?>
<script>
	alert('se ha borrado con exito');
	self.location = "mostrar_usuarios.php";
</script>



<?php 

	$consulta_documentos = "SELECT * FROM perfil";
	$resultado_consulta = mysqli_query($conexion, $consulta_documentos);

	while($resultados = mysqli_fetch_assoc($resultado_consulta)){
		echo "<option value=".$resultados['id_perfil'].">".$resultados['nombre']."</option>";
	}
?>
<?php 



	$consulta_categoria_img = "SELECT * FROM categoria_img";
	$resultado_consulta = mysqli_query($conexion, $consulta_categoria_img);

	while($resultados = mysqli_fetch_assoc($resultado_consulta)){
		echo "<option value=".$resultados['id_categoria'].">".$resultados['nombre']."</option>";
	}
?>
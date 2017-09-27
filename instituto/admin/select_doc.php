<?php 

	$consulta_documentos = "SELECT * FROM categoria_doc";
	$resultado_consulta = mysqli_query($conexion, $consulta_documentos);

	while($resultados = mysqli_fetch_assoc($resultado_consulta)){
		echo "<option value=".$resultados['id_cate'].">".$resultados['nombre_cat']."</option>";
	}
?>
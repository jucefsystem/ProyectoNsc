<?php 



	$consulta_profesiones= "SELECT * FROM profesiones";
	$resultado_consulta = mysqli_query($conexion, $consulta_profesiones);

	while($resultados = mysqli_fetch_assoc($resultado_consulta)){
		echo "<option value=".$resultados['id_profesion'].">".$resultados['nombre']."</option>";
	}
?>
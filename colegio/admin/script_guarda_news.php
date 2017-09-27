<?php 

	//$id_usuario		= $_POST['id_usuario'];
	$nombre 		= $_POST['txtNombre'];
	$email 			= $_POST['txtEmail'];

	include("../conexion/conexion.php");

	if(isset($email)){
		//Consultar en la base de datos
		$sql_insertar = "INSERT INTO newsletter SET nombre='$nombre', email='$email'";
		mysqli_query($conexion, $sql_insertar);
		mysqli_close($conexion);

	}

?>

<script language = javascript>
		alert("Los datos han sido guardados correctamente")
		self.location = "../instituto/instituto.php"
</script>
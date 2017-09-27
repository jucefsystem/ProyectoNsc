<?php include("../conexion/conexion.php");

	//$id_usuario		= $_POST['id_usuario'];
	$nombre 		= $_POST['txtNombre'];
	$dni 			= $_POST['txtDni'];
	$email 			= $_POST['txtEmail'];
	$password 		= $_POST['txtPassword'];
	$perfil 		= $_POST['txtPerfil'];

if(isset($email)){
	//Consultar en la base de datos

	$sql_insertar = "INSERT INTO usuarios SET nombre='$nombre', dni='$dni', email='$email', password='$password', id_perfil='$perfil' ";
	mysqli_query($conexion, $sql_insertar);
	mysqli_close($conexion);

	
}

?>
<script>
	alert("Los datos han sido guardado exitosamente");
	self.location="mostrar_usuarios.php";
</script>
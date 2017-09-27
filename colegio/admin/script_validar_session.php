<?php
//Conectarnos con la BD
include "../conexion/conexion.php";

$email= $_POST['txtEmail'];
$password= $_POST['txtPassword'];

if(isset($email)){
	//Consultar si el email y la contraseña existen en la base de datos
	$sql_consulta="SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado= mysqli_query($conexion,$sql_consulta) or die (mysqli_error());
    $fila= mysqli_fetch_assoc($resultado);
	
	//OPCIÓN 1: Si el usuario NO existe o los datos son INCORRRECTOS
	if (!$fila['id_usuario']){ 
		header("location:../principal.php");	
	}
	//OPCIÓN 2: Usuario logueado correctamente
	else{
		//Definimos las variables de sesión y redirigimos a la página de usuario
		session_start();
		$_SESSION['id_usuario'] = $fila['id_usuario'];
		$_SESSION['nombre'] = $fila['nombre'];
	
	
		header("Location: admin.php");
	}
	
	}
else{
	
	header("login.php");
}
?>
<?php include("../conexion/conexion.php");

		//if(checkdate($_POST['txtDia'], $_POST['txtMes'], $_POST['txtAnio'])){
		//$id_usuario		= $_POST['id_usuario'];
		$nombree 		= $_POST['txtNombre'];
		$apellidos 		= $_POST['txtApellidos'];
		$dni 			= $_POST['txtDni'];
		//$fec_nac 		= $_POST['txtDia']."-".$_POST['txtMes']."-".$_POST['txtAnio'];
		$telefono 		= $_POST['txtEmail'];
		$direccion  	= $_POST['txtDireccion'];
		$email 			= $_POST['txtEmail'];	
		$profesion 		= $_POST['txtProfesion'];

		if(isset($email)){
			//Consultar en la base de datos
			$sqlInsertar = "INSERT INTO alumnos SET nombre='$nombree', apellidos='$apellidos', dni='$dni', fec_nac='$fec_nac', telefono='$telefono', direccion='$direccion', email='$email', id_profesion='$profesion' ";
			mysqli_query($conexion, $sqlInsertar);
			mysqli_close($conexion);

		}
//}

?>
<script>
	alert("Los datos han sido guardado exitosamente");
	self.location="../instituto/inscripciones.php";
</script>
<?php 


		include("../conexion/conexion.php");

	//if($_POST['txtDescripcion'] != ''){
		//$id_usuario		= $_POST['id_usuario'];
		$titulo_img		= $_POST['txtTitulo'];
		$nom_img 		= $_FILES['filImagen']['name'];
		$tipo_img 		= $_FILES['filImagen']['type'];
		$tam_img 		= $_FILES['filImagen']['size'];

		$descripcion 	= $_POST['txtDescripcion'];
		$categoria 		= $_POST['selCategoria'];

		if(!(strpos($nom_img, "png")||(strpos($nom_img , "jpg"))) && ($tam_img < 10000000)){

			header('Location: registro_galeria.php?status=3');

		}else{

			$sqlInsertar = "INSERT INTO galeria_img SET titulo='$titulo_img', imagen='$nom_img', descripcion='$descripcion', id_categoria='$categoria'";

			mysqli_query($conexion, $sqlInsertar);
			mysql_close($conexion);

	
		//if(isset($email)){
			//Consultar en la base de datos
			//$sql_insertar = "INSERT INTO galeria_img SET titulo='$titulo', imagen='$imagen', descripcion='$descripcion', id_categoria='$categoria' ";

			if(move_uploaded_file($_FILES['filImagen']['tmp_name'], "galeria_instituto/".$nom_img)){

				header('location:mostrar_galeria.php?status=1');
			}else{

				header('location:mostrar_galeria.php?status=2');
			}
		}

			

		//}

			/*if($sqlInsertar){

				header('location:mostrar_galeria.php');

				$msg = "Registro Guardado";
				
			}else{

				$msg = mysqli_error();
			};

			mysqli_close($conexion);*/
	//}

?>
<!--<script>
	alert("Los datos han sido guardado exitosamente");
	self.location="mostrar_galeria.php";
</script>-->
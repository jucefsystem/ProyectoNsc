<?php 

		include("../conexion/conexion.php");

		$titulo 		= $_POST['txtTitulo'];

		$thumbs			= $_FILES['filImage']['name'];
		$tipo_thumbs 	= $_FILES['filImage']['type'];
		$tam_thumbs		= $_FILES['filImage']['size'];

		$categoria 		= $_POST['txtCategoria'];
		$noticia 		= $_POST['txtNoticia'];
		$fecha	 		= $_POST['txtFecha'];


		if(!(strpos($thumbs, "png")||(strpos($thumbs, "jpg"))) && ($tam_thumbs < 10000000)){

			header('Location: registro_noticias.php?status=3');

		}else{

			//Consultar en la base de datos
			$sqlInsertar = "INSERT INTO noticias SET thumbs='$thumbs', titulo='$titulo', categoria='$categoria', noticia='$noticia', fecha='$fec_nac'";
			mysqli_query($conexion, $sqlInsertar);
			mysqli_close($conexion);

			if(move_uploaded_file($_FILES['filImage']['tmp_name'], "img_noticias/".$thumbs)){

				header('location:mostrar_noticias.php?status=1');
			}else{

				header('location:mostrar_noticias.php?status=2');
			}
		}
	

?>






		
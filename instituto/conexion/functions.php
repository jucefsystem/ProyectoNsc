
<?php
	//include('../conexion/functions.php');

function conexion($bd_config){

		try{
			$conexion = new PDO('mysql:host=localhost; dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
			return $conexion;
		} catch (PDOException $e){
			return false;
		}
	}

	//Funcion para que el usuario no pueda inyectar codigo
	function limpiarDatos($datos){
		$datos = trim($datos);
		$datos = stripcslashes($datos);
		$datos = htmlspecialchars($datos);

		return $datos;
	}


	function pagina_actual(){
		return isset($_GET['p']) ? (int)$_GET['p'] : 1;
	}

	function obtener_post($post_por_pagina, $conexion){

		$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
		$sentencia = $conexion->prepare("SELECT id_noticias, titulo_noticias, extracto_noticias, fecha, texto, thumb FROM noticias LIMIT $inicio, $post_por_pagina");
		$sentencia->execute();
		return $sentencia->fetchAll();
	}	

	//funcion que permite al usuario inyectar solo numeros mas no texto en la barra de direcciones.
	function id_noticias($id){
		return (int)limpiarDatos($id);
	}

	//Funcion para cargar el post o noticia cómpleto correspondiente en su pagina independiente
	function obtener_post_por_id($conexion, $id){

		$resultado = $conexion->query("SELECT * FROM noticias WHERE id_noticias = $id LIMIT 1");
		$resultado = $resultado->fetchAll();
		return ($resultado) ? $resultado: false;
	}

	function fecha($fecha){

		$timestamp = strtotime($fecha);
		$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

		$dia = date('d', $timestamp );
		$mes = date('m', $timestamp ) - 1;
		$year = date('Y', $timestamp );

		$fecha = "$dia de" . $meses[$mes] . " del $year";
		return $fecha; 
	}

	//Funcion para la paginacion
	function numero_paginas($post_por_pagina, $conexion){
		//calcular el numero de filas, es decir de los articulos que nos devuelve nuestra consulta.
		$total_post = $conexion->prepare("SELECT FOUND_ROWS() as total");
		//ejecutar la consulta
		$total_post->execute();
		$total_post = $total_post->fetch()['total'];
		//calculo para saber cuantas paginas abre la paginación.
		$numero_paginas = ceil($total_post / $post_por_pagina);
		return $numero_paginas;
	}


	
	
?>
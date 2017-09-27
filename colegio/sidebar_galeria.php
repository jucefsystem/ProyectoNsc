


		<h3>Categorias</h3>

        <div class="separador"></div>  

   
            
<?php 

	require_once('conexion/conexion.php');

	$consultaCat = "SELECT * FROM categoria_img";
	$resultado_consultaCat = mysqli_query($conexion, $consultaCat);

	while($categoriaImg = mysqli_fetch_array($resultado_consultaCat)){

?>

	
<ul class="portfolio-categ filter">
	<li class="active">
		<a href="galeria.php?id_categoria=<?php echo($categoriaImg['id_categoria']);?>"><?php echo($categoriaImg['nombre']); ?></a>
	</li>
	<!--<li class="web"><a href="#" title="">Deportes</a></li>
	<li class="icon"><a href="#" title="">Eventos</a></li>
	<li class="graphic"><a href="#" title="">Infraestructura</a></li>-->
</ul>

<?php

	}
?>
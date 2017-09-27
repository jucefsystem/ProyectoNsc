    <?php

      include('conexion/conexion.php');
      include('conexion/config.php');
      include('conexion/functions.php');

    	$conexion = conexion($bd_config);

      if(!$conexion){
        header('Location:error.php');
    	}
        
    	if(isset($noticias_config)){

    		$posts = obtener_post($noticias_config['post_por_pagina'], $conexion);

    	}
       
    	if(!$posts){
    		header('Location: error.php');
    	}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ISTP-NSC</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrapp.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="css/full-slider.css" >
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="skins/default.css" rel="stylesheet" />
    <script language="JavaScript" type="text/javascript" src="ajax/ajax.js"></script>
</head>

  <!-- CABEZERA -->
    <?php include("header.php");?>

  <header>
      <div class="encabezado-noticias">
          <div class="texto-cabezera2 text-xs-center">
            <h1><strong><p>Noticias y Eventos</p></strong></h1>
          </div>

      </div>
  </header>
    <!--FIN DE CABECERA-->

 <section class="info">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-xs-center" >
              
                </br></br>

            </div>

            <?php foreach($posts as $post) : ?>

             <div class="col-md-12 format-info">
              <a href="single.php?id_noticias=<?php echo $post['id_noticias'];?>"><h1><strong><?php echo $post['titulo_noticias'];?></strong><h1/></a>
              <p class="fecha"><strong><?php echo fecha($post['fecha']);?></strong></p>
                  <div class="separador"></div><br/>
                <div class="col-md-12  text-xs-center">
                  <a href="single.php?id_noticias=<?php echo $post['id_noticias'];?>">
                    <img src="images/img-eventos/<?php echo $post['thumb']; ?>" class="img-fluid m-x-auto img-thumbnail tam-noticias">
                  </a>
                </div></br>
              </div>
              <div class="col-md-12">
                  <p class="extracto"><?php echo $post['extracto_noticias'];?></p>
              </div> 

	            <div class="lequotes">
	        			<div class="col-md-12">
	        				<a class="more" href="single.php?id_noticias=<?php echo $post['id_noticias']; ?>"><strong>Continuar Leyendo</strong></a><br/><br/><hr/>
	        			</div>		
	        	</div>

	        <?php endforeach;  ?>	
        	
        </div> 
        <center><?php require 'paginacion.php';?></center>

    </section>
    <?php include("footer.php"); ?>
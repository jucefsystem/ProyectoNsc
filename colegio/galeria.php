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
<body>
    <!-- CABEZERA -->
    <?php include("header.php");?>

     <header>
         <div class="encabezado-imagenes">
             <div class="texto-cabezera2 text-xs-center">
                <h1><strong><p><font color="#EDC046">Galería de Imágenes</font></p></strong></h1>
            </div>

         </div>
    </header>

    <!--FIN DE CABECERA-->

    <!-- CUERPO -->
	<section class="info text-xs-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <?php include('sidebar_galeria.php'); ?>
				<div class="clearfix">
				</div>
				<div class="row">

					<section id="projects ">
                        <ul class="portfolio-categ filter ">
                         
                          <?php 
                                    require_once('conexion/conexion.php');
                                    $id_categoria= 0;
                                    if(isset($_GET['id_categoria'])){
                                     $id_categoria = ($_GET['id_categoria']);
                                    }

                                    $consultaImg = "SELECT * FROM galeria_img WHERE id_categoria='$id_categoria'";
                                    $resultado_consultaImg = mysqli_query($conexion, $consultaImg);

                                    while($mostraImg= mysqli_fetch_array($resultado_consultaImg)){
                            ?>

                        </ul>
                        
        				<ul id="thumbs" class="portfolio">

                            <li class="item-thumbs col-lg-3 design"  data-type="web">
        					
        					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo($mostraImg['titulo']); ?>" href="admin/galeria_instituto/<?php echo($mostraImg['imagen']); ?>">
        					<span class="overlay-img"></span>
        					<span class="overlay-img-thumb font-icon-plus"></span>
        					</a>
        					
        					<img src="admin/galeria_instituto/<?php echo($mostraImg['imagen']); ?>" alt="<?php echo($mostraImg['descripcion']);?>">
        					</li>
                                
                            <?php
                                	}
                            ?>
        				</ul>
					</section> 
					
				</div>
                <?php include('paginacion.php');?>
			</div>
		</div>
	</div>
	</section>
    
   <section class="footer">
      <div class="container">

        <div class="col-md-6 footer-left">
            <h3>Información</h3>
            <p class="para">Bienvenidos a nuestra I.S.T.P. <strong class="h5">"Nuestra Señora del Carmen"</strong>
                <ul class="">
                    <li><a href="http://www.nsc.edu.pe/aulavirtual/login/index.php">Aula Virtual</a></li>
                    <li><a href="galeria.php">Galeria de Fotos</a></li>
                    <li><a href="ingles.php">Taller de Ingles</a></li>
                </ul></p>

            <?php include 'conexion/conexion.php'; ?>
            <h4>Dejanos tus datos y te contactamos:</h4>

            <form action="admin/script_guarda_news.php" method="POST">
                <input type="text" value="Name" name="txtNombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
                <input type="email" value="Email" name="txtEmail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="btn-footer-enviar">
                  <input id="form2_submit" name="submit" class="tbtn-footer-enviar" value="Enviar" type="submit" />
                </div>
            </form>
        </div>
        <div class="col-md-6 footer-right">
            <h3>Nos ubicas en:</h3>
            <ul class="con-icons">
                <li>Dirección:   Av. Bolognesi #177 - Pariñas - Talara - Piura - Perú</li>
                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>(073) 381611</li>
                <li>
                    <a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true">informes@nsc.edu.pe</span></a>
                </li>
            </ul>
            <ul id="tbsose">
                <li data-alt="Síguenos en Facebook"><a class="icon facebook" href="URL Facebook" target='_blank'>Síguenos en Facebook</a></li>
                <li data-alt="Síguenos en Twitter"><a class="icon twitter" href="URL Twitter">Síguenos en Twitter</a></li>
                <!--<li data-alt="Síguenos en Google+"><a class="icon googleplus" href="URL Google +" target='_blank'>Síguenos en Google+</a></li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
  </section>
  <section class="footer-separador">
      <div class="container">
        <div class="col-md-12 text-xs-center">
            <p class="copy-right" style="font-size=''">© 2017 Free Web Service. Todos los derechos Reservados</p>
        </div>
        <div class="clearfix"></div>
    </div>
  </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/custom.js"></script>
    <!-- Script to Activate the Carousel -->
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
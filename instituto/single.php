
<?php 

      require('conexion/config.php');
      require('conexion/functions.php');

      $conexion = conexion($bd_config);

      $id_noticias = id_noticias($_GET['id_noticias']);

      if(!$conexion){
          header('Location: error.php');
      }

      if(empty($id_noticias)){

        header('Location: noticias.php');
      }

      $post = obtener_post_por_id($conexion,$id_noticias );

      if(!$post){
        header('Location:noticias.php');
      }
      $post = $post[0];
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
   
    <section class="info text-xs-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <h1><strong><?php echo $post['titulo_noticias'];?></strong><h1/>
                </br> 
            </div>
             <div class="col-md-12 format-info">
              <h2><strong></strong><h2/>
              <div class="col-md-12">
                <p class="fecha"><strong><?php echo fecha($post['fecha']);?></strong></p> <div class="separador"></div>  <hr>
              </div>
                 
                     <hr>
                <div class="col-md-12 ">
                <p><img src="images/img-eventos/<?php echo $post['thumb']; ?>" width= "995" class="img-fluid m-x-auto img-thumbnail img-single" ></p>
                </div>
                <div class="col-md-12">
                 <p>
                    <?php echo $post['texto']; ?>
                  </p>
                </div>
                  
            </div>
                       
          </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
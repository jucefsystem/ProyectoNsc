<?php include("conexion/conexion.php"); ?>
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
    <link rel="stylesheet" href="css/full-slider.css" >
</head>
<body>
    <!-- Navigation -->
   <?php include("header.php"); ?>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for Slides -->
         <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/lab-slider.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
 
    <section class="info text-xs-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-xs-center">
              <h2><strong>INSCRIPCIONES EN LÍNEA</strong><h2/>
                  </br>
                <div class="col-md-12 ">
                        
                </div>
            </div>
            <div class="col-md-12 format-info text-xs-center" >
                <h2><strong>SEPARE SU MATRICULA CON SUS DATOS</strong><h2/>
                <hr></br>
                 <div class="col-md-7 format-info" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Registrarse
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../admin/script_guarda_alumnosa.php" method="POST" name="form-inscripcion">
            
                                <div class="form-group">
                                    <label><p><strong>NOMBRE:</strong></p></label>
                                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" required >
                                </div>

                                <div class="form-group">
                                    <label><p><strong>APELLIDOS:</strong></p></label>
                                        <input type="text" class="form-control" name="txtApellidos" placeholder="Apellidos" required >
                                </div>
                                    
                                <div class="form-group">
                                    <label><p><strong>DNI</strong></p></label>
                                        <input type="text" class="form-control" name="txtDni" placeholder="Dni" required>
                                </div> 


                                 <!--       
                                <div class="form-group">
                                    <label><p><strong>FECHA DE NACIMIENTO</strong></p></label>
                                    
                                        <select name="txtDia">
                                            <option>Dia</option>
                                            <?php
                                            for($d=1; $d<=31;$d++){
                                                echo "<option value=\"$d\">$d</option>";
                                            }
                                            ?>
                                        </select>
                                        <select name="txtMes">
                                            <option>Mes</option>
                                            <?php
                                                for($m=1; $m<=12; $m++){
                                                    echo "<option value=\"$m\">$m</option>";
                                                }
                                            ?>
                                        </select>
                                        <select name="txtAnio">
                                            <option>Año</option>
                                            <?php
                                                for($a=1960; $a<=2017; $a++){
                                                    echo "<option value=\"$a\">$a</option>";
                                                }
                                            ?>
                                        </select>
                                </div> 
                                -->

                                <div class="form-group">
                                    <label><p><strong>TELEFONO</strong></p></label>
                                    <input type="text" class="form-control" name="txtTelefono" placeholder="Telefono" required>
                                </div>

                                <div class="form-group">
                                    <label><p><strong>DIRECCION</strong></p></label>
                                    <input type="text" class="form-control" name="txtDireccion" placeholder="Direccion" required>
                                </div>

                                <div class="form-group">
                                    <label><p><strong>EMAIL</strong></p></label>
                                    <input type="email" class="form-control" name="txtEmail" placeholder="Email" required> 
                                </div>

                                <div class="form-group">
                                    <label><p><strong>PROFESION</strong></p></label>
                                    
                                        <select class="form-control" name="txtProfesion">
                                            <option>Seleccionar</option>
                                            <?php include("../admin/select_profesiones.php"); ?>
                                        </select>    
                                </div> 
                                <!--
                                <div class="form-group">
                                    <label><p><strong>ADJUNTAR PARTIDA DE NACIMIENTO:</strong></p></label>
                                    <p><input type="file" /></p>
                                </div>
                                <div class="form-group">
                                    <label><p><strong>ADJUNTAR CERTIFICADOS DE ESTUDIOS:</strong></p></label>
                                    <p><input type="file" /></p>
                                </div>
                                <div class="form-group">
                                    <label><p><strong>ADJUNTAR FOTOS TAMAÑO CARNET:</strong></p></label>
                                    <p><input type="file" /></p>
                                </div>        
                                -->
                                <div class="btn-inscripcion">
                                    <input id="form2_submit" name="submit" value="Inscripcion" type="submit" />
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5 col-sm-5 col-xs-12" >
                     <div class="format-inscrip">
                        <img src="images/inscripcion2.jpg" class="img-fluid m-x-auto">
                    </div>
                 </div>
                    
                <hr /><br />
                <div class="col-md-5 col-sm-5 col-xs-12" >
                    <div class="alert alert-info text-center">
                        <h3><strong>IMPORTANTE </strong></h3> 
                        <hr/>
                        <p>
                            Señores padres de familila y alumnos se les recuerda que de igual modo se acercará a nuestra institucion educativa, para hacer la entrega de los documentos requeridos.

                            Muchas Gracias por su compresion. 
                        </p>
                        
                    </div>
                 </div>
            </div>
            
          </div>
        </div>
    </section>
    <?php include("footer.php"); ?>

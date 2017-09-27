<?php include("../conexion/conexion.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sistema de Admnistración</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
   
</head>
<body> 
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">
                    <img src="assets/img/logonsc.png" width="75" />
                </a>
            </div>
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <li class="dropdown">
                               <h2><strong>Bienvenido Administrador</strong></h2>
                            <div class="dropdown-menu dropdown-settings">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="admin.php">Principal</a></li>
                            <li><a class="menu-top-active" href="admin_instituto.php">Inicio</a></li>
                            <!--<li><a href="mostrar_alum.php">Alumnos</a></li>-->
                            <li><a href="mostrar_alum.php">Inscripciones</a></li>
                            <li><a href="mostrar_galeria.php">Galeria</a></li>
                            <!--<li><a href="#">Biblioteca</a></li>
                            <li><a href="mostrar_noticias.php">Noticias</a></li>-->
                            <li><a href="mostrar_news.php">Newsletter</a></li>
                            <li><a href="mostrar_news.php">Oferta Laboral</a></li>
                            <li><a href="salir_session.php">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php include('conexion/conexion.php'); ?>
   
 <link rel="stylesheet" href="css/main.css" >

 <?php include('header.php');?>
    <!-- video de Publicidad en lacabezera -->
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <video src="video/video-bienvenida.mp4" autoplay loop muted ></video>
                <div class="carousel-caption">

                  <div class="texto-cabezera1 text-xs-center">
                    <h1>
                      
                           <p> Instituto Superior Tecnologico Privado </p>
                        <strong> "NUESTRA SEÑORA DEL CARMEN"</strong>
                      
                    </h1>
                  </div>
                  
                </div>
            </div>

            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/cabezera1.jpg');"></div>
                <div class="carousel-caption">

                  <div class="texto-cabezera1 text-xs-center">
                    <h1>
                      
                          <p> Bienvenidos a la Institución Tecnologica </p>
                        <strong> "NUESTRA SEÑORA DEL CARMEN"</strong>
                      
                    </h1>
                  </div>

                </div>
            </div>

            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/infraestructura.jpg');"></div>
                <div class="carousel-caption">

                  <div class="texto-cabezera1 text-xs-center">
                    <h1>
                       <p> <font color="#62bee6">Plataforma Educativa Digital</font></p>
                        <strong><font color="#62bee6"> "NUESTRA SEÑORA DEL CARMEN"</font></strong>
                    </h1>
                  </div>

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

    <!-- Modulo Informacion relevante en la cabecera-->
    <section class="link-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 link-color" style="background-color:#2c46a5">      
              <a href="http://www.nsc.edu.pe/aulavirtual/login/index.php"><h1><strong>Plataforma de Enseñanza y Aprendizaje Virtual</strong></h1></a>        
              <h2></h2>
                        
              <p></p>
              <h3 style="padding-left: 30px;"><strong></strong></h3>   
              <a class="link-more" href="http://www.nsc.edu.pe/aulavirtual/login/index.php">+</a>
          </div>
          <div class="col-md-4 link-color" style="background-color:#6b11d8">
              <a href="http://190.40.166.58:8080"><h1><strong>Intranet</strong></h1></a>     
              <h2></h2>        
              <p></p>
                    
              <a class="link-more" href="#">+</a>
            </div>
            <div class="col-md-4 link-color" style="background-color:#EDC046">
               <a href="http://190.40.166.58:8080/autenticidad"><h1><strong>Certificados</strong></h1></a>    
              <h2></h2>   
              <a class="link-more" href="/admision">+</a>
          </div>
        </div>
      </div>  
    </section>

    <section class="info text-xs-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 format-info text-xs-center" >
            <div class="col-md-7">
              <marquee>
                <strong><font size="5" color="red">Bienvenidos a nuestra Plataforma Educativa Digital "Nuestra Señora del Carmen"</font></strong>
              </marquee><br/>
              <p>Definitivamente nuestra institución educativa <strong>"Nuestra Señora del Carmen"</strong> de Talara no es una institución más. Desarrolla un sistema diferente y moderno, que consiste en brindar una enseñanza de acuerdo a las exigencias del mundo globalizado. Esto le confiere a nuestros estudiantes un nivel de preparación más sólido y una base coherente para los futuros restos profesionales de la vida laboral. Nuestra Institución Educativa cuenta con el respaldo y el prestigio con más de 20 años formando a los mejores profesionales técnicos del Perú. </p>
                <img src="images/img-Bienvenidos.jpg" width="890" class="img-responsive img-fluid m-x-auto"><br></br>
            </div>
             
            <div class="col-md-5 infoeincrip" >
              <h3><strong>INFORMES E INCRIPCIONES</strong><h3/>
              <a href="inscripciones.php"><img src="images/online1.png" class="img-fluid m-x-auto"/></a>
                <div class="separador"></div> 
            </div>

            <div class="col-md-5 text-xs-center">
           <h3><strong>Fecha de Ingreso</strong></h3>
              <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <td><strong>INGRESO I</strong></td>
                                <td><strong>INGRESO II</stong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="info">
                                <td><strong>Inicio de Clases</strong></td>
                                <td><strong><p>01 Marzo 2017</p></strong></td>
                                <td></td>
                            </tr>
                            <tr class="warning">
                                <td><strong>Fin de Ciclo</strong></td>
                                <td><p>30 de Junio 2017</p></td>
                                <td></td>
                          </tr>
                        </tbody>
                    </table>
                        <a href="admision.php" class="botom">
                          <div class="admission-shaped-link-blue botom-admi" style="border-bottom: 35px solid #3b5998; font-size:13px; ">
                          <strong>Admisión</strong></div>
                        </a>
                </div> 
              </div>
            </div>

            </div>
           </div>
        </div>
    </section>

   <!-- Aqui se encuentran LAS PROFESIONES de la pagina de inicio-->
  <section>
        <div class="container">
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 subtitulos">
                  <h1 class="text-uppercase "><strong>FORMAMOS PROFESIONALES EN: </strong></h1><br>
                
                </div>
            </div>
        </div>
          
        <div class="container-fluid">
            <div class="row info-row beneficios-format">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-imagen-left">
                    <a href="informatica.php"><img src="images/computacion1.jpg"></a>
                </div>
                
              <a href="informatica.php">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-texto info-texto-right info-texto-blue"></br>
                    <p><strong>COMPUTACIÓN E INFORMATICA</strong></p>
                    <p>Plan de Estudios</p>
                   <a class="contacto-link-more" href="informatica.php"></a>
                </div>
               </a>
            </div>
            
        </div>

        <div class="container-fluid">
            <div class="row info-row beneficios-format">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-imagen-left beneficios-format">
                    <a href="administracion.php"><img src="images/administracion1.jpg" ></a>
                </div>
                <a href="administracion.php">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-texto info-texto-right info-texto-yellow"></br>
                    <p><strong>ADMINISTRACIÓN DE EMPRESAS</strong></p>
                    <p>Plan de Estudios</p>
                    <a class="contacto-link-more" href="administracion.php"></a>
                </div>
                </a>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row info-row beneficios-format">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-imagen-left beneficios-format">
                    <a href="ingles.php">
                    <img src="images/asistentegerencia.jpg" ></a>
                </div>
                <a href="ingles.php">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-texto info-texto-right info-texto-lila"></br>
                    <p><strong>TALLER DE INGLES</strong></p>
                    <p>Plan de Estudios</p>
                    <a class="contacto-link-more" href="ingles.php"></a>
                </div>
                </a>
            </div>
        </div>
  </section> 
    <br><br>

    <!-- Aqui se encuentran los Servicios brindados-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 subtitulos">
        <h1 class="text-uppercase "><strong>SERVICIOS: </strong></h1><br>    
        </div>
      </div>
    </div>
    <div class="container-fluid text-xs-center beneficios py-2">
        <div class="row">   
            <div class="col-md-3">
                <a href="http://www.nsc.edu.pe/aulavirtual/login/index.php" target="blank">
                <img src="images/aulavirtual1.jpg" alt="Aula Virtual" class="img-fluid m-x-auto img-thumbnail">
                </a >
               <a href="http://www.nsc.edu.pe/aulavirtual/login/index.php" target="blank"><div class="admission-shaped-link-blue" style="border-bottom: 40px solid #3b5998;"><strong>AULA VIRTUAL</strong></div></a>
            </div>


            <div class="col-md-3">
                <a href="http://190.40.166.58:8080">
                <img src="images/asesoria.jpg" alt="Proyeccion Social 1"   class="img-fluid m-x-auto img-thumbnail" > 
                </a>
                 <a href="http://190.40.166.58:8080"><div class="admission-shaped-link-green" style="border-bottom: 40px solid #EDC046;"><strong>INTRANET</strong></div></a>
            </div>
            
             <div class="col-md-3">
                <a href="http://190.40.166.58:8080/autenticidad">
                <img src="images/documentacion.png" alt="Oferta Laboral" class="img-fluid m-x-auto img-thumbnail"> 
                </a>
                <a href="http://190.40.166.58:8080/autenticidad"><div class="admission-shaped-link-blue" style="border-bottom: 40px solid #3b5998;"><strong>CERTIFICADOS</strong></div></a>
            </div>

            <div class="col-md-3">
                <a href="ofertalaboral.php">
                <img src="images/ofertalaboral1.jpg" alt="Oferta Laboral" class="img-fluid m-x-auto img-thumbnail"> 
                </a>
                <a href="ofertalaboral.php"><div class="admission-shaped-link-blue" style="border-bottom: 40px solid #EDC046;"><strong>TRABAJE EN NSC</strong></div></a>
            </div>

        </div>
    </div>
  </section>

    <?php require("footer.php"); ?>
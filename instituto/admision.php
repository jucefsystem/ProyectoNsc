          <?php include("header.php"); ?>

    <script src="js/jquery.min.js"></script>
    <script>
      $(document).ready(inicializar);

      function inicializar(){
          var x=$("#mostrar");
          x.click(muestrame);
          var y=$("#ocultar");
          y.click(ocultame);

      }
      function muestrame(){
          var z=$("#objetivo");
          z.fadeIn("slow");

      }

      function ocultame(){
          var z=$("#objetivo");
          z.fadeOut("slow");

      }
    </script>
    <!--Cabezera -->
    <section class="imagen-cabezera5 text-xs-center">
        <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
            <div class="cabezeraad text-xs-center">
                    <h1>
                                <p> </p>
                        <strong> Proceso de Admisión 2017</strong>
                      
                    </h1>
                  </div>
        </header>
    </section>
    <!--fin de la cabecera-->


    <section class="info text-xs-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-xs-center">
              <h2><strong></strong></h2>
                  
                  </br>
                <div class="col-md-12 text-xs-center">
                    <div class="table-responsive">
                      <marquee>Proceso de Admisión 2017</marquee>
                      <div class="separador"></div><br/>
                        <div class="panel-body">
                          <table class="table table-hover format-table">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <td><strong>INGRESO I</strong></td>
                                      <td><strong>INGRESO II</strong></td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="info">
                                      <td>Inicio de Clases</td>
                                      <td><p>01 Marzo 2017</p></td>
                                      <td></td>
                                  </tr>
                                  <tr class="warning">
                                      <td>Fin de Ciclo</td>
                                      <td><p>30 de Junio 2017</p></td>
                                      <td></td>
                                </tr>
                              </tbody>
                           </table>
                           <h3><strong>Calendarizacion</strong></h3>
                          <!--<input type="button" id="mostrar" value="Mostrar" name="btnMostrar">
                          <input type="button" id="ocultar" value="Ocultar" name="btnOcultar">
                          <div id="objetivo"><a href=""><img src="images/formula.png" width="250px"></a></div><br /><br />-->
                          <div>
                              <a href="http://localhost/backup-institutonsc/nsc/instituto/documentos/Itinerario.pdf" target="_blank">
                                <div class="admission-shaped-link-blue" style="border-bottom: 40px solid #60aaea;">
                                <strong>
                                  <h3>Ver Documento</h3></div>
                                </strong>
                                
                              </a>   
                          </div> 
                        </div> 
                    </div> 
                </div>
            </div>

             <div class="col-md-12 format-info" >
              <h2><strong>REQUISITOS DE INSCRIPCIÓN</strong></h2>
                  <div class="separador"></div>
                  </br>
                 <div class="col-md-6">
                         <p>Estimado usuario deberá presentar los siguientes documentos obligatoriamente para relizar la gestión de matricula:</p><br>
                     <ul>
                        <li><p>Partida de Nacimiento</p></li>
                         <li><p>Certificado de estudios</p></li>
                        <li><p>Copia de DNI</p></li>
                        <li><p>2 Fotos tamaño carnet</p></li>
                     </ul>
                </div>
                 <div class="col-md-6 text-xs-center">
                     <p>Así mismo podrá inscribrirse y separar su vacante por este medio.</p>
                  <div class="img-float">
                      <a href="inscripciones.php"><img src="images/inscripcion.png" width="250" class="img-fluid m-x-auto"></a>
                  </div>
                </div>
            </div>
            <div class="col-md-12 format-info" >
              <h2><strong>PLAN DE ESTUDIOS</strong><h2/>
                  <div class="separador"></div>
                  </br>   
                 <ul>
                    <li>Partida de Nacimiento</li>
                  </ul> 
            </div>
          </div>
        </div>
    </section>
    <?php include("footer.php");?>
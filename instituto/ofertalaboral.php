<!DOCTYPE html>
<body>
    <!-- Navegacion -->
   <?php include("header.php"); ?>
    <!--Imagen de la Cabecera -->
    <header>
      <div class="encabezado-oferta-laboral">
          <div class="texto-cabezera2 text-xs-center">
            <h1><strong><p>Oferta Laboral</p></strong></h1>
          </div>

      </div>
   </header>
   <!-- Fin de la Cabezera-->

    <section class="info text-xs-center">
        <div class="container">
          <div class="row" id="inicio">
            <div class="col-md-12">
                <section class= "beneficios py-2">
                    <div class="container-fluid">
                        <div class="col-md-6">
                            <a href="#formulario-empresas"><img src="images/ofertalaboral1.jpg" alt="Oferta Laboral"   class="img-fluid m-x-auto img-thumbnail"></a>
                                 <a href="#formulario-empresas"><div class="admission-shaped-link-bluee" style="border-bottom: 40px solid #3b5998;"><strong>Empresas</strong></div></a>
                        </div>
                        <div class="col-md-6">
                            <a href="#formulario-alumnos"><img src="images/asesoria.jpg" alt="Proyeccion Social 1"   class="img-fluid m-x-auto img-thumbnail" ></a>
                             <a href="#formulario-alumnos"><div class="admission-shaped-link-bluee" style="border-bottom: 40px solid #3b5998;"><strong>Alumno, Egresado</strong></div></a>
                        </div>
                    </div>
                </section>
            </div>
          </div>
           <div class="separador"></div><br />

          <!-- Seccion de Formularios -->
            <div class="row" id="formulario-empresas">
               <div class="col-md-12  text-xs-center">
                <!--<h3><strong>Para Empresas</strong></h3><br />-->


                        <div class="col-md-6">
                            
                            <div class="col-md-12 col-sm-9" >
                                <div class="format-inscrip">
                                    <img src="images/empresa.png" class="img-fluid m-x-auto" height="980px">
                                </div><p />

                                <div class="alert alert-info text-center">
                                <h4><strong>IMPORTANTE </strong></h4> 
                                 <hr/>
                                <p>
                                Señores padres de familila y alumnos se les recuerda que de igual modo se acercará a nuestra institucion educativa, para hacer la entrega de los documentos requeridos.

                                 Muchas Gracias por su compresion. 
                                </p> 
                            </div>
                             <a href="#inicio"><font color="red"><u>volver al inicio</u></font></a>    
                            </div>
                        </div>

                        <div class="col-md-6">
                         <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4><strong>Empresas</strong></h4> 
                            </div>
                            <div class="panel-body">
                            <form role="form" action="admin/script_guarda_alumnosa.php" method="POST" name="form-inscripcion">
            
                                <div class="form-group">
                                    <label><p><strong>Organizacion:</strong></p></label>
                                        <input type="text" class="form-control" name="txtNombre" placeholder="Ej: carlos" required >
                                </div>

                                <div class="form-group">
                                    <label><p><strong>Ruc:</strong></p></label>
                                        <input type="text" class="form-control" name="txtApellidos" placeholder="Ej: flores" required >
                                </div>
                                    
                                <div class="form-group">
                                    <label><p><strong>Salario:</strong></p></label>
                                    <input type="text" class="form-control" name="txtTelefono" placeholder="Ej: 999999999" required>
                                </div>

                                <div class="form-group">
                                    <label><p><strong>Descripción:</strong></p></label>
                                    <textarea type="text" class="form-control" name="descripcion" rows="8" cols="30" required></textarea> 
                                </div>

                                 <div class="form-group">
                                    <label><p><strong>Adjuntar Documento:</strong></p></label>
                                    <input type="file" class="form-control" required>
                                </div>
                                <br />
                                <div class="btn-inscripcion">
                                    <input id="form2_submit" name="submit" value="Enviar" type="submit" />
                                </div>    
                            </form>
                            </div> 
                        </div>
                            
                        </div>
                </div>           
            </div>
                <br /><div class="separador"></div><br />

            <div class="row" id="formulario-alumnos">
               <div class="col-md-12  text-xs-center">
               <!--<h3><strong>Para Alumnos y Egresados</strong></h3><br />-->
                        <div class="col-md-6 text-xs-center" >
                        <div class="panel panel-info text-xs-center">
                            <div class="panel-heading">
                                <h4><strong>Alumnos y Egresados</strong></h4> 
                            </div>
                            <div class="panel-body">
                            <form role="form" action="admin/script_guarda_alumnosa.php" method="POST" name="form-inscripcion">
            
                                <div class="form-group">
                                    <label><p><strong>Nombres:</strong></p></label>
                                        <input type="text" class="form-control" name="txtNombre" placeholder="Ej: carlos" required >
                                </div>

                                <div class="form-group">
                                    <label><p><strong>Apellidos:</strong></p></label>
                                        <input type="text" class="form-control" name="txtApellidos" placeholder="Ej: flores" required >
                                </div>
                                    
                                <div class="form-group">
                                    <label><p><strong>Telefono de Contacto:</strong></p></label>
                                    <input type="text" class="form-control" name="txtTelefono" placeholder="Ej: 999999999" required>
                                </div>

                                <div class="form-group">
                                    <label><p><strong>Descripción</strong></p></label>
                                    <textarea type="text" class="form-control" name="descripcion" rows="8" cols="30" required></textarea> 
                                </div>

                                 <div class="form-group">
                                    <label><p><strong>Adjuntar Documento:</strong></p></label>
                                    <input type="file" class="form-control" required>
                                </div>
                              <br />
                                <div class="btn-inscripcion">
                                    <input id="form2_submit" name="submit" value="Enviar" type="submit" />
                                </div>    
                            </form>

                            </div>
                            </div>
                           
                        </div>

                        <div class="col-md-6">
                            
                            <div class="col-md-12 col-sm-9" >
                                <div class="format-inscrip">
                                    <img src="images/egresado.png" class="img-fluid m-x-auto" width="330" ">
                                </div><p /><br />
                                
                            </div>
                                <a href="#inicio"><font color="red"><u>volver al inicio</u></font></a>   
                        </div>
                </div>           
            </div>

        </div>
    </section>



    <?php include("footer.php"); ?>  
  
<?php

    header("content-type: text/html;charset=utf-8");

 include("../conexion/conexion.php"); ?>

    <?php include("header_nsc.php"); ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Usuarios Registrados</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="registro_alum.php" class="btn btn-primary">Nuevo</a>
                     
                </div>
            </div>
            <div class="row">
                <section class="page-content">
                    <div class="container">
                        <h2 align="center"><strong></strong></h2>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr> 
                                    <td align="center"><h5><strong>NOMBRE</strong></h5></td>
                                    <td align="center"><h5><strong>APELLIDOS</strong></h5></td>
                                    <td align="center"><h5><strong>DNI</strong></h5></td>
                                    <td align="center"><h5><strong>FECHA NACIMIENTO</strong></h5></td>
                                    <td align="center"><h5><strong>TELEFONO</strong></h5></td>
                                    <td align="center"><h5><strong>DIRECCION</strong></h5></td>
                                    <td align="center"><h5><strong>E-MAIL</strong></h5></td>
                                    <td align="center"><h5><strong>FECHA INSCRIPCION</strong></h5></td>
                                    <td align="center"><h5><strong>PROFESIONES</strong></h5></td>
                                    <td align="center" width="200"><h5><strong> OPCIONES </strong></h5></td>  
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                                $consulta_mostrar = "SELECT * FROM alumnos";   
                                $resultado = mysqli_query($conexion, $consulta_mostrar);                             
                                while($usuarios = mysqli_fetch_assoc($resultado)){

                            ?>
                                <tr>
                                    <td><?php echo $usuarios['nombre']; ?></td>
                                    <td><?php echo $usuarios['apellidos']; ?></td>
                                    <td><?php echo $usuarios['dni']; ?></td>
                                    <td><?php echo $usuarios['fec_nac']; ?></td>
                                    <td><?php echo $usuarios['telefono']; ?></td>
                                    <td><?php echo $usuarios['direccion']; ?></td>
                                    <td><?php echo $usuarios['email']; ?></td>
                                    <td><?php echo $usuarios['fec_inscrip']; ?></td>
                                    <td><?php echo $usuarios['id_profesion']; ?></td>
                                    <td align="center">
                                        <a href="galeria_instituto/<?php echo $galeria['imagen']; ?>" class="btn btn-sm btn-success" target="blank">Editar</a>
                                        <a href="borrar_gal.php?id_galeria=<?php echo $galeria['id_galeriainst']; ?>" class="btn btn-sm btn-success" target="blank">Borrar</a>
                                    </td>  
                                    
                                </tr>
                            <?php
                                }
                            ?>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div> 
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include("footer_admin.php"); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<?php

    header("content-type: text/html;charset=utf-8");

 include("../conexion/conexion.php"); ?>

    <?php include("header_nsc.php"); ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Fotos de Institución</h4>
                </div>
            </div>
            <div class="row">
            
            <?php

                if(isset($_GET['status'])){
                //<!-- mensaje elegamnte para confirmar accion guardar-->
                if($_GET['status']==1){     
            ?>
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <strong>Imagen</strong> guardado Exitosamente!
                    </div>
                </div>
            <?php
                }
                if($_GET['status']==2){
            ?>
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <strong>Imagen</strong> borrado Exitosamente!
                    </div>
                </div>
            <?php
                }
            }
            ?>

            </div>
            <div class="row">

                <div class="col-md-12">
                    <a href="registro_galeria.php" class="btn btn-primary">Nuevo Registro</a>   
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
                                    <td align="center"><h5><strong>TITULO</strong></h5></td>
                                    <td align="center"><h5><strong>IMAGEN</strong></h5></td>
                                    <td align="center"><h5><strong>DESCRIPCION</strong></h5></td>
                                    <td align="center"><h5><strong>CATEGORIA</strong></h5></td>
                                    <td align="center" width="200"><h5><strong> OPCIONES </strong></h5></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                                $consulta_mostrar = "SELECT * FROM galeria_img";   
                                $resultado = mysqli_query($conexion, $consulta_mostrar);                             
                                while($galeria = mysqli_fetch_assoc($resultado)){

                            ?>
                                <tr>
                                    <td><?php echo $galeria['titulo']; ?></td>
                                    <td><?php echo $galeria['imagen']; ?></td>
                                    <td><?php echo $galeria['descripcion']; ?></td>
                                    <td><?php echo $galeria['id_categoria']; ?></td>
                                    <td align="center">
                                        <a href="galeria_instituto/<?php echo $galeria['imagen']; ?>" class="btn btn-sm btn-success" target="blank">Ver</a>
                                        <a href="borrar_gal.php?id_galeria=<?php echo $galeria['id_galeriainst']; ?>" class="btn btn-sm btn-success" target="blank">Borrar</a>
                                    </td>  
                                </tr>
                            <?php
                                }
                                mysqli_close($conexion);
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

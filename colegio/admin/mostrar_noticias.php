<?php

    header("content-type: text/html;charset=utf-8");

 include("../conexion/conexion.php"); ?>

       <?php include("header_nsc.php"); ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">NOTICIAS</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="registro_noticias.php" class="btn btn-primary">Nuevo Noticia</a>   
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
                                    <td align="center"><h5><strong>IMAGEN</strong></h5></td>
                                    <td align="center"><h5><strong>TITULO</strong></h5></td>
                                    <td align="center"><h5><strong>CATEGORIA</strong></h5></td>
                                    <td align="center"><h5><strong>NOTICIA</strong></h5></td>
                                    <td align="center"><h5><strong>FECHA</strong></h5></td>
                                    <td align="center" width="200"><h5><strong> OPCIONES </strong></h5></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                               $consulta_mostrar = "SELECT * FROM noticias";   
                                $resultado = mysqli_query($conexion, $consulta_mostrar);                             
                                while($noticias = mysqli_fetch_assoc($resultado)){

                            ?>
                                <tr>
                                    <td><?php echo $noticias['thumbs']; ?></td>
                                    <td><?php echo $noticias['titulo']; ?></td>
                                    <td><?php echo $noticias['categoria']; ?></td>
                                    <td><?php echo $noticias['noticia']; ?></td>
                                    <td><?php echo $noticias['fecha']; ?></td>
                             
                                    <td align="center">
                                        <a href="#" class="btn btn-sm btn-success" target="blank">Editar</a>
                                        
                                        <a href="borrar_noticias.php?id_noticia=<?php echo $noticias['id_noticia']?>" class="btn btn-sm btn-success" target="blank">Borrar</a>
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

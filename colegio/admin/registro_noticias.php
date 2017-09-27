<?php include("../conexion/conexion.php"); ?>


    <?php include("header_nsc.php"); ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Registrarse</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form" action="script_guarda_noticias.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                            
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>

                        <div class="form-group">
                            <label for="imagen" class="col-md-3 control-label">Imagen:</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="filImage" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">TITULO:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtTitulo" placeholder="Titulo" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label for="perfil" class="col-md-3 control-label">CATEGORIA</label>
                            <div class="col-md-9">
                                <select class="form-control" name="txtCategoria">
                                    <option>Seleccionar</option>
                                    <option>Eventos</option>
                                    <option>Deportes</option>
                                    <option>Entretenimiento</option>
                                    
                                </select>    
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">NOTICIA</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="txtNoticia" placeholder="Noticia" required></textarea>
                            </div>
                        </div> 
                        
                        <div class="form-group">                             
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
                            </div>
                        </div>
                    </form>
                        <?php //echo resultBlock($errors); ?>
                </div>
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

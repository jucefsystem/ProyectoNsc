
    <?php include("header_nsc.php"); ?>
   
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Registrarse</h4>
                </div>
            </div>
            <div class="row">
               
            </div>
            <div class="row">
                <div class="panel-body" >
    <?php include("../conexion/conexion.php"); ?> 

                <form id="signupform" class="form-horizontal" role="form" action="script_guarda_gal.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        
                    <div class="form-group">
                        <label for="titulo" class="col-md-3 control-label">Titulo:</label>
                        <div class="col-md-9">
                                <input type="text" class="form-control" name="txtTitulo" placeholder="Titulo" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="col-md-3 control-label">Imagen:</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="filImagen" required >
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="descripcion" class="col-md-3 control-label">Descripción</label>
                        <div class="col-md-9">
                            <textarea rows="5" class="form-control" name="txtDescripcion"></textarea>
                        </div>
                    </div> 
 
                    <div class="form-group">
                        <label for="perfil" class="col-md-3 control-label">Categoria</label>
                        <div class="col-md-9">
                            <select class="form-control" name="selCategoria">
                                <option>Seleccionar Categoria</option>
                                    <?php include("select_categoria_gal.php"); ?>
                            </select>    
                        </div>
                    </div> 

                    <div class="form-group">                             
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" name="btnRegistro" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
                        </div>
                    </div>
                </form>
                        
                </div>
            </div>
        </div>
    </div>

    <?php include("footer_admin.php"); ?>

    <script src="assets/js/jquery-1.11.1.js"></script>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

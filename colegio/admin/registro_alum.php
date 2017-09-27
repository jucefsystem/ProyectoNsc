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
                    <form id="signupform" class="form-horizontal" role="form" action="script_guarda_alum.php" method="POST" autocomplete="off">

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                            
                        <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">Nombre:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">Apellidos:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtApellidos" placeholder="Apellidos" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label for="dni" class="col-md-3 control-label">DNI</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtDni" placeholder="Dni" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
                            </div>
                        </div> 
                        <!--
                        <div class="form-group">
                            <label for="dni" class="col-md-3 control-label">Fecha Nacimiento</label>
                            <div class="col-md-9">
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
                        </div> 
                        -->

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Telefono</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtTelefono" placeholder="Telefono" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Direccion</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtDireccion" placeholder="Direccion" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="txtEmail" placeholder="Email" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <label for="perfil" class="col-md-3 control-label">Profesion</label>
                            <div class="col-md-9">
                                <select class="form-control" name="txtProfesion">
                                    <option>Seleccionar Profesión</option>
                                    <?php include("select_profesiones.php"); ?>
                                </select>    
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

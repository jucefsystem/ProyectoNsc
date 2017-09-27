<?php include("../conexion/conexion.php"); 
      session_start();
      if(!$_SESSION['id_usuario']){

        header("Location:login.php");
      }
?>

    <?php include("header_admin.php"); ?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Sistema Admninistrativo "NSC"</h4>
                </div>
            </div>
            <div class="row">
                
            </div>

            <div class="row">
                <a href="admin_colegio.php">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="dashboard-div-wrapper bk-clr-two">
                            <i  class="fa fa-edit dashboard-div-icon" ></i>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                </div>                       
                            </div>
                             <h5>COLEGIO</h5>
                        </div>
                    </div>
                </a>

                <a href="admin_instituto.php">
                     <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="dashboard-div-wrapper bk-clr-three">
                            <i  class="fa fa-cogs dashboard-div-icon" ></i>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                </div>                
                            </div>
                            <h5>INSTITUTO</h5>
                        </div>
                    </div>
                </a>

                <a href="admin_cetpro.php">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="dashboard-div-wrapper bk-clr-four">
                            <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                            <div class="progress progress-striped active">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              </div>                         
                            </div>
                             <h5>CETPRO</h5>
                        </div>
                    </div>
                </a>
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

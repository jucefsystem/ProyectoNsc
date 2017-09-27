<?php session_start();?>

<?php include("../conexion/conexion.php"); ?> 

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login NSC</title>
    
        <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <section class="link-section info text-xs-center">
      <div class="wrapper link-section">
        <div class="container">

          <h2><strong>Sistema de Admnistración</strong></h2>
          <img src="logonsc.png" width="80">
          <h2></h2>
          <form class="form" action="script_validar_session.php" method="POST">
            <input type="text" name="txtEmail" placeholder="Username" required="Ingrese dato">
            <input type="password" name="txtPassword" placeholder="Password" required="ingrese dato">
            <button type="submit" id="login-button">Login</button>
          </form>
          <a href="../index.php">Ir a la página principal</a>
        </div>
      </div>

   </section>
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
 
  </body>
</html>
  
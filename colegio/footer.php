  <?php include('conexion/conexion.php');?>

 <section class="footer">
      <div class="container">

        <div class="col-md-6 footer-left">
            <h3>Información</h3>
            <p class="para">Bienvenidos a nuestra I.S.T.P. <strong class="h5">"Señora del Carmen"</strong>
                <ul class="">
                    <li><a href="http://www.nsc.edu.pe/aulavirtual1/login/index.php"><span aria-hidden="true">Aula Virtual</span></a></li>
                </ul></p>

            <?php include 'conexion/conexion.php'; ?>
            <h4>Dejanos tus datos y te contactamos:</h4>

            <form action="../admin/script_guarda_news.php" method="POST">
                <input type="text" value="Name" name="txtNombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
                <input type="email" value="Email" name="txtEmail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="btn-footer-enviar">
                  <input id="form2_submit" name="submit" class="tbtn-footer-enviar" value="Enviar" type="submit" />
                </div>
            </form>
        </div>

        <div class="col-md-6 footer-right">
            <h3>Nos ubicas en:</h3>
            <ul class="con-icons">
                <li>Dirección:   Av. Bolognesi #177 - Pariñas - Talara - Piura - Perú</li>
                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>(073) 381611</li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true">informes@nsc.edu.pe</span></a>
                </li>
            </ul>
            <ul id="tbsose">
                <li data-alt="Síguenos en Facebook"><a class="icon facebook" href="https://www.facebook.com/search/top/?q=abc%20se%C3%B1ora%20del%20carmen" target='_blank'>Síguenos en Facebook</a></li>
                <li data-alt="Síguenos en Twitter"><a class="icon twitter" href="URL Twitter">Síguenos en Twitter</a></li>
                <!--<li data-alt="Síguenos en Google+"><a class="icon googleplus" href="URL Google +" target='_blank'>Síguenos en Google+</a></li>-->
            </ul>
        </div>
       
        <div class="clearfix"></div>
    </div>
  </section>

  <section class="footer-separador">
      <div class="container">
        <div class="col-md-12 text-xs-center">
            <p class="copy-right" style="font-size=''">© 2017 Free Web Service. Todos los derechos Reservados</p>
        </div>
        <div class="clearfix"></div>
    </div>
  </section>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>

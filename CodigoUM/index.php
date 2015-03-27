<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('templates/Head.php');?>
    </head>
    <body>
        <!-- Navbar
        ============= -->
        <?php include ('templates/Menu.php');?>

         <!-- Main body
        ================== -->
        <div class="container" width="100%">
            <img src="img/inicio/principal.png"  width="100%" height="40%" />
        </div>
        <div class="wrapper"> 
            <!-- Historia
            ============= -->
            <div class="container marco ">
                <div width="50%" class="historia ajuste-marco">
                    <p>
                        La Iglesia Uni&oacute;n Misionera tiene historia y trayectoria en la vida cristiana evang&eacute;lica de nuestro pa&iacute;s. Desde sus inicios (1896) hasta el d&iacute;a de hoy, ha basado su fe en Jesucristo y ha respondido al mandato de ir y hacer disc&iacute;pulos. &nbsp;
                        Rechazamos todo esp&iacute;ritu de religiosidad y m&aacute;s bien ense&ntilde;amos a vivir el estilo de vida de Jes&uacute;s, din&aacute;mico en cada espacio en que nos desenvolvemos. &nbsp;
                        Bienvenido a nuestra casa UM para tomar herramientas espirituales y ser sal y luz en Guayaquil y Ecuador.
                        <br/>
                        <br/><b>Dr. David Aguirre &nbsp;&nbsp;&nbsp;</b>
                        <br/><b>PASTOR PRINCIPAL&nbsp;&nbsp;&nbsp; </b>
                    </p>
                </div>
            </div>

            <br><hr class="featurette-divider" /><br>

            <!-- Carousel
            ============= -->
            <div class="container marco">
                <div >
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="img/inicio/inicio1.jpg" alt="Chania">
                            </div>

                            <div class="item">
                              <img src="img/inicio/inicio2.jpg" alt="Jose">
                            </div>

                            <div class="item">
                              <img src="img/inicio/inicio3.jpg" alt="Flower">
                            </div>

                            <div class="item">
                              <img src="img/inicio/inicio2.jpg" alt="Flower">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <br><hr class="featurette-divider" /><br>

            <div class="container marco">
                <div class="col-xs-12 col-sm-6 col-md-6  ajuste-marco" style="text-align:center " width="100%">
                    <img src="img/inicio/vision.png" width="100%" height="100%" />
                </div>

                <div class="col-xs-offset-2 col-xs-8 col-sm-3 col-md-3 mision centrar">
                    <p class="inicial" style="padding-bottom:14px;"><label>C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comuni&oacute;n</p>
                    <p class="inicial" style="padding-bottom:14px;"><label>A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adoraci&oacute;n</p>
                    <p class="inicial" style="padding-bottom:14px;"><label>S</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Servicio</p>
                    <p class="inicial" style="padding-bottom:14px;"><label>E</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evangelismo</p>
                    <p class="inicial"><label>D</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discipulado</p>
                </div>
            </div>

             <br><hr class="featurette-divider" /><br>

            <div class="container marco">

                <div class="col-xs-6 col-sm-6 col-md-6  mision centrar historia ajuste-marco" style="text-align:center ">
                       <p><br>
                        Ser una comunidad fundamentada en la biblia, que tiene el retos de alcanzar y entrenar a sus miembros 
                        para vivir vidas santas y cumplir el mandato de " IR Y HACER DISC&Iacute;PULOS" para ganar nuestra ciudad 
                        y nuestro pa&iacute;s para Cristo.</p><br><br><br>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6  ajuste-marco" style="text-align:center " width="100%">
                    <img src="img/inicio/mision.png" width="100%" height="100%" />
                </div>
            </div> 
        </div>
        <!-- Foooter
        ================== -->
        <?php include ('templates/Footer.php');?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('templates/Head.php');?>
    </head>
    <body>
        <!-- Navbar
        ============= -->
        <?php include ('templates/Menu.php');?>

        <div class="container" width="100%">
            <img src="img/inicio/principal.png"  width="100%" height="40%" />
        </div>

        <!-- Main body
        ================== -->
        <div class="wrapper"> 
            <!-- Reflexion Semanal
            ============= -->
            <div class="container titleArea ajuste-texto" >
                <p class="titleAreas">&nbsp;&nbsp;REFLEXION SEMANAL</p>
            </div>
            <div class="container marco ">
                <div width="50%" class="parrafo ajuste-texto">
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                       Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el año 1500, 
                       cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacte; 
                       una galería de textos y los mezcló de tal manera que logr&oacute; hacer un libro de textos especimen.
                       Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                       Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el año 1500, 
                       cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacte; 
                       una galería de textos y los mezcló de tal manera que logr&oacute; hacer un libro de textos especimen.
                       Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                       Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el año 1500, 
                       cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacte; 
                       una galería de textos y los mezcló de tal manera que logr&oacute; hacer un libro de textos especimen.
                    </p>
                </div>
            </div>

            <br><hr class="featurette-divider" /><br>

            <!-- Carousel Inicio
            ============= -->
            <div class="container marco">
                <div >
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
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
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
                    </div>
                </div>
            </div>

            <br><hr class="featurette-divider" /><br>

            <!-- Evento Mensual
            ============= -->
            <div class="container titleArea ajuste-texto" >
                <p class="titleAreas">&nbsp;&nbsp;EVENTO MENSUAL</p>
            </div>
            <div class="container marco ">
                <div width="50%" class="parrafo ajuste-texto">
                    <p>
                        La Iglesia Uni&oacute;n Misionera tiene historia y trayectoria en la vida cristiana evang&eacute;lica de nuestro pa&iacute;s. Desde sus inicios (1896) hasta el d&iacute;a de hoy, ha basado su fe en Jesucristo y ha respondido al mandato de ir y hacer disc&iacute;pulos. &nbsp;
                        Rechazamos todo esp&iacute;ritu de religiosidad y m&aacute;s bien ense&ntilde;amos a vivir el estilo de vida de Jes&uacute;s, din&aacute;mico en cada espacio en que nos desenvolvemos. &nbsp;
                        Bienvenido a nuestra casa UM para tomar herramientas espirituales y ser sal y luz en Guayaquil y Ecuador.
                    </p>
                </div>
            </div>           
        </div>

        <!-- Foooter
        ================== -->
        <?php include ('templates/Footer.php');?>
    </body>
</html>

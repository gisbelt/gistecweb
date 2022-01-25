<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gistec Web</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
    <meta name="author" content="Gisbel Torres - info@gistecweb.com.ve">
    <link rel="SHORTCUT ICON" type="image/x-icon" href=""> 
    <!-- CSS propio -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- CSS Imagen Hover -->
    <link rel="stylesheet" href="../public/css/ihover-index.min.css">
    <link rel="stylesheet" href="../public/css/ihover-zoom.min.css">    
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-carousel.css">
    <!-- Anime.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Con theme les agrega un degradado -->
    <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <!-- <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}"> -->
    <!--  <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}"> -->

  </head>
  <body class="body1">
      <noscript>
        <p>Bienvenido a Mi Sitio</p>
        <p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript.
        Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p>
      </noscript>

      <!-- Header -->
      <header class="" id="header">
        
        <!-- container -->
        <!-- <div class="container"> -->

          <!-- Menú de navegación -->
          <nav class="navbar navbar-static-top" role="navigation">          
            <!-- navbar header -->
            <div class="navbar-header">

              <!-- Botón para dispositivos móviles -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-gt">
                  <span class="sr-only">Menú</span> 
                  <!-- Cada span es una rayita -->
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!--Título / Logo -->
              <a href="index.php" class="navbar-brand" target="">
                <!-- Gistec Web  -->
                <!-- <img src="../public/images/logo/logo1.png" alt="" class="img-responsive" style=""/> -->
              </a>

              <!-- Inicia el Menú -->
              <div class="collapse navbar-collapse" id="navegacion-gt">

                <ul class="nav navbar-nav pull-right lista-navegacion">
                  <li class="active"><a href="index.php" class="item-menu"><span class="fa fa-home"></span> Inicio</a></li>
                  <!-- dropdown -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle servicios item-menu" data-toggle="dropdown" role="button">
                      <span class="fa fa-laptop"></span> Servicios <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu row" role="menu">
                      <!-- 1 -->
                      <li class="dropdown-submenu col-sm-4 flecha-indicadora">                       
                        <ul>
                          <!-- 1.1 -->
                          <li class="test dropdown-header" id="design">Sitios Web <!-- <span class="caret"></span> --></li>
                          <li class="divider"></li>
                          <li><a href="#" tabindex="-1" class="design">Diseño Web</a></li>
                          <!-- 1.2 -->
                          <li><br /></li>
                          <li class="dropdown-header" id="marketing">Marketing Digital</li>
                          <li class="divider"></li>
                          <li> <a href="marketing.php" class="marketing" tabindex="-1" id="marketing">Redes Sociales</a></li>
                        </ul>
                      </li>
                      <!-- 2 -->
                      <li class="dropdown-submenu col-sm-4">
                        <ul>
                          <li class="dropdown-header">Servicio Técnico</li>
                          <li class="divider"></li>
                          <li><a href="#" class="soporte">Soporte Informático</a></li> 
                          <!-- <li><a href="servicio.php">Seguridad Informática</a></li> 
                          <li><a href="servicio.php">Hacking Ético</a></li> 
                          <li><a href="servicio.php">Escaner de Vulnerabilidad Web</a></li> -->
                        </ul>
                      </li>
                      <!-- 3 -->
                      <li class="dropdown-submenu col-sm-4">
                        <ul>
                          <li class="dropdown-header" id="hosting">Hosting / Dominio</li>
                          <li class="divider"></li>
                          <li><a href="hosting.php" class="hosting" tabindex="-1" id="hosting">Servicio de Hosting</a></li>
                          <li><a href="#" class="hosting" tabindex="-1" id="hosting">Dominios</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- dropdown -->
                  <li class=""><a href="#" class="item-menu" id="blog"><span class="fa fa-envelope"></span> Contacto</a></li>
                  <li class=""><a href="#" class="item-menu" id="noticias"><span class="fa fa-shopping-cart"></span> Tienda</a></li>
                  <li class=""><a href="#" class="item-menu" id="precios"><span class="fa fa-money"></span> Precios</a></li>
                  <li class=""><a href="empresa.php" class="item-menu" id="empresa"><span class="fa fa-industry"></span> Empresa</a></li>
                  
                  <form action="http://www.google.es/search" method="get" name="form1" class="form-inline navbar-form" role="search">
                    <div class="form-group">
                      <label class="sr-only" for="buscar">Buscar:</label>
                      <input type="text" class="form-control input-buscar" id="input-buscar" name="txtsearch" placeholder="Buscar" style="display:none;">                    
                      <button type="submit" class="btn btn-buscar ">
                        <span class="fa fa-search"></span>
                      </button>  
                    </div>                                  
                  </form>

                </ul>
               
                                
              </div><!-- collapse -->
            </div><!-- navbar header -->
          </nav><!-- Menú de navegación -->

        <!-- </div>container -->

      </header>
      <!-- Header -->
    
    
      <!--Slider-->
      <!-- <div class="container"> -->
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 slider1" style="height: 542px;padding-right: 15px;padding-left: 15px;">
          <!-- Carrusel -->
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            
            <!-- Indicadores -->
            <!-- Son las pequeñas bolitas -->
            <ol class="carousel-indicators">
              <!-- Tendrá el id que pusimos en el div de arriba -->
              <!-- data-slide-to="0" porque igual que en programacion se empeza con el 0, no con el 1 -->
              <!-- Al primer li hay que ponerle la clase "active" -->
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1"></li>
              <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>

            <!-- Contenedor de los slide (item)-->
            <!-- Al primer item hay que ponerle la clase "active" -->
            <!-- items es una clase personal -->
            <div class="carousel-inner" role="listbox">
              <!-- Dentro de "item" estará todo el texto, imagen y demás -->
              <div class="item items  active">

                <img src="../public/images/background.jpg" class="img-responsive img-slider" alt="">
                <div class="img-bg-sobre2 img-responsive"></div>
                <div class="img-bg-sobre img-responsive hidden-sm hidden-xs">
                  <hr class="raya-divisora" />
                  <h3>DESDE 5$</h3>
                  <hr class="raya-divisora" />
                </div>
                <div class="img-bg-sobre3 img-responsive hidden-sm hidden-xs">
                  <!-- no quiere agarrar el tamaño de esta imagen la solución fue ocultarla -->
                  <img src="../public/images/pc-escritorio.png" class="img-responsive" id="pc-escritorio" alt="">
                </div>
                <!-- Texto del slide (item) (Para poner el texto dentro de la sobreimag colocar div dentro de "img-bg-sobre")-->
                <!-- hidden-xs hidden-sm: ocultamos el texto en moviles y medianos -->
                <div class="carousel-caption">
                  <h3>Servicio Técnico Especializado</h3>
                  <p>Para PC - Laptops</p>
                </div>  

              </div>

            </div>
            
            <!-- Controles (flechitas)-->
            <!-- left: lo posicionamos a la izquierda -->
            <!-- carousel-control: se pone en donde está la clase "left o right" para el control -->
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left flechas" area-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <!-- right: lo posicionamos a la derecha -->
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right flechas" area-hidden="true"></span>
              <span class="sr-only">Siguente</span>
            </a>

          </div>  
        </div>
        </div><!-- row -->
      <!-- </div> -->
      <!--Fin-slider-->
      

      <!-- Contenido Contacto-->
      <section class="jumbotron jumbotron-gt">
        <!-- blog -->
        <div class="container">
          <div class="row">         
            <div class="col-xs-12 col-sm-12 col-md-12">

              <h2 class="text-center cont-h2 animate__animated animate__lightSpeedInLeft">
                Ponte en buenas manos, confía en nuestro
                equipo de trabajadores para crear y dar solución a tus computadoras.
                Darle alcance a tu negocio y diseñar tu página web.
                <strong>Y comprar nuestros artículos ¿Por qué no?</strong>
              </h2><br>
              
              <!-- Botón Contacto-Modal -->
              <a href="#ventanaContacto" class="btn-c btn btn-info btn-lg" data-toggle="modal">
                <span class="fa fa-envelope"></span> Contacto
              </a>
                            
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Contenido Contacto-->
      
            
      <!-- Contenido About-->
      <section class="about-us">
        <div class="container">
          <div class="row">
            <!-- 1 -->
            <div class="col-about col-xs-12 col-sm-6 col-md-4">
              <!-- Imagen -->
              <div class="img-responsive img-rounded ih-item circle colored effect1">
              <a href="servicio.php">
                  <div class="img">
                  <img src="../public/icons/herramienta2.ico" class="img-responsive animate__animated animate__pulse animate__infinite" alt="">
                  </div>
                  <!-- <div class="info">
                    <div class="info-back">
                      <h3>Diseño Web</h3>
                      <p>Tiendas Online</p>
                      <p>Wordpress a tu Medida</p>
                    </div>
                  </div> -->
              </a>
              </div>
              <!-- Imagen -->
              <h3 class="text-center about-h3">Servicio Técnico</h3>
              <p class="text-center about-p">
                Servicio Técnico Especializado para PC y Laptops,
                brindamos soluciones a tu alcance con precios cómodos para tu bolsillo. 
                Contáctanos y cuéntanos qué necesitas.
              </p>
              <p class="text-center about-p2"><a href="servicio.php" title="Servicio Técnico" class="leer-mas">Leer más</a></p>
            </div>
            <!-- 2 -->
            <div class="col-about col-xs-12 col-sm-6 col-md-4">
              <!-- Imagen -->
              <div class="img-responsive img-rounded ih-item circle colored effect1">
              <a href="marketing.php">
                  <div class="img">
                  <img src="../public/icons/ventas.ico" class="img-responsive animate__animated animate__pulse animate__infinite" alt="">
                  </div>
                  <!-- <div class="info">
                    <div class="info-back">
                      <h3>Marketing Online</h3>
                      <p>Redes Sociales</p>
                      <p>Posicionamiento SEO</p>
                    </div>
                  </div> -->
              </a>
              </div>
              <!-- Imagen -->
              <h3 class="text-center about-h3">Ventas</h3>
              <p class="text-center about-p">
                ¿Necesitas vender tu artículo? Nosotros te lo vendemos.
                Contamos con una tienda online, en la que también puede estar tu producto.
                Visita nuestra tienda ¡YA! 
              </p>
              <p class="text-center about-p2"><a href="#ventanaContacto" title="Escríbenos Para más Info" class="leer-mas" data-toggle="modal">Leer más</a></p>
            </div>
            <!-- 3 -->
            <div class="col-about col-xs-12 col-sm-12 col-md-4">
              <!-- Imagen -->
              <div class="img-responsive img-rounded ih-item circle colored effect1">
              <a href="precios.php">
                  <div class="img">
                  <img src="../public/icons/precios.ico" class="img-responsive animate__animated animate__pulse animate__infinite" alt="">
                  </div>
                  <!-- <div class="info">
                    <div class="info-back">
                      <h3>Precios</h3>
                      <p>Métodos de pago</p>
                      <p>Paquetes</p>
                    </div>
                  </div> -->
              </a>
              </div>
              <!-- Imagen -->
              <h3 class="text-center about-h3">Precios</h3>
              <p class="text-center about-p">
                ¡Envíanos tus datos y nos pondremos en contacto contigo!
                Contamos con los precios más económicos y accesibles. 
                Cotiza un presupuesto con nosotros a través de nuestro formulario.
              </p>
              <p class="text-center about-p2"><a href="precios.php" title="Pide tu Presupuesto" class="leer-mas">Leer más</a></p>
            </div>

          </div>
        </div>
        
      </section>
      <!-- Fin Contenido About-->
      
  


      <!-- Contenido diseño-web-index-->
      <section class="jumbotron jumbotron-gt cont-diseno-web-index" id="diseno-web-index">
        <img src="../public/images/businessman.jpg" class="img-responsive" alt="" style="height:449px !important;">
        <!-- <div class="img-bg-sobre-diseno-web-index img-responsive"></div> -->
        <!--  -->
        <div class="container">
          <div class="row">         
            <div class="col-xs-12 col-sm-12 col-md-12">
              
              <div class="cont-diseno-web-index-inside">
                <h1 class="text-center animate__animated animate__lightSpeedInLeft ">Diseño Web</h1>
                <h2 class="text-center">
                  Diseño de páginas webs tipo Landing Page (Toda la información en una sola página) 
                  y Página web Interactiva (Cuenta con las  secciones: Inicio, Nosotros, 
                  Productos/Servicios, Ubicación (Google Maps) y Contacto.  
                  Cuenta también con chat en vivo vía Whatsapp)
                  <!-- Acomodar texto para que calce en la imagen, y boton -->
                </h2><br>
                
                <!-- Botón Ir al blog -->
                <a href="design.php" class="btn btn-info btn-lg btn-manejoredes center-block" title="Diseño de Páginas Web">
                  Diseño Web <span class="arrow-right2 glyphicon glyphicon-circle-arrow-right" style="display:none;"></span>
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Contenido diseño-web-index-->




      <!-- Contenido Blog Ligado con sección de tienda-->
      <section class="jumbotron jumbotron-gt cont-blog">
        <!-- <img src="../public/images/posi-google.jpg" class="img-responsive" alt=""> -->
        <!-- blog -->
        <div class="container">
          <div class="row">         
            <div class="col-xs-12 col-sm-12 col-md-12">
              
              <div class="cont-blog-inside">
                <h2 class="text-center cont-h2">
                  Visita nuestra Tienda Online, donde tenemos los mejores artículos para tí
                
                </h2><br>
                
                <div class="monitor-tienda">
                  <img src="../public/images/monitor-tienda.png" class="img-responsive" alt="">
                </div>

                <!-- Botón Ir al blog btn btn-info btn-lg col-md-offset-5-->
                <div class="centrar_vertical">
                  <a href="gistecwebstore.com" class="btn-tienda" title="Tienda Online Gistec Web">
                    <span class=""></span> Tienda Gistec Web
                  </a>
                </div>
              </div>              
              
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Contenido Blog Ligado con sercción de tienda-->




      <!-- Contenido Servicios-->
      <section class="jumbotron jumbotron-gt cont-servicios">
        <img src="../public/images/computer-repair.jpg" class="img-responsive" alt="">
        
        <!-- servicios -->
          <div class="row">  
            <!-- 1  -->
            <div class="col-xs-12 col-sm-12 col-md-6">              
                            
            </div>
            <!-- 2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
              <div class="img-bg-sobre-servicios">
              </div>
              <div class="cont-servicios-inside">

                <h2>Servicio y Soporte Técnico Especializado para PC - Laptos</h2>

                <p>Te garantizamos buena atención y óptimos resultados</p>

                <p>¿Tu PC está lenta y nadie te lo soluciona?</p>

                <p>¿Tu PC tiene virus y no saber qué hacer?</p>

                <h2>¡Nosotros te lo solucionamos!</h2>

                <p>No tienes excusa para no darle un cariño a tu equipo</p>
                
                <h2>Trabajamos para brindar servicios de calidad</h2><hr />
                
                <!-- TOMAR EJEMPLO https://www.wix.com/business/website -->
                <!-- Botón Ir al servicios btn btn-info btn-lg -->
                <a href="servicio.php" class="pull-left btn-servicios" title="Servicio Técnico">
                  <span class=""></span> Servicio Técnico
                </a>

              </div>
            </div>

          </div>
      </section>
      <!-- Fin Contenido Servicios-->




      <!-- Contenido Noticias Amazon-->
      <section class="noticias">
        <div class="container">
          <div class="row">
            <div class="col-md-12 cont-h2">
              <h2 class="text-center">PROMOCIONES Y OFERTAS DE AMAZON</h2><br />
              <div id="Carousel" class="carousel carousel-amazon">

                <ol class="carousel-indicators">
                  <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#Carousel" data-slide-to="1"></li>
                  <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <!-- PRIMER ITEM -->
                  <div class="item active">
                    <div class="row">
                      <!-- 1 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <!-- <img src="../public/images/wordpress.png" alt="Image" style="max-width:100%;" class="img-responsive img-noticiasIndex"> -->
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption amazon">
                            <h3 class="text-center" id="nombreBlog" value="">
                              <a target="_blank" href="https://www.amazon.com/gp/product/B084RGSQSV/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B084RGSQSV&amp;linkCode=as2&amp;tag=gistecweb01-20&amp;linkId=30436cd3e1370962342137ca88ad6616&_encoding=UTF8&tag=gistecweb01-20&linkCode=ur2&linkId=3ace8bf625ef735ea4864996d877eb16&camp=1789&creative=9325">Mouse Razer Basilisk X HyperSpeed Wireless Gaming</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=gistecweb01-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                            </h3>
                            <iframe class="center-block" style="width:120px;height:240px;margin-bottom:20px;margin-top:20px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=gistecweb01-20&marketplace=amazon&region=US&placement=B084RGSQSV&asins=B084RGSQSV&linkId=42f29c4a88b37462042ea496a1632a43&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                            <button class="btn center-block btn-info leerMas" type="submit" data-id="nombreBlog" id="subitem1">Leer más</button>
                          </div>
                        </div>
                      </div>
                      <!-- 2 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <!-- <img src="../public/images/correomasivo.jpg" alt="Image" style="max-width:100%;" class="img-noticiasIndex"> -->
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption">
                            <h3 class="text-center">
                              <a target="_blank" href="https://www.amazon.com/gp/product/B082GR814B/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B082GR814B&amp;linkCode=as2&amp;tag=gistecweb01-20&amp;linkId=6403f5e3f38789634665b43abed29755&_encoding=UTF8&tag=gistecweb01-20&linkCode=ur2&linkId=7a4f943e4fc9f2f1638dc46126c144b0&camp=1789&creative=9325">Teclado Corsair K95 RGB Platinum</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=gistecweb01-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                            </h3>
                            <iframe class="center-block" style="width:120px;height:240px;margin-bottom:20px;margin-top:20px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=gistecweb01-20&marketplace=amazon&region=US&placement=B082GR814B&asins=B082GR814B&linkId=0369816d81939cb08025b67ad4e69fdb&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                            <button class="btn center-block btn-info leerMas" type="submit" id="subitem2">Leer más</button>
                          </div>
                        </div>
                      </div>
                      <!-- 3 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <img src="../public/images/seo.jpg" alt="Image" style="max-width:100%;" class="img-noticiasIndex">
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption">
                            <h3 class="text-center">¿Qué es la optimización SEO?</h3>
                            <p class="text-justify">
                              (En ingles SEO Search Engine Optimization), 
                              básicamente consiste en cubrir todos los requisitos técnicos que 
                              los buscadores de Internet (Google, Bing, etc)
                              piden para  [...] 
                            </p>
                            <button class="btn center-block btn-info leerMas" type="submit" id="subitem3">Leer más</button>
                          </div>
                        </div>
                      </div>

                    </div><!--.row-->
                  </div><!--.item-->

                  <!-- SEGUNDO ITEM -->
                  <div class="item">
                    <div class="row">
                      <!-- 1 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <img src="../public/images/ui-ux.png" alt="Image" style="max-width:100%;" class="img-noticiasIndex">
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption">
                            <h3>Diseño UI y UX, diferencias</h3>
                            <p class="text-justify">
                              Te has preguntado... ¿Cómo es que realizan las grandes empresas 
                              las interfaces de sus aplicaciones o sus sistemas? [...]
                            </p>
                            <button class="btn center-block btn-info leerMas" type="submit" id="subitem4">Leer más</button>
                          </div>
                        </div>
                      </div>
                      <!-- 2 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <img src="../public/images/sitioweb.jpg" alt="Image" style="max-width:100%;" class="img-noticiasIndex">
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption">
                            <h3 class="text-center">Ventajas de tener un Sitio Web</h3>
                            <p>
                              Según mi experiencia, un sitio web te puede solicionar la vida o bien
                              todo lo contrario. ¿Por qué? Esa es la pregunta del millón [...]
                            </p>
                            <button class="btn center-block btn-info leerMas" type="submit" id="subitem5">Leer más</button>
                          </div>
                        </div>
                      </div>
                      <!-- 3 -->
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <img src="../public/images/maps-google.jpg" alt="Image" style="max-width:100%;" class="img-noticiasIndex">
                          <!-- Colocamos otro div con la clase "caption" allí agregamos el título, por ejemplo. O un párrafo -->
                          <div class="caption">
                            <h3 class="text-center">¿Por qué debe poner su negocio en Google Maps?</h3>
                            <p>
                              Una buena manera de aumentar la visibilidad de su negocio en la web 
                              es añadir su empresa a Google Maps. [...] 
                            </p>
                            <button class="btn center-block btn-info leerMas" type="submit" id="subitem6">Leer más</button>
                          </div>
                        </div>
                      </div>

                    </div><!--.row-->
                  </div><!--.item-->

                </div><!-- carousel-inner -->
                
                <a data-slide="prev" href="#Carousel" class="left carousel-control">
                  <span class="glyphicon glyphicon-chevron-left flechas" area-hidden="true"></span>
                </a>
                <a data-slide="next" href="#Carousel" class="right carousel-control">
                  <span class="glyphicon glyphicon-chevron-right flechas" area-hidden="true"></span>
                </a>

              </div><!-- carousel -->            

            </div>
          </div>
        </div>
      </section>
      <!-- Fin Contenido Noticias Amazon -->
      

      <div class="powr-chat" id="f701db8f_1619908599"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
      

      <!-- Footer -->
      <?php include("../layouts/bottom.php"); ?>
      <!-- Footer --> 



      <!-- MODALES -->
      <?php include("modales.php"); ?>
      <!-- MODALES --> 
   
      
<!-- ********************************************************************************************************************************************************************* -->

    <!-- JQuery-smoove --> 
    <script  type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script  type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.6/jquery.smoove.min.js"></script>

    <script>
      // window.history.pushState(data, "", "index.html");
      $(document).ready(function(){
        $('.noticias').smoove({offset:'40%'});
        $('.about-us').smoove({offset:'40%'});

        $('.leerMas').click(function(){
          // var nombreBlog1 = document.getElementById('nombreBlog');
          // var nombreBlog = $('#nombreBlog');
          window.location="noticias.php";
        });
      
      });
              
    </script>
  </body>
</html>

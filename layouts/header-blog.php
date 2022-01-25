<!-- Header solo para blog y las que se vayan agregando -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gistec Web - Blog</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
  <meta name="author" content="Gisbel Torres - info@gistecweb.com.ve">
  <link rel="SHORTCUT ICON" type="image/x-icon" href=""> 
  <!-- CSS propio -->
  <link rel="stylesheet" href="../public/css/style-blog.css">
  <!-- CSS Imagen Hover -->
  <!--  <link rel="stylesheet" href="../public/css/ihover-empresa.min.css"> -->
  <link rel="stylesheet" href="../public/css/ihover-noticias.min.css">
  <link rel="stylesheet" href="../public/css/ihover-zoom.min.css">    
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="../public/css/bootstrap-carousel.css">
  <!-- Con theme les agrega un degradado -->
  <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/css/font-awesome.css">
  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
</head> 


 <body class="body1">
  <noscript>
    <p>Bienvenido a Mi Sitio</p>
    <p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript.
    Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p>
  </noscript>

  <!-- Header -->
  <header class="">
    
    <!-- container -->
    <!-- <div class="container"> -->
    
      <!-- Menú de navegación -->
      <nav class="navbar navbar-static-top" role="navigation">          
        <!-- navbar header -->
        <div class="navbar-header">

          <!-- Botón para dispositivos móviles -->
          <button type="button" class="navbar-toggle navbar-collapsed collapsed" data-toggle="collapse" data-target="#navegacion-gt">
              <span class="sr-only">Menú</span> 
              <!-- Cada span es una rayita -->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!--Título / Logo -->
          <a href="index.php" class="navbar-brand" target="">
            <!-- Gistec Web  -->
            <img src="../public/images/logo/logo1.png" alt="" class="img-responsive" style=""/>
          </a>

          <!-- Inicia el Menú -->
          <div class="collapse navbar-collapse" id="navegacion-gt">
            <ul class="nav navbar-nav pull-right lista-navegacion">
              <li class="active"><a href="index.php" class="item-menu"><span class="fa fa-home"></span> Home</a></li>
              <!-- dropdown -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle servicios item-menu" data-toggle="dropdown" role="button">
                  <span class="fa fa-laptop"></span> BLOG  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu row" role="menu">
                  <!-- 1 -->
                  <li class="dropdown-submenu col-sm-9 flecha-indicadora">
                    <ul>
                      <li class="test dropdown-header" id="">¡Lo más destacado! <!-- <span class="caret"></span> --></li>
                      <li class="divider"></li>
                      <li><a href="" tabindex="-1" class="">En tendencia</a></li>
                      <li><a href="" tabindex="-1" class="">Memes</a></li>
                      <li><a href="" tabindex="-1" class="">Ofertas Online</a></li>  
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- dropdown -->
              <li class=""><a href="#ventanaContacto" class="item-menu" id="" data-toggle="modal"><span class="fa fa-envelope"></span> Contacto</a></li>
              <li class=""><a href="promociones.php" class="item-menu" id="promociones"><span class="fa fa-info"></span> Promociones</a></li>
              <li class=""><a href="subscribir.php" class="item-menu" id="subscribir"><span class="fa fa-money"></span> Subscríbete</a></li>
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
  <!-- Header
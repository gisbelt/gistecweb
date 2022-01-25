<!-- Header solo para design,empresa,noticias,marketing,precios y las que se vayan agregando -->
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
  <link rel="stylesheet" href="../public/css/ihover-empresa.min.css">
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
  <header class="">
    
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
                      <li><a href="design.php" tabindex="-1" class="design">Diseño Web</a></li>
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
                      <li><a href="servicio.php">Soporte Informático</a></li> 
                    </ul>
                  </li>
                  <!-- 3 -->
                  <li class="dropdown-submenu col-sm-4">
                    <ul>
                      <li class="dropdown-header" id="hosting">Hosting / Dominio</li>
                      <li class="divider"></li>
                      <li><a href="hosting.php" class="hosting" tabindex="-1" id="hosting">Servicio de Hosting</a></li>
                      <li><a href="hosting.php" class="hosting" tabindex="-1" id="hosting">Dominios</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- dropdown -->
              <li class=""><a href="#ventanaContacto" class="item-menu" id="" data-toggle="modal"><span class="fa fa-envelope"></span> Contacto</a></li>
              <li class=""><a href="../blog/index.php" class="item-menu" id="noticias"><span class="fa fa-info"></span>Blog</a></li>
              <li class=""><a href="precios.php" class="item-menu" id="precios"><span class="fa fa-money"></span> Precios</a></li>
              <li class=""><a href="empresa.php" class="item-menu" id="empresa"><span class="fa fa-industry"></span> Empresa</a></li>
            
              <form action="http://www.google.es/search" method="get" name="form1" class="form-inline navbar-form" role="search">
                <div class="form-group">
                  <label class="sr-only" for="buscar">Buscar:</label>
                  <input type="text" class="form-control input-buscar" id="input-buscar" name="txtsearch" placeholder="Buscar:" style="display:none;" >                    
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
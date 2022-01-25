<!-- Footer -->
<div class="footer">
	<!-- EXTRA -->
	<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12">
	    <div class="mas-contenido">
	      <p class="text-center">Tel. (+58) 424-5289570 — info@gistecweb.com.ve — Barquisimeto, Venezuela</p>
	    </div>
	  </div>
	</div>
	<!-- PRIMERA FILA -->
	<div class="container primera-fila">
	  <div class="row">
	    <!-- col-md-offset-3: Desplazo la columna hacia la derecha en 3 -->
	    <div class="col-xs-12 col-md-3">
	      <!-- Tweets -->
	      <a class="twitter-timeline" data-height="218" data-theme="light" href="https://twitter.com/gistecweb">
	        Tweets by gistecweb
	      </a> 
	      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	      <!-- Follow -->
	      <a href="https://twitter.com/gistecweb" class="twitter-follow-button" data-show-count="false">
	        Follow @gistecweb
	      </a>
	      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	    </div> 

	    <div class="col-xs-12 col-md-3">
	        <h4 class="text-center">Empresa</h4>
	        <!-- Grupo de listas -->
	        <ul class="list-group">
	          <a class="list-group-item" href="empresa.php">Empresa</a>                  
	          <a class="list-group-item" href="empresa.php" id="footer-nuestra-vent">Nuestra Ventaja</a>
	          <a class="list-group-item" href="empresa.php" id="footer-equipo-web">Equipo Web</a>
	          <a class="list-group-item" href="empresa.php" id="footer-info-legal">Información Legal</a>
	        </ul>
	    </div>
	    
	    <div class="col-xs-12 col-md-3">
	        <h4 class="text-center">Servicios</h4>
	        <!-- Menú de navegación -->
	        <ul class="list-group">
	          <a class="list-group-item" href="design.php" >Diseño Web</a>
	          <a class="list-group-item" href="design.php">Tiendas Online</a>
	          <a class="list-group-item" href="design.php">Posicionamiento SEO</a>
	          <a class="list-group-item" href="marketing.php">Marketing Online</a>
	        </ul>
	    </div>
	    
	    <div class="col-xs 12 col-md-3">
	      <div class="fb-like" data-href="https://developers.facebook.com/gistecweb" data-width="265px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	    </div>

	  </div>
	</div>
	<!-- SEGUNDA FILA -->
	<footer>
	  <div class="contenedor-footer container">
	    <div class="row">
	      <div class="col-xs-12 col-md-12">
	        <ul class="list-group">
	          <li class="list">Gistec Web |</li> 
	          <li class="list">
	            <ul class="list-group" role="navigation">
	              <li class="list icon-social-links"><a class="links fa fa-twitter" href="http://www.twitter.com/gistecweb" title="Síguenos en twitter" target="_blank"></a></li>
	              <li class="list icon-social-links"><a class="links fa fa-facebook" href="http://www.facebook.com/gistecweb" title="Dale me gusta en Facebook" target="_blank"></a></li>
	              <li class="list icon-social-links"><a class="links fa fa-instagram" href="http://www.instagram.com/gistecweb" title="Síguenos en Instagram" target="_blank"></a></li>
	              |
	            </ul>
	          </li> 
	          <li class="list">Copyright 2016 © |</li> 
	          <li class="list">Todos los derechos reservados |</li> 
	          <li class="list">Made with <i class="fa fa-heart"></i> by Gisbel Torres. |</li>
	          <li class="list">Mapa Web</li>  
	        </ul>
	      </div>
	    </div>
	  </div>

	  <!-- GO UP -->
	  <span class="go-up fa fa-chevron-up"></span>
	</footer>

</div>
<!-- Footer --> 

<!-- **************************************************************************************************************************************** -->
    <!-- JQuery-v3.1.1 --> 
    <!-- <script src="../public/js/jquery-v3.1.1.js"></script> -->
    <script src="../public/js/jQuery-v3.5.0.min.js"></script> 
    <!-- jQuery 2.1.4 -->
    <!-- <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script> -->
    <!-- BootStrap -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap-carousel.js"></script>    
    <script src="../public/js/bootstrap-select.min.js"></script>
    
    <!-- AdminLTE App -->
    <!-- // <script src="../public/js/app.min.js"></script> -->
    <!-- Local.js -->
    <script src="../public/js/local.js"></script> 

    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
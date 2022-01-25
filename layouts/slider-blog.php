<!--Slider-->
<!-- <div class="container"> -->
	<br>
	<div class="row">
		<div class="col-md-12 slider1">
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
		    <div class="carousel-inner" role="listbox">
		      <!-- Dentro de "item" estará todo el texto, imagen y demás -->
		      <div class="item items active d-flex flex-column justify-contain-center align-items-center">
		        <img src="../public/images/posi-seo-slider.jpg" class="img-responsive" alt="">
		        <!-- hidden-xs hidden-sm: ocultamos el texto en moviles y medianos -->
		        <div class="img-bg-sobre img-responsive">
		        	<div class="carousel-caption">
		          	<h3 text="center">¡El mejor contenido para ti!</h3>
		          	<p><strong>Con temas de tu interés</strong></p>
		          	<p><a href="#ventanaSubscribete" class="btn btn-danger btn-lg flex-column flex-sm-row" data-toggle="modal">Subscríbete</a></p>
		        	</div> 
		        </div> 
		      </div>

		      <div class="item items d-flex flex-column justify-contain-center align-items-center">
		        <img src="../public/images/posi-seo-slider.jpg" class="img-responsive" alt="">
		        <div class="img-bg-sobre img-responsive">
		        	<!-- Texto del slide (item) -->
			        <div class="carousel-caption ">
			          <h3>¡Visita nuestro Sitio Oficial!</h3>
			          <p><strong>Diseñamos las mejores Páginas Web para ti.</strong></p>
		          	  <p><a href="../index.html" class="btn btn-info btn-lg flex-column flex-sm-row">Click Aquí</a></p>
			        </div> 
		        </div>
		         
		      </div>

		      <div class="item items d-flex flex-column justify-contain-center align-items-center">
		        <img src="../public/images/tiendas-online.png" class="img-responsive" alt="">
		        <div class="img-bg-sobre img-responsive">
		        	<!-- Texto del slide (item) -->
			        <div class="carousel-caption">
			          <h3>Tiendas Online</h3>
			          <p><strong>Crea tu propia Tienda en internet.</strong></p>
			        </div>  
		        </div>
		        
		      </div>
		    </div>
		    
		    <!-- Controles (flechitas)-->
		    <!-- left: lo posicionamos a la izquierda -->
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
	</div>
<!-- </div> -->
<!--Fin-slider-->
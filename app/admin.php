

  <!-- Inicio HTML / Head / Body / Header -->
  <?php include("../layouts/header.php"); ?>
  <!-- Inicio HTML / Head / Body / Header -->



<!-- Contenido admin-->
<section class="jumbotron jumbotron-gt">
  <!-- blog -->
  <div class="container">
    <div class="row">         
      <div class="col-xs-12 col-sm-12 col-md-9">

        <ul class="nav nav-pills nav-justify" id="nav-pills">
		      <li role="presentation" ><a href="#" id="noti-blog" class="btn btn-info btn-lg">Noticias / Blog</a></li>
		      <li role="presentation" ><a href="#" id="tiendas-online" class="btn-pills">Tiendas Online</a></li>
		      <li role="presentation" class=""><a href="#" id="posi-seo" class="btn-pills">Posicionamiento SEO</a></li>     
        </ul>
        <br>
        
        <!-- Primer Panel  -->
        <div class="panel panel-default col-xs-12 col-sm-12 col-md-12" id="panel-agre-blog" style="" >
          <div class="panel-body">
            <div class="col-md-12">
              <h3>Creación de Blogs: </h3>
              <ul class="nav nav-tabs" role="tablist">
                <!-- data-toggle="tab": para indicar que será una tab -->
                <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tabs">Agregar Blog</a></li>
                <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tabs">Modificar Blog</a></li>
                <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tabs">Eliminar Blog</a></li>
              </ul>
              <!-- Contenido de cada uno de nuestros "tabs" -->
              <div class="tab-content">
                <!-- Agregar BLog -->
                <div role="tabpanel" class="tab-pane active" id="seccion1">
                  
                  <form action="" method="" name="form2" >
                    <input type="hidden" name="action" value="submit">
                    <div class="form-group">
                      <label class="sr-only control-label col-md-4" for="titulo" >Título del Blog:</label>
                      <div class="col-md-12">
                        <input type="text" class="input1 form-control" id="titulo" name="titulo" placeholder="Título del Blog *">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="sr-only control-label col-md-4" for="descripcion">Descripción:</label>
                      <div class="col-md-12">
                        <textarea name="descripcion" id="descripcion" class="input1 form-control" cols="5" rows="6" placeholder="Descrición del Blog o Resumen *"></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-4" for="telefono">Imagen:</label>
                      <div class="col-md-12">
                        <input type="file" name="imagen" id="imagen" class="input1 form-control">
                      </div>
                    </div>

                    <div class="col-md-8" style="margin-top: 15px;">
                      <button type="submit" class="btn btn-info">Enviar</button>
                    </div>
             	  </form>
                     
                </div>  
                <!-- Métodos de Pago -->
                <div role="tabpanel" class="tab-pane" id="seccion2">
                  <h3>Todos nuestro métodos de pagos son 100% seguros.</h3>
                  <h3>Aceptamos depósitos bancarios, paypal, transferencias bancarias y efectivo. Moneda Nacional y USD ($)</h3>
                  <h3>Banco de Venezuela:</h3>
                  Trabajamos con el Banco de Venezuela, solicita el Nro de cuenta
                  Apenas concretes tu presupuesto. O Enviándonos un correo a contacto@gistecweb.com.ve
                  <h3>Banco Provincial:</h3>
                  Trabajamos con el Banco Provincial, solicita el Nro de cuenta
                  Apenas concretes tu presupuesto. O Enviándonos un correo a contacco@gistecweb.com.ve
                  <h3>¿Podemos Reunirnos?</h3>
                  Si y si usted desea, hasta tomarnos un café y hablar de sus proyectos.
                  Estamos ubicados en la ciudad de Barquisimeto en Venezuela. 
                </div>  
                <!-- Paquetes -->
                <div role="tabpanel" class="tab-pane" id="seccion3">
                  <div class="col-xs-12 col-sm-6 col-md-4 tab-paquetes">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-info active">Paquete Básico</li>
                      <li class="list-group-item">Diseño Web (12 pestañas)</li>
                      <li class="list-group-item">Diseño Personalizado</li>
                      <li class="list-group-item">Adaptado a Smartphones y Tablets</li>
                      <li class="list-group-item">Redes Sociales</li>
                      <li class="list-group-item">Formulario de Contacto</li>
                      <li class="list-group-item">Google Maps</li>
                      <li class="list-group-item">15 correos corporativos</li>
                      <li class="list-group-item">Dominio gratis (.com.ve)</li>
                      <li class="list-group-item">Hosting</li>
                      <li class="list-group-item badge">Bsf. 150.000,00</li>
                    </ul>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-4 tab-paquetes">
                    <ul class="list-group">
                      <li class="list-group-item active">Paquete Premium</li>
                      <li class="list-group-item">Diseño Web (Pestañas ilimitadas)</li>
                      <li class="list-group-item">Diseño Personalizado</li>
                      <li class="list-group-item">Fomularios Ilimitados</li>
                      <li class="list-group-item">Adaptado a Smartphones y Tablets</li>
                      <li class="list-group-item">Redes Sociales</li>
                      <li class="list-group-item">Dominio gratis (.com.ve)</li>
                      <li class="list-group-item">Google Maps</li>
                      <li class="list-group-item">30 Correos Corporativos</li>
                      <li class="list-group-item">Hosting</li>
                      <li class="list-group-item badge">Bsf. 200.000,00</li>
                    </ul>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-4 tab-paquetes">
                    <ul class="list-group">
                      <li class="list-group-item active bg-info">Paquete Emprendedor</li>
                      <li class="list-group-item">Diseño Web (5 pestañas)</li>
                      <li class="list-group-item">Diseño Personalizado</li>
                      <li class="list-group-item">Adaptado a Smartphones y Tablets</li>
                      <li class="list-group-item">1 Formulario</li>
                      <li class="list-group-item">Redes Sociales</li>
                      <li class="list-group-item">Google Maps</li>
                      <li class="list-group-item">Dominio y Hosting gratis</li>
                      <li class="list-group-item badge">Bsf. 100.000,00</li>
                    </ul>
                  </div>
                </div>  
                
              </div>
              <!-- Contenido de cada uno de nuestros "tabs" -->
            </div>
          </div>
        </div>        

      </div>

      <!-- Sidebar -->
		<div class="hidden-xs hidden-sm col-md-3">
		  <aside class="">
		      <div class="well">
		        <h3 class="text-center">Contáctenos</h3>
		        <p class="text-center">Y venda por internet con nuestros diseños web</p>
		        <p class="text-center"><a href="#ventanaContacto" class="btn btn-info" data-toggle="modal">Contáctenos</a></p>
		      </div>
		  </aside> 
		  <aside class="">
		      <div class="well">
		        <h3 class="text-center">¡Tenemos los mejores precios para ti!</h3>
		        <p class="text-center">Consulta nuestros precios y ofertas</p>
		        <p class="text-center"><a href="{{ url('precios/precio') }}" class="btn btn-info">Consultar</a></p>
		      </div>
		  </aside>
		  <aside class="">
		      <div class="well">
		        <h3 class="text-center">Horario de Trabajo:</h3>
		        <p class="text-center">Lunes a Viernes - 08:00am - 5:00pm</p>
		        <p class="text-center">Horario de atención online es de 24 horas</p>
		        <p class="text-center">Tel. (+58) 424-5289570</p>
		        <p class="text-center">Información al cliente: info@gistecweb.com.ve</p>
		      </div>
		  </aside> 
		</div>
	  <!-- Sidebar -->

    </div>
  </div>
</section>
<!-- Fin Contenido admin-->
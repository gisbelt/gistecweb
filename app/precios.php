  
  <!-- Inicio HTML / Head / Body / Header -->
  <?php include("../layouts/header.php"); ?>
  <!-- Inicio HTML / Head / Body / Header -->
    
    
  <!--Slider-->
  <?php include("../layouts/slider.php"); ?>
  <!--Fin-slider-->
  

  <!-- Contenido Precios-->
  <section class="jumbotron jumbotron-gt">
    <!-- blog -->
    <!-- <div class="container"> -->
      <div class="row">    
        
        <div class="col-xs-12 col-sm-12 col-md-12 justify-content-center precios">
          <!-- <div class="img-bg-sobre-precios img-responsive"></div> -->
          <div class="emp">
            <p style="color: #fff;" class="animate__animated animate__lightSpeedInLeft">
              Escríbenos
            </p>
          </div> 
          <div class="precios-header" id="">
            <!-- <li role="presentation" class="active"><a href="#" id="precios1" class="btn btn-info btn-lg">Precios</a></li>       -->
            <br>
            <p class="text-center">
              «Es importante estar pendiente de su buzón de entrada o carpeta spam en su email de nuestra respuesta.»
            </p>
          </div>
          <br>
          
          <!-- Primer Panel  -->
          <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8" id="panel-precios" style="" >
            <div class="panel-body">
              <div class="col-md-12">
                <p class="text-center" id="presupuesto-p">Presupuesto: </p>
                <ul class="nav nav-tabs" role="tablist">
                  <!-- data-toggle="tab": para indicar que será una tab -->
                  <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tabs" style="color: #0081A1;"><strong>Formulario</strong></a></li>
                  <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tabs" style="color: #0081A1;"><strong>Métodos de Pago</strong></a></li>
                  <li role="presentation"><a href="#seccion3" aria-controls="seccion2" data-toggle="tab" role="tabs">Paquetes</a></li>
                </ul>
                <!-- Contenido de cada uno de nuestros "tabs" -->
                <div class="tab-content">
			            <!-- Formulario -->
                  <div role="tabpanel" class="tab-pane active" id="seccion1">
      						  <div class="col-md-12"><br>
                      <h5 class="" ><mark style="color: #0081A1;">Trabajamos con Moneda Nacional y USD ($)</mark></h5>
      						  	<h5 class="" ><mark style="color: #0081A1;">Este formulario es solo si requiere un presupuesto personalizado para su empresa</mark></h5>
                      <br>
      						  </div>
                    <?php
			              $action=$_REQUEST['action'];
			              if ($action=="")    /* display the contact form */
			              {
			              ?>
			              <form action="" class="form-precios" method="POST" enctype="multipart/form-data">
			                <input type="hidden" name="action" value="submit">
			                <div class="form-group">
			                  <label class="sr-only control-label col-md-4" for="nombre" >Nombre o Razón Social:</label>
			                  <div class="col-md-12">
			                    <input type="text" class="input1 form-control" id="nombreP" name="nameP" placeholder="Nombre o Razón Social *" required>
			                  </div>
			                </div>
			                
			                <div class="form-group">
			                  <label class="sr-only control-label col-md-4" for="email">Email:</label>
			                  <div class="col-md-12">
			                    <input type="text" class="input1 form-control" id="emailP" name="emailP" placeholder="Email *" required>
			                  </div>
			                </div>
			             
			                <div class="form-group">
			                  <label class="sr-only control-label col-md-4" for="telefono">Teléfono:</label>
			                  <div class="col-md-12">
			                    <input type="text" class="input1 form-control" id="phoneP" name="phoneP" placeholder="Teléfono *" required>
			                  </div>
			                </div>

			                <div class="form-group">
			                  <label class="control-label col-md-4" for="donde" style="color: #0081A1;">¿Dónde Nos Encontró?:</label>
			                  <div class="col-md-12">
                          <select name="whereP" class="form-control input1" id="whereP" required>
                            <option value="" selected>Seleccione un opción</option>
                            <option value="Busqueda en internet">Búsqueda en internet</option>
                            <option value="Recomendacion">Recomendación</option>
                            <option value="Redes Sociales">Redes Sociales</option>
                            <option value="Otro">Otro</option>
                          </select>
			                  </div>
			                </div>

                      <div class="form-group">
                        <label class="control-label col-md-4" for="donde" style="color: #0081A1;">Moneda a Cotizar:</label>
                        <div class="col-md-12">
                          <select name="coinP" class="form-control input1" id="coinP" required>
                            <option value="" selected>Seleccione un opción</option>
                            <option value="Bolivares Fuertes">Bolívares Soberanos</option>
                            <option value="Dolares Americanos">Dólares Americanos</option>
                            <option value="Otro">Otro</option>
                          </select>
                        </div>
                      </div>

			                <div class="form-group">
			                  <label class="sr-only control-label col-md-4" for="ciudad">Ciudad o Estado:</label>
			                  <div class="col-md-12">
			                    <input type="text" class="input1 form-control" id="ciudadP" name="cityP" placeholder="Ciudad o Estado *" required>
			                  </div>
			                </div>
			            
			                <div class="col-md-12">
			                  <textarea name="messageP" id="" class="form-control" cols="5" rows="6" placeholder="Detalles de su Requerimiento *" required></textarea>
			                </div> <br /><br />
	
			                <div class="col-md-8" style="margin-top: 15px;">
			                	<button type="submit" class="btn btn-info">Enviar</button>
			                </div>
			              </form> <!-- Formulario -->
			              <?php
			              } 
			              else /* send the submitted data */
			              {
		                  $name=$_REQUEST['nameP'];
		                  $email=$_REQUEST['emailP'];
                      $phone=$_REQUEST['phoneP'];
                      $where=$_REQUEST['whereP'];
                      $coin=$_REQUEST['coinP'];
                      $city=$_REQUEST['cityP'];
		                  $message=$_REQUEST['messageP'];
		                  if (($name=="")||($email=="")||($message==""))
	                    {
	                      echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	                    }
		                  else
                      {       
	                      $from="From: $name<$email>\r\nReturn-path: $email \nTelefono: $phone \nDonde nos encontro: $where \nModena a Cotizar: $coin \nCiudad: $city";
	                      $subject="Message sent using your contact form";
	                      mail("contacto@gistecweb.com.ve", $subject, $message, $from);
	                      echo "Message sent!";
	                      ?>
	                      <script>
	                      alert("Message sent!");
	                      </script>
	                      <?php
	                     }
		                }  
			              ?>    
                  </div>  
			            <!-- Métodos de Pago -->
                  <div role="tabpanel" class="tab-pane metodos" id="seccion2">
                    <div class="col-md-12 metodos-cont">
                      <h3>Todos nuestro métodos de pagos son 100% seguros.</h3>
                      <h3>Aceptamos depósitos bancarios, paypal, transferencias bancarias y efectivo USD ($)</h3>
                      <br><br>
                      
                      <div class="div-img-metodo">
                        <div class="img-metodo">
                          <img src="../public/images/bdv.jpg" alt="" class="img-responsive"/>
                        </div>
                        <div class="img-metodo">
                          <img src="../public/images/provincial.png" alt="" class="img-responsive"/>
                        </div>
                        <div class="img-metodo">
                          <img src="../public/images/banesco.jpg" alt="" class="img-responsive"/>
                        </div>
                        <p>
                          Solicita el Nro de cuenta apenas concretes tu presupuesto. 
                          O Enviándonos un correo electrónico a contacto@gistecweb.com.ve
                        </p>
                      </div>
                      
                      <h3>¿Podemos Reunirnos?</h3>
                      <p>
                        Si y si usted desea, hasta tomarnos un café y hablar de sus proyectos.
                        Estamos ubicados en la ciudad de Barquisimeto en Venezuela. 
                      </p>
                      <!-- Esto está listo, continuar con hosting (continuar) y diseño web -->
                    </div>
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
                        <li class="list-group-item badge">Bsf. 800.000,00</li>
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
                        <li class="list-group-item badge">Bsf. 1.000.000,00</li>
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
                        <li class="list-group-item badge">Bsf. 700.000,00</li>
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
        <!-- <div class="hidden-xs hidden-sm col-md-3">
          <aside class="">
              <div class="well">
                <h3 class="text-center">Contáctenos</h3>
                <p class="text-center">Y venda por internet con nuestros diseños web</p>
                <p class="text-center"><a href="#ventanaContacto" class="btn btn-info" data-toggle="modal">Contáctenos</a></p>
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
        </div> -->
        <!-- Sidebar -->

      </div>
    <!-- </div> --> <!-- Container -->
  </section>
  <!-- Fin Contenido Precios-->
  


  <!-- Footer -->
  <?php include("../layouts/bottom.php"); ?>
  <!-- Footer --> 

  

  <!-- MODALES -->
  <?php include("modales.php"); ?>
  <!-- MODALES -->


<!-- **************************************************************************************************************************************** -->
    
  </body>
</html>

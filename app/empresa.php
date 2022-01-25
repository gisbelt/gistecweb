
  <!-- Inicio HTML / Head / Body / Header -->
  <?php include("../layouts/header.php"); ?>
  <!-- Inicio HTML / Head / Body / Header -->
    
    
      <!--Slider-->
      <?php include("../layouts/slider.php"); ?>
      <!--Fin-slider-->
      

      <!-- Contenido Empresa-->
      <section class="jumbotron jumbotron-gt empresa">
        <!-- <div class="container"> -->
          <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12">

              <!-- <ul class="nav nav-pills nav-justify" id="nav-pills">
					      <li role="presentation" ><p>Sobre Nosotros</p></li>
					      <li role="presentation"><a href="#" id="nuestra-vent" class="btn-pills">Nuestra Ventaja</a></li>
					      <li role="presentation"><a href="#" id="equipo-web" class="btn-pills">Equipo Web</a></li>
                <li role="presentation"><a href="#" id="info-legal" class="btn-pills">Información Legal</a></li>      
              </ul> -->
              <div class="emp" id="emp">
                <p class="animate__animated animate__lightSpeedInLeft">
                  Sobre Nosotros
                </p>
              </div>              	
              <!-- Empresa -->
              <div class="empresa-cont" id="panel-empresa" style="">
					      <div class="empresa-cont-body col-md-12">
                  <h3 class="text-center">
                    ¿Quiénes somos?      
                  </h3>
                  <h3 class="text-info text-center">
                    En Gistec Web, somos un pequeño equipo de Diseñadores Web 
                    encargados de satisfacer las necesidades del cliente. 
                    Desarrollamos sitios web profesionales adaptados a móviles, 
                    con la mejor optimización del mismo, aparte nos encargamos de impulsar 
                    sus ventas en el mercado gracias a nuestras estrategias de marketing online.
                  </h3>
                  <br><br>
                  <p class="divisor"></p>
      					</div>
			       	</div>
      				
      				<!-- Equipo Web -->
      				<div class="panel panel-default col-xs-12 col-sm-12 col-md-9" id="panel-equipo-web" style="display:none">
      					<div class="panel-body panel-center">
                  <!-- efecto hover -->
                  <div class="img-equipo-web ih-item circle colored effect1">
                    <a href="#">
                      <div class="spinner"></div>
                      <div class="img"><img src="../public/images/Carnet.jpg" alt="img" class="img-responsive"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>Gisbel Torres</h3>
                          <p>Diseñadora Web y Fundadora</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- end efecto hover -->
      					</div>
      				</div>
              <!-- Información Legal -->
              <div class="panel panel-default col-xs-12 col-sm-12 col-md-9" id="panel-info-legal" style="display:none" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <h3>Términos y Condiciones: </h3>
                    <ul class="nav nav-tabs" role="tablist">
                      <!-- data-toggle="tab": para indicar que será una tab -->
                      <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tabs">Datos</a></li>
                      <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tabs">Uso Legal</a></li>
                      <li role="presentation"><a href="#seccion3" aria-controls="seccion2" data-toggle="tab" role="tabs">Política de Pago</a></li>
                      <li role="presentation"><a href="#seccion4" aria-controls="seccion3" data-toggle="tab" role="tabs">Uso de cookies</a></li>
                    </ul>
                    <!-- Contenido de cada uno de nuestros "tabs" -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="seccion1">
                        <h5>Dirección:</h5>
                        Barquisimeto, Venezuela.
                        <h5>Titular:</h5>
                        Gistec Web, Soluciones Tecnológicas
                        <h5>Teléfonos:</h5>
                        0424-5289570 / 0251-2663076
                      </div>  

                      <div role="tabpanel" class="tab-pane" id="seccion2">
                        <h3>1</h3>
                        Cualquier servicio/producto realizado por Gistec Web 
                        tendrá al Cliente como único dueño primario de la obra.
                        <h3>2</h3>
                        El Cliente debe respetar los derechos de autor y propiedad intelectual 
                        propios de la compañia o de terceras partes.
                        <h3>3</h3>
                        Una vez finalizado el servicio, el Cliente deberá de cumplir 
                        con todos los reglamentos y leyes respecto al uso de privacidad, internet 
                        y publicidad.
                      </div>  

                      <div role="tabpanel" class="tab-pane" id="seccion3">
                        <h3>1</h3>
                        Para solicitar alguna orden de servicio, el Cliente deberá contactarnos por
                        medio de nuestro correo electrónico <em>info@gistecweb.com.ve</em> y concretar por
                        el mismo la validez del presupuesto una vez llegado a un acuerdo. La validez del 
                        mismo tendrá un período de 15 días naturales. 
                        <h3>2</h3>
                        Al finalizar el proceso de validez de presupuesto, el Cliente deberá cancelar 
                        el 50% del importe en concepto de depósito. 
                        El 50% restante al finalizar el servicio satisfactoriamente. 
                        <h3>3</h3>
                         El pago de los servicios podrá efectuarse mediante depósito, PayPal o transferencia 
                         bancaria, estando sujetos a sus propios Términos y Condiciones de uso
                      </div>  
          
                      <div role="tabpanel" class="tab-pane" id="seccion4" style="margin-top:15px;">
                        <h3 class="text-info">
                          Esta web utiliza cookies de terceros para ofrecerte una mejor experiencia
                          y servicio. Al navegar o utilizar nuestros servicios, aceptas el uso que 
                          hacemos de ellas. Puedes cambiar la configuración de cookies en cualquier
                          momento.
                        </h3>
                      </div>  
                    </div>
                    <!-- Contenido de cada uno de nuestros "tabs" -->
                  </div>
                </div>
              </div>

            </div>
            <!-- Sidebar -->
            <?php // include("../layouts/sidebar.php"); ?>
            <!-- Sidebar -->
            
          </div>
        <!-- </div> --> <!-- Container -->
      </section>
      <!-- Fin Contenido Empresa-->
      

      


      <!-- Nuestra Ventaja -->
      <section class="nuestra-vent" id="panel-nuestra-vent">
        <div class="row">          
          <div class="nuestra-vent-cont col-xs-12 col-sm-12 col-md-12">
          
            <div class="nuestra-vent-cont-body1 col-xs-5 col-sm-5 col-md-5">
              <div class="col-md-12">

                <h4 class="text-center">
                  UNA PEQUEÑA EMPRESA PERO CON GRAN VISIÓN A FUTURO   
                </h4>
              
                <br/>
                <!-- Barras de progreso -->
                <div class="col-md-6 nuestra-vent-item" id="nuestra-vent-item1">                  
                  <img src="../public/images/pasion1.png" class="img-responsive" alt="">                                                  
                  <p class="text-center">Pasión 100%</p>               
                  <span class="sr-only">100% Completado</span>
                </div>

                <div class="col-md-6 nuestra-vent-item" id="nuestra-vent-item2">                  
                  <img src="../public/images/conocimiento.png" class="img-responsive" alt="">              
                  <p class="text-center">Conocimiento 100%</p>                  
                  <span class="sr-only">100% Completado</span>
                </div>

                <div class="col-md-12 nuestra-vent-item" id="nuestra-vent-item3">                  
                  <img src="../public/images/pasion1.png" class="img-responsive img-especial" alt="">
                  <p class="text-center">Responsabilidad 100%</p>              
                  <span class="sr-only">100% Completado</span>
                </div>

              </div>
            </div>
            <!-- Barras de progreso -->
          
            <div class="nuestra-vent-cont-body2 col-xs-7 col-sm-7 col-md-7">
              <div class="col-md-12">
                <h3 class="text-center h3-1">
                  ¿Cómo lo hacemos?
                </h3>
                <h3 class="text-info text-center h3-2">
                  Con profesionalidad, inteligencia, compromiso y 
                  con la mejor satisfacción posible para que nuestros clientes 
                  logren sus sueños de poner a crecer su negocio en las máximas áreas posibles.
                </h3>
                <h3 class="text-info text-center h3-3">
                  Nacemos con la misión de ofrecer a las empresas de todos los tamaños y 
                  recursos una estrategia online que les permita cumplir sus objetivos de negocio.
                </h3>
              </div>
            </div>
          
          </div>
        </div>
      </section>
      <!-- Nuestra Ventaja -->


      <!-- Footer -->
      <?php include("../layouts/bottom.php"); ?>
      <!-- Footer --> 
      


      <!-- MODALES -->
      <?php include("modales.php"); ?>
      <!-- MODALES -->


<!-- **************************************************************************************************************************************** -->
      <script>
        $(document).ready(function(){
          $('.nuestra-vent').smoove({offset:'40%'});        
        });
      </script>
  </body>
</html>

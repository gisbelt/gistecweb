
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
          
            <div class="nuestra-vent-cont-body2 col-xs-7 col-sm-7 col-md-7" style="margin-bottom: 10rem;">
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

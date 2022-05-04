<!-- MODALES -->
<!-- Modal Contacto-->
<div class="modal fade" id="ventanaContacto" role="dialog">                  
  <div class="modal-dialog">
      <!-- Contenido Modal -->
      <div class="modal-content">

        <!-- Header Modal-->
        <div class="modal-header">
          <!-- El data-dismiss="modal" nos da la funcionalidad de cerrar -->
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-tittle">Contáctanos</h4>
          <h5>Tel. (+58) 424 528-9570 — info@gistecweb.com.ve</h5>
          <h5>¡Envíanos tus datos y nos pondremos en contacto contigo!</h5>
        </div>

        <!-- Body Modal-->
        <div class="modal-body">
          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    /* display the contact form */
          {
          ?>
          <form action="" class="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            <div class="form-group">
              <label class="sr-only control-label col-md-4" for="nombre" >Nombre:</label>
              <div class="col-md-8">
                <input type="text" class="input1 form-control" id="nombre" name="name" placeholder="Enter Name.. *" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="sr-only control-label col-md-4" for="email">Email:</label>
              <div class="col-md-8">
                <input type="text" class="input1 form-control" id="email" name="email" placeholder="Enter E-mail.. *" required>
              </div>
            </div>
         
            <div class="form-group">
              <label class="sr-only control-label col-md-4" for="telefono">Teléfono:</label>
              <div class="col-md-8">
                <input type="text" class="input1 form-control" id="telefono" name="phone" placeholder="Enter Phone..">
              </div>
            </div>
        
            <div class="col-md-8">
              <textarea name="message" id="" class="form-control" cols="5" rows="6" placeholder="Enter Message.. *" required></textarea>
            </div> 
        </div>
        <!-- Footer Modal-->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

          </form> <!-- Formulario -->
          <?php
          } 
          else /* send the submitted data */
          {
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $phone=$_REQUEST['phone'];
            $message=$_REQUEST['message'];
            if (($name=="")||($email=="")||($message==""))
            {
            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
            }
            else{  /* Segundo else */    
              $from="From: $name<$email> \r\nReturn-path: $email \n$phone";
              $subject="Message sent using your contact form";
              mail("info@gistecweb.com.ve", $subject, $message, $from);
          ?>    

      </div>
      <!-- Fin Contenido Modal -->
  </div>                  
</div>
</div>
<!-- Fin Modal Contacto-->
        <?php 
          echo "<span class='email-sent fa fa-envelope'> Email sent!</span>"; 
          } /* Segundo else */
        } /* send the submitted data */
        ?>



<!-- Modal Subscríbete -->
<div class="modal fade" id="ventanaSubscribete" role="dialog">                  
  <div class="modal-dialog">
    <!-- Contenido Modal -->
    <div class="modal-content">

      <!-- Header Modal-->
      <div class="modal-header">
        <!-- Botón para cerrar la ventana con sus atibutos y clase correspondiente (clase="close") -->
        <!-- El data-dismiss="modal" nos da la funcionalidad de cerrar -->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-tittle">Contáctanos</h4>
        <h5>Tel. (+58) 424 528-9570 — info@gistecweb.com.ve - contacto@gistecweb.com.ve</h5>
      </div>

      <!-- Body Modal-->
      <div class="modal-body">
        <?php
        $action=$_REQUEST['action'];
        if ($action=="")    /* display the contact form */
        {
        ?>
        <form action="" class="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="submit">
          <h4 class="col-md-12">¡Solo necesitamos tu correo y nombre!</h4>  
          <div class="form-group">                       
            <label class="sr-only control-label col-md-4" for="email">Email:</label>
            <div class="col-md-8">
              <input type="text" class="input1 form-control" id="email" name="email" placeholder="Enter E-mail.. *" required>
            </div>
          </div>

          <div class="form-group">
            <label class="sr-only control-label col-md-4" for="nombre" >Nombre:</label>
            <div class="col-md-8">
              <input type="text" class="input1 form-control" id="nombre" name="name" placeholder="Enter Name.. *" required>
            </div>
          </div>      
       
      </div>
      <!-- Footer Modal-->
      <div class="modal-footer">
        <p class="small col-md-12">Revisa tu e-mail apenas te subscribas. Tranquilo, no hacemos spam :)</p>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Subscribirse</button>
      </div>

        </form> <!-- Formulario -->
        <?php
        } 
        else /* send the submitted data */
        {
          $email=$_REQUEST['email'];
          if (($name=="")||($email=="")||($message==""))
          {
          echo "All fields are required, please fill <a href=\"\">the form</a> again.";
          }
          else{  /* Segundo else */    
            $from="From: $name<$email> \r\nReturn-path: $email \n$phone";
            $subject="Message sent using your contact form";
            mail("info@gistecweb.com.ve", $subject, $message, $from);
        ?>    

    </div>
    <!-- Fin Contenido Modal -->
  </div>                  
</div>
</div>
<!-- Fin Modal Subscríbete -->
        <?php 
          echo "<span class='email-sent fa fa-envelope'> Email sent!</span>"; 
          } /* Segundo else */
        } /* send the submitted data */
        ?>


<!-- MODALES -->
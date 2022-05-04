

  <!-- Inicio HTML / Head / Body / Header -->
  <?php include("../layouts/header.php"); ?>
  <!-- Inicio HTML / Head / Body / Header -->



<!-- Contenido admin-->
<section class="jumbotron jumbotron-gt">
  <!-- blog -->
  <div class="container">
    <div class="row">         
      <div class="col-xs-12 col-sm-12 col-md-12">

        <ul class="nav nav-pills nav-justify" id="nav-pills">
		      <li role="presentation" ><a href="#" id="noti-blog" class="btn btn-info btn-lg">Noticias / Blog</a></li>    
        </ul>
        <br>
        
        <!-- Primer Panel  -->
        <div class="panel panel-default col-xs-12 col-sm-12 col-md-12" id="panel-agre-blog" style="" >
          <div class="panel-body">
            <div class="col-md-12">
              <h3>Creación de Blogs: </h3>
              <ul class="nav nav-tabs" role="tablist">
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
                
              </div>
              <!-- Contenido de cada uno de nuestros "tabs" -->
            </div>
          </div>
        </div>        

      </div>

    </div>
  </div>
</section>
<!-- Fin Contenido admin-->
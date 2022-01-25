$(document).ready(function(){
    //Header
	  //dropdown-menu aparecer con flecha mouse      
    // $(selector).hover(inFunction, outFunction)
    // inFunction: Función a ejecutarse cuando el cursor está encima del elemento indicado.
    // outFunction: Función callback a ejecutarse cuando el cursor ya no está encima del elemento indicado.
    $(".servicios").hover(function(){
      $(".dropdown-menu").css("display","block");
      $('.dropdown-menu').css("visibility","visible");
    },function(){
      $('.dropdown-menu').css("display","none");
    });
    //Se hace la misma función pero con dropdown-menu para que se pueda seleccionar 
    //lo que hay en el dropdown-menu
    $(".dropdown-menu").hover(function(){
      $(".dropdown-menu").css("display","block");
      $('.dropdown-menu').css("visibility","visible");
    },function(){
      $('.dropdown-menu').css("display","none");
    });   
    // dropdown-menu aparecer con flecha mouse  

    //dropdown-menu
    jQuery(document).on('click', '.dropdown', function(e) {
      e.stopPropagation()
    })
    //dropdown-menu

    // Botón buscar, deslizar
    $('.btn-buscar').click(function(e){
      e.preventDefault();
      if($('input[name=txtsearch]').val() == ""){
        $('.input-buscar').slideToggle('slow');
      }
      // $(".input-buscar").addClass('input-buscar');
    });
    //Header



    // Footer
  	// Go up
  	$('.go-up').click(function(){
    	$('body, html').animate({
     	 scrollTop: '0px'
   	 	}, 450);
 	  });
	 
  	$(window).scroll(function(){
    	if( $(this).scrollTop() > 0 ){
     	 $('.go-up').slideDown(250);
    	} else {
      	$('.go-up').slideUp(250);
     	 // $('.go-up').fadeOut('fast');
    	}
 	  });

    // Al hacer click, abrir panel correcto. Click a items del Footer
    $('#footer-nuestra-vent').click(function(){
      // window.location="empresa.php";
      $(location).attr('href', 'empresa.php');
      $('#panel-nuestra-vent').slideToggle('slow');
      // $("#panel-empresa").css("display","none");
    });    
    // Footer
});
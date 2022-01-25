$(document).ready(function(){
    // $('.noticias').smoove({offset:'40%'});
    // $('.about-us').smoove({offset:'40%'});
    // $('.cont-noti-blog').smoove({offset:'40%'});
    
    // Header
    // clase para header pegajoso
    // var altura = $('.header').offset().top;  
    // $(window).on('scroll', function(){
    //   if ( $(window).scrollTop() > altura ){
    //     $('.header').addClass('menu-fixed');
    //   } else {
    //     $('.header').removeClass('menu-fixed');
    //   }
    // });


    // dropdown-menu aparecer con flecha mouse      
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


    // Botón para dispositivos móviles
    $('.navbar-toggle').click(function(e){
      e.preventDefault();
      // $('#header').slideDown(250);
      $('.slider1').css('margin-top','300px');  
    });
    // Botón para dispositivos móviles


	  // Ir hasta el sitio 
	  $('#blog').click(
	    function(){
	        $('html,body').animate({
	          scrollTop: $(".jumbotron-gt").offset().top
	        }, 500);
	    }
  	);

  	$('.soporte').click(
	    function(){
	      $('html,body').animate({
            scrollTop: $(".cont-servicios").offset().top
        }, 1000);
	    }
  	);

    $('.design').click(
      function(){
        $('html,body').animate({
            scrollTop: $(".cont-diseno-web-index").offset().top
        }, 1000);
      }
    );

    $('.marketing').click(
      function(){
        $('html,body').animate({
            scrollTop: $(".about-us").offset().top
        }, 1000);
      }
    );

    $('#precios').click(
      function(){
        $('html,body').animate({
            scrollTop: $(".about-us").offset().top
        }, 1000);
      }
    );
    
    // Botón buscar, deslizar
    $('.btn-buscar').click(function(e){
      e.preventDefault();
      if($('input[name=txtsearch]').val() == ""){
        $('.input-buscar').slideToggle('slow');
        $('.input-buscar').focus();
      }
      // $(".input-buscar").addClass('input-buscar');
    });
    // Header



    // Contenido Noticias 
    // Mostrar cada blog seleccionado o cliqueado en el carousel noticias
    // $('#subitem1').click(function(){
    //   window.location="noticias.php";
    //   $("#blog2").css("display","none");
    //   $("#blog3").css("display","none");
    //   $("#blog4").css("display","none");
    //   $("#blog5").css("display","none");
    //   $("#blog6").css("display","none");  
    // });
    // Contenido Noticias 



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




  	// $('.dropdown-toggle').mouseenter(function(){
    //      $('.dropdown-menu').fadeTo('fast', 1.00);
    //      // $(".col-dropdown-menu").css("display","none");
    //  });
    //  $('dropdown-toggle').mouseleave(function(){
    //      $('.dropdown-menu').css("display","block");
    //  });




    // Empresa.php
    // Abrir Paneles de empresa
    $('#emp').click(function(e){
      e.preventDefault();
      $('#panel-empresa').slideToggle('slow');
      $('#panel-equipo-web').css("display","none");
      $('#panel-nuestra-vent').css("display","none");
      $('#panel-info-legal').css("display","none");
    });
    $('#equipo-web').click(function(e){
      e.preventDefault();
      $('#panel-equipo-web').slideToggle('slow');
      $("#panel-empresa").css("display","none");
      $('#panel-nuestra-vent').css("display","none");
      $('#panel-info-legal').css("display","none");
    });
    $('#nuestra-vent').click(function(e){
      e.preventDefault();
      $('#panel-nuestra-vent').slideToggle('slow');
      $("#panel-empresa").css("display","none");
      $('#panel-equipo-web').css("display","none");
      $('#panel-info-legal').css("display","none");
    });
    $('#info-legal').click(function(e){
      e.preventDefault();
      $('#panel-info-legal').slideToggle('slow');
      $("#panel-empresa").css("display","none");
      $('#panel-equipo-web').css("display","none");
      $('#panel-nuestra-vent').css("display","none");
    });
        
    // Hover del nav-pills de empresa
    $('.btn-pills').hover(
      function(){
        $(this).addClass('btn btn-info'); 
      },
      function(){
        $(this).removeClass('btn btn-info');
      }
    );

    //Que las letras queden blancas al dar click
    // $('#info-legal').click(
    //   function(){
    //     $(this).addClass('click-nav-pills'); 
    //   },
    //   function(){
    //     $(this).removeClass('click-nav-pills');
    //   }
    // );
   
    // Quitar clase "active" del nav-pills de empresa
    
    // Empresa.php




    // Design.php
    // Abrir Paneles de design
    $('#des').click(function(e){
      e.preventDefault();
      $('#panel-diseño-web').slideToggle('slow');
      $('#panel-tiendas-online').css("display","none");
      $('#panel-posi-seo').css("display","none");
    });
    $('#tiendas-online').click(function(e){
      e.preventDefault();
      $('#panel-tiendas-online').slideToggle('slow');
      $("#panel-diseño-web").css("display","none");
      $("#panel-wordpress-medida").css("display","none");   
    });
    $('#wordpress-medida').click(function(e){
      e.preventDefault();
      $('#panel-wordpress-medida').slideToggle('slow');
      $("#panel-diseño-web").css("display","none");
      $("#panel-tiendas-online").css("display","none");   
    });
    // Design.php




    // Noticias.php 
    // Obtener valores de index.php sección noticias
    



    // Precios.php
    // Abrir Paneles
    $('#precios1').click(function(e){
      e.preventDefault();
      $('#panel-precios').slideToggle('slow');  
    });




    // Marketing.php
    $('#marketing-online').click(function(e){
      e.preventDefault();
      $('#panel-marketing').slideToggle('slow');
      $("#panel-redes").css("display","none");   
    });
    $('#redes-sociales').click(function(e){
      e.preventDefault();
      $('#panel-redes').slideToggle('slow');
      $("#panel-marketing").css("display","none");   
    });
    $('#posi-seo').click(function(e){
      e.preventDefault();
      $('#panel-posi-seo').slideToggle('slow');
      $("#panel-marketing").css("display","none");
      $("#panel-redes").css("display","none");   
    });


    $(".btn-mark-precios").hover(function(){
      $(".arrow-right").css("display","inline-block");
      $('.arrow-right').css("visibility","visible");
    },function(){
      $('.arrow-right').css("display","none");
    });

    $(".btn-manejoredes").hover(function(){
      $(".arrow-right2").css("display","inline-block");
      $('.arrow-right2').css("visibility","visible");
    },function(){
      $('.arrow-right2').css("display","none");
    });
    // Marketing.php




    // hosting.php
    // 1
    $("#hover-principal1").hover(function(){
      $("#h2-hover1").css("color","white");
      $("#p-hover1").css("color","white");

      $("#h2-hover2").css("color","#1B5058");
      $("#p-hover2").css("color","#1B5058");

      $("#h2-hover3").css("color","#1B5058");      
      $("#p-hover3").css("color","#1B5058");
    },function(){
      $('.col-hosting-body-text').css("color","#1B5058");
    });
    // 2
    $("#hover-principal2").hover(function(){
      $("#h2-hover2").css("color","white");
      $("#p-hover2").css("color","white");

      $("#h2-hover1").css("color","#1B5058");
      $("#p-hover1").css("color","#1B5058");
      
      $("#h2-hover3").css("color","#1B5058");      
      $("#p-hover3").css("color","#1B5058");
    },function(){
      $('.col-hosting-body-text').css("color","#1B5058");
    });
    // 3
    $("#hover-principal3").hover(function(){
      $("#h2-hover3").css("color","white");
      $("#p-hover3").css("color","white");

      $("#h2-hover1").css("color","#1B5058");
      $("#p-hover1").css("color","#1B5058");
      
      $("#h2-hover2").css("color","#1B5058");      
      $("#p-hover2").css("color","#1B5058");
    },function(){
      $('.col-hosting-body-text').css("color","#1B5058");
    });
    // hosting.php

    // Modales.php
    // Email sent

});



/*
 * custom script
 * 
*/

$(document).ready(function(){
   $(window).on('scroll', function() {
      if($(window).scrollTop() >= 100){
         //$('#menu-head').animate({height:50},100);
          $('#menu-head').addClass('fixed');
       }
      if($(window).scrollTop() <= 100){
          $('#menu-head').removeClass('fixed');
       }
   });
    /*
     *  codigo para desplazamiento lento
     */
    //click en un enlace de la lista
   $('#link').on('click',function(e){
        //prevenir el comportamiento predeterminado del enlace
        e.preventDefault();
        //obtenemos el id del elemento en que debemos posicionarnos
        var strAncla=$(this).attr('href');
         //utilizamos body y html, ya que dependiendo del navegador del navegador uno u otro no funciona
        $('body,html').stop(true,true).animate({
        //realizamos la animacion hacia el ancla
        scrollTop:$(strAncla).offset().top
        },1500);
    });
    
    });
		
$(document).ready(function(){
 
    $('.ir-arriba').click(function(){
      $('body, html').animate({
          scrollTop: '0px'
      }, 300);
    });
   
    $(window).scroll(function(){
     console.log($(this).scrollTop());
      if( $(this).scrollTop() > 0 ){
        $('.ir-arriba').slideDown(300);
      } else {
        $('.ir-arriba').slideUp(300);
      }
    });

    $('.sections').onePageNav({
      scrollSpeed: 750,
      scrollThreshold: 0,
      begin: function(){
       console.log("Estas en el inicio");
      },
      end: function(){
         console.log("Estas en el final");
      },
    });
   
   });
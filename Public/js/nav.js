    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
        $('#nav').removeClass('navmax');
         $('#nav').addClass('navmax2');
         $('#navbrand').removeClass('navbrandmn');
         $('#navbrand').addClass('navbrandmn2');
        
        } else {
            $('#nav').removeClass('navmax2');
         $('#nav').addClass('navmax');
         $('#navbrand').removeClass('navbrandmn2');
         $('#navbrand').addClass('navbrandmn');
        
        }
      });
    });



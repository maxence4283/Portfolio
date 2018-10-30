$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 40) {
            $("#nav").css("background" , "white");
            $("#nav").addClass("border-bottom2");
        }
        else{
            $("#nav").css("background" , "#dfe6e9");
            $("#nav").removeClass("border-bottom2");
        }
    })
})

document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});

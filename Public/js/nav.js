$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 40) {
            $("#nav").css("background" , "#F0F0F0");
        }
        else{
            $("#nav").css("background" , "#dfe6e9");
        }
    })
})

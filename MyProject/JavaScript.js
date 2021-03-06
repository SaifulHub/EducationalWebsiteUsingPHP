$(document).ready(function(){

    $(window).scroll(function(){
        if(this.scrollY > 50){
            $('.navbar').addClass("sticky");
        }
        else{
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 200){
            $('.scrollup').addClass("show");
        }
        else{
            $('.scrollup').removeClass("show");
        }
    });

    // scroll up functioning
    $('.scrollup').click(function(){
        $('html').animate({scrollTop: 0});
    });

    // toggle-menu
    $('.menu-btn').click(function(){
        $('.navbar .head .options').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });


    
    // typing animation 
	var typed = new Typed(".typing", {
        strings : ["Mathematics","Theorem","English Grammer","Bangla Grammer","Geometry","Programming","Web Development"],
        typeSpeed:100,
        backSpeed:60,
        loop: true
    });

});










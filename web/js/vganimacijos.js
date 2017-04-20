/**
 * Created by Vartotojas1 on 4/20/2017.
 */
jQuery(document).ready(function($) {
    new WOW().init();
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
    });

    $(".swipebox").swipebox();

    $("#owl-demo").owlCarousel({
        items : 1,
        lazyLoad : true,
        autoPlay : true,
        navigation : false,
        navigationText :  false,
        pagination : true,
    });

    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
    };

    $().UItoTop({ easingType: 'easeOutQuart' });
});
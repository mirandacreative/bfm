jQuery(document).ready(function($) {


    /*==================================
    =            Front Page            =
    ==================================*/
    if($('body').hasClass('home')){
        
        /*  Hero Slider  */
        $('.slick-slider').slick({
            // lazyLoad: 'ondemand',
            // slidesToShow: 3,
            // slidesToScroll: 1
            autoplay: true,
            autoplaySpeed: 6000,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            arrows: true,
            dots: true,
            pauseOnHover: false
        });

    }
    
});


/*===========================================
=            Affiliations slider            =
===========================================*/
function initCarousel($c, $w){
    $c.show().carouFredSel({
        align: false,
        items: Math.min($c.children().length - 1, 12),
        scroll: {
            items: 1,
            duration: 7500,
            timeoutDuration: 0,
            easing: 'linear',
            pauseOnHover: 'immediate'
        }
    });

    
    $w.bind('resize.affiliations', function() {
        var nw = $w.width();
        if (nw < 990) {
            nw = 990;
        }

        $c.width(nw * 3);
        $c.parent().width(nw);

    }).trigger('resize.affiliations');
}
/*=====  End of Affiliations slider  ======*/

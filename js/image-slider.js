(function($){

    var initializeBlock = function( $block ) {

        var acfb_loop = $($block).find(".swiper-container").data('loop');
        var acfb_delay = $($block).find(".swiper-container").data('delay') * 1000;
        var acfb_effect = $($block).find(".swiper-container").data('effect');
        var acfb_centerslide = $($block).find(".swiper-container").data('centerslide');
        var acfb_gutter = $($block).find(".swiper-container").data('gutter');
        var acfb_autoplay = $($block).find(".swiper-container").data('autoplay');
        var acfb_autoheight = $($block).find(".swiper-container").data('autoheight');
        var acfb_slidesperview = $($block).find(".swiper-container").data('slidesperview');


        if(acfb_slidesperview > 1 && acfb_effect === 'fade'){
            acfb_effect = 'slide';
        } else if(acfb_slidesperview > 1 && acfb_effect === 'cube'){
            acfb_effect = 'slide';
        } else if(acfb_slidesperview > 1 && acfb_effect === 'flip'){
            acfb_effect = 'slide';
        }


        $acfb_slider_script = $block.find('.swiper-container');

        var sliderObj = {
            direction: 'horizontal',
            centeredSlides: acfb_centerslide,
            slidesPerView: acfb_slidesperview,
            autoHeight: acfb_autoheight,
            spaceBetween: acfb_gutter,
            effect: acfb_effect,
            simulateTouch: false,
            loop: true,
            autoplay: {
            delay: acfb_delay,
            disableOnInteraction: false,
            },


            // If we need pagination
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },

           // Navigation arrows
            navigation: {
              nextEl: '.acfb-button-next',
              prevEl: '.acfb-button-prev',
            },

        }

        if (!eval(acfb_autoplay)) {
            delete sliderObj.autoplay;
        }

        if (!eval(acfb_autoheight)) {
            delete sliderObj.autoHeight;
        }


        var mySwiper = new Swiper($acfb_slider_script, sliderObj);

    }

    // Initialize each block on page load (front end).
    $(document).ready(function(){

        $('.acfb_slider_block').each(function(){
            initializeBlock( $(this) );
        });
    });

    // Initialize dynamic block preview (editor).
    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=image-slider', initializeBlock );
    }

})(jQuery);

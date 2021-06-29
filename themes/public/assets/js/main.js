$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;

    //------ Preloader Active ------//

    $(window).on('load', function() {
        $(".preloader").fadeOut("slow");;
    });
	
	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

    //-------- Active Sticky Js ----------//
    $(".sticky-header").sticky({topSpacing:0});
    // $('select').niceSelect();

    $(".top-cart").click(function (event) {
        $(".mini-cart").slideToggle();  // Might cause problems depending on implementation
        event.stopPropagation();

        $(document).one('click', function (e) {
            if(!$(e.target).is('.top-cart')) {
                $(".mini-cart").slideUp(); 
            }
        });
    });
    $(".top-cart-2a").click(function (event) {
        $(".mini-cart-2a").slideToggle();  
        event.stopPropagation();

        $(document).one('click', function (e) {
            if(!$(e.target).is('.top-cart-2a')) {
                $(".mini-cart-2a").slideUp(); 
            }
        });
    });

 
    // -------   Active Mobile Menu-----//

    $(".mobile-btn").on('click', function(e){
        e.preventDefault();
        $(".nav-menu").slideToggle();
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".nav-menu").addClass('mobile-menu');
    });


    $('.custom-department-dropdown .dropdown-item').on( "mouseover", function() {
        var id = $(this).attr('data-related'); 
        $(".side-menu-desc").each(function(){
            $(this).css('transform', 'scaleX(0)');
            if($(this).attr('id') == id) {
                $(this).css('transform', 'scaleX(1)');
            }
        });
    });

    $(".header-top-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        dots: false,
        nav: false,
        margin:0
    });

    $(".mob-cat-slider1").owlCarousel({
        autoplay: true,
        items: 3,
        loop: true,
        dots: false,
        margin:8,
        center:true,
        responsive: {
            0:{
                items:3
            },
            500:{
                items:3
            }
        },
    });
    $('#customers-testimonials').owlCarousel( {
        loop: true,
        center: true,
        items: 3,
        margin: 30,
        autoplay: true,
        dots:true,
    nav:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });


    //-------- Drop Down Jquery --------//

    // Add slideDown animation to Bootstrap dropdown when expanding.

    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.

    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    // $('.side-menu-desc').on('click', function(){
    //     return false;
    // })

    //--------- Accordion Icon Change ---------//

    // $('.collapse').on('shown.bs.collapse', function(){
    //     $(this).parent().find(".lnr-arrow-right").removeClass("lnr-arrow-right").addClass("lnr-arrow-left");
    // }).on('hidden.bs.collapse', function(){
    //     $(this).parent().find(".lnr-arrow-left").removeClass("lnr-arrow-left").addClass("lnr-arrow-right");
    // });


    $('.electronic-banner-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
    })
    $('.organic-banner-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        animateOut: 'fadeOut',
    });
    $('.organic-middle-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
    });
    $('.furniture-banner-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        autoplay: false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',
    })
    $('.electronic-middle-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        animateOut: 'fadeOut',
    })
    $('.active-testimonial-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        animateOut: 'fadeOutLeft',
        animateIn: 'fadeInRight',
    })
  
    //--------- Best Seller Carousel ---------//

    $('.best-seller-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 4,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            },
            1200:{
                items:4,
            }
        }
    })

    //--------- Best Seller Carousel ---------//

    $('.popular-item-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 4,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            },
            1200:{
                items:4,
            }
        }
    })
    $('.active-popular-jewellery-product').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 4,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            },
            1200:{
                items:4,
            }
        }
    })

    $('.organic-product-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 5,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            },
            1200:{
                items:5,
            }
        }
    })
    $('.next-trigger').click(function() {
        $(".organic-product-carousel").trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.prev-trigger').click(function() {
        $(".organic-product-carousel").trigger('prev.owl.carousel');
    });

    $('.organic-product-carousel-3col').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 3,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            }
        }
    })
    $('.next-trigger').click(function() {
        $(".organic-product-carousel-3col").trigger('next.owl.carousel');
    })
        // Go to the previous item
    $('.prev-trigger').click(function() {
        $(".organic-product-carousel-3col").trigger('prev.owl.carousel');
    });

    $('.organic-product-carousel-6col').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 6,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav: false
            },
            1200:{
                items:6,
            }
        }
    })
    $('.next-trigger').click(function() {
        $(".organic-product-carousel-6col").trigger('next.owl.carousel');
    })
        // Go to the previous item
    $('.prev-trigger').click(function() {
        $(".organic-product-carousel-6col").trigger('prev.owl.carousel');
    });

    $('.organic-product-carousel-2col').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 2,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            }
        }
    })
    $('.next-trigger').click(function() {
        $(".organic-product-carousel-2col").trigger('next.owl.carousel');
    })
        // Go to the previous item
    $('.prev-trigger').click(function() {
        $(".organic-product-carousel-2col").trigger('prev.owl.carousel');
    });

    $('.organic-product-carousel-sidebar').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 3,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        margin: 30,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:2,
                nav: false
            },
            1200:{
                items:3,
            }
        }
    })
    $('.next-trigger').click(function() {
        $(".organic-product-carousel-sidebar").trigger('next.owl.carousel');
    })
        // Go to the previous item
    $('.prev-trigger').click(function() {
        $(".organic-product-carousel-sidebar").trigger('prev.owl.carousel');
    });

    $('.jewellery-banner-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ['<span class="lnr lnr-arrow-right"></span>', '<span class="lnr lnr-arrow-left"></span>'],
        animateOut: 'fadeOut'
    })

    $('.quick-view-carousel-details').owlCarousel({
        loop: true,
        dots: true,
        items: 1,
    })

    //---- Jewellery Tab Active ------//
    
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

     // Slick nav
    $(function(){
        $('.all-slick').slicknav({
            closedSymbol: '<span class="lnr lnr-arrow-right"></span>',
            openedSymbol:'<span class="lnr lnr-arrow-down"></span>'            
        });
    });


    //------ Modal Inner Carousel ------//

    var owlCarousel = $('.quick-view-carousel');
        $('#exampleModal').on('shown.bs.modal', function (event) {
            owlCarousel.owlCarousel({
            loop: true,
            items: 1
        });
    });
    $('#exampleModal').on('hidden.bs.modal', function (event) {
        owlCarousel.data('owlCarousel').destroy();
        owlCarousel.find('.owl-stage-outer').children().unwrap();
    });

     if ($('.enumerator').length > 0) { 
        $(".js-minus_btn").on('click', function() {
            var inputEl = jQuery(this).parent().children().next();
            var qty = inputEl.val();
            if (jQuery(this).parent().hasClass("js-minus_btn"))
                qty++;
            else
                qty--;
            if (qty < 0)
                qty = 0;
            inputEl.val(qty);
        });


        $(".js-plus_btn").on('click', function() {
            var inputEl = jQuery(this).parent().children().next();
            var qty = inputEl.val();
            if (jQuery(this).hasClass("js-plus_btn"))
                qty++;
            else
                qty--;
            if (qty < 0)
                qty = 0;
            inputEl.val(qty);
        });
    }





    //----- Active No ui slider --------//



    $(function(){

        if(document.getElementById("price-range")){
        
        var nonLinearSlider = document.getElementById('price-range');
        

        noUiSlider.create(nonLinearSlider, {
            connect: true,
            behaviour: 'tap',
            start: [ 0, 30000 ],
            range: {
                // Starting at 500, step the value by 500,
                // until 4000 is reached. From there, step by 1000.
                'min': [ 0 ],
                '10%': [ 500, 100 ],
                '50%': [ 4000, 500 ],
                'max': [ 30000 ]
            }
        });


        var nodes = [
            document.getElementById('lower-value'), // 0
            document.getElementById('upper-value')  // 1
        ];

        // Display the slider value and how far the handle moved
        // from the left edge of the slider.
        nonLinearSlider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
            nodes[handle].value = values[handle]; 
            
        });


        }

    });


    
    //-------- Have Cupon Button Text Toggle Change -------//

    $('.have-btn').on('click', function(e){
        e.preventDefault();
        $('.have-btn span').text(function(i, text){
          return text === "Have a Coupon?" ? "Close Coupon" : "Have a Coupon?";
        })
        $('.cupon-code').fadeToggle("slow");
    });

    // $('.load-more-btn').on('click', function(e){
    //     e.preventDefault();
    //     $('.load-product').fadeIn('slow');
    //     $(this).fadeOut();
    // });
    
 
    
  //------- Start Quantity Increase & Decrease Value --------//




    var value,
        quantity = document.getElementsByClassName('quantity-container');

    function createBindings(quantityContainer) { 
        // console.log(quantityContainer.getElementsByClassName('quantity-amount')[0]);
        var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
        var increase = quantityContainer.getElementsByClassName('increase')[0];
        var decrease = quantityContainer.getElementsByClassName('decrease')[0];
        increase.addEventListener('click', function () { increaseValue(quantityAmount); });
        decrease.addEventListener('click', function () { decreaseValue(quantityAmount); });
    }

    function init() {
        for (var i = 0; i < quantity.length; i++ ) {
            createBindings(quantity[i]);
        }
    };

    function increaseValue(quantityAmount) { 
        value = parseInt(quantityAmount.value, 10);

        console.log(quantityAmount, quantityAmount.value);

        value = isNaN(value) ? 0 : value;
        value++;
        quantityAmount.value = value;
    }

    function decreaseValue(quantityAmount) {
        value = parseInt(quantityAmount.value, 10);

        value = isNaN(value) ? 0 : value;
        if (value > 1) value--;

        quantityAmount.value = value;
    }

  init();

//------- End Quantity Increase & Decrease Value --------//







            // ========================== //
            // 2017 Countdown JS
            // ========================== //

            var countdown = new Date("October 17, 2018");

            function getRemainingTime(endtime) {
                var milliseconds = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor(milliseconds / 1000 % 60);
                var minutes = Math.floor(milliseconds / 1000 / 60 % 60);
                var hours = Math.floor(milliseconds / (1000 * 60 * 60) % 24);
                var days = Math.floor(milliseconds / (1000 * 60 * 60 * 24));

                return {
                    'total': milliseconds,
                    'seconds': seconds,
                    'minutes': minutes,
                    'hours': hours,
                    'days': days
                    };
            }


            function initClock(id, endtime) {
                var counter = document.getElementById(id);
                var daysItem = counter.querySelector('.js-countdown-days');
                var hoursItem = counter.querySelector('.js-countdown-hours');
                var minutesItem = counter.querySelector('.js-countdown-minutes');
                var secondsItem = counter.querySelector('.js-countdown-seconds');

                    function updateClock() {
                        var time = getRemainingTime(endtime);

                        daysItem.innerHTML = time.days;
                        hoursItem.innerHTML = ('0' + time.hours).slice(-2);
                        minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
                        secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

                        if (time.total <= 0) {
                          clearInterval(timeinterval);
                        }
                        }

                        updateClock();
                        var timeinterval = setInterval(updateClock, 1000);
            }


        if(document.getElementById("js-countdown")){
       
             initClock('js-countdown', countdown);
        }

        $(window).bind("load resize", function() {
            var width = $(window).width();
            if (width <= 640) {
                var adsbanner = jQuery('.ads-slider1');
                adsbanner.addClass('owl-carousel');
                adsbanner.owlCarousel({
                    autoplay: true,
                    items: 2,
                    loop: true,
                    dots: false,
                    margin:8,
                    responsive: {
                        0:{
                            items:1
                        },
                        500:{
                            items:2
                        }
                    },
                });
           
            adsbanner.css("height","auto");
        
            }
        });


        $(window).bind("load resize", function() {
            var width = $(window).width();
            if (width <= 640) {
                var adsbanner = jQuery('.cat-slider1');
                adsbanner.addClass('owl-carousel');
                adsbanner.owlCarousel({
                    autoplay: true,
                    items: 2,
                    loop: true,
                    dots: false,
                    margin:8,
                    responsive: {
                        0:{
                            items:1
                        },
                        500:{
                            items:2
                        }
                    },
                });
           
                adsbanner.css("height","auto");
                $("#sidebar_Filter").removeClass('collapse, show').addClass('collapse');
        
            }
        });


});
$( document ).ajaxComplete(function() {
     $(".top-cart").click(function (event) {
        $(".mini-cart").slideToggle();  // Might cause problems depending on implementation
        event.stopPropagation();

        $(document).one('click', function (e) {
            if(!$(e.target).is('.top-cart')) {
                $(".mini-cart").slideUp(); 
            }
        });
    });
    $(".top-cart-2a").click(function (event) {
        $(".mini-cart-2a").slideToggle();  
        event.stopPropagation();

        $(document).one('click', function (e) {
            if(!$(e.target).is('.top-cart-2a')) {
                $(".mini-cart-2a").slideUp(); 
            }
        });
    });
});
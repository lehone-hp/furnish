(function($) {
    "use strict";

/*-- Menu Sticky --*/
var $window = $(window);
$window.on('scroll', function() {    
	var scroll = $window.scrollTop();
	if (scroll < 300) {
		$(".sticker").removeClass("stick");
	}else{
		$(".sticker").addClass("stick");
	}
});
/*-- Mobile Menu --*/
$('.main-menu').meanmenu({
	meanScreenWidth: '991',
	meanMenuContainer: '.mobile-menu',
	meanMenuClose: '<i class="pe-7s-close-circle"></i>',
	meanMenuOpen: '<i class="pe-7s-menu"></i>',
	meanRevealPosition: 'right',
	meanMenuCloseSize: '30px',
});

/*-- WOW --*/
new WOW().init();

/*-- Nivo Slider --*/
$('#home-slider').nivoSlider({
    directionNav: true,
    animSpeed: 1000,
    effect: 'random',
    slices: 18,
    pauseTime: 5000,
    pauseOnHover: true,
    controlNav: false,
    prevText: '<i class="pe-7s-angle-left-circle"></i>',
    nextText: '<i class="pe-7s-angle-right-circle"></i>'
});

/*-- Testimonial Slider --*/
$('.testimonial-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="arrow-prev"><i class="pe-7s-angle-left-circle"></i></button>',
    nextArrow: '<button type="button" class="arrow-next"><i class="pe-7s-angle-right-circle"></i></button>',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                arrows: false,
            }
        },
    ]
});

/*-- Product Slider 4 Item --*/  
$('.product-slider-4').slick({
    speed: 700,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="arrow-prev"><i class="pe-7s-angle-left-circle"></i></button>',
    nextArrow: '<button type="button" class="arrow-next"><i class="pe-7s-angle-right-circle"></i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

/*-- Product Slider 2 Item --*/ 
$('.product-slider-2').slick({
    speed: 700,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="arrow-prev"><i class="pe-7s-angle-left-circle"></i></button>',
    nextArrow: '<button type="button" class="arrow-next"><i class="pe-7s-angle-right-circle"></i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
    
/*-- Product Details Thumbnail Slider --*/ 
$('.pro-thumb-img-slider').slick({
    speed: 700,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-left"></i></button>',
    nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-right"></i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
})
   
/*-- Price Range --*/ 
$('#price-range').slider({
   range: true,
   min: 0,
   max: 300,
   values: [ 40, 250 ],
   slide: function( event, ui ) {
    
	$('.ui-slider-handle:eq(0)').html( '<span>' + '$' + ui.values[ 0 ] + '</span>');
	$('.ui-slider-handle:eq(1)').html( '<span>' + '$' + ui.values[ 1 ] + '</span>');
    
   }
});
$('.ui-slider-handle:eq(0)').html( '<span>' + '$' + $( "#price-range" ).slider( "values", 0 ) + '</span>' );
$('.ui-slider-handle:eq(1)').html( '<span>' + '$' + $( "#price-range" ).slider( "values", 1 ) + '</span>' );    

/*-- Product Quantity --*/ 
$('.product-quantity').append('<span class="dec qtybtn"><i class="fa fa-angle-left"></i></span><span class="inc qtybtn"><i class="fa fa-angle-right"></i></span>');
$('.qtybtn').on('click', function() {
    var $button = $(this);
    var oldValue = parseInt($button.parent().find('input').val());
    var inputField = $button.parent().find('input');
    // get the max and min values to place an order
    var max = parseInt(inputField.attr("max"));
    var min = parseInt(inputField.attr("min"));
    if ($button.hasClass('inc')) {
        if(oldValue < max){
            var newVal = oldValue + 1;
        }else {
            $.toast({
                heading: '<em>Order Limit </em>!',
                text: 'You can order a miximum of 10.',
                icon: 'error',
                position: 'bottom-right',
                stack: false,
                showHideTransition: 'slide',
                allowToastClose: true,
                loader : false,
            });
            return;
        }
    } else {
        // Don't allow decrementing below zero
        if (oldValue > min) {
            var newVal = oldValue - 1;
        } else {
            $.toast({
                heading: '<em>Order Limit </em>!',
                text: 'Sorry you can\'t order below '+ min,
                icon: 'error',
                position: 'bottom-right',
                stack: false,
                showHideTransition: 'slide',
                allowToastClose: true,
                loader : false,
            });
            return;
        }
    }
    $button.parent().find('input').val(newVal);
});

    /* =================================== */
    /* ADD TO CART FUNCTIONALITY GOES HERE */
    /* =================================== */

    $("#addToCart").click(function () {
       var qty = parseInt($("#product_qty").val());
       var slug = $("#pdtSlug").val();
       var inStock = $("#pdtInStock").val();
       // Method definition in app.blade.php
       addToCart(qty, slug, inStock);
    });

    $("#clearCart").click(function (e) {
        e.preventDefault();
        var data = {
            _token : mytoken
        };

        $.ajax({
            url: clear_cart_route,
            data: data,
            type: 'POST',
            success: function (data) {
                $.toast({
                    heading: '<em>'+data.msg+'</em>!',
                    icon: 'success',
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    allowToastClose: true,
                    loader : false,
                    afterHidden: function () {
                        location.reload();
                    }
                });

            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                alert(error.msg);
            }
        });

    });

/*-- Checkout Form Collapse on Checkbox --*/ 
$('.checkout-form input[type="checkbox"]').on('click', function(){
    var $collapse = $(this).data('target');
    if( $(this).is(':checked') ){
        $('.collapse[data-collapse="'+$collapse+'"]').slideDown();
    }else {
        $('.collapse[data-collapse="'+$collapse+'"]').slideUp();
    }
});

/*-- Youtube Background Video --*/
$(".youtube-bg").YTPlayer();

/*-- Text Animation --*/
$('.tlt').textillate({
  loop: true,
  in: {
    effect: 'fadeInRight',
  },
  out: {
    effect: 'fadeOutLeft',
  },
});

/*-- ScrollUp --*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
}); 


})(jQuery);




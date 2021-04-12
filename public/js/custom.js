function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
$(document).ready(function() {
    $('.like-icon, .like-button').on('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = {
            product_id: $('#like-icon').val()
        };

        $.ajax({
        	type: 'post',
        	url: '/api/user/wishlist',
        	data: formData,
        	success: function(data){
        		console.log(data);
        	},
        	error: function(data){
        	    if(data.status === 401){
                    window.location = window.location.origin + "/login"
                }
        	}
        })

        $(this).toggleClass('liked');
        $(this).children('.like-icon').toggleClass('liked');
    });
});

$(document).ready(function() {
    $('.addcart').on('click', function(e) {
        e.preventDefault();
        let idn = $(this).attr('data-product-id');
        $(this).parents('.product-text-dt').children('.qty-cart').children('.quantity').children('form').submit()
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        // var formData = {
        //     product_id: $('#like-icon').val()
        // };

        // $.ajax({
        //     type: 'post',
        //     url: '/user/cart',
        //     data: formData,
        //     success: function(data){
        //         console.log(data);
        //     },
        //     error: function(data){
        //         console.log(data);
        //     }
        // })

        $(this).toggleClass('liked');
        $(this).children('.like-icon').toggleClass('liked');
    });
});
$(document).ready(function() {
    var fixHeight = function() {
        $(".navbar-nav").css("max-height", document.documentElement.clientHeight - 8000);
    };
    fixHeight();
    $(window).resize(function() {
        fixHeight();
    });
    $(".navbar .navbar-toggler").on("click", function() {
        fixHeight();
    });
    $(".navbar-toggler, .overlay").on("click", function() {
        $(".mobileMenu, .overlay").toggleClass("open");
        console.log("clicked");
    });
});
$('.ui.dropdown').dropdown();
$('.dropdown').dropdown({
    transition: 'drop',
    on: 'hover'
});
$('.ui.modal').modal({
    blurring: true
}).modal('show');
$('.menu .item').tab();
$('.ui.checkbox').checkbox();
$('.enable.button').on('click', function() {
    $(this).nextAll('.checkbox').checkbox('enable');
});
$('input[name="paymentmethod"]').on('click', function() {
    var $value = $(this).attr('value');
    $('.return-departure-dts').slideUp();
    $('[data-method="' + $value + '"]').slideDown();
});
$(".product_countdown-timer").each(function() {
    var $this = $(this);
    $this.countdown($this.data('countdown'), function(event) {
        $(this).text(event.strftime('%D days %H:%M:%S'));
    });
});
$('.offers-banner').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1 
        },
        1200: {
            items: 1
        },
        1400: {
            items: 1
        }
    }
})
$('.cate-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        },
        1200: {
            items: 5
        },
        1400: {
            items: 5
        }
    }
})
$('.featured-slider').owlCarousel({
    items: 8,
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        },
        1200: {
            items: 4
        },
        1400: {
            items: 4
        }
    }
})
$('.date-slider').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    rtl: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        },
        1200: {
            items: 5
        },
        1400: {
            items: 5
        }
    }
})
$('.life-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        },
        1200: {
            items: 3
        },
        1400: {
            items: 3
        }
    }
})
$('.testimonial-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        },
        1200: {
            items: 3
        },
        1400: {
            items: 3
        }
    }
})
$('.team-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1200: {
            items: 4
        },
        1400: {
            items: 4
        }
    }
})
window.oncontextmenu = function() {
    return false;
}
$(document).keydown(function(event) {
    if (event.keyCode == 123) {
        return false;
    } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
        return false;
    }
});

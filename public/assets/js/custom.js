$(document).ready(function () {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $(".menu .menu-item-has-children").addClass("dropdown-nav ");
    $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");
    $('[href="#"],[href=""]').attr("href", "javascript:;");

    // Mobile Menu
    var len = $('.menu > li'), str;
    $(".menu-Bar").click(function () {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
        for (var i = 1; i < len.length; i++) {
            str = (300 + 100 * (i - 1)) + "ms";
            len.eq(i).css('animation-delay', str)
        }
    });
    $('.dropdown-nav').prepend('<span class="toggle_submenu"><i class="fal fa-plus"></i></span>')
    $('.toggle_submenu').click(function () {
        $('ul.dropdown').slideUp();
        $('.toggle_submenu').removeClass('active')
        if ($(this).parent().find('ul.dropdown').is(':visible')) {
            $(this).removeClass('active')
            $(this).parent().find('ul.dropdown').slideUp();
        } else {
            $(this).addClass('active')
            $(this).parent().find('ul.dropdown').slideDown()
        }
    })

    // SearchBar
    $('.search_btn').click(function () {
        $('.backdrop').fadeIn()
        $('.search_bar').addClass('active')
    })
    $('.hideSerch,.backdrop').click(function () {
        $('.search_bar').removeClass('active')
        $('.backdrop').fadeOut()
    })

    // Tabbing Function
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var target = $(this).data("targetit");
        var tablen = $("." + target).find('.tab-content .row > div'), tebstr;
        $("." + target).siblings('[class^="box-"]').hide();
        $('.tab-content .row > div').addClass('animate__zoomIn');
        $("." + target).show().find('.tab-content .row > div').addClass('animate__zoomIn');
        for (var i = 1; i < tablen.length; i++) {
            tebstr = (100 + 100 * (i - 1)) + "ms";
            tablen.eq(i).css('animation-delay', tebstr)
        }
    });

    // Accordion
    $('.acc_title').on('click', function () {
        $(this).parents().find('li').removeClass('active')
        $(this).parents().find('.acc_desc').slideUp();
        $(this).parent('li').addClass('active')
        !$(this).next('.acc_desc').is(':visible') ? $(this).next('.acc_desc').slideDown() : $(this).parents().find('li').removeClass('active')
    });

    // Slick Slider
    $(".s3_slider").slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 3,
        prevArrow: $('.s3 .slick_arrows .arr_l'),
        nextArrow: $('.s3 .slick_arrows .arr_r')
    });
    $(".s8_slider").slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 2,
    });

    //     Slider For
    //    $('.slider-for').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-nav'
    // });
    // $('.slider-nav').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-for',
    //     dots: false,
    //     centerMode: true,
    //     focusOnSelect: true
    // });

    // Increament Qty
    $('.has_qty').each(function () {
        let qty = 1;
        $(this).find('.qty_count').on('change', function () {
            qty = $(this).val();
        })
        $(this).find('.num_dec').on('click', function () {
            qty > 1 && qty--;
            $(this).parent().find('.qty_count').val(qty);
        })
        $(this).find('.num_inc').on('click', function () {
            qty >= 1 && qty++;
            $(this).parent().find(".qty_count").val(qty);
        })
    })

    // Sticky Header
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 200) {
            $(".main-header").addClass('sticky')
        } else {
            $(".main-header").removeClass('sticky')
        }
    });

    // Input label
    $('.input_group input,.input_group textarea').blur(function () {
        $(this).val() !== '' ? $(this).next('label').addClass('has_value') : $(this).next('label').removeClass('has_value')
    })

});

// Header Opacity
// var targetElement = $('.main-header'),
//     limit = 1000;  /* scrolltop value when opacity should be 0 */
// if ($(window).scrollTop() > $(window).height()) {
//     targetElement.css({
//         'background-color': 'rgb(0, 10, 60)'
//     });
// }
// $(window).on('scroll touchmove', function () {
//     var st = $(this).scrollTop();
//     if (st <= limit) {
//         targetElement.css({
//             'background-color': 'rgba(0, 15, 25, ' + (0 + st / limit) + ')'
//         });
//     }
// });

// Active Menu Class
$(window).on("load", function () {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $(".menu li a").each(function () {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).parent().siblings().removeClass("active");
            $(this).removeClass("active");
            $(this)
                .closest("li")
                .addClass("active");
        }
    });
    $('.dropdown-nav li').each(function () {
        if ($(this).hasClass('active')) {
            $(this).parent().parent().addClass('active')
        }
    })
});

var wobbleElements = document.querySelectorAll('.theme-btn');
wobbleElements.forEach(function (el) {
    el.addEventListener('mouseenter', function () {
        if (!el.classList.contains('animating') && !el.classList.contains('mouseover')) {
            el.classList.add('animating', 'mouseover');
            var letters = el.innerText.split('');
            setTimeout(function () { el.classList.remove('animating'); }, (letters.length + 1) * 50);
            var animationName = el.dataset.animation;
            if (!animationName) { animationName = "upscale"; }
            el.innerText = '';
            letters.forEach(function (letter) {
                if (letter == " ") {
                    letter = "&nbsp;";
                }
                el.innerHTML += '<span class="letter">' + letter + '</span>';
            });
            var letterElements = el.querySelectorAll('.letter');
            letterElements.forEach(function (letter, i) {
                setTimeout(function () {
                    letter.classList.add(animationName);
                }, 50 * i);
            });
        }

    });
    el.addEventListener('mouseout', function () {
        el.classList.remove('mouseover');
    });
});

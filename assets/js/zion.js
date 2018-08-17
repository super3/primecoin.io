$(document).ready(function () {
    $('#navbar').affix();
    $('.dropdown-toggle').dropdown();
    $('[data-toggle=tooltip]').tooltip();

    function parallax() {
        var scrolled = $(window).scrollTop();
        if (scrolled >= 0) {
            $('.container-wrapper-home .summary').css('top', (scrolled * 0.5) + 'px');
            var opacity = scrolled / 100;
            var opacity = opacity / 2;
            $('.container-wrapper-home .summary').css('opacity', 1 - opacity);
        }
    }

    var x = $(window).width();
    if (x > 767) {
        $(window).scroll(function (e) {
            parallax();
        });
    }

    //动态添加js
    // if (x >= 975) {
    //     $(".page-show").after("<script src='assets/js/dynamic_nav.js'></script>");
    // } else {
    //     console.log();
    // }
    //
    // $(window).resize(function () {
    //     if ($(window).width() >= 975) {
    //         console.log("rxes")
    //
    //         $(window).scrollTop(0);
    //         var t = $(".page-show").next()[0];
    //         if (!t) {
    //             // console.log("前" + $(".page-show").next()[0].nodeName);
    //             $(".page-show").after("<script src='assets/js/dynamic_nav.js'></script>");
    //             // console.log("后" + $(".page-show").next()[0].nodeName);
    //         }
    //     } else {
    //         $(".page-show").next().remove();
    //     }
    // });
});
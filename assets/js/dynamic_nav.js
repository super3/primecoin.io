$(function () {

    /*The element is away from the top of the page*/
    var fadeIn1 = $("#why-primecoin").offset().top;
    var fadeIn2 = $("#number li").offset().top;
    var fadeIn3 = $(".world-records").offset().top;
    var clientH = $(window).height();
    var fadeIn4 = $("#page5").offset().top + 150;
    var fadeIn5 = $(".cover").offset().top;
    var fadeIn6 = $("#how-to-mine").offset().top;



    var comeIn = $(window).scrollTop() + $(window).height();
    ani(comeIn);

    function ani(comeIn) {
        if (comeIn > fadeIn1) {
            /*about*/
            $("#why-primecoin")[0].classList.add('animated');
            $("#why-primecoin")[0].classList.add('fadeInDown');
        } else if (comeIn < fadeIn1) {
            $("#why-primecoin")[0].classList.remove("animated");
            $("#why-primecoin")[0].classList.remove("fadeInDown");
        }
        if (comeIn > fadeIn2) {
            /*numbers*/
            $("#number li")[0].classList.add('animated');
            $("#number li")[0].classList.add('zoomInRight');
            $("#number li")[1].classList.add('animated');
            $("#number li")[1].classList.add('zoomInRight');
            $("#number li")[2].classList.add('animated');
            $("#number li")[2].classList.add('zoomInRight');
        } else if (comeIn < fadeIn2) {
            $("#number li")[0].classList.remove("animated");
            $("#number li")[0].classList.remove("zoomInRight");
            $("#number li")[1].classList.remove("animated");
            $("#number li")[1].classList.remove("zoomInRight");
            $("#number li")[2].classList.remove("animated");
            $("#number li")[2].classList.remove("zoomInRight");
        }

        if (comeIn > fadeIn4) {
            /*resources*/
            $("#page5").css({
                opacity:1
            })
        } else if (comeIn < fadeIn4) {
            $("#page5").css({
                opacity:0
            })
        }
        if (comeIn - 200 > fadeIn5) {
            /*footer*/
            $("footer").css("display", "block");
        } else if (comeIn < fadeIn5) {
            $("footer").css("display", "none");

        }


        if (comeIn - 200 > fadeIn6) {
            /*how-to-mine*/
            $("#how-to-mine").addClass('run');
        } else if (comeIn < fadeIn6) {
            $("#how-to-mine").removeClass('run');
        }
    }


    function mine_ani(){
        $("#how-to-mine").addClass('run');
    }

    $("#how-to-mine").click(function(){
        $("#how-to-mine").addClass('run');
        mine_ani()
    })


    $(window).scroll(function () {
        // EventListener
        // Determine whether the element enters the visual field
        var comeIn = $(window).scrollTop() + $(window).height();
        ani(comeIn);

    })

    $("[data-menuanchor='page2']").click(function () {
        $("window").offsetTop = 737;
    })


})



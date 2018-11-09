$(function() {

    $('.menus2 li').each(function() {
        var i = 0;
        $('.menus2 li').eq(i).css('background-color', '#ff9900');

           $('.menus2 li').click(function() {
                var index = $(this).index();
                i = $(this).index() - 1;
                $('.menus2 li').css('background-color', '#fff');
                $(this).css('background-color', '#ff9900');
                $('.menus2 .menus-list').removeClass('show')
                $('.menus2 .menus-list').eq(index - 1).addClass('show')
                $('.tab1').removeClass('show')
                $('.tab1').eq(index - 1).addClass('show')
              });

         })
})
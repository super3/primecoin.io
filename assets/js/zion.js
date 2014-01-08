$(document).ready(function() {
  $('#navbar').affix();
  $('.dropdown-toggle').dropdown();
  $('[data-toggle=tooltip]').tooltip();
  function parallax(){
    var scrolled = $(window).scrollTop();
    if(scrolled >= 0) {
      $('.container-wrapper-home .summary').css('top', (scrolled * 0.5) + 'px');
      var opacity = scrolled / 100;
      var opacity = opacity / 2;
      $('.container-wrapper-home .summary').css('opacity', 1 - opacity);
    }
  }
  var x = $(window).width();
  if(x > 767) {
    $(window).scroll(function(e){
      parallax();
    });
  }
});

$(document).ready(function() {

  $('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true
  });
  $('#carousel').flexslider({
    start: function(slider) {
    if (slider.pagingCount == 1) slider.addClass('flex-centered');
    },
    before: function(slider) {
    if (slider.pagingCount == 1) slider.addClass('flex-centered');
    },
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    asNavFor: '#slider',
    itemWidth: 135,
    smoothHeight: true,
    itemMargin: 4,
    nextText: '',
    prevText: '',
    touch: true
  });
 
  $('#slider').flexslider({
    after: function(slider){
      var slider = $('#slider').data('flexslider');
      slider.resize();
      slider.pause(); 
      slider.play();
    },
    keyboard: true,
    smoothHeight: true,
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    sync: "#carousel",
    nextText: '',
    prevText: '',
    touch: true,
    multipleKeyboard: true,
    pausePlay: true,
    pauseText: '',
    playText: ''
  });

  /*
  $('.flexslider .slides > li').click(function() {
    $('.flexslider').flexslider("pause");
  });

  $('.flexslider .flex-direction-nav .flex-nav-next > a').click(function() {
    $('.flexslider').flexslider("play");
  });
  */
});

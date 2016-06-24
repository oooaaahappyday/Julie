
$(document).ready(function() {
    
  $('#carousel').flexslider({
    start: function(slider) {
    if (slider.pagingCount == 1) slider.addClass('flex-centered');
    },
    before: function(slider) {
    if (slider.pagingCount == 1) slider.addClass('flex-centered');
    },
    animation: "slide",
    easing: "swing",
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
    keyboard: true,
    smoothHeight: true,
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    sync: "#carousel",
    nextText: '',
    prevText: '',
    touch: true,
    multipleKeyboard: true
  });
});

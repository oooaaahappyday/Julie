
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
    before: function(slider, currentSlide) {
        /*
        document.getElementById("imageDetails").onclick = updateCurrentImage;
        
        function updateCurrentImage() {
        var currentImage = slider.currentSlide;
        console.log(currentImage);
        return currentImage;
        }
        */
    },
    keyboard: true,
    animation: "slide",
    easing: "swing",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    smoothHeight: true,
    nextText: '',
    prevText: '',
    touch: true,
    multipleKeyboard: true
  });
});

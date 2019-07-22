
(function() {

    'use strict';

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);

})();




// nav start

$(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar-fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });



// nav end



$(document).ready(function () {
    // Add scrollspy to <body>
    $('body').scrollspy({target: "navbar-fixed-top", offset: 50});

    $(".navbar-fixed-top a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 120
            }, 800);
        }  // End if
    });

});



$(document).ready(function(){
    var owl = $('.owl-carousel');

    owl.owlCarousel({
        loop:false,
        nav:true,
        margin:10,
        useMouseWheel: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            960:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
    $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

});

$(document).on('scroll', function(){
    if($(document).scrollTop() > 2512 && $(document).scrollTop() < (($(".timeline.display-pc").height() + $(".timeline.display-pc").offset().top) - 150)){
        $(".plane-position").css({"position": "fixed", "top": "80px", "margin-left": "-50px"});
    }else{
        $(".plane-position").css({"position": "relative", "margin-left": "0"});
    }
});

$(document).ready(function(){
    if($(document).scrollTop() > 2512 && $(document).scrollTop() < (($(".timeline.display-pc").height() + $(".timeline.display-pc").offset().top) - 150)){
        $(".plane-position").css({"position": "fixed", "top": "80px", "margin-left": "-50px"});
    }else{
        $(".plane-position").css({"position": "relative", "margin-left": "0"});
    }
});
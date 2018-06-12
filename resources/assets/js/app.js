
/**
 * Base js file that can be used on any page.
 * Do not include page specific js.
 */

// jQuery include
window.$ = window.jQuery = require('jquery');


// Smooth Scrolling when clicking links
$(".smooth-scroll").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){});
    }
});


// Static functionality
var staticLoader = $(".static");
setTimeout(function() {
    staticLoader.addClass("loaded");
}, 1000);


// Navigation
var nav = $(".nav");
var mobileToggle = $(".mobile-toggle");

mobileToggle.click(function() {
    nav.toggleClass("active");
});


// Back to top button
$(window).scroll(function(e) {
    var $btt = $('.back-to-top');
    var show = $('.btt-show').offset().top;
    var scrollBottom = $(window).scrollTop() + $(window).height();
    if (scrollBottom >= show && !$btt.hasClass('active')) {
        $btt.addClass('active');
    } else if (scrollBottom < show && $btt.hasClass('active')) {
        $btt.removeClass('active');
    }
});


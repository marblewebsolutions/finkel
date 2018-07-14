
/**
 * Base js file that can be used on any page.
 * Do not include page specific js.
 */
 
/*global $*/

// jQuery include
window.$ = window.jQuery = require('jquery');

$(window).on('load', function() {
    // TODO: loading screen
})

$.scrollToLoc = function scrollToLoc(hash) {
    if (hash[0] != '#') {
        hash = '#' + hash;
    }
    
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 800, function(){});
}

// Smooth Scrolling
$(".smooth-scroll").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        $.scrollToLoc(this.hash);
    }
});

// Static functionality
var $static = $(".static");
$.playStatic = function playStatic() {
    $static.addClass("active");
    setTimeout(function() {
        $static.removeClass("active");
    }, 1000);
}

// Back to top button
$(window).scroll(function(e) {
    var $btt = $('.back-to-top');
    var $showAtDiv = $('.page.active .btt-show');
    if ($showAtDiv && $showAtDiv.offset()) {
        var show = $('.page.active .btt-show').offset().top;
        var scrollBottom = $(window).scrollTop() + $(window).height();
        if (scrollBottom >= show && !$btt.hasClass('active')) {
            $btt.addClass('active');
        } else if (scrollBottom < show && $btt.hasClass('active')) {
            $btt.removeClass('active');
        }
    }
});


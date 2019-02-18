
/**
 * Base js file that can be used on any page.
 * Do not include page specific js.
 */
 
/*global $*/
/*global isMobileDevice*/

// jQuery include
window.$ = window.jQuery = require('jquery');

isMobileDevice = (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);

// Highlight link on scroll
$('.main').scroll(function(e) {
    var $main = $(this);
    var $sections = $('.main section');
    
    var activeSection = 'section-1';
    var mainTop = $main.offset().top;
    var sectionBuffer = 30;
    
    $sections.each(function() {
        var $section = $(this);
        
        if ($section.offset().top < 100 + sectionBuffer && $section.offset().top > 100 - sectionBuffer) {
            activeSection = $section.attr('id');
            
            $('.nav-link').removeClass('active');
            $('.nav-link[href="#'+activeSection+'"]').addClass('active');
            return true;
        }
    })
})

function initializeMailchimp() {
    var $wrapper = $('.mailchimp-wrapper');
    var $toggle = $('.mailchimp-toggle');
    
    $toggle.click(function() {
        if ($wrapper.hasClass('active')) {
            // Close Mailchimp Signup Form
            $toggle.find('p').html('Sign Up for our Newsletter');
            $wrapper.removeClass('active');
            $wrapper.slideUp();
        } else {
            // Open Mailchimp Signup Form
            $toggle.find('p').html('Close');
            $wrapper.addClass('active');
            $wrapper.slideDown();
        }
    });
}

function initializeFooter() {
    var $socialExpand = $('.social-expand');
    var $social = $('.social');
    
    $socialExpand.click(function(e) {
        e.preventDefault();
        
        
        $social.toggleClass('active');
    });
}

initializeMailchimp();
initializeFooter();

// $.scrollToLoc = function scrollToLoc(hash) {
//     if (hash[0] != '#') {
//         hash = '#' + hash;
//     }
    
//     // Using jQuery's animate() method to add smooth page scroll
//     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//     $('html, body').animate({
//         scrollTop: $(hash).offset().top
//     }, 800, function(){});
// }

// Smooth Scrolling
// $(".smooth-scroll").on('click', function(event) {
//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//         // Prevent default anchor click behavior
//         event.preventDefault();

//         // Store hash
//         $.scrollToLoc(this.hash);
//     }
// });

// Static functionality
// var $static = $(".static");
// $.playStatic = function playStatic() {
//     $static.addClass("active");
//     setTimeout(function() {
//         $static.removeClass("active");
//     }, 1000);
// }

// Back to top button
// $(window).scroll(function(e) {
//     var $btt = $('.back-to-top');
//     var $showAtDiv = $('.page.active .btt-show');
//     if ($showAtDiv && $showAtDiv.offset()) {
//         var show = $('.page.active .btt-show').offset().top;
//         var scrollBottom = $(window).scrollTop() + $(window).height();
//         if (scrollBottom >= show && !$btt.hasClass('active')) {
//             $btt.addClass('active');
//         } else if (scrollBottom < show && $btt.hasClass('active')) {
//             $btt.removeClass('active');
//         }
//     }
// });

function moveWithMouse() {
    if (isMobileDevice) {
        return;
    }
    
    var x, y;
    var windowWidth = $(window).outerWidth();
    var windowHeight = $(window).outerHeight();
    var $movingElems = $('.move-with-mouse');
    var extraPadding = 12;
    
    // Get initial element padding for all moving elements and give additional padding
    $movingElems.each(function() {
        var $this = $(this);
        
        var top, right, bottom, left;
        [top, right, bottom, left] = getInitialElementPadding($this);
        
        top += extraPadding;
        right += extraPadding;
        bottom += extraPadding;
        left += extraPadding;
        
        $this.attr('data-original-padding', [top, right, bottom, left].join(' '));
        $this.css('padding', top + "px " + right + "px " + bottom + "px " + left + "px");
    });
    
    $(window).mousemove(function(e) {
        x = e.clientX;
        y = e.clientY;
        
        var xPer = x / windowWidth;
        var yPer = y / windowHeight;
        
        $movingElems.each(function() {
            var $this = $(this);
            var top, right, bottom, left;
            [top, right, bottom, left] = $this.data('original-padding').split(' ').map(function(item) {
                return parseInt(item, 10);
            });
            
            top += parseInt((.5 - yPer) * 2 * extraPadding, 10);
            right += parseInt((xPer - .5) * 2 * extraPadding, 10);
            bottom += parseInt((yPer - .5) * 2 * extraPadding, 10);
            left += parseInt((.5 - xPer) * 2 *extraPadding, 10);
            
            $this.css('padding', top + "px " + right + "px " + bottom + "px " + left + "px");
        });
    });
    
    $(window).resize(function() {
        windowWidth = $(window).outerWidth();
        windowHeight = $(window).outerHeight();
    });
    
    function getInitialElementPadding($elem) {
        var paddingArr =  $elem.css('padding').split(' ');
        var paddingLen = paddingArr.length;
        var top, right, bottom, left;
        if (paddingLen == 0) {
            // No padding set
            top = right = bottom = left = 0;
        } else if (paddingLen == 1) {
            // Padding applied to all sides
            top = right = bottom = left = parseInt(paddingArr[0]);
        } else if (paddingLen == 2) {
            top = bottom = parseInt(paddingArr[0]);
            right = left = parseInt(paddingArr[1]);
        } else if (paddingLen == 3) {
            top = parseInt(paddingArr[0]);
            right = left = parseInt(paddingArr[1]);
            bottom = parseInt(paddingArr[2]);
        } else { // paddingLen == 4
            top = parseInt(paddingArr[0]);
            right = parseInt(paddingArr[1]);
            bottom = parseInt(paddingArr[2]);
            left = parseInt(paddingArr[3]);
        }
        return [top, right, bottom, left];
    }
}

$(document).ready(function() {
   moveWithMouse(); 
});


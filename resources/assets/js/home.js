/**
 * Home page js
 */

/*global $*/

function Home() {
    function initializeGallery() {
        var $images = $('.home .gallery img');
        var $close = $('.close-container');
        var $cover = $('.cover');
        var imageCount = $images.length;
        
        // Set image positions
        for (var i = 0; i < imageCount; i++) {
            var $image = $($images[i]);
            
            $image.css('left', -1 * i * 264 * 3 / 4);
            $image.css('top', (i % 3) * 275);
            $image.attr('left', -1 * i * 264 * 3 / 4);
            $image.attr('top', (i % 3) * 275);
        }
        
        var galleryLength = Math.abs($($images[0]).offset().left - $($images[imageCount - 1]).offset().left) + $($images[0]).outerWidth();
        
        var framesPerSec = 60;
        var animationTime = 20; // Seconds
        var windowWidth = $(window).outerWidth();
        var extraEnd = 100;
        var imageWidth = 12 * 22;
        var restartLeft = -1 * imageWidth;
        var fadeTime = 500;
        var time = 0;
        animateImages();
        
        $images.click(function() {
            var $image = $(this);
            if ($image.hasClass('fullscreen')) {
                normalImage($image);
            } else {
                enlargeImage($image);
            }
        });
        
        // Close fullscreen on close click
        $close.click(function(e) {
            e.preventDefault();
            normalImage($('.fullscreen')); 
        });
        
        // Close fullscreen on cover click
        $cover.click(function(e) {
            e.preventDefault();
            normalImage($('.fullscreen')); 
        });
        
        function animateImages() {
            for (var i = 0; i < imageCount; i++) {
                var $image = $($images[i]);
                var currentLeft, currentTop;
                
                currentLeft = parseInt($image.attr('left'));
                currentTop = parseInt($image.attr('top'));
                
                
                var dx = galleryLength / animationTime / framesPerSec;
                var newLeft = currentLeft + dx;
                
                if (newLeft > $(window).outerWidth() + extraEnd) {
                    // Put image at back of the line
                    if (i == 0) {
                        // Starting over
                        var $lastImage = $($images[imageCount - 1]);
                        var lastLeft = $lastImage.offset().left;
                        
                        if (lastLeft < 0) {
                            // Next image not in view
                            restartLeft = lastLeft - (imageWidth * 2);
                        }
                    }
                    
                    newLeft = restartLeft;
                }
                
                var dy = 15 * Math.sin(1.5 * time / animationTime / framesPerSec);
                var newTop = currentTop + dy;
                
                $image.attr('left', newLeft);
                
                if (!$image.hasClass('fullscreen')) {
                    $image.css('left', newLeft);
                    $image.css('top', newTop);
                }
            }
            
            time += 1000 / framesPerSec;
            
            // 
            setTimeout(animateImages, 1000 / framesPerSec);
        }
        
        function enlargeImage($image) {
            // Close other full screen images
            $('.fullscreen').each(function() {
                var $thisImage = $(this);
                normalImage($thisImage); 
            });
            
            $('body').addClass('no-scroll');
            // Fade out normal image
            $image.fadeOut(fadeTime, function() {
                $close.addClass('active');
                $cover.addClass('active');
                $image.addClass('fullscreen');
                // Fade in enlarged image
                $image.fadeIn(fadeTime);
            });
        }
        
        function normalImage($image) {
            $('body').removeClass('no-scroll');
            $close.removeClass('active');
            $cover.removeClass('active');
            // Fade out enralged image
            $image.fadeOut(fadeTime, function() {
                $image.removeClass('fullscreen');
                // Fade in normal image
                $image.fadeIn(fadeTime);
            });
        }
    }
    
    
    function initializeTourSchedule() {
        // Tour Schedule More or Less Toggle
        var $shows = $($('.shows'));
        var $tables = $($shows.find("table"));
        var $showOnMoreTable = $($shows.find('.show-on-more'));
        var $toggle = $($shows.find(".more-toggle"));
        
        $toggle.click(function(e) {
            e.preventDefault();
            if ($shows.hasClass('more')) {
                // Showing Less
                $toggle.find('a').html('Show More');
                $showOnMoreTable.slideUp(1000);
            } else {
                // Showing More
                $toggle.find('a').html('Show Less');
                $showOnMoreTable.slideDown(1000);
            }
            $shows.toggleClass('more');
        });
    }
    
    function initializeMailchimp() {
        var $wrapper = $('.mailchimp-wrapper');
        var $toggle = $('.mailchimp-toggle');
        
        console.log($toggle);
        
        $toggle.click(function() {
            console.log('toggle');
            if ($wrapper.hasClass('active')) {
                $toggle.removeClass('active');
                $wrapper.removeClass('active');
                $wrapper.slideUp();
            } else {
                $toggle.addClass('active');
                $wrapper.addClass('active');
                $wrapper.slideDown();
            }
        });
    }
    
    initializeGallery();
    initializeTourSchedule();
    initializeMailchimp();
}

Home();


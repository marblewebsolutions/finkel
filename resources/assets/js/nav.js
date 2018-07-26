/*global $*/
/*global playStatic*/
/*global Navigation*/

Navigation = {};

var $nav = $('.nav');

Navigation.initialize = function() {
    var $navLinks = $nav.find('.nav-link a');
    var currentPage = 'home';
    
    // Mobile Navigation
    function initializeMobileNav() {
        var $mobileToggle = $(".mobile-toggle");
        
        $mobileToggle.click(function() {
            $nav.toggleClass("active");
        });
        
        $(window).resize(function() {
            var windowWidth = $(window).outerWidth();
            if (windowWidth > 992 && $nav.hasClass('active')) {
                Navigation.closeMobileNav();
            }
        })
    }
    
    // Navigation Links
    function initializePageSelect() {
        setPage(currentPage);
        
        $navLinks.click(function(e) {
            e.preventDefault();
            
            var $this = $(this);
            var selectedPage = $this.data('page');
            
            if (selectedPage != currentPage) {
                // Different page selected
                currentPage = selectedPage;
                
                 $.playStatic();
                 
                 setPage(selectedPage);
                 
                 if (selectedPage == 'home') {
                    var video = document.getElementById("header-animation");
                    video.pause();
                    video.currentTime = 0;
                    video.play();
                }
            } else {
                // On the same page, no need for static
            }
            
            // Location on page
            if ($this.attr('data-page-loc')) {
                $.scrollToLoc($this.data('page-loc'));
            }
        });
    }
    
    function setPage(selectedPage) {
        // Highlight nav link
        $navLinks.parent().removeClass('active');
        $('[data-page="' + currentPage + '"]').not('[data-page-loc]').parent().addClass('active');
        
        // Show page
        $('.main .page').removeClass('active');
        $('.main .' + selectedPage).addClass('active');
        
        // Close mobile navigation
        Navigation.closeMobileNav();
    }
    
    initializeMobileNav();
    initializePageSelect();
};

Navigation.setPage = function(page) {
    var $pageNavLink = $($nav.find('[data-page="' + page + '"]').not('[data-page-loc]')[0]);
    $pageNavLink.click();
    Navigation.closeMobileNav();
};

Navigation.openMobileNav = function() {
    $nav.addClass("active");
};

Navigation.closeMobileNav = function() {
    $nav.removeClass("active");
};

Navigation.initialize();



/*global $*/
/*global playStatic*/
/*global Navigation*/

Navigation = {};
Navigation.initialize = function() {
    var $nav = $(".nav");
    var $navLinks = $nav.find('.nav-link a');
    var currentPage = 'home';
    
    // Mobile Navigation
    function initializeMobileNav() {
        var $mobileToggle = $(".mobile-toggle");
        
        $mobileToggle.click(function() {
            $nav.toggleClass("active");
        });
    }
    
    // Navigation Links
    function initializePageSelect() {
        var $navLink = $nav.find('.nav-link a');
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
    }
    
    initializeMobileNav();
    initializePageSelect();
}

Navigation.setPage = function(page) {
    var $nav = $(".nav");
    var $pageNavLink = $($nav.find('[data-page="' + page + '"]').not('[data-page-loc]')[0]);
    $pageNavLink.click();
}

Navigation.initialize();



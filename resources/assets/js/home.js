/**
 * Home page js
 */

/*global $*/

function Home() {
    function initializeGallery() {
        // Set bottom left image to same height as bottom right
        function setGalleryImgSize($photo) {
            var height = $photo.height();
            $($(".gallery .row .photo-left img")[1]).css("max-height", height);
        }
        
        var $standardSizePhoto = $($(".gallery .row .photo-right")[1]);
        setGalleryImgSize($standardSizePhoto);
        
        $(window).resize(function() {
            setGalleryImgSize($standardSizePhoto);
        });
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
    
    initializeGallery();
    initializeTourSchedule();
}

Home();


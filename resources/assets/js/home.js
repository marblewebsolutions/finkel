/**
 * Home page js
 */

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


// Tour Schedule More or Less Toggle
var $table = $(".shows table");
var $toggle = $(".shows .more-toggle");

$toggle.click(function(e) {
    e.preventDefault();
    if ($table.hasClass('more')) {
        // Showing Less
        $toggle.find('a').html('Show More');
    } else {
        // Showing More
        $toggle.find('a').html('Show Less');
    }
    $table.toggleClass('more');
});

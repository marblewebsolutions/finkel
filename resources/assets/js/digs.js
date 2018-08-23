/**
 * Digs page js
 */
 
/*global $*/
/*global Navigation*/

function Digs() {
    var $digs = $('.page.digs');
    
    function initializeHomeLink() {
        $($digs).find('.home-link').click(function() {
            Navigation.setPage('home');
        })
    }
    
    function initializeProductHoverEffect() {
        var $prodShirt = $digs.find('#product-component-f2e90d72d4d');
        var $prodShirtBg = $prodShirt.find('.shopify-buy__product-img-wrapper');
        
        console.log($prodShirt);
        console.log($prodShirtBg);
        
        $prodShirtBg.css('background', '#fff');
    }
    
    initializeHomeLink();
    initializeProductHoverEffect();
}

$(window).on('load', function() {
    Digs();
});

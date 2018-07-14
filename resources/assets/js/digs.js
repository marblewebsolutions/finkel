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
    
    initializeHomeLink();
}

Digs();
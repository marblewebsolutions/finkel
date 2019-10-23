<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\MailContact;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }
    
    public function shop() {
        return view('pages.shop');
    }
    
    public function linkinbio() {
        $photos = [
            ['https://www.youtube.com/watch?v=krdQRCR1cRE', 'brian-jane-playing-music.png'],
            ['https://open.spotify.com/track/4iFXSEQ1wPfvm0kLh3qQED?si=VwtktMSDTx-3hfVX1ZUghw', 'V7.jpg'],
            ['https://www.youtube.com/watch?v=LBLJtXlaKnY', 'J-Walk.png'],
            ['https://open.spotify.com/track/1XcOTFCOtrv681KkqHdjYG?si=7-lWkGO3TjqRm6T5gmCm6w', 'J-Walk-Web-Photo.jpg'],
            ['https://www.youtube.com/watch?v=hMUjcdBmuRI', 'brian-jane-animated.png'],
            ['https://www.youtube.com/watch?v=XRRD351n-og', '_DSC0124.jpg'],
            ['https://www.youtube.com/watch?v=hMUjcdBmuRI', 'kind-of-day.png'],
            ['https://www.youtube.com/watch?v=9LW0qr1dqLA', 'finkel_ui_12_18_9.jpg'],
            ['https://open.spotify.com/track/5769CmThWaOaHkGKiZH1JL?si=qoXEoUbvR7eToxEP7q1jKg', '_DSC7994.jpg'],
            ['http://larecord.com/listen-2/2019/04/09/track-premiere-f-i-n-k-e-l-f-e-e-l-a-l-r-i-g-h-t', 'Feel Alright Single Cover.jpg'],
            ['https://www.youtube.com/watch?v=GtqAH8u2q_c', 'Screen Shot 2019-09-25 at 5.23.04 PM.png'],
            ['https://www.youtube.com/watch?v=V12V8N7fSQQ', '_DSC7673.jpg'],
            ['https://open.spotify.com/track/6ZdIvuXIkyC5kRX3BG500i?si=3r6bydaKRGev_EzFEpHiBQ', 'Screen Shot 2019-09-25 at 5.28.01 PM.png'],
            ['https://lookmatic.com/', 'Screen Shot 2019-09-25 at 5.29.08 PM.png'],
            ['https://open.spotify.com/track/6ZdIvuXIkyC5kRX3BG500i?si=GqZihuKDQY-68PrYdCZ95A', 'finkel hair 02_19_12.jpg'],
            ['https://open.spotify.com/track/6ZdIvuXIkyC5kRX3BG500i?si=GqZihuKDQY-68PrYdCZ95A', 'Album art scan 2.jpg'],
            ['https://www.instagram.com/oliveknut/', 'Screen Shot 2019-09-25 at 5.38.17 PM.png'],
            ['https://www.suzukiacademykalamazoo.org/', 'Screen Shot 2019-09-25 at 5.39.52 PM.png'],
            ['https://www.youtube.com/watch?v=VOOb8hIzk10', 'Screen Shot 2019-09-25 at 5.40.57 PM.png'],
            ['https://open.spotify.com/track/1VF4aji5zKa3kGAcfjTKaq?si=vDuo2OQRQqSqNR_ByueT2w', 'Lexicon.jpg'],
            ['https://open.spotify.com/track/1VF4aji5zKa3kGAcfjTKaq?si=vDuo2OQRQqSqNR_ByueT2w', 'Screen Shot 2019-09-25 at 5.43.59 PM.png'],
            ['https://www.youtube.com/watch?v=VOOb8hIzk10', 'Screen Shot 2019-09-25 at 5.44.48 PM.png'],
            ['https://open.spotify.com/track/1b41URRole3y44XFRpWbgM?si=f0gFYiwbRASZH8S1Q3MT1Q', 'Screen Shot 2019-09-25 at 5.45.47 PM.png'],
            ['https://open.spotify.com/track/248aYLqHTOv7jHtI3TNYaN?si=_cZ5ClyjT-qqq4iLXy0GPg', 'need.jpg'],
            ['https://www.youtube.com/watch?v=a6GrLNP69DE', 'Screen Shot 2019-09-25 at 5.49.55 PM.png'],
            ['https://open.spotify.com/track/1CohVM0QKeUItDaaGgXlsr?si=zO5NV_AAR_CXHppa3049ng', 'Screen Shot 2019-09-25 at 5.50.57 PM.png'],
            ['https://www.youtube.com/watch?v=a6GrLNP69DE', 'ins_FINKEL_w_o_07.jpg'],
            ['https://www.youtube.com/watch?v=2jQRwag3rlM', 'Screen Shot 2019-10-21 at 4.54.22 PM.png']
        ];
        $photos = array_reverse($photos);
        
        return view('pages.linkinbio', compact('photos'));
    }
    
    public function privacy() {
        return view('privacy');
    }
}
